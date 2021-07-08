<template>{{ posts }}</template>

<script>
import { useStore } from "vuex";
import { ref, computed, onMounted } from "vue";

export default {
  setup() {
    const store = useStore();

    onMounted(() => {
      store.dispatch("posts/getPosts");
    });

    const posts = computed(() => store.state.posts.posts);

    return {
      posts,
    };
  },
};
</script>
