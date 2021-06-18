<template>
  <div :class="styles.bg">
    <form @submit.prevent="handleSubmit">
      <div>
        <h3>Sign up</h3>

        <span :class="styles.sep"></span>

        <label>
          <p>Full Name</p>
          <input type="text" v-model="usr_data.usr_name" />
        </label>

        <label>
          <p>Date of Birth</p>
          <input type="date" v-model="usr_data.usr_bday" />
        </label>

        <label>
          <p>Profession</p>
          <input type="text" v-model="usr_data.usr_profession" />
        </label>

        <label>
          <p>Phone</p>
          <input type="text" v-model="usr_data.usr_pnum" />
        </label>

        <label>
          <p>Address</p>
          <input type="text" v-model="usr_data.usr_address" />
        </label>

        <span :class="styles.sep"></span>

        <label>
          <p>E-Mail</p>
          <input type="text" v-model="usr_data.usr_email" />
        </label>

        <label>
          <p>Password</p>
          <input type="password" v-model="usr_data.usr_pwd" />
        </label>

        <label>
          <p>Confirm Password</p>
          <input type="password" v-model="usr_data.usr_pwd_rpt" />
        </label>

        <span :class="styles.sep"></span>
        <button :class="styles.btn">Submit</button>
        <p :class="styles.erre" v-if="!isValid">Invalid Data.</p>
      </div>
    </form>
  </div>
</template>

<script>
import styles from "./SignupModal.module.scss";
import { ref } from "vue";
import axios from "axios";
import "@/lib/axios";
import { useRouter } from "vue-router";
import { useStore } from "vuex";

export default {
  name: "SignupModal",

  setup(props, { emit }) {
    const store = useStore();
    const router = useRouter();
    const usr_data = ref({
      usr_email: "",
      usr_pwd: "",
      usr_name: "",
      usr_pnum: "",
      usr_bday: "",
      usr_address: "",
      usr_pwd_rpt: "",
      usr_profession: "",
    });

    const isValid = ref(true);

    const handleSubmit = async () => {
      let signup_data = { ...usr_data.value };

      const res = await axios.post("/api/signup", signup_data);

      if (res.data.data.err && res.data.err) {
        return (isValid.value = false);
      }

      isValid.value = true;

      router.push({ path: "/" });
      emit("close");
    };

    return {
      styles,
      handleSubmit,
      usr_data,
      isValid,
    };
  },
};
</script>