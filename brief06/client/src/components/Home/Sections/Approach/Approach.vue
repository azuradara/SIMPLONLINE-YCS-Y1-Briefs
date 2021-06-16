<template>
  <section :class="styles.wrapper">
    <div :class="styles.section">
      <h3>
        Experienced Professionals<br />
        Progressive Approach
      </h3>
      <img
        :class="styles.scalestatue"
        src="@/assets/Home/scalestatue.png"
        alt=""
      />
      <p :class="styles.headingtext">
        <span>L</span>
        orem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo
        ligula eget dolor. Aenean massa. Cum sociis Theme natoque penatibus et
        magnis dis parturient montes, nascetur ridiculus mus. Aliquam lorem
        ante, dapibus in, viverra quis, feugiat a, tellus. Phasellus viverra
        nulla. Sed non mauris vitae erat consequat auctor eu in elit. Class
        aptent taciti sociosqu ad litora torquent per conubia nostra, per
        inceptos himenaeos. Mauris in erat justo. Nullam ac urna eu felispibus
        condimentum sit amet a augue. Sed non neque elit sed.
      </p>

      <div :class="styles.images">
        <img
          src="@/assets/Home/approach1.jpg"
          alt="approach1"
          :class="styles.approach"
        />
        <img
          src="@/assets/Home/approach2.jpg"
          alt="approach2"
          :class="styles.approach"
        />
      </div>
      <p :class="styles.footertext">
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Nobis explicabo
        assumenda minima, repudiandae exercitationem voluptas, ipsa qui pariatur
        at corporis, tenetur quidem incidunt quisquam autem illum! Quo quidem ex
        eaque! Lorem ipsum dolor sit amet consectetur adipisicing elit. Cum,
        porro perspiciatis laudantium est esse aut laborum, repellat veniam
        explicabo placeat totam molestiae neque vitae distinctio excepturi magni
        eius et. Quis?
      </p>
    </div>
  </section>
</template>

<script>
import styles from "./Approach.module.scss";
export default {
  name: "Approach",
  setup() {
    return { styles };
  },
};
</script>