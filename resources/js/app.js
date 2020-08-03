require('./bootstrap');
import Vue from 'vue';
import VueRouter from 'vue-router';
import Vuex from 'vuex'
import {routes} from './routes';
import storeData from './store';
import MainApp from "./components/MainApp";

Vue.use(VueRouter);
Vue.use(Vuex);

const router = new VueRouter({
    routes,
    mode: 'history'
})

const store = new Vuex.Store(storeData)


const app = new Vue({
    el: '#app',
    router,
    store,
    components: {
        MainApp
    }
});
