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

const savedIsCustomer = localStorage.getItem('isCustomer');
const savedIsSeller = localStorage.getItem('isSeller');
const savedIsAdmin = localStorage.getItem('isAdmin');

if (savedIsCustomer) {
    store.commit('checkAuth', 'customer');
} else {
    store.commit('checkAuth', 'customer');
}

if (savedIsSeller) {
    store.commit('checkAuth', 'seller');
}

if (savedIsAdmin) {
    store.commit('checkAuth', 'admin');
}

const app = createApp(App)
app.use(router)
app.use( VueSplide)
app.use(store)
app.mount('#app')
