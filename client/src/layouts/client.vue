<template>
  <Header></Header>
  <router-view></router-view>
</template>

<script>
import Header from "@/components/Header.vue";
export default {
  components: {
    Header,
  },
}
</script>

<style lang="scss">
body{
  background-color: #f5f5f5;
}
</style>