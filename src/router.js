import Router from 'vue-router';
import appMain from './components/Main.vue';
import appLogin from './components/Login.vue';
import appRegister from './components/Register.vue';
import app404 from './components/404.vue';

const routes = [
  {
    path: '/',
    redirect: '/app/'
  },
  {
    path: '/app/',
    component: appMain,
    meta: {
      title: 'Finance'
    }
  },
  {
    path: '/login/',
    component: appLogin,
    meta: {
      title: 'Login'
    }
  }, 
  {
    path: '/register/',
    component: appRegister,
    meta: {
      title: 'Register'
    }
  },
  {
    path: '*',
    component: app404
  }
];

export default new Router({
  routes,
});