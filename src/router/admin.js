const admin = [
    {
        path: "/admin",
        name: "admin-index",
        component: () => import("../layouts/admin.vue"),
        children:[
            {
                path: "",
                name: "home",
                component: () => import("../pages/admin/home/index.vue"),
            }
        ]
    },
]

export default admin;