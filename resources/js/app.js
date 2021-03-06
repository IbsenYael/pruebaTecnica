/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

import bootstrapVue from 'bootstrap-vue'
import BootstrapVueIcons from 'bootstrap-vue'
import  BIcon  from 'bootstrap-vue'
import IconsPlugin  from 'bootstrap-vue'
import Vue from 'vue';
import axios from 'axios';

Vue.use(bootstrapVue);
Vue.use(BootstrapVueIcons);
Vue.component('b-icon', BIcon)
Vue.use(IconsPlugin)
Vue.prototype.$axios = axios;
window.Vue = require('vue').default;

/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

// const files = require.context('./', true, /\.vue$/i)
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default))

Vue.component('home-component', require('./components/HomeComponent.vue').default);
Vue.component('publicacion-component', require('./components/PublicacionComponent.vue').default);
Vue.component('mispublicaciones-component', require('./components/MisPublicacionesComponent.vue').default);

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

const app = new Vue({
    el: '#app',
});
