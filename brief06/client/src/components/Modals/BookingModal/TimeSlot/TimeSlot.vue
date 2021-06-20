<template>
  <div
    @click="handleClick"
    :class="[styles.slot, slot.status ? styles.slot__disabled : '']"
    ref="slotElement"
  >
    <div :class="styles.time">
      <p :class="styles.start">{{ start_time }}</p>
      <span>〜</span>
      <p :class="styles.start">{{ end_time }}</p>
    </div>
    <span v-if="!slot.status" :class="styles.timezone">Available</span>
  </div>
</template>

<script>
import styles from "./TimeSlot.module.scss";
import { ref } from "vue";

export default {
  name: "TimeSlot",
  props: ["timeslot", "date"],
  setup(props, { emit }) {
    const slot = props.timeslot;

    const slotElement = ref(null);

    const start_time = slot.S.split(":")[0] + ":" + slot.S.split(":")[1];
    const end_time = slot.E.split(":")[0] + ":" + slot.E.split(":")[1];

    const handleClick = (e) => {
      if (slot.status) return;
      emit("picked", slotElement.value);
    };

    return { styles, slot, start_time, end_time, handleClick, slotElement };
  },
};
</script>