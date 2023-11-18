const cartpay = [
    {
        path: "/",
        name: "cart-index",
        component: () => import("../layouts/cartpay.vue"),
        children:[
            {
                path: "cart", // Đường dẫn mới
                name: "", // Tên mới
                component: () => import("../pages/client/cart/index.vue"),
            },
        ]
    },
]

export default cartpay;