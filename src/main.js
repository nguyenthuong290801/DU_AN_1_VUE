import { createApp } from 'vue'
import App from './App.vue'
import router from './router/index'

// import VueNativeSock from "vue-native-websocket"
import 'bootstrap/dist/css/bootstrap-grid.min.css';
import 'bootstrap/dist/css/bootstrap-utilities.min.css';
import 'bootstrap/dist/css/bootstrap.css';
import 'bootstrap-icons/font/bootstrap-icons.css';
import 'bootstrap-icons/font/bootstrap-icons.min.css';

import VueSplide from '@splidejs/vue-splide';
import '@splidejs/vue-splide/css';

const app = createApp(App)
app.use(router)
// app.use(VueNativeSock, "ws://your-websocket-server-url")
// app.use(IconsPlugin)
app.mount('#app')
app.use( VueSplide );

