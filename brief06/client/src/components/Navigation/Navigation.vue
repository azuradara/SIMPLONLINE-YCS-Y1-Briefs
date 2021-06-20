<template>
  <!-- Modal -->
  <Modal v-if="modalOn" :modalContent="modalContent" @close="toggleModal" />
  <!-- Modal -->

  <header
    :class="[
      styles.header,
      bgDark ? styles.headerwithbg : '',
      !isHome ? styles.notHome : '',
    ]"
  >
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

      <div v-if="!user" :class="[styles.cta]">
        <router-link to="/login">Log in</router-link>
        <button @click="toggleModal('SignupModal')">Sign up</button>
      </div>
      <div v-if="user" :class="[styles.cta]">
        <a href="javascript:void(0)" @click="logOut">Log out</a>
        <button @click="toggleModal('BookingModal')">Get Evaluation</button>
      </div>
    </div>
  </header>
</template>

<script>
import styles from "./Navigation.module.scss";
import BrandLogo from "../Misc/BrandLogo.vue";
import BrandText from "../Misc/BrandText.vue";
import Modal from "@/components/Misc/Modal.vue";

import { computed, ref } from "vue";
import { useRoute, useRouter } from "vue-router";
import { useStore } from "vuex";

export default {
  name: "Navigation",

  components: {
    BrandLogo,
    BrandText,
    Modal,
  },

  setup() {
    const router = useRouter();
    const store = useStore();
    let bgDark = ref(false);
    let modalOn = ref(false);
    let modalContent = ref("BookingModal");

    const user = computed(() => store.getters.user);

    const toggleModal = (modal) => {
      modalContent.value = modal;
      modalOn.value = !modalOn.value;
    };

    document.addEventListener("scroll", () => {
      let pos = document.body.getBoundingClientRect().top;
      let threshold = window.innerWidth <= 1200 ? 100 : window.innerHeight;

      bgDark.value = pos < -threshold ? true : false;
    });

    const isHome = computed(() => {
      return useRoute().name === "Home" ? true : false;
    });

    const logOut = () => {
      localStorage.removeItem("token");
      store.dispatch("logout");
      router.push({ path: "/" });
    };

    return {
      styles,
      bgDark,
      isHome,
      logOut,
      user,
      modalOn,
      toggleModal,
      modalContent,
    };
  },
};
</script>
