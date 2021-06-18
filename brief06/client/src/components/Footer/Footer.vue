<template>
  <div :class="styles.footer">
    <div :class="styles.insignia">
      <img alt="" src="../../assets/Home/footer_off.png"/>
    </div>

    <div :class="styles.content">
      <div :class="styles.pullleft">
        2021 © Sanctum & Partners Law Office<br/>
        🍚 Website by <a href="github.com/azuradara">Azura Dara</a>
      </div>
      <div :class="styles.pullright">Privacy Policy</div>
    </div>
  </div>
</template>

<script>
import styles from "./Footer.module.scss";

export default {
  name: "Footer",
  setup() {
    return {styles};
  },
};
</script>