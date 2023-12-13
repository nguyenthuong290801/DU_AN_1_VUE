const cartpay = [
    {
        path: "/",
        name: "cart-index",
        component: () => import("../layouts/cartpay.vue"),
        children:[
            {
                path: "/cart",
                name: "cart",
                component: () => import("../pages/client/cart/index.vue"),
                meta: { pageTitle: "Giỏ Hàng" },
                props: true,
            },
            {
                path: "/pay",
                name: "pay",
                component: () => import("../pages/client/pay/index.vue"),
                meta: { pageTitle: "Thanh Toán" },
            },
        ]
    },
]

export default cartpay;