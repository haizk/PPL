import './bootstrap';
import '../css/app.css';
import "@/assets/scss/app.scss";
import 'bootstrap-vue-next/dist/bootstrap-vue-next.css';

import BootstrapVue from 'bootstrap-vue-next';
import VueApexCharts from 'vue3-apexcharts';
import VueSweetalert2 from 'vue-sweetalert2';
import * as VueGoogleMaps from 'vue3-google-map';
import VueYoutube from 'vue3-youtube';
import Vue3Toastify from 'vue3-toastify';
import { vMaska } from "maska";

import vco from "v-click-outside";

import { createApp, h } from 'vue';
import { createInertiaApp } from '@inertiajs/vue3';
import { resolvePageComponent } from 'laravel-vite-plugin/inertia-helpers';
import { ZiggyVue } from '../../vendor/tightenco/ziggy';

const appName = import.meta.env.VITE_APP_NAME || 'Laravel';

createInertiaApp({
    title: (title) => `${title} - ${appName}`,
    resolve: (name) => resolvePageComponent(`./Pages/${name}.vue`, import.meta.glob('./Pages/**/*.vue')),
    setup({ el, App, props, plugin }) {
        return createApp({ render: () => h(App, props) })
            .use(plugin)
            .use(ZiggyVue)
            .use(VueYoutube)
            .use(BootstrapVue)
            .use(vco)
            .use(VueSweetalert2)
            .use(VueGoogleMaps)
            .use(VueApexCharts)
            .use(Vue3Toastify, {
                autoClose: 3000,
            })
            .directive("maska", vMaska)
            .mount(el);
    },
    progress: {
        color: '#4B5563',
    },
});
