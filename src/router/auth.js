const auth = [
    {
        path: "/buyer",
        name: "auth-index",
        component: () => import("../layouts/auth.vue"),
        children:[
            {
                path: "login",
                name: "login",
                component: () => import("../pages/auth/login/index.vue"),
                meta: { pageTitle: "Đăng nhập" },
            },
            {
                path: "register",
                name: "register",
                component: () => import("../pages/auth/register/index.vue"),
                meta: { pageTitle: "Đăng ký" },
            }
        ]
    },
]

export default auth;