<template>
  <div :class="styles.timeslotdesc" @input="handleInput">
    <label>
      <p>Subject</p>
      <input type="text" v-model="sub" />
    </label>
    <label>
      <p>Description</p>
      <textarea rows="4" v-model="desc" />
    </label>
  </div>
</template>

<script>
import styles from "./TimeSlotDesc.module.scss";
import { ref } from "vue";

export default {
  name: "TimeSlotDesc",
  setup(props, { emit }) {
    const sub = ref("");
    const desc = ref("");

    const handleInput = () => {
      if (!sub.value || !desc.value) return emit("validate", false);
      emit("validate", true);
      emit("update", { slt_sub: sub.value, slt_desc: desc.value });
    };

    return { styles, handleInput, sub, desc };
  },
};
</script>