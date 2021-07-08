import axios from "axios";

export default {
    namespaced: true,
    state: {
        all_posts: [],
    },
    actions: {
        async getPosts({ commit }, page = 1) {
            try {
                const res = await axios.get(`/api/post/all/${page}`);
                commit("GET_POSTS", res.data.data);
            } catch (err) {
                console.log(err);
            }
        },
    },
    mutations: {
        GET_POSTS(state, posts = []) {
            state.all_posts = posts;
        },
    },
};
