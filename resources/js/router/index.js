import { createWebHistory, createRouter } from "vue-router";

import Login from "../pages/Login.vue";
import Register from "../pages/Register.vue";
import Pos from "../pages/Pos.vue";
import Report from "../pages/Report.vue";
import Store from "../pages/Store.vue";
import Transection from "../pages/Transection.vue";
import Home from "../pages/Home.vue";

export const routes = [
    {
        name:"home",
        path:"/",
        component: Home,
    },
    {
        name:"login",
        path:"/login",
        component: Login,
    },
    {
        name:"register",
        path:"/register",
        component: Register,
    },
    {
        name:"pos",
        path:"/pos",
        component: Pos,
    },
    {
        name:"report",
        path:"/report",
        component: Report,
    },
    {
        name:"store",
        path:"/store",
        component: Store,
    },
    {
        name:"transection",
        path:"/transection",
        component: Transection,
    },

];

const router = createRouter({
    history: createWebHistory(),
    routes: routes,
    scrollBehavior(){
        window.scrollTo(0,0);
    }
});

export default router;