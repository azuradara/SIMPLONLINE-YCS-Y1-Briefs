<template>
  <LoginForm />
</template>

<script>
import LoginForm from "@/components/Login/LoginForm.vue";
import Whitespace from "@/components/Misc/Whitespace.vue";

export default {
  name: "Login",

  components: { LoginForm, Whitespace },
  setup() {},
};
</script>