<template>
  <div :class="styles.overlay" @click.self="$emit('close')">
    <div :class="styles.modal">
      <component :is="modalContent" @close="$emit('close')"></component>
    </div>
  </div>
</template>

<script>
import { onMounted, onUnmounted } from "@vue/runtime-core";
import styles from "./Modal.module.scss";

import SignupModal from "@/components/Modals/SignupModal/SignupModal.vue";
import BookingModal from "@/components/Modals/BookingModal/BookingModal.vue";

export default {
  name: "Modal",
  props: ["modalContent"],
  components: {
    SignupModal,
    BookingModal,
  },
  setup() {
    onMounted(() => {
      document.body.classList.add("no-scroll");
    });

    onUnmounted(() => {
      document.body.classList.remove("no-scroll");
    });

    return { styles };
  },
};
</script>