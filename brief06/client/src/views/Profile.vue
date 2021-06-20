<template>
  <Whitespace />
  <div class="profile">
    <ProfileCard />
    <SlotHistory />
  </div>
  <Whitespace />
</template>

<script>
import ProfileCard from "@/components/Profile/ProfileCard/ProfileCard.vue";
import SlotHistory from "@/components/Profile/SlotHistory/SlotHistory.vue";
import Whitespace from "@/components/Misc/Whitespace.vue";

export default {
  name: "Profile",
  components: { ProfileCard, SlotHistory, Whitespace },
  setup() {},
};
</script>

<style lang="scss">
.profile {
  margin: auto;
  width: 100vw;
}
</style>