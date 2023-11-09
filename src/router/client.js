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
            }
        ]
    },
]

export default client;