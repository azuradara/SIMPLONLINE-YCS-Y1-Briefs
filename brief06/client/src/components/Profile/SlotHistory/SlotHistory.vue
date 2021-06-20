<template>
  <div :class="styles.slot_history">
    <h3>Appointment History</h3>
    <div v-if="slots && slots.length > 0" :class="styles.container">
      <SlotHistoryCard
        v-for="slot in slots"
        :key="slot.slt_id"
        :timeslot="slot"
        @delete="getSlots"
      />
    </div>
    <div v-else :class="styles.no_slots">
      You don't seem to have any appointments :(
    </div>
  </div>
</template>

<script>
import axios from "axios";
import { ref, onMounted } from "vue";
import styles from "./SlotHistory.module.scss";
import SlotHistoryCard from "./SlotHistoryCard/SlotHistoryCard.vue";

export default {
  name: "SlotHistory",
  components: { SlotHistoryCard },
  setup() {
    const slots = ref(null);

    const getSlots = async () => {
      const res = await axios.get("/api/user/slots");

      if (res.data.err) return console.log("uh oh.");

      slots.value = res.data.data;
    };

    const f = onMounted(async () => getSlots());

    return { styles, slots, getSlots };
  },
};
</script>