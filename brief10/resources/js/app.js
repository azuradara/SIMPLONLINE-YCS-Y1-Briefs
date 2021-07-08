require("./bootstrap");

import { createApp } from "vue";
import router from "./router";
import store from "./store";

require("./store/subscriber");

import App from "./App.vue";

store.dispatch("auth/attempt", localStorage.getItem("token")).then(() => {
    createApp(App).use(router).use(store).mount("#app");
});
