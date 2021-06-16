<template>
  <!-- <div id="nav">
    <router-link to="/">Home</router-link> |
    <router-link to="/about">About</router-link>
  </div> -->
  <header :class="[styles.header]">
    <div :class="[styles.navbar]">
      <div :class="[styles.logo]">
        <BrandLogo size="32" />
        <BrandText size="100" />
      </div>

      <div :class="[styles.navigation]">
        <div :class="[styles.content]">
          <router-link to="/">Home</router-link>
          <router-link to="/about">About</router-link>
          <router-link to="/about">Team</router-link>
          <router-link to="/about">Expertise</router-link>
          <router-link to="/about">Contact</router-link>
        </div>
      </div>

      <div :class="[styles.cta]">
        <router-link to="/about">Appointments</router-link>
      </div>
    </div>
  </header>
</template>

<script>
import styles from "./Navigation.module.scss";
import BrandLogo from "../Misc/BrandLogo.vue";
import BrandText from "../Misc/BrandText.vue";
export default {
  name: "Navigation",
  components: {
    BrandLogo,
    BrandText,
  },
  setup() {
    return {
      styles,
    };
  },
};
</script>
