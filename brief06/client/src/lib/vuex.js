import { createStore } from 'vuex';

const store = createStore({
  state: {
    user: null,
  },

  getters: {
    user: (state) => {
      return state.user;
    },
  },

  actions: {
    user(context, user) {
      context.commit('user', user);
    },
    logout(context) {
      context.commit('logout');
    },
  },

  mutations: {
    user(state, user) {
      state.user = user;
    },
    logout(state) {
      state.user = null;
      localStorage.removeItem('token');
    },
  },
});

export default store;
