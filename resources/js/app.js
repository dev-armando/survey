/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require("./bootstrap");

window.Vue = require("vue");
//window.Vuetify = require('vuetify');
import VueRouter from "vue-router";
import VueGraph from "vue-graph";

//Vue.use(Vuetify);
Vue.use(VueRouter);
Vue.use(VueGraph);

import GraphLine3D from "vue-graph/src/components/line3d.js";
import NoteWidget from "vue-graph/src/widgets/note.js";
import LegendWidget from "vue-graph/src/widgets/legends.js";

Vue.component(GraphLine3D.name, GraphLine3D);
Vue.component(NoteWidget.name, NoteWidget);
Vue.component(LegendWidget.name, LegendWidget);

var router = new VueRouter({
    history: false,
    routes: [
        {
            path: "/",
            name: "home",
            component: require("./components/CategoriesComponent.vue").default,
        },
        {
            path: "/pt",
            name: "pregunta-t",
            component: require("./components/PreguntaTComponent.vue").default,
        },
        {
            path: "/pn",
            name: "pregunta-n",
            component: require("./components/PreguntaNComponent.vue").default,
        },
        {
            path: "/pm",
            name: "pregunta-m",
            component: require("./components/PreguntaMComponent.vue").default,
        },
        {
            path: "/rt",
            name: "resultado-tabla",
            component: require("./components/ResultadosTablaComponent.vue")
                .default,
        },
        {
            path: "/res",
            name: "resultado",
            component: require("./components/ResultadoComponent.vue").default,
        },
        {
            path: "/exit",
            name: "salir",
            component: require("./components/ExitComponent.vue").default,
        },
        {
            path: "/graph",
            name: "grafica",
            component: require("./components/GraphComponent.vue").default,
        },
    ],
});

const app = new Vue({
    el: "#app",
    router: router,
});
