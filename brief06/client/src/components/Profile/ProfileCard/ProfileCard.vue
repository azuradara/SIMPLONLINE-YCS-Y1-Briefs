<template>
  <div :class="styles.profilecard">
    <div :class="styles.usr_info">
      <h3>
        {{ user.usr_name }},
        <span :class="styles.profession">{{ user.usr_profession }}</span>
      </h3>
      <p>{{ user.usr_email }}</p>
    </div>

    <div :class="styles.add_info">
      <p>{{ user.usr_address }}</p>
      <p>{{ user.usr_pnum }}</p>
      <p>{{ user.usr_bday }}</p>
    </div>
  </div>
</template>

<script>
import styles from "./ProfileCard.module.scss";
import { useStore } from "vuex";
import { computed } from "vue";

export default {
  name: "ProfileCard",
  setup() {
    const store = useStore();
    const user = computed(() => store.getters.user);

    return { styles, user };
  },
};
</script>