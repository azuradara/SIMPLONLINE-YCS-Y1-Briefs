<template>
  <div
    class="
      min-h-screen
      flex
      items-center
      justify-center
      bg-gray-50
      py-12
      px-4
      sm:px-6
      lg:px-8
    "
  >
    <div class="max-w-md w-full space-y-8">
      <div>
        <div class="mx-auto">
          <BrandLogo :size="64" class="mx-auto" />
        </div>
        <h2 class="mt-6 text-center text-3xl font-extrabold text-gray-900">
          Create a new account
        </h2>
        <p class="mt-2 text-center text-sm text-gray-600">
          Or
          {{ " " }}
          <router-link
            to="/login"
            class="font-medium text-yellow-400 hover:text-yellow-300"
          >
            log in
          </router-link>
        </p>
      </div>
      <form class="mt-8 space-y-6" action="#" method="POST">
        <input type="hidden" name="remember" value="true" />
        <div class="rounded-md shadow-sm -space-y-px">
          <div>
            <label for="name" class="sr-only">Name</label>
            <input
              id="name"
              name="name"
              type="text"
              autocomplete="name"
              required=""
              v-model="userData.name"
              class="
                appearance-none
                rounded-none
                relative
                block
                w-full
                px-3
                py-2
                border border-gray-300
                placeholder-gray-500
                text-gray-900
                rounded-t-md
                focus:outline-none
                focus:ring-yellow-300
                focus:border-yellow-300
                focus:z-10
                sm:text-sm
              "
              placeholder="Display name"
            />
          </div>
          <div>
            <label for="email-address" class="sr-only">Email address</label>
            <input
              id="email-address"
              name="email"
              type="email"
              autocomplete="email"
              required=""
              v-model="userData.email"
              class="
                appearance-none
                rounded-none
                relative
                block
                w-full
                px-3
                py-2
                border border-gray-300
                placeholder-gray-500
                text-gray-900
                focus:outline-none
                focus:ring-yellow-300
                focus:border-yellow-300
                focus:z-10
                sm:text-sm
              "
              placeholder="Email address"
            />
          </div>
          <div>
            <label for="password" class="sr-only">Password</label>
            <input
              id="password"
              name="password"
              type="password"
              autocomplete="password"
              required=""
              v-model="userData.password"
              class="
                appearance-none
                rounded-none
                relative
                block
                w-full
                px-3
                py-2
                border border-gray-300
                placeholder-gray-500
                text-gray-900
                focus:outline-none
                focus:ring-yellow-300
                focus:border-yellow-300
                focus:z-10
                sm:text-sm
              "
              placeholder="Password"
            />
          </div>

          <div>
            <label for="password_confirmation" class="sr-only">Password</label>
            <input
              id="password_confirmation"
              name="password_confirmation"
              type="password"
              autocomplete="password_confirmation"
              required=""
              v-model="userData.password_confirmation"
              class="
                appearance-none
                rounded-none
                relative
                block
                w-full
                px-3
                py-2
                border border-gray-300
                placeholder-gray-500
                text-gray-900
                rounded-b-md
                focus:outline-none
                focus:ring-yellow-300
                focus:border-yellow-300
                focus:z-10
                sm:text-sm
              "
              placeholder="Confirm password"
            />
          </div>
        </div>

        <div>
          <button
            type="submit"
            @click.prevent="handleSubmit"
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
            <div v-if="!isLoading">
              <span class="absolute left-0 inset-y-0 flex items-center pl-3">
                <LockClosedIcon
                  class="h-5 w-5 text-yellow-300 group-hover:text-yellow-300"
                  aria-hidden="true"
                />
              </span>
              Sign in
            </div>
            <SpinnerIco v-else />
          </button>
        </div>
      </form>
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
    </div>
  </div>
</template>

<script>
import { LockClosedIcon } from "@heroicons/vue/solid";
import BrandLogo from "../icons/BrandLogo.vue";
import SpinnerIco from "../icons/SpinnerIco.vue";

import { ref, computed } from "vue";
import { useStore } from "vuex";
import { useRouter } from "vue-router";

export default {
  components: {
    LockClosedIcon,
    BrandLogo,
    SpinnerIco,
  },
  setup() {
    const store = useStore();
    const router = useRouter();

    const userData = ref({
      email: "",
      password: "",
      password_confirmation: "",
      name: "",
    });

    const isLoading = computed(() => store.state.auth.loading);
    const isAuthenticated = computed(() => store.getters["auth/authenticated"]);
    const error = computed(() => store.getters["auth/error"]);

    const handleSubmit = () => {
      store.dispatch("auth/signup", userData.value).then(() => {
        router.push({ path: "/" });
      });
    };

    return {
      userData,
      handleSubmit,
      isLoading,
      error,
    };
  },
};
</script>
