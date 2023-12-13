const auth = [
    {
        path: "/buyer",
        name: "auth-index",
        component: () => import("../layouts/auth.vue"),
        children:[
            {
                path: "register_to_seller",
                name: "register_to_seller",
                component: () => import("../pages/auth/register_to_seller/index.vue"),
                meta: { pageTitle: "Đăng ký trở thành Người bán Shopee" },
            },
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
            },
            {
                path: "forgot-password",
                name: "forget-password",
                component: () => import("../pages/auth/forgot_password/index.vue"),
                meta: { pageTitle: "Quên mật khẩu" },
            },
            {
                path: "login-phone",
                name: "login-phone",
                component: () => import("../pages/auth/login_phone/index.vue"),
                meta: { pageTitle: "Đăng nhập" },
            }
        ]
    },
]

export default auth;