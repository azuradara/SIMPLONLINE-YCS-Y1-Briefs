<template>
  <!-- <div id="nav">
    <router-link to="/">Home</router-link> |
    <router-link to="/about">About</router-link>
  </div> -->
  <nav :class="[styles.navbar]">
    <BrandLogo />
    <!-- <div :class="[styles.logo]"><Group /> ye</div>

    <div :class="[styles]"></div>
    <div :class="[styles]"></div> -->
  </nav>
</template>

<script>
import styles from "./Navigation.module.scss";
import BrandLogo from "../Misc/BrandLogo.vue";
export default {
  name: "Navigation",
  components: {
    BrandLogo,
  },
  setup() {
    return {
      styles,
    };
  },
};
</script>
