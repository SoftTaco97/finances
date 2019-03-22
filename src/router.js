import Router from 'vue-router';
import appMain from './components/Main.vue';
import appLogin from './components/LoginScreen.vue';

const routes = [
  {
    path: '/app/',
    name: 'Finance',
    title: 'Finance',
    icon: 'fa-dollar-sign',
    component: appMain,
  },
  {
    path: '/login/',
    name: 'Login',
    title: 'Login',
    icon: 'fa-vuejs',
    component: appLogin
  }
];

export default new Router({
  routes,
});