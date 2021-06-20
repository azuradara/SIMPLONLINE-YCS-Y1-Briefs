<template>
  <div :class="styles.bg">
    <form @input="validateInputs" @submit.prevent="handleSubmit">
      <div>
        <h3>Log in</h3>

        <span :class="styles.sep"></span>

        <label>
          <p>E-Mail</p>
          <input v-model="usr_data.usr_email" type="text" />
          <p v-if="!email_valid" :class="styles.err">Invalid E-Mail</p>
        </label>

        <label>
          <p>Password</p>
          <input v-model="usr_data.usr_pwd" type="password" />
          <p v-if="!pwd_valid" :class="styles.err">Invalid Password</p>
        </label>

        <span :class="styles.sep"></span>
        <button :class="styles.btn" :disabled="!isValid">Log in</button>
        <p v-if="authFailed" :class="styles.erre">Invalid Credentials.</p>
      </div>
    </form>
  </div>
</template>

<script>
import styles from "./LoginForm.module.scss";
import { ref } from "vue";
import axios from "axios";
import "@/lib/axios";
import { useRouter } from "vue-router";
import { useStore } from "vuex";

export default {
  name: "LoginForm",
  setup() {
    const store = useStore();
    const router = useRouter();
    const usr_data = ref({ usr_email: "", usr_pwd: "" });

    const email_valid = ref(true);
    const pwd_valid = ref(true);
    const isValid = ref(false);

    const authFailed = ref(false);

    const validateInputs = () => {
      const re =
        /^(([^<>()[\]\\.,;:\s@"]+(\.[^<>()[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;

      email_valid.value =
        re.test(String(usr_data.value.usr_email).toLowerCase()) &&
        usr_data.value.usr_email;

      pwd_valid.value = usr_data.value.usr_pwd ? true : false;

      isValid.value = pwd_valid.value && email_valid.value;
    };

    const handleSubmit = async () => {
      let login_data = {
        usr_email: usr_data.value.usr_email,
        usr_pwd: usr_data.value.usr_pwd,
      };

      const res = await axios.post("/api/login", login_data);

      if (res.data.error) {
        return (authFailed.value = true);
      }

      authFailed.value = true;

      localStorage.setItem("token", res.data.data.token);

      store.dispatch("user", res.data.data);
      router.push({ path: "/" });
    };

    return {
      styles,
      handleSubmit,
      usr_data,
      isValid,
      email_valid,
      pwd_valid,
      validateInputs,
      authFailed,
    };
  },
};
</script>