
<template>
  <div class="">
    <div :class="styles.parallax">
      <div :class="styles.content">
        <h3>Lost? <br />Get A Free Evaluation.</h3>
        <p>
          Lorem ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean
          sollicitudin, lorem bibenum auct.
        </p>
        <router-link :class="styles.ctabutton" to="/login"
          >Evaluate</router-link
        >
      </div>
    </div>
  </div>
</template>

<script>
import styles from "./Evaluation.module.scss";
export default {
  name: "Evaluation",
  setup() {
    return {
      styles,
    };
  },
};
</script>