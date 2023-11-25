const seller = [
    {
        path: "/portal",
        name: "seller-index",
        component: () => import("../layouts/seller.vue"),
        children:[
            {
                path: "",
                name: "home",
                component: () => import("../pages/seller/home/index.vue"),
            },
            {
                path: "product/new",
                name: "product-new",
                component: () => import("../pages/seller/product_new/index.vue"),
            },
        ]
    },
]

export default seller;