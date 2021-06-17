<template>
  <div :class="styles.bg">
    <form @submit.prevent="handleSubmit">
      <div>
        <h3>Log in</h3>

        <span :class="styles.sep"></span>

        <label>
          <p>E-Mail</p>
          <input type="text" v-model="usr_data.usr_email" />
        </label>

        <label>
          <p>Password</p>
          <input type="password" v-model="usr_data.usr_pwd" />
        </label>

        <span :class="styles.sep"></span>
        <button :class="styles.btn">Log in</button>
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

    const handleSubmit = async () => {
      let login_data = {
        usr_email: usr_data.value.usr_email,
        usr_pwd: usr_data.value.usr_pwd,
      };

      const res = await axios.post("/api/login", login_data);

      localStorage.setItem("token", res.data.data.token);

      store.dispatch("user", res.data.data);
      router.push({ path: "/" });
    };

    return {
      styles,
      handleSubmit,
      usr_data,
    };
  },
};
</script>