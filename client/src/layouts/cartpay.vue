<template>
  <Header2></Header2>
  <router-view></router-view>
</template>

<script>
import Header2 from "../components/Header2.vue";
export default {
  components: {
    Header2,
  },
}
</script>

<style lang="scss">
body{
  background-color: #f5f5f5;
}
</style>