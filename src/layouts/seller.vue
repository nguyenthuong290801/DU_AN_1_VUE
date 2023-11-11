<template>
  <HeaderSeller></HeaderSeller>
  <div v-if="shouldShowSidebar">
    <SideBarSeller></SideBarSeller>
  </div>
  <div class="main">
    <router-view></router-view>
  </div>
</template>

<script>
import HeaderSeller from "@/components/HeaderSeller.vue";
import SideBarSeller from "@/components/SideBarSeller.vue";

export default {
  components: {
    HeaderSeller,
    SideBarSeller
  },
  computed: {
    shouldShowSidebar() {
      return this.$route.path !== '/portal/product/new';
    }
  }
}
</script>

<style lang="scss" scoped>
.main {
  padding-top: 55px;
  margin-left: 250px;
  height: 100vh;
  background: #efefef;
  overflow: hidden;
}
</style>