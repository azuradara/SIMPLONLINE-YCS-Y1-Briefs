<template>
  <!-- <div id="nav">
    <router-link to="/">Home</router-link> |
    <router-link to="/about">About</router-link>
  </div> -->
  <header :class="[styles.header, bgDark ? styles.headerwithbg : '']">
    <div :class="[styles.navbar]">
      <div :class="[styles.logo]">
        <BrandLogo size="32" />
        <BrandText size="100" />
      </div>

      <div :class="[styles.navigation]">
        <div :class="[styles.content]">
          <router-link to="/">Home</router-link>
          <router-link to="/about">About</router-link>
          <router-link to="/team">Team</router-link>
          <router-link to="/expertise">Expertise</router-link>
          <router-link to="/contact">Contact</router-link>
        </div>
      </div>

      <div :class="[styles.cta]">
        <router-link to="/login">Log in</router-link>
        <button>Sign up</button>
      </div>
    </div>
  </header>
</template>

<script>
import styles from "./Navigation.module.scss";
import BrandLogo from "../Misc/BrandLogo.vue";
import BrandText from "../Misc/BrandText.vue";
import { ref } from "vue";

export default {
  name: "Navigation",

  components: {
    BrandLogo,
    BrandText,
  },

  setup() {
    let bgDark = ref(false);
    document.addEventListener("scroll", () => {
      let pos = document.body.getBoundingClientRect().top;

      bgDark.value = pos < -window.innerHeight ? true : false;
    });

    return {
      styles,
      bgDark,
    };
  },
};
</script>
