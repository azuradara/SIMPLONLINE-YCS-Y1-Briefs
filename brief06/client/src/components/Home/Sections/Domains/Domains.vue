<template>
  <div :class="styles.domains">
    <div :class="styles.wrapper">
      <div v-for="dom in doms" v-bind:key="dom.name">
        <DomainCard :dom="dom"/>
      </div>
    </div>
  </div>
</template>

<script>
import styles from "./Domains.module.scss";
import DomainCard from "@/components/Misc/DomainCard.vue";

export default {
  name: "Domains",
  components: {
    DomainCard,
  },
  setup() {
    const doms = [
      {
        name: "Tax Law",
        desc: "Your finances are safe with us.",
        img: "dom_taxlaw.png",
      },
      {
        name: "Parenthood",
        desc: "Expert advice related to familial affairs.",
        img: "dom_parenthood.png",
      },
      {
        name: "Intellectual Property",
        desc: "Safeguard your ideas & creativity.",
        img: "dom_ip.png",
      },
      {
        name: "Estate Planning.",
        desc: "Buy and sell real estate with ease.",
        img: "dom_estate.png",
      },
    ];

    return {
      styles,
      doms,
    };
  },
};
</script>