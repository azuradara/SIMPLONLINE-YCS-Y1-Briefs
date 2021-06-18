import store from '@/lib/vuex';
import {createRouter, createWebHistory} from 'vue-router';
import Home from '../views/Home.vue';
import Login from '../views/Login.vue';
// import { useStore } from 'vuex';

// const store = useStore();

const routes = [
    {
        path: '/',
        name: 'Home',
        component: Home,
    },
    {
        path: '/login',
        name: 'Login',
        component: Login,
        beforeEnter: (to, from, next) => {
            store.state.user === null ? next('/') : next();
        },
    },
    {
        path: '/about',
        name: 'About',
        component: () => import('../views/About.vue'),
        // beforeEnter: (to, from, next) => {
        //   store.state.user === null ? next('/') : next();
        // },
    },
];

const router = createRouter({
    history: createWebHistory(process.env.BASE_URL),
    routes,
});

export default router;
