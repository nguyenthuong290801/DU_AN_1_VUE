<template>
    <nav class="breadcrumb" v-if="breadcrumbs.length > 0">
        <ul>
            <li v-for="(crumb, index) in breadcrumbs" :key="index">
                <router-link :to="crumb.to">{{ crumb.label }}</router-link>
                <span v-if="index < breadcrumbs.length - 1"> / </span>
            </li>
        </ul>
    </nav>
</template>
  
<script>
export default {
    data() {
        return {
            breadcrumbs: [],
        };
    },
    watch: {
        $route(to) {
            this.createBreadcrumbs(to);
        },
    },
    mounted() {
        this.createBreadcrumbs(this.$route);
    },
    methods: {
        createBreadcrumbs(route) {
            const matchedRoutes = route.matched;

            if (matchedRoutes.length > 0) {
                this.breadcrumbs = matchedRoutes.map((route) => ({
                    label: route.meta.breadcrumb || route.name,
                    to: route.path,
                }));
            }
        },
    },
};
</script>
  
<style lang="scss" scoped>
.breadcrumb {
    margin: 0;
}

ul {
    display: flex;
    gap: 0px;
    padding: 0;
    margin: 0;

    li {
        list-style: none;
        display: flex;
        align-items: center;

        a {
            text-decoration: none;
            color: #555;
            padding:5px;
        }

        span {
            color: #555;
        }
    }
}
</style>
  