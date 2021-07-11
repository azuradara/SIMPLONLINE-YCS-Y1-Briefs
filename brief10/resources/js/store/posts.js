import axios from "axios";

export default {
    namespaced: true,
    state: {
        allPosts: [],
        loading_newpost: false,
        error_newpost: null,
    },
    getters: {
        ALL_POSTS(state) {
            return state.allPosts;
        },
        LOADING_NEWPOST(state) {
            return state.loading_newpost;
        },
        ERR_NEWPOST(state) {
            return state.error_newpost;
        },
    },
    actions: {
        async getPosts({ commit }) {
            try {
                const res = await axios.get(`/api/post/all`);
                commit("GET_POSTS", res.data.data);
            } catch (err) {
                console.log(err);
            }
        },

        async submitPost({ commit }, postData) {
            try {
                commit("SET_LOADING_NEWPOST", true);
                commit("SET_ERROR_NEWPOST", null);

                await axios.post("/api/post", postData);

                return commit("SET_LOADING_NEWPOST", false);
            } catch (err) {
                commit("SET_LOADING_NEWPOST", false);
                commit("SET_ERROR_NEWPOST", err.message);
            }
        },

        async submitComment({ commit }, commentData) {
            try {
                await axios.post("/api/comment", commentData);
                return true;
            } catch (err) {
                console.log(err);
            }
        },

        async deletePost(_, id) {
            try {
                await axios.delete(`/api/post/${id}`);
            } catch (err) {
                console.log(err);
            }
        },

        async editPost(_, post) {
            try {
                await axios.put(`/api/post/${post.id}`, post);
                return true;
            } catch (err) {
                console.log(err);
            }
        },
    },
    mutations: {
        GET_POSTS(state, payload) {
            state.allPosts = payload;
        },
        SET_ERROR_NEWPOST(state, value) {
            state.error_newpost = value;
        },
        SET_LOADING_NEWPOST(state, value) {
            state.loading_newpost = value;
        },
    },
};
