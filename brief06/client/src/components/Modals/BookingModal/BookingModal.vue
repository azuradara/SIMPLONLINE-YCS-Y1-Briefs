<template>
  <div :class="styles.booking">
    <div :class="styles.timeslot_container">
      <h3>Appointment</h3>
      <span :class="styles.sep"></span>
      <div :class="styles.datepicker">
        <label>Appointment date :</label>
        <input
          type="date"
          name="slt_date"
          :min="offset"
          v-model="slt_date"
          @input="checkDate($event)"
        />
      </div>

      <span :class="styles.sep"></span>

      <div :class="styles.slots" v-if="isvalid_date">
        <TimeSlot
          v-for="slot in slotData.slots"
          :key="slot.slt_id"
          :date="slotData.slt_date"
          :timeslot="slot"
          @picked="pickSlot(slot)"
        />
        <span :class="styles.sep"></span>
      </div>
      <p v-if="!isvalid" :class="styles.erre">All fields are required :(</p>
      <TimeSlotDesc @validate="checkDesc" @update="updateDesc" />
    </div>

    <button :class="styles.btn" @click.prevent="handleSubmit">Submit</button>
  </div>
</template>

<script>
import styles from "./BookingModal.module.scss";
import TimeSlot from "./TimeSlot/TimeSlot.vue";
import TimeSlotDesc from "./TimeSlotDesc/TimeSlotDesc.vue";
import axios from "axios";

import { ref } from "vue";
import { useRouter } from "vue-router";

export default {
  name: "BookingModal",

  components: { TimeSlot, TimeSlotDesc },

  setup(props, { emit }) {
    const router = useRouter();

    // BASE DATE OFFSET

    const now = new Date();
    now.setDate(now.getDate() + 7);

    const offset = ref("");
    offset.value = now.toISOString().split("T")[0];

    // PICKED DATE VALIDATION

    const slt_date = ref("");
    const isvalid_date = ref(false);

    const checkDate = (e) => {
      const day = new Date(slt_date.value).getDay();
      pickedSlot.value = null;

      if ([6, 0].includes(day)) {
        e.preventDefault();
        slt_date.value = "";
        return (isvalid_date.value = false);
      }

      isvalid_date.value = true;
      getSlots(slt_date.value);
    };

    // SLOT FETCHING

    const slotData = ref([]);

    const getSlots = async (date) => {
      const res = await axios.get(`/api/slots?date=${date}`);
      slotData.value = res.data.data;
      console.log(slotData.value);
    };

    // SLOT CHOICE

    const pickedSlot = ref(null);

    const pickSlot = (slot) => {
      pickedSlot.value = slot;
      console.log(pickedSlot.value);
    };

    // DESC

    const isvalid_desc = ref(false);
    const desc = ref(null);

    const updateDesc = (obj) => {
      desc.value = obj;
    };

    const checkDesc = (value) => {
      isvalid_desc.value = value;
    };

    // SUBMISSION

    const isvalid = ref(true);

    const handleSubmit = async () => {
      if (!(isvalid_desc.value && isvalid_date.value && pickedSlot.value))
        return (isvalid.value = false);

      isvalid.value = true;

      const newSlot = {
        slt_timeslot: pickedSlot.value.slt_timeslot,
        slt_date: slt_date.value,
        ...desc.value,
      };

      console.log(newSlot);

      const res = await axios.post("/api/slots", newSlot);

      if (!res.data.error) {
        router.push({ path: "/profile" });
        emit("close");
      } else {
        isvalid.value = false;
      }
    };

    return {
      styles,
      offset,
      slt_date,
      checkDate,
      slotData,
      pickSlot,
      isvalid_desc,
      isvalid_date,
      checkDesc,
      updateDesc,
      handleSubmit,
      isvalid,
    };
  },
};
</script>