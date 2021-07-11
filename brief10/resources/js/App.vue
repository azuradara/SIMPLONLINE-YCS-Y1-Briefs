<template>
  <Modal
    v-if="modalOn"
    :modalContent="modalContent"
    @close="openModal"
    :data="modalData"
  />
  <navigation />

  <div class="overflow-auto overflow-x-hidden pt-12 pb-20">
    <router-view @editModal="handleModal" />
  </div>
</template>

<script>
import { ref } from "vue";

import Navigation from "./components/Navigation.vue";
import Modal from "./components/Modal.vue";

export default {
  components: { Navigation, Modal },
  setup() {
    const modalOn = ref(false);
    const modalContent = ref("NewPostModal");
    const modalData = ref(null);

    const openModal = (modal) => {
      modalContent.value = modal;
      modalOn.value = !modalOn.value;
    };

    const handleModal = (data) => {
      console.log(data);
      modalData.value = data;
      openModal("NewPostModal");
    };

    return {
      openModal,
      modalOn,
      modalContent,
      handleModal,
      modalData,
    };
  },
};
</script>
