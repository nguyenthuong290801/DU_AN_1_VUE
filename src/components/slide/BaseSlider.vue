<template>
    <Splide :options="options" aria-label="My Favorite Images">
        <SplideSlide>
            <img src="../../assets/img/banner-4.jpg" alt="Sample 1">
        </SplideSlide>
        <SplideSlide>
            <img src="../../assets/img/banner-2.jpg" alt="Sample 2">
        </SplideSlide>
        <SplideSlide>
            <img src="../../assets/img/banner-3.jpg" alt="Sample 2">
        </SplideSlide>
        <SplideSlide>
            <img src="../../assets/img/banner-1.jpg" alt="Sample 2">
        </SplideSlide>
        <SplideSlide>
            <img src="../../assets/img/banner-5.jpg" alt="Sample 2">
        </SplideSlide>
        <SplideSlide>
            <img src="../../assets/img/banner-6.jpg" alt="Sample 2">
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
            gap: '1rem',
            autoplay: true,
            interval: 3000,
        };

        return { options };
    },
});

</script>

<style scoped>

</style>