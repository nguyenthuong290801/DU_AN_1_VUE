import { createRouter, createWebHistory } from 'vue-router';
import client from '../router/client';
import auth from '../router/auth';
import admin from '../router/admin';
import seller from '../router/seller';

const routes = [...client,...auth,...admin,...seller];

const router = createRouter({
    history: createWebHistory(),
    routes
})

export default router;