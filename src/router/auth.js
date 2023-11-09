const auth = [
    {
        path: "/buyer",
        name: "auth-index",
        component: () => import("../layouts/auth.vue"),
        children:[
            {
                path: "login",
                name: "",
                component: () => import("../pages/auth/login/index.vue"),
            },
            {
                path: "register",
                name: "",
                component: () => import("../pages/auth/register/index.vue"),
            }
        ]
    },
]

export default auth;