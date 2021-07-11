<template>
  <!-- Modal -->
  <Modal v-if="modalOn" :modalContent="modalContent" @close="openModal" />
  <!-- Modal -->

  <div class="bg-gray-800">
    <div class="max-w-7xl mx-auto px-2 sm:px-6 lg:px-8">
      <div class="relative flex items-center justify-between h-16">
        <div
          class="absolute inset-y-0 left-0 flex items-center sm:hidden"
        ></div>
        <div
          class="
            flex-1 flex
            items-center
            justify-center
            sm:items-stretch
            sm:justify-start
          "
        >
          <div class="flex-shrink-0 flex items-center">
            <BrandLogo :size="32" />
          </div>
          <div class="hidden sm:block sm:ml-6">
            <div class="flex space-x-4">
              <router-link
                to="/"
                class="
                  text-gray-300
                  hover:bg-gray-700
                  hover:text-white
                  px-3
                  py-2
                  rounded-md
                  text-sm
                  font-medium
                "
                >Home</router-link
              >
              <router-link
                to="/usrposts"
                class="
                  text-gray-300
                  hover:bg-gray-700
                  hover:text-white
                  px-3
                  py-2
                  rounded-md
                  text-sm
                  font-medium
                "
                >Your posts</router-link
              >
              <router-link
                to="/usrcomments"
                class="
                  text-gray-300
                  hover:bg-gray-700
                  hover:text-white
                  px-3
                  py-2
                  rounded-md
                  text-sm
                  font-medium
                "
                >Your comments</router-link
              >
            </div>
          </div>
        </div>
        <div
          class="
            absolute
            inset-y-0
            right-0
            flex
            items-center
            pr-2
            sm:static
            sm:inset-auto
            sm:ml-6
            sm:pr-0
          "
        >
          <button v-if="auth" @click="openModal('NewPostModal')">
            <PlusCircleIcon class="h-6 w-6 text-yellow-400" />
          </button>
          <!-- Profile dropdown -->
          <Menu v-if="auth" as="div" class="ml-3 relative">
            <div>
              <MenuButton
                class="
                  bg-gray-800
                  flex
                  text-sm
                  rounded-full
                  focus:outline-none
                  focus:ring-2
                  focus:ring-offset-2
                  focus:ring-offset-gray-800
                  focus:ring-white
                "
              >
                <span class="sr-only">Open user menu</span>
                <EmojiHappyIcon class="h-6 w-6 text-gray-400" />
              </MenuButton>
            </div>
            <transition
              enter-active-class="transition ease-out duration-100"
              enter-from-class="transform opacity-0 scale-95"
              enter-to-class="transform opacity-100 scale-100"
              leave-active-class="transition ease-in duration-75"
              leave-from-class="transform opacity-100 scale-100"
              leave-to-class="transform opacity-0 scale-95"
            >
              <MenuItems
                class="
                  origin-top-right
                  absolute
                  right-0
                  mt-2
                  w-48
                  rounded-md
                  shadow-lg
                  py-1
                  bg-white
                  ring-1 ring-black ring-opacity-5
                  focus:outline-none
                "
              >
                <MenuItem v-slot="{ active }">
                  <router-link
                    to="/profile"
                    :class="[
                      active ? 'bg-gray-100' : '',
                      'block px-4 py-2 text-sm text-gray-700',
                    ]"
                    >Your Profile</router-link
                  >
                </MenuItem>
                <MenuItem v-slot="{ active }">
                  <button
                    @click.prevent="logout()"
                    :class="[
                      active ? 'bg-gray-100' : '',
                      'block px-4 py-2 text-sm text-gray-700 w-full h-full text-left',
                    ]"
                  >
                    Sign out
                  </button>
                </MenuItem>
              </MenuItems>
            </transition>
          </Menu>

          <div class="flex gap-4" v-else>
            <router-link
              to="/login"
              class="
                text-gray-300
                hover:bg-gray-700
                hover:text-white
                px-3
                py-2
                rounded-md
                text-sm
                font-medium
              "
              >Log In</router-link
            >
            <router-link
              to="/signup"
              class="
                text-gray-800
                hover:bg-yellow-500
                hover:text-white
                px-3
                py-2
                rounded-md
                text-sm
                font-medium
                bg-yellow-400
              "
              >Sign Up</router-link
            >
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
import { ref, computed } from "vue";
import { useStore } from "vuex";
import { useRouter } from "vue-router";

import Modal from "./Modal.vue";

import {
  Disclosure,
  DisclosureButton,
  DisclosurePanel,
  Menu,
  MenuButton,
  MenuItem,
  MenuItems,
} from "@headlessui/vue";
import {
  BellIcon,
  MenuIcon,
  XIcon,
  EmojiHappyIcon,
} from "@heroicons/vue/outline";
import { PlusCircleIcon } from "@heroicons/vue/solid";
import BrandLogo from "../icons/BrandLogo.vue";

const navigation = [
  { name: "Home", href: "/", current: false },
  { name: "My Posts", href: "/myposts", current: false },
  { name: "My Comments", href: "/mycomments", current: false },
];

export default {
  components: {
    Disclosure,
    DisclosureButton,
    DisclosurePanel,
    Menu,
    MenuButton,
    MenuItem,
    MenuItems,
    BellIcon,
    MenuIcon,
    XIcon,
    BrandLogo,
    EmojiHappyIcon,
    PlusCircleIcon,
    Modal,
  },
  setup() {
    const store = useStore();
    const router = useRouter();

    const modalOn = ref(false);
    const modalContent = ref("NewPostModal");

    const openModal = (modal) => {
      modalContent.value = modal;
      modalOn.value = !modalOn.value;
    };

    const open = ref(false);

    const auth = computed(() => store.getters["auth/authenticated"]);

    const logout = async () => {
      await store.dispatch("auth/logout");
      router.push({ path: "/" });
    };

    return {
      navigation,
      open,
      auth,
      logout,
      openModal,
      modalOn,
      modalContent,
    };
  },
};
</script>
