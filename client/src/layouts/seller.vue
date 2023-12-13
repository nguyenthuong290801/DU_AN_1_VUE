<template>
  <HeaderSeller></HeaderSeller>
  <div>
    <SideBarSeller></SideBarSeller>
  </div>
  <div class="main">
    <router-view></router-view>
  </div>
</template>

<script>
import HeaderSeller from "@/components/seller/HeaderSeller.vue";
import SideBarSeller from "@/components/seller/SideBarSeller.vue";

export default {
  components: {
    HeaderSeller,
    SideBarSeller
  },
  computed: {
    shouldShowSidebar() {
      return this.$route.path !== '/portal/product/new';
    },
    
  }
}
</script>

<style lang="scss">
body {
  background: #efefef;
}

.main {
  padding-top: 55px;
  margin-left: 250px;
  height: 100vh;

  overflow: hidden;
}
</style>