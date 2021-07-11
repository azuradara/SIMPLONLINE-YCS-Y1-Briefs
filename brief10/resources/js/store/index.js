import {createStore} from "vuex";

import auth from "./auth.js";
import posts from "./posts.js";

const store = createStore({
    state: {},
    actions: {},
    mutations: {},
    modules: {
        auth,
        posts,
    },
});

export default store;
