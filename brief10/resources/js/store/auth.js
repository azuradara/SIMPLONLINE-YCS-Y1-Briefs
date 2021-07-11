import axios from "axios";

export default {
    namespaced: true,
    state: {
        token: null,
        user: null,
        loading: false,
        error: null,
    },
    getters: {
        authenticated(state) {
            return state.token && state.user;
        },
        user(state) {
            return state.user;
        },
        error(state) {
            return state.error;
        },
        moderator(state) {
            return state.user?.is_moderator;
        },
        userId(state) {
            return state.user?.id;
        },
    },
    actions: {
        async login({commit, dispatch}, credentials) {
            try {
                commit("SET_ERROR", null);
                commit("SET_LOADING", true);

                const res = await axios.post("/api/login", credentials);

                return dispatch("attempt", res.data.data.token);
            } catch (err) {
                commit("SET_ERROR", err.message);
                commit("SET_LOADING", false);
            }
        },

        async signup({commit, dispatch}, credentials) {
            try {
                commit("SET_ERROR", null);
                commit("SET_LOADING", true);

                const res = await axios.post("api/signup", credentials);

                return dispatch("attempt", res.data.data.token);
            } catch (err) {
                commit("SET_ERROR", err.message);
                commit("SET_LOADING", false);
            }
        },

        async attempt({commit, state}, token) {
            try {
                if (token) commit("SET_TOKEN", token);

                if (!state.token) return;

                const res = await axios.get("/api/user");

                commit("SET_USER", res.data);
                commit("SET_LOADING", false);
            } catch (err) {
                console.log(err);
                commit("SET_ERROR", err.message);
                commit("SET_LOADING", false);
                commit("SET_TOKEN", null);
                commit("SET_USER", null);
            }
        },

        async logout({commit}) {
            try {
                await axios.post("/api/logout");

                commit("SET_USER", null);
                commit("SET_TOKEN", null);
            } catch (err) {
                commit("SET_USER", null);
                commit("SET_TOKEN", null);

                console.log(err);
            }
        },
    },
    mutations: {
        SET_TOKEN(state, token) {
            state.token = token;
        },
        SET_USER(state, user) {
            state.user = user;
        },
        SET_LOADING(state, value) {
            state.loading = value;
        },
        SET_ERROR(state, error) {
            state.error = error;
        },
    },
    modules: {},
};
