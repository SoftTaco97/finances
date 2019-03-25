/* Loading Dependancies */
import Vue from 'vue' // Vue
import BootstrapVue from 'bootstrap-vue'; // Bootstrap
import 'bootstrap/dist/css/bootstrap.css'; // Bootstrap styles 
import 'bootstrap-vue/dist/bootstrap-vue.css'; // Bootstrap styles
import VueRouter from 'vue-router'; // Vue Router
import router from './routes/index.js'; // Routes
import axios from 'axios'; // Axios

Vue.config.productionTip = false; // idk what this is, not gonna mess with it C :

/* Enableding the Dependancies */
Vue.use(BootstrapVue); // Bootstrap
Vue.use(VueRouter); // Vue Router
Vue.prototype.$http = axios; // Axios

import App from './App.vue'; // Application Template

/* Main Application */
new Vue({
  el: '#app',
  router,
  render: h => h(App)
})
