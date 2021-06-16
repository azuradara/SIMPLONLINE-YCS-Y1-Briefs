<template>
  <Navigation />
  <router-view />
  <Footer />
</template>

<script>
import Navigation from "./components/Navigation/Navigation.vue";
import Footer from "./components/Footer/Footer.vue";

export default {
  setup() {},
  components: {
    Navigation,
    Footer,
  },
};
</script>

<style lang="scss">
@import url("https://fonts.googleapis.com/css2?family=Karla:wght@300;400;700&display=swap");
@import url("https://fonts.googleapis.com/css2?family=Cormorant+Garamond:wght@300;400;500;600;700&display=swap");
*,
*::after,
*::before {
  box-sizing: border-box;
  margin: 0;
  padding: 0;
  position: relative;
}

#app {
  font-family: Karla, sans-serif;
}

#whitespace {
  height: 7rem;
}
/* #app {
  font-family: Avenir, Helvetica, Arial, sans-serif;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  text-align: center;
  color: #2c3e50;
}

#nav {
  padding: 30px;
}

#nav a {
  font-weight: bold;
  color: #2c3e50;
}

#nav a.router-link-exact-active {
  color: #42b983;
} */
</style>
