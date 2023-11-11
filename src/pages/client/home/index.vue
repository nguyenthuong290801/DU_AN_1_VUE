<template>
  <Banner></Banner>
  <Category></Category>
  <Product></Product>
</template>

<script>
import Banner from '../../../components/Banner.vue';
import Category from '../../../components/Category.vue'
import Product from '../../../components/Product.vue';
export default {
  components: {
    Banner,
    Category,
    Product
  }
}
</script>