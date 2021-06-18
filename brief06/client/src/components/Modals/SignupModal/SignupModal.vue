<template>
  <div :class="styles.bg">
    <form @submit.prevent="handleSubmit">
      <div>
        <h3>Sign up</h3>

        <span :class="styles.sep"></span>

        <label>
          <p>Full Name</p>
          <input v-model="usr_data.usr_name" type="text"/>
        </label>

        <label>
          <p>Date of Birth</p>
          <input v-model="usr_data.usr_bday" type="date"/>
        </label>

        <label>
          <p>Profession</p>
          <input v-model="usr_data.usr_profession" type="text"/>
        </label>

        <label>
          <p>Phone</p>
          <input v-model="usr_data.usr_pnum" type="text"/>
        </label>

        <label>
          <p>Address</p>
          <input v-model="usr_data.usr_address" type="text"/>
        </label>

        <span :class="styles.sep"></span>

        <label>
          <p>E-Mail</p>
          <input v-model="usr_data.usr_email" type="text"/>
        </label>

        <label>
          <p>Password</p>
          <input v-model="usr_data.usr_pwd" type="password"/>
        </label>

        <label>
          <p>Confirm Password</p>
          <input v-model="usr_data.usr_pwd_rpt" type="password"/>
        </label>

        <span :class="styles.sep"></span>
        <button :class="styles.btn">Submit</button>
        <p v-if="!isValid" :class="styles.erre">Invalid Data.</p>
      </div>
    </form>
  </div>
</template>

<script>
import styles from "./SignupModal.module.scss";
import {ref} from "vue";
import axios from "axios";
import "@/lib/axios";
import {useRouter} from "vue-router";
import {useStore} from "vuex";

export default {
  name: "SignupModal",

  setup(props, {emit}) {
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
      let signup_data = {...usr_data.value};

      const res = await axios.post("/api/signup", signup_data);

      if (res.data.data.err && res.data.err) {
        return (isValid.value = false);
      }

      isValid.value = true;

      router.push({path: "/"});
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