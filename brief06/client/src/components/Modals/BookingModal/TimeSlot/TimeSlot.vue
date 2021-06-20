<template>
  <div
    @click="handleClick"
    :class="[styles.slot, slot.status ? styles.slot__disabled : '']"
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

export default {
  name: "TimeSlot",
  props: ["timeslot", "date"],
  setup(props, { emit }) {
    const slot = props.timeslot;

    const start_time = slot.S.split(":")[0] + ":" + slot.S.split(":")[1];
    const end_time = slot.E.split(":")[0] + ":" + slot.E.split(":")[1];

    const handleClick = () => {
      if (slot.status) return;
      emit("picked");
    };

    return { styles, slot, start_time, end_time, handleClick };
  },
};
</script>