const seller = [
    {
        path: "/",
        name: "seller-index",
        component: () => import("../layouts/seller.vue"),
        children:[
            {
                path: "",
                name: "",
                component: () => import("../pages/seller/home/index.vue"),
            }
        ]
    },
]

export default seller;