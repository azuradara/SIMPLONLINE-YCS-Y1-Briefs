<template>
  <Hero/>
  <Whitespace/>
  <Approach/>
  <Whitespace/>
  <Domains/>
  <Evaluation/>
  <!-- <div class="home">ye</div> -->
</template>

<script>
// @ is an alias to /src
import Approach from "@/components/Home/Sections/Approach/Approach.vue";
import Hero from "@/components/Home/Hero/Hero.vue";
import Whitespace from "@/components/Misc/Whitespace.vue";
import Domains from "@/components/Home/Sections/Domains/Domains.vue";
import Evaluation from "@/components/Home/Sections/Evaluation/Evaluation.vue";

export default {
  name: "Home",
  components: {
    Approach,
    Whitespace,
    Domains,
    Hero,
    Evaluation,
  },
};
</script>