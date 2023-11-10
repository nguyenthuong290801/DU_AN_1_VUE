<template>
  <Splide :options="options" aria-label="My Favorite Images">
    <SplideSlide>
      <img class="d-block w-100" src="../../assets/img/banner-22.png" alt="Sample 2">
    </SplideSlide>
    <SplideSlide>
      <img class="d-block w-100" src="../../assets/img/banner-25.png" alt="First slide">
    </SplideSlide>
    <SplideSlide>
      <img class="d-block w-100" src="../../assets/img/banner-26.png" alt="First slide">
    </SplideSlide>
    <SplideSlide>
      <img class="d-block w-100" src="../../assets/img/banner-23.jfif" alt="First slide">
    </SplideSlide>
    <SplideSlide>
      <img class="d-block w-100" src="../../assets/img/banner-24.jfif" alt="First slide">
    </SplideSlide>
    <SplideSlide>
      <img class="d-block w-100" src="../../assets/img/banner-27.jfif" alt="First slide">
    </SplideSlide>
  </Splide>
</template>

<script>
import { Splide, SplideSlide } from '@splidejs/vue-splide';
import { defineComponent } from 'vue';
export default defineComponent({
  components: {
    Splide,
    SplideSlide,
  },

  setup() {
    const options = {
      rewind: true,
      gap: '',
      autoplay: true,
      interval: 3000,
    };

    return { options };
  },
});

</script>

<style scoped>

</style>