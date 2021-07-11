<template>
  <div>
    <h3 class="mx-auto text-xl text-center mb-5">What's on your mind?</h3>
    <form class="flex flex-col gap-5" @submit.prevent="">
      <div class="rounded-md shadow-sm -space-y-px">
        <div>
          <label class="sr-only">Post Title</label>
          <input
            v-model="postData.title"
            type="text"
            required=""
            class="
              appearance-none
              relative
              block
              w-full
              px-3
              py-2
              border border-gray-300
              placeholder-gray-500
              text-gray-800
              rounded-md
              focus:outline-none
              focus:ring-yellow-300
              focus:border-yellow-300
              focus:z-10
            "
            placeholder="Title"
          />
        </div>
      </div>

      <div class="rounded-md shadow-sm -space-y-px">
        <div>
          <label class="sr-only">Post Content</label>
          <textarea
            v-model="postData.content"
            class="
              flex-1
              appearance-none
              border border-gray-300
              w-full
              py-2
              px-3
              bg-white
              text-gray-800
              placeholder-gray-500
              rounded-md
              focus:outline-none
              focus:ring-2 focus:ring-yellow-300
              focus:border-transparent
            "
            placeholder="Content"
            rows="5"
            cols="40"
          ></textarea>
        </div>
      </div>

      <button
        type="submit"
        @click.prevent="submitPost"
        class="
          group
          relative
          w-full
          flex
          justify-center
          py-2
          px-4
          border border-transparent
          text-sm
          font-medium
          rounded-md
          text-white
          bg-yellow-400
          hover:bg-yellow-500
          focus:outline-none
          focus:ring-2 focus:ring-offset-2 focus:ring-yellow-300
        "
      >
        <div v-if="!loading">
          <span class="absolute left-0 inset-y-0 flex items-center pl-3">
            <PlusCircleIcon
              class="h-5 w-5 text-yellow-100 group-hover:text-yellow-100"
              aria-hidden="true"
            />
          </span>
          Post
        </div>
        <SpinnerIco v-else />
      </button>
      <div
        v-if="error"
        class="
          bg-red-500
          w-full
          text-center text-bold text-white
          h-12
          grid
          place-items-center
          rounded-md
          mt-3
        "
      >
        {{ error }}
      </div>
    </form>
  </div>
</template>

<script>
import SpinnerIco from "../icons/SpinnerIco.vue";
import { PlusCircleIcon } from "@heroicons/vue/solid";

import { useStore } from "vuex";
import { ref, computed, onMounted } from "vue";
import { useRouter } from "vue-router";

export default {
  components: {
    SpinnerIco,
    PlusCircleIcon,
  },
  props: ["modalData"],
  setup({ modalData }, { emit }) {
    const store = useStore();
    const router = useRouter();

    const postData = ref({ title: "", content: "" });

    const loading = computed(() => store.getters["posts/LOADING_NEWPOST"]);
    const error = computed(() => store.getters["posts/ERR_NEWPOST"]);

    const submitPost = async () => {
      if (modalData) {
        postData.value = {
          ...postData.value,
          id: modalData.id,
        };

        await store.dispatch("posts/editPost", postData.value);
        await store.dispatch("posts/getPosts");
        return emit("close");
      }

      await store.dispatch("posts/submitPost", postData.value);
      Boolean(!error.value) && emit("close");
      await store.dispatch("posts/getPosts");
    };

    onMounted(() => {
      if (modalData) {
        postData.value = (({ title, content }) => ({ title, content }))(
          modalData
        );
      }
    });

    return {
      submitPost,
      postData,
      loading,
      error,
    };
  },
};
</script>
