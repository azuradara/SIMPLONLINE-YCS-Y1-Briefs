<template>
  <div :class="styles.domaincard">
    <div :class="styles.imgcontainer">
      <img :src="img" alt="" />
    </div>
    <h4>{{ dom.name }}</h4>
    <p>{{ dom.desc }}</p>
  </div>
</template>

<script>
import styles from "./DomainCard.module.scss";
export default {
  props: ["dom"],
  name: "DomainCard",
  setup(props) {
    let img = require(`../../assets/Home/${props.dom.img}`);

    return {
      styles,
      img,
    };
  },
};
</script>