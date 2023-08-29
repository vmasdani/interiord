import { createApp, ref, Ref } from "vue";
// import "./style.css";
import "bootstrap/dist/css/bootstrap.min.css";
import "bootstrap/dist/js/bootstrap.bundle.min.js";

import App from "./App.vue";
import HelloWorldVue from "./components/HelloWorld.vue";
import { createRouter, createWebHashHistory } from "vue-router";
import AdminSettingsVue from "./components/AdminSettings.vue";
import ProductsVue from "./components/Products.vue";
import ProjectVue from "./components/Project.vue";
import ProductDetailVue from "./components/ProductDetail.vue";
import ProjectDetailVue from "./components/ProjectDetail.vue";

interface IAppContext {
    apiKey?: string | null;
}

const routes = [
    { path: "/", component: AdminSettingsVue },
    { path: "/products", component: ProductsVue },
    { path: "/products/:id", component: ProductDetailVue },

    { path: "/projects", component: ProjectVue },
    { path: "/projects/:id", component: ProjectDetailVue },
];

const router = createRouter({
    // 4. Provide the history implementation to use. We are using the hash history for simplicity here.
    history: createWebHashHistory(),
    routes, // short for `routes: routes`
});

export const ctx = ref({
    apiKey: localStorage.getItem("apiKey"),
}) as Ref<IAppContext>;

const app = createApp(App);
app.use(router);

app.mount("#app");
