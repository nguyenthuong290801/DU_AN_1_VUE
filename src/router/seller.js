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
        ]
    },
]

export default seller;