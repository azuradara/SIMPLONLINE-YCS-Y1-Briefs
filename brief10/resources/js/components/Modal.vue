<template>
  <div
    :class="['modal__overlay', open && 'open']"
    @mousedown.self="$emit('close')"
  >
    <div
      :class="[
        'modal__body',
        open && 'open',
        'w-full max-w-sm p-6 m-auto bg-white rounded-md shadow-md ',
      ]"
    >
      <component
        :modalData="data"
        :is="modalContent"
        @close="$emit('close')"
      ></component>
    </div>
  </div>
</template>

<script>
import { onMounted, onUnmounted } from "@vue/runtime-core";
import { ref } from "vue";

import NewPostModal from "./NewPostModal.vue";

export default {
  name: "Modal",
  props: ["modalContent", "data"],
  components: { NewPostModal },

  setup() {
    const open = ref(false);

    onMounted(() => {
      document.body.classList.add("no-scroll");
      setTimeout(() => {
        open.value = true;
      }, 50);
    });
    onUnmounted(() => {
      document.body.classList.remove("no-scroll");
    });
    return { open };
  },
};
</script>

<style lang="scss" scoped>
.modal__overlay {
  background: rgba($color: #000, $alpha: 0.5);
  width: 100vw;
  height: 100vh;
  position: fixed;
  z-index: 1000;
  display: grid;
  place-items: center;
  opacity: 0;
  transition: all 250ms ease-out;

  .modal__body {
    border-radius: 4px;
    overflow-y: auto;
    opacity: 0;
    transition: all 250ms ease-out;
  }
}

.open {
  opacity: 1 !important;
}
</style>
