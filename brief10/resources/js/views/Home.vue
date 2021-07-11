<template>
  <!-- MODAL -->
  <div class="container max-w-7xl lg:mx-auto mx-6 flex flex-col w-full gap-12">
    <div
      v-for="post in posts"
      :key="post.id"
      class="bg-white rounded-md shadow-lg"
    >
      <div class="flex flex-col divide-y divide-yellow-300">
        <div
          class="
            bg-gray-800
            py-3
            px-4
            rounded-t-md
            flex
            justify-between
            align-top
          "
        >
          <div class="">
            <h3 class="text-xl text-yellow-400">{{ post.title }}</h3>
            <label class="text-gray-500">{{ momento(post.updated_at) }}</label>
          </div>

          <div>
            <div class="text-gray-800 flex gap-1 justify-end">
              <div class="" v-if="userId === post.user_id">
                <button
                  class="flex w-full justify-end"
                  @click="toggleModal(post)"
                >
                  <PencilAltIcon
                    class="
                      h-5
                      w-5
                      text-gray-400
                      hover:text-yellow-400
                      text-right
                    "
                  />
                </button>
              </div>
              <div v-if="userId === post.user_id || moderator">
                <button
                  class="flex w-full justify-end"
                  @click="deletePost(post)"
                >
                  <TrashIcon
                    class="
                      h-5
                      w-5
                      text-gray-400
                      hover:text-yellow-400
                      text-right
                    "
                  />
                </button>
              </div>
              <div v-else>~</div>
            </div>

            <p class="text-gray-400">
              <span class="text-xs">author:</span> {{ post.user }}
            </p>
          </div>
        </div>

        <div class="body py-6 px-4">
          <p>{{ post.content }}</p>
        </div>
        <div
          class="px-12 py-2 bg-gray-100"
          v-for="comment in post.comments"
          :key="comment.id"
        >
          <label class="flex gap-1 items-center text-gray-800 font-semibold">
            {{ comment.user }}
            <span class="text-xs text-gray-500"
              >@ {{ momento(comment.updated_at) }}</span
            ></label
          >
          <p class="text-sm">{{ comment.content }}</p>
        </div>
      </div>
      <form
        class="w-full py-2 px-2 flex gap-2"
        @submit.prevent="handleSubmit($event, post)"
      >
        <input
          type="text"
          placeholder="Leave a comment.."
          name="content"
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
        />
        <button
          class="
            group
            relative
            flex
            justify-center
            items-center
            py-2
            px-4
            border border-transparent
            text-sm
            font-medium
            rounded-md
            text-white
            bg-gray-800
            hover:bg-yellow-300
            hover:text-gray-800
            focus:outline-none
            focus:ring-2 focus:ring-offset-2 focus:ring-yellow-300
            transition-all
          "
          type="submit"
        >
          <ArrowCircleRightIcon class="h-5 w-5" />
        </button>
      </form>
    </div>
  </div>
</template>

<script>
import moment from "moment";

import { useStore } from "vuex";
import { ref, computed, onMounted } from "vue";

import { EmojiHappyIcon } from "@heroicons/vue/outline";
import {
  ArrowCircleRightIcon,
  TrashIcon,
  PencilAltIcon,
} from "@heroicons/vue/solid";

import Modal from "../components/Modal.vue";

export default {
  name: "Home",
  components: {
    ArrowCircleRightIcon,
    EmojiHappyIcon,
    TrashIcon,
    Modal,
    PencilAltIcon,
  },

  setup(_, { emit }) {
    const store = useStore();

    const posts = computed(() => store.getters["posts/ALL_POSTS"]);

    onMounted(async () => {
      await store.dispatch("posts/getPosts");
    });

    const userId = computed(() => store.getters["auth/userId"]);
    const moderator = computed(() => store.getters["auth/moderator"]);

    const momento = (date) => {
      return moment(date).format("MMM Do YY, h:mm:ss a");
    };

    const commentModel = ref("");

    const handleSubmit = (event, { id }) => {
      const commentData = {
        content: event.target.elements.content.value,
        post_id: id,
      };

      event.target.elements.content.value = "";

      store.dispatch("posts/submitComment", commentData);
      store.dispatch("posts/getPosts");
    };

    const deletePost = ({ id }) => {
      store.dispatch("posts/deletePost", id);
      store.dispatch("posts/getPosts");
    };

    const toggleModal = (post) => {
      emit("editModal", post);
    };

    return {
      posts,
      momento,
      commentModel,
      handleSubmit,
      moderator,
      userId,
      deletePost,
      toggleModal,
    };
  },
};
</script>
