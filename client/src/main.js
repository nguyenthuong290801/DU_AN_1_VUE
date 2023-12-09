import { createApp } from 'vue' 
import App from './App.vue'
import router from './router/index'
import 'bootstrap/dist/css/bootstrap-grid.min.css';
import 'bootstrap/dist/css/bootstrap-utilities.min.css';
import 'bootstrap/dist/css/bootstrap.css';

import 'bootstrap-icons/font/bootstrap-icons.css';
import 'bootstrap-icons/font/bootstrap-icons.min.css';

import 'bootstrap/dist/css/bootstrap.min.css';
import 'bootstrap/dist/js/bootstrap.bundle.min';

import VueSplide from '@splidejs/vue-splide';
import '@splidejs/vue-splide/css';
import 'bootstrap';
import store from './store';

const savedIsAuth = localStorage.getItem('isAuth');
if (savedIsAuth) {
    store.commit('updateAuthStatus', savedIsAuth === 'true');
}

const app = createApp(App)
app.use(router)
app.use( VueSplide)
app.use(store)
app.mount('#app')
