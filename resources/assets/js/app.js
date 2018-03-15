
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

 window.Vue = require('vue');
 import * as VueGoogleMaps from 'vue2-google-maps';
 window.Vue.use(VueGoogleMaps); 

import {load} from 'vue2-google-maps'
	load({

		key:'AIzaSyBBw6gI9OsEVRBcyBeSEsXXaGU2c5GFW8Q',
		v:'3.30',
		libraries:'places',
	});

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

Vue.component('mappa', require('./components/Mappa.vue'));


const app = new Vue({
    el: '#app'
});
