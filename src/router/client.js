const client = [
    {
        path: "/",
        name: "client-index",
        component: () => import("../layouts/client.vue"),
        children:[
            {
                path: "",
                name: "",
                component: () => import("../pages/client/home/index.vue"),
            },
            {
                path: "product/detail", // Đường dẫn mới
                name: "", // Tên mới
                component: () => import("../pages/client/product_detail/index.vue"),
            },
        ]
    },
]

export default client;