const client = [
    {
        path: "/",
        name: "client-index",
        component: () => import("../layouts/client.vue"),
        children:[
            {
                path: "",
                name: "client-home",
                component: () => import("../pages/client/home/index.vue"),
            },
            {
                path: "product/detail/:slug", 
                name: "productDetail",
                component: () => import("../pages/client/product_detail/index.vue"),
                props: true,
            },
            {
                path: "/user",
                name: "user",
                component: () => import("../pages/client/user/index.vue"),
            },
        ]
    },
]

export default client;