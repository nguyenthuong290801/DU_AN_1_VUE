<template>
  <div class="container home-page-f-title-a">
    <div class=" home-page-f-title">
      <span class="home-page-f-title-text">Gợi Ý Hôm Nay</span>
    </div>
  </div>
  <div class="container home-page-f">

    <div class="home-page-f-01">
      <div class="row home-page-f01-row">
        <div class="home-page-f01-col" v-for="(product, index) in products.data" :key="index">
          <router-link :to="{ name: 'productDetail', params: { slug: product.slug }  }" class="text-decoration-none">
            <div class="card home-page-f01-card">
              <div class="home-page-f01-card-img">
                <div class="home-page-f01-background">
                  <img width="188.4000px" height="188.400px" class="d-block w-100" src="../assets/img/background-1.png">
                </div>
                <img class="card-img-top" src="../assets/img/item-27.jpeg" alt="Card image" style="width: 188.400px;">  <!-- hình ảnh -->
                <div class="home-page-f01-card-img-favorite">
                  <div class="home-page-f01-card-img-favorite-a">
                    <span class="home-page-f01-card-img-favorite-b">Yêu thích</span>
                  </div>
                </div>
                <div class="home-page-f01-card-img-saleOf">
                  <div class="home-page-f01-card-img-saleOf-a">
                    <span class="home-page-f01-card-img-saleOf-b">29% </span>
                    <span class="home-page-f01-card-img-saleOf-c" style="color: #fff">GIẢM</span>
                  </div>
                </div>
              </div>
              <div class="home-page-f01-card-content">
                <div class="home-page-f01-card-title">
                  <div class="home-page-f01-card-title-text">
                    {{ product.name }}
                  </div>
                </div>
                <div class="home-page-f01-card-price">
                  <div class="home-page-f01-card-price-a">
                    <span class="price-text-a">₫</span>
                    <span class="price-text-b">{{ formatPrice(product.price) }}</span>
                  </div>
                  <div class="home-page-f01-card-price-b">Đã bán 24,7k</div>
                </div>
              </div>
              <div class="home-page-f01-card-hover">Tìm sản phẩm tương tự</div>
            </div>
          </router-link>
        </div>
      </div>
      <div class="home-page-f-pagination">
        <a ng-if="isMoreProduct" ng-click="xemthem()" type="button" class="btn btn-light home-page-f-pagination-a">Xem
          Thêm</a>
        <a ng-if="!isMoreProduct" ng-click="anbot()" type="button" class="btn btn-light home-page-f-pagination-a">Ẩn
          Bớt</a>
      </div>
    </div>
    
  </div>
</template>

<script>
import axios from 'axios';

export default {
  data() {
    return {
      products: [],
      productDetail: [],
    };
  },
  mounted() {
    this.fetchAPI();
  },
  methods: {
    fetchAPI() {
      const apiPromise = axios.get('/api/product')
      const apiPromise2 = axios.get('/api/product-detail')

      Promise.all([apiPromise, apiPromise2])
        .then(response => {
          this.products = response[0].data;
          this.productDetail = response[1].data;
          this.handleProduct(this.products, this.productDetail)
        })
        .catch(error => {
          console.error('Error fetching data:', error)
        });
    },
    handleProduct(products, productDetail) {
      Object.entries(products).forEach(([keyOne, valueOne]) => {
        if (keyOne == 'data') {
          Object.entries(valueOne).forEach(([keyTwo, valueTwo]) => {
            Object.entries(productDetail).forEach(([keyThree, valueThree]) => {
              if (keyOne == 'data') {
                Object.entries(valueThree).forEach(([keyFour, valueFour]) => {
                  if (valueTwo.id === valueFour.product_id) {
                    if (
                      this.products.data[keyFour].price == null ||
                      this.products.data[keyFour].price == undefined ||
                      this.products.data[keyFour].qty_in_stock == null ||
                      this.products.data[keyFour].qty_in_stock == undefined
                    ) {
                      this.products.data[keyFour].price = valueFour.price
                      this.products.data[keyFour].qty_in_stock = valueFour.qty_in_stock
                    }
                  }
                })
              }
            })
          })
        }
      })
    },
    formatPrice(price) {
      const formatter = new Intl.NumberFormat('vi-VN', {
        style: 'currency',
        currency: 'VND',
      });
      return formatter.format(price).replace('₫', '');
    },
  },
};
</script>

<style lang="css">
.home-page-f {
  max-width: 1290px;
  position: relative;
}

.home-page-f-title-a {
  border-bottom: 0.25rem solid #ee4d2d;
  max-width: 1275px;
  background-color: #ffffff;
  position: sticky;
  top: 120px;
  z-index: 3;
}

.home-page-f-title {
  height: 60px;
  background-color: #ffffff;
  text-align: center;
  padding-top: 19px;
}

.home-page-f-title-text {
  text-transform: uppercase;
  font-size: 1rem;
  font-weight: 500;
  color: #ee4d2d;
}

.home-page-f01-card {
  box-shadow: 0 0.0625rem 0.125rem 0 rgb(0 0 0 / 10%);
  border: 1px solid transparent;
  border-radius: 0.125rem;
  background: #fff;
  cursor: pointer;
  position: relative;
}

.home-page-f01-card:hover {
  -webkit-transform: translateY(-0.0625rem);
  transform: translateY(-0.0625rem);
  z-index: 2;
  border: 1px solid #ee4d2d;
}

.home-page-f01-background {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
}

.home-page-f01-card-img {
  position: relative;
}

.home-page-f01-card-img-favorite {
  color: #f25220;
  background-color: currentColor;
  position: absolute;
  top: 10px;
  left: -5px;
  border-top-right-radius: 3px;
  border-bottom-right-radius: 3px;
}

.home-page-f01-card-img-favorite::after {
  content: "";
  position: absolute;
  left: 0;
  bottom: -4px;
  border-top: 4px solid currentColor;
  border-left: 4px solid transparent;
  filter: brightness(60%);
}

.home-page-f01-card-img-favorite-a {
  display: flex;
  text-align: center;
  line-height: 10px;
  align-items: center;
}

.home-page-f01-card-img-favorite-b {
  color: #fff;
  font-size: .75rem;
  line-height: 15px;
  padding: 0 4px 0 5px;
}

.home-page-f01-card-img-saleOf {
  position: absolute;
  top: 0px;
  right: 0px;
}

.home-page-f01-card-img-saleOf::after {
  content: "";
  position: absolute;
  left: 0;
  bottom: -5px;
  border-width: 0 18px 6px;
  border-style: solid;
  border-color: transparent rgba(255, 212, 36, .9);
}

.home-page-f01-card-img-saleOf-a {
  width: 36px;
  height: 32px;
  padding: 4px 2px 3px;
  background-color: rgba(255, 212, 36, .9);
  font-size: .75rem;
  text-align: center;
  line-height: .8125rem;
  color: #ee4d2d;
}

.home-page-f01-col {
  max-width: 214px;
  margin-bottom: 12px;
}

.home-page-f01-row {
  display: flex;
  justify-content: center;
  margin-top: 12px;
}

.home-page-f01-card-content {
  padding: 8px;
  overflow: hidden;
}

.home-page-f01-card-title-text {
  height: 1.75rem;
  overflow: hidden;
  line-height: 14px;
  font-size: .75rem;
  color: rgba(0, 0, 0, .87);
  display: block;
  display: -webkit-box;
  -webkit-box-orient: vertical;
  -webkit-line-clamp: 2;
}

.home-page-f01-card-price {
  padding: 8px 0 0;
  display: flex;
  /* height: 1.25rem; */
  align-items: center;
  overflow: hidden;
  color: rgba(0, 0, 0, .87);
  justify-content: space-between;

}

.home-page-f01-card-price-a {
  display: flex;
}

.price-text-a {
  font-size: 9px;
  color: #ee4d2d;
  padding-top: 6px;
}

.price-text-b {
  overflow: hidden;
  font-size: 1rem;
  color: #ee4d2d;
}

.home-page-f01-card-price-b {
  color: rgba(0, 0, 0, .54);
  font-size: .75rem;
  line-height: .875rem;
}

.home-page-f01-card-hover {
  opacity: 0;
  position: absolute;
  left: 0px;
  bottom: -31px;
  background-color: #ee4d2d;
  width: 100%;
  height: 1.875rem;
  text-align: center;
  color: #fff;
  line-height: 1.875rem;
  border: 1px solid #ee4d2d;
  border-bottom-left-radius: 0.125rem;
  border-bottom-right-radius: 0.125rem;
  z-index: 1;
}

.home-page-f01-card:hover .home-page-f01-card-hover {
  opacity: 1;
  transition: opacity .1s;
}

.home-page-f-pagination {
  width: 100%;
  margin-top: 26px;
  text-align: center;
}

.home-page-f-pagination-a {
  min-width: 24.375rem;
  height: 2.5rem;
  color: #555;
  outline: 0;
  background: #fff;
  color: #555;
  border: 1px solid rgba(0, 0, 0, .09);
  box-shadow: 0 1px 1px 0 rgb(0 0 0 / 3%);
  overflow: visible;
}
</style>