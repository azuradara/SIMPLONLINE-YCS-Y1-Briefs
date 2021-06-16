<template>
  <div :class="styles.container">
    <div :class="styles.parallax">
      <div :class="styles.textarea">
        <BrandLogo size="164" />
        <h1>Professionalism That <br />Drives Results.</h1>
        <p>
          Lorem ipsum dolor sit amet consectetur adipisicing elit. Quaerat
          ipsum, commodi optio culpa veniam officiis impedit velit, animi ab
          temporibus nobis nulla, fugiat sapiente. Dolorum reiciendis
          repudiandae nemo? Aut, accusamus?
        </p>
      </div>
    </div>
  </div>
</template>

<script>
import styles from "./Hero.module.scss";
import BrandLogo from "@/components/Misc/BrandLogo.vue";
export default {
  name: "Hero",
  components: {
    BrandLogo,
  },
  setup() {
    return { styles };
  },
};
</script>