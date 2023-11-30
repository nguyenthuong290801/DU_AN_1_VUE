const seller = [
    {
        path: "/portal",
        name: "",
        component: () => import("../layouts/seller.vue"),
        children:[
            {
                path: "",
                name: "Trang chủ",
                component: () => import("../pages/seller/home/index.vue"),
            },
            {
                path: "product/new",
                name: "Thêm sản phẩm",
                component: () => import("../pages/seller/product_new/index.vue"),
            },
            {
                path: "product/edit/:id",
                name: "Sửa sản phẩm",
                component: () => import("../pages/seller/product_edit/index.vue"),
            },
            {
                path: "product/list",
                name: "Quản lý sản phẩm",
                component: () => import("../pages/seller/product_list/index.vue"),
                children:[
                    {
                        path: "all",
                        name: "Tất cả",
                        component: () => import("../pages/seller/product_list/all/index.vue"),
                    },
                    {
                        path: "all/:search",
                        name: "",
                        component: () => import("../pages/seller/product_list/all/index.vue"),
                        props: true
                    },
                    {
                        path: "active",
                        name: "Đang hoạt động",
                        component: () => import("../pages/seller/product_list/active/index.vue"),
                    },
                    {
                        path: "active/:search",
                        name: "",
                        component: () => import("../pages/seller/product_list/active/index.vue"),
                        props: true
                    },
                    {
                        path: "out-of-stock",
                        name: "Hết hàng",
                        component: () => import("../pages/seller/product_list/out_of_stock/index.vue"),
                    },
                    {
                        path: "out-of-stock/:search",
                        name: "",
                        component: () => import("../pages/seller/product_list/out_of_stock/index.vue"),
                        props: true
                    },
                ]
            },
        ]
    },
]

export default seller;