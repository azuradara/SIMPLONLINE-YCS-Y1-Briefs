<template>
  <div :class="styles.card">
    <div :class="styles.header">
      <div>
        <h4>{{ timeslot.slt_sub }}</h4>
        <p>{{ timeslot.slt_date }} | {{ timeslot.S.slice(0, 5) }}</p>
      </div>
      <button v-if="timeslot.slt_isactive" @click="deleteSlot">Cancel</button>
    </div>
    <span :class="styles.sep"></span>
    <p :class="styles.desc">
      {{ timeslot.slt_desc }}
    </p>
  </div>
</template>

<script>
import styles from "./SlotHistoryCard.module.scss";
import axios from "axios";

export default {
  props: ["timeslot"],
  name: "SlotHistoryCard",
  setup(props, { emit }) {
    const deleteSlot = async () => {
      const res = await axios.delete(
        `api/slots?slt_id=${props.timeslot.slt_id}`
      );
      console.log(res);
      emit("delete");
    };

    return { styles, deleteSlot };
  },
};
</script>