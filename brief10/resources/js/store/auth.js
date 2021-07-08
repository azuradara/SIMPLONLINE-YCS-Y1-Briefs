import axios from "axios";

export default {
    namespaced: true,
    state: {
        token: null,
        user: null,
        loading: false,
        error: null,
    },
    actions: {
        async login({ dispatch }, credentials) {
            try {
                commit("SET_ERROR", null);
                commit("SET_LOADING", true);

                const res = await axios.post("/api/login", credentials);

                dispatch("attempt", res.data.data.token);
            } catch (err) {
                commit("SET_ERROR", err.message);
                commit("SET_LOADING", false);
            }
        },

        async signup({ commit, dispatch }, credentials) {
            try {
                commit("SET_ERROR", null);
                commit("SET_LOADING", true);

                const res = await axios.post("api/signup", credentials);

                dispatch("attempt", res.data.data.token);
            } catch (err) {
                commit("SET_ERROR", err.message);
                commit("SET_LOADING", false);
            }
        },

        async attempt({ commit }, token) {
            commit("SET_TOKEN", token);

            try {
                const res = await axios.get("/api/user");

                commit("SET_USER", res.data.data.user);
                commit("SET_LOADING", false);
            } catch (err) {
                console.log(err);
                commit("SET_ERROR", err.message);
                commit("SET_LOADING", false);
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
