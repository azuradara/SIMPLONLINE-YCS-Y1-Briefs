require("./bootstrap");

import {createApp} from "vue";
import router from "./router";
import store from "./store";
import App from "./App.vue";

require("./store/subscriber");

store.dispatch("auth/attempt", localStorage.getItem("token")).then(() => {
    createApp(App).use(router).use(store).mount("#app");
});
