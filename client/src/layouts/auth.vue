<template>
  <BannerAuth></BannerAuth>
  <router-view></router-view>
</template>

<script>
import BannerAuth from '@/components/BannerAuth.vue';
export default {
  components: {
    BannerAuth,
  }
}
</script>