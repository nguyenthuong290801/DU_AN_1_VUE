<template>
  <Banner></Banner>
  <Category></Category>
  <Product></Product>
  <Footer></Footer>
</template>

<script>
import Banner from '../../../components/Banner.vue';
import Category from '../../../components/Category.vue'
import Product from '../../../components/Product.vue';
import Footer from '../../../components/Footer.vue';
export default {
  components: {
    Banner,
    Category,
    Product,
    Footer
  }
}
</script>