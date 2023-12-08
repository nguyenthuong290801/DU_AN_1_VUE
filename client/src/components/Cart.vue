<template>
  <div class="container">
    <div class="shipdiscount" role="main" style="margin-bottom: 0">
      <div class="shipping-discount">
        <img class="shopee-svg-icon icon-free-shipping MCA-wE" src="../assets/img/shipping-car.png" />
        <span class="bXROAg">Nhấn vào mục Mã giảm giá ở cuối trang để hưởng miễn phí vận chuyển bạn nhé!</span>
      </div>
      <div class="BjIo5w">
        <div class="mcsiKT">
          <label class="stardust-checkbox">
            <!-- đây là check box select all -->
            <input class="stardust-checkbox__input" type="checkbox" v-model="checkbox1Value"
              @change="handleCheckbox1Change" />
          </label>
        </div>
        <div class="products fw-semibold">Sản Phẩm</div>
        <div class="unit-price fw-medium">Đơn Giá</div>
        <div class="quantity fw-medium">Số Lượng</div>
        <div class="total fw-medium">Số Tiền</div>
        <div class="actions fw-medium">Thao Tác</div>
      </div>

      <div class="body">
        <div class="dressingup clothes">
          <div class="wholepleake">
            <div class="checkbox2">
              <label class="stardust-checkbox">
                <input class="stardust-checkbox__input" type="checkbox" v-model="checkbox2Value"
                  @change="handleCheckbox2Change" />
              </label>
            </div>
            <div class="wJCpl6 mx-2">
              <svg width="62" height="16" fill="none">
                <path fill="#ee4d2d" fill-rule="evenodd"
                  d="M0 2C0 .9.9 0 2 0h58a2 2 0 012 2v12a2 2 0 01-2 2H2a2 2 0 01-2-2V2z"></path>
                <g clip-path="">
                  <path fill="#fff"
                    d="M8.7 13H7V8.7L5.6 6.3A828.9 828.9 0 004 4h2l2 3.3a1197.3 1197.3 0 002-3.3h1.6L8.7 8.7V13zm7.9-1.7h1.7c0 .3-.2.6-.5 1-.2.3-.5.5-1 .7l-.6.2h-.8c-.5 0-1 0-1.5-.2l-1-.8a4 4 0 01-.9-2.4c0-1 .3-1.9 1-2.6a3 3 0 012.4-1l.8.1a2.8 2.8 0 011.3.7l.4.6.3.8V10h-4.6l.2 1 .4.7.6.5.7.1c.4 0 .7 0 .9-.2l.2-.6v-.1zm0-2.3l-.1-1-.3-.3c0-.2-.1-.2-.2-.3l-.8-.2c-.3 0-.6.2-.9.5l-.3.5a4 4 0 00-.3.8h3zm-1.4-4.2l-.7.7h-1.4l1.5-2h1.1l1.5 2h-1.4l-.6-.7zm8.1 1.6H25V13h-1.7v-.5.1H23l-.7.5-.9.1-1-.1-.7-.4c-.3-.2-.4-.5-.6-.8l-.2-1.3V6.4h1.7v3.7c0 1 0 1.6.3 1.7.2.2.5.3.7.3h.4l.4-.2.3-.3.3-.5.2-1.4V6.4zM34.7 13a11.2 11.2 0 01-1.5.2 3.4 3.4 0 01-1.3-.2 2 2 0 01-.5-.3l-.3-.5-.2-.6V7.4h-1.2v-1h1.1V5h1.7v1.5h1.9v1h-2v3l.2 1.2.1.3.2.2h.3l.2.1c.2 0 .6 0 1.3-.3v1zm2.4 0h-1.7V3.5h1.7v3.4a3.7 3.7 0 01.2-.1 2.8 2.8 0 013.4 0l.4.4.2.7V13h-1.6V9.3 8.1l-.4-.6-.6-.2a1 1 0 00-.4.1 2 2 0 00-.4.2l-.3.3a3 3 0 00-.3.5l-.1.5-.1.9V13zm5.4-6.6H44V13h-1.6V6.4zm-.8-.9l1.8-2h1.8l-2.1 2h-1.5zm7.7 5.8H51v.5l-.4.5a2 2 0 01-.4.4l-.6.3-1.4.2c-.5 0-1 0-1.4-.2l-1-.7c-.3-.3-.5-.7-.6-1.2-.2-.4-.3-.9-.3-1.4 0-.5.1-1 .3-1.4a2.6 2.6 0 011.6-1.8c.4-.2.9-.3 1.4-.3.6 0 1 .1 1.5.3.4.1.7.4 1 .6l.2.5.1.5h-1.6c0-.3-.1-.5-.3-.6-.2-.2-.4-.3-.8-.3s-.8.2-1.2.6c-.3.4-.4 1-.4 2 0 .9.1 1.5.4 1.8.4.4.8.6 1.2.6h.5l.3-.2.2-.3v-.4zm4 1.7h-1.6V3.5h1.7v3.4a3.7 3.7 0 01.2-.1 2.8 2.8 0 013.4 0l.3.4.3.7V13h-1.6V9.3L56 8.1c-.1-.3-.2-.5-.4-.6l-.6-.2a1 1 0 00-.3.1 2 2 0 00-.4.2l-.3.3a3 3 0 00-.3.5l-.2.5V13z">
                  </path>
                </g>
              </svg>
              <span style="margin-left: 10px">💦july_store.hn</span>
            </div>
            <a href="">
              <svg viewBox="0 0 16 16" class="chat">
                <g fill-rule="evenodd">
                  <path fill="#ee4d2d"
                    d="M15 4a1 1 0 01.993.883L16 5v9.932a.5.5 0 01-.82.385l-2.061-1.718-8.199.001a1 1 0 01-.98-.8l-.016-.117-.108-1.284 8.058.001a2 2 0 001.976-1.692l.018-.155L14.293 4H15zm-2.48-4a1 1 0 011 1l-.003.077-.646 8.4a1 1 0 01-.997.923l-8.994-.001-2.06 1.718a.5.5 0 01-.233.108l-.087.007a.5.5 0 01-.492-.41L0 11.732V1a1 1 0 011-1h11.52zM3.646 4.246a.5.5 0 000 .708c.305.304.694.526 1.146.682A4.936 4.936 0 006.4 5.9c.464 0 1.02-.062 1.608-.264.452-.156.841-.378 1.146-.682a.5.5 0 10-.708-.708c-.185.186-.445.335-.764.444a4.004 4.004 0 01-2.564 0c-.319-.11-.579-.258-.764-.444a.5.5 0 00-.708 0z">
                  </path>
                </g>
              </svg>
            </a>
          </div>
        </div>
        <div class="buying">
          <div class="buying_focus" v-for="product in cart" :key="product.id">
            <div class="add-on-deals">
              <span class="btn-add-on">Mua Kèm</span>
              <span>₫</span>
              <span>Mua nhiều hơn 150.000 và nhận được 1 quà tặng</span>
              <span class="adding">
                Thêm
                <i class="bi bi-chevron-right"></i>
              </span>
            </div>
            <div class="mystore store-container">
              <div class="storenav">
                <div class="checkbox3 mx-1">
                  <label class="stardust-checkbox">
                    <input class="stardust-checkbox__input" type="checkbox" v-model="checkbox3Value" />
                  </label>
                </div>
                <div class="title-clothes">
                  <div class="title-clothes-focus">
                    <img src="../assets/img/itemFS-9.jpeg" alt="" class="object-fit-cover" style="width: 80px">
                    <div class="describe-clothes">
                      <p class="describe-clothes-focus">
                        {{ product.name }}
                      </p>
                    </div>
                  </div>
                </div>
                <div class="variation">
                  <div class="variation-focus">
                    <div class="variation-container" role="button">
                      <div class="variation-title">
                        Kích Thước:
                        <button class="triangle"></button>
                      </div>
                      <div class="size">Den-S</div>
                    </div>
                    <div></div>
                  </div>
                </div>
                <div class="show-money">
                  <div>
                    <del class="mx-3 text-body-tertiary">₫382.366</del>
                    <small>đ</small>
                    <span class="linethrough"> {{ formatPrice(product.price) }}</span>
                  </div>
                </div>
                <div class="in-decrease-value mx-2">
                  <div class="btn-indecrease-container shopee-input-quantity" v-if="product">
                    <button @click="handleQty('minus')" class="btn5 decrease">
                      <i class="bi bi-dash-lg"></i>
                    </button>
                    <input class="btn5 count-number" type="text" v-model="qty" />
                    <button @click="handleQty('plus')" class="btn5 increase">
                      <i class="bi bi-plus-lg"></i>
                    </button>
                  </div>
                </div>
                <div class="total-price">
                  <span>đ{{ formatPrice(product.price) }}</span>
                </div>
                <div class="delete find">
                  <button class="delete-btn">Xóa</button>
                  <div class="similar">
                    <button class="shopee-button-no-outline y36pik">
                      <span class="find-similar fw-medium">Tìm sản phẩm tương tự</span>
                      <img src="../assets/img/sort-down.png" class="shopee-svg-icon XHOHXQ icon-down-arrow-filled" />
                    </button>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="voucher-container mt-1">
          <svg fill="none" viewBox="0 -2 23 22" class="voucher">
            <g filter="">
              <mask id="a" fill="#fff">
                <path fill-rule="evenodd" clip-rule="evenodd"
                  d="M1 2h18v2.32a1.5 1.5 0 000 2.75v.65a1.5 1.5 0 000 2.75v.65a1.5 1.5 0 000 2.75V16H1v-2.12a1.5 1.5 0 000-2.75v-.65a1.5 1.5 0 000-2.75v-.65a1.5 1.5 0 000-2.75V2z">
                </path>
              </mask>
              <path
                d="M19 2h1V1h-1v1zM1 2V1H0v1h1zm18 2.32l.4.92.6-.26v-.66h-1zm0 2.75h1v-.65l-.6-.26-.4.91zm0 .65l.4.92.6-.26v-.66h-1zm0 2.75h1v-.65l-.6-.26-.4.91zm0 .65l.4.92.6-.26v-.66h-1zm0 2.75h1v-.65l-.6-.26-.4.91zM19 16v1h1v-1h-1zM1 16H0v1h1v-1zm0-2.12l-.4-.92-.6.26v.66h1zm0-2.75H0v.65l.6.26.4-.91zm0-.65l-.4-.92-.6.26v.66h1zm0-2.75H0v.65l.6.26.4-.91zm0-.65l-.4-.92-.6.26v.66h1zm0-2.75H0v.65l.6.26.4-.91zM19 1H1v2h18V1zm1 3.32V2h-2v2.32h2zm-.9 1.38c0-.2.12-.38.3-.46l-.8-1.83a2.5 2.5 0 00-1.5 2.29h2zm.3.46a.5.5 0 01-.3-.46h-2c0 1.03.62 1.9 1.5 2.3l.8-1.84zm.6 1.56v-.65h-2v.65h2zm-.9 1.38c0-.2.12-.38.3-.46l-.8-1.83a2.5 2.5 0 00-1.5 2.29h2zm.3.46a.5.5 0 01-.3-.46h-2c0 1.03.62 1.9 1.5 2.3l.8-1.84zm.6 1.56v-.65h-2v.65h2zm-.9 1.38c0-.2.12-.38.3-.46l-.8-1.83a2.5 2.5 0 00-1.5 2.29h2zm.3.46a.5.5 0 01-.3-.46h-2c0 1.03.62 1.9 1.5 2.3l.8-1.84zM20 16v-2.13h-2V16h2zM1 17h18v-2H1v2zm-1-3.12V16h2v-2.12H0zm1.4.91a2.5 2.5 0 001.5-2.29h-2a.5.5 0 01-.3.46l.8 1.83zm1.5-2.29a2.5 2.5 0 00-1.5-2.3l-.8 1.84c.18.08.3.26.3.46h2zM0 10.48v.65h2v-.65H0zM.9 9.1a.5.5 0 01-.3.46l.8 1.83A2.5 2.5 0 002.9 9.1h-2zm-.3-.46c.18.08.3.26.3.46h2a2.5 2.5 0 00-1.5-2.3L.6 8.65zM0 7.08v.65h2v-.65H0zM.9 5.7a.5.5 0 01-.3.46l.8 1.83A2.5 2.5 0 002.9 5.7h-2zm-.3-.46c.18.08.3.26.3.46h2a2.5 2.5 0 00-1.5-2.3L.6 5.25zM0 2v2.33h2V2H0z">
              </path>
            </g>
            <path clip-rule="evenodd"
              d="M6.49 14.18h.86v-1.6h-.86v1.6zM6.49 11.18h.86v-1.6h-.86v1.6zM6.49 8.18h.86v-1.6h-.86v1.6zM6.49 5.18h.86v-1.6h-.86v1.6z">
            </path>
          </svg>
          <div class="content-voucher">
            <div class="content">Shop Voucher giảm đến ₫10k</div>
            <div class="new">Mới</div>
            <div class="more-voucher-container">
              <div class="more-voucher fs-6">Xem thêm voucher</div>
            </div>
          </div>
        </div>
        <div class="shipping-container">
          <img src="../assets/img/freeship.png" class="shopee-svg-icon MS9XQD icon-free-shipping-line" />
          <div class="shipping-content">
            Giảm ₫15.000 phí vận chuyển đơn tối thiểu ₫50.000; Giảm ₫25.000 phí vận chuyển đơn tối thiểu ₫99.000
          </div>
          <div class="shopee-drawer-container">
            <span class="shopee-drawer fs-6">Tìm hiểu thêm</span>
          </div>
        </div>
      </div>
    </div>
    <div class="rnocow">
      <div class="platform-voucher-container">
        <svg fill="none" viewBox="0 -2 23 22" class="voucher">
          <g filter="">
            <mask id="a" fill="#fff">
              <path fill-rule="evenodd" clip-rule="evenodd"
                d="M1 2h18v2.32a1.5 1.5 0 000 2.75v.65a1.5 1.5 0 000 2.75v.65a1.5 1.5 0 000 2.75V16H1v-2.12a1.5 1.5 0 000-2.75v-.65a1.5 1.5 0 000-2.75v-.65a1.5 1.5 0 000-2.75V2z">
              </path>
            </mask>
            <path
              d="M19 2h1V1h-1v1zM1 2V1H0v1h1zm18 2.32l.4.92.6-.26v-.66h-1zm0 2.75h1v-.65l-.6-.26-.4.91zm0 .65l.4.92.6-.26v-.66h-1zm0 2.75h1v-.65l-.6-.26-.4.91zm0 .65l.4.92.6-.26v-.66h-1zm0 2.75h1v-.65l-.6-.26-.4.91zM19 16v1h1v-1h-1zM1 16H0v1h1v-1zm0-2.12l-.4-.92-.6.26v.66h1zm0-2.75H0v.65l.6.26.4-.91zm0-.65l-.4-.92-.6.26v.66h1zm0-2.75H0v.65l.6.26.4-.91zm0-.65l-.4-.92-.6.26v.66h1zm0-2.75H0v.65l.6.26.4-.91zM19 1H1v2h18V1zm1 3.32V2h-2v2.32h2zm-.9 1.38c0-.2.12-.38.3-.46l-.8-1.83a2.5 2.5 0 00-1.5 2.29h2zm.3.46a.5.5 0 01-.3-.46h-2c0 1.03.62 1.9 1.5 2.3l.8-1.84zm.6 1.56v-.65h-2v.65h2zm-.9 1.38c0-.2.12-.38.3-.46l-.8-1.83a2.5 2.5 0 00-1.5 2.29h2zm.3.46a.5.5 0 01-.3-.46h-2c0 1.03.62 1.9 1.5 2.3l.8-1.84zm.6 1.56v-.65h-2v.65h2zm-.9 1.38c0-.2.12-.38.3-.46l-.8-1.83a2.5 2.5 0 00-1.5 2.29h2zm.3.46a.5.5 0 01-.3-.46h-2c0 1.03.62 1.9 1.5 2.3l.8-1.84zM20 16v-2.13h-2V16h2zM1 17h18v-2H1v2zm-1-3.12V16h2v-2.12H0zm1.4.91a2.5 2.5 0 001.5-2.29h-2a.5.5 0 01-.3.46l.8 1.83zm1.5-2.29a2.5 2.5 0 00-1.5-2.3l-.8 1.84c.18.08.3.26.3.46h2zM0 10.48v.65h2v-.65H0zM.9 9.1a.5.5 0 01-.3.46l.8 1.83A2.5 2.5 0 002.9 9.1h-2zm-.3-.46c.18.08.3.26.3.46h2a2.5 2.5 0 00-1.5-2.3L.6 8.65zM0 7.08v.65h2v-.65H0zM.9 5.7a.5.5 0 01-.3.46l.8 1.83A2.5 2.5 0 002.9 5.7h-2zm-.3-.46c.18.08.3.26.3.46h2a2.5 2.5 0 00-1.5-2.3L.6 5.25zM0 2v2.33h2V2H0z">
            </path>
          </g>
          <path clip-rule="evenodd"
            d="M6.49 14.18h.86v-1.6h-.86v1.6zM6.49 11.18h.86v-1.6h-.86v1.6zM6.49 8.18h.86v-1.6h-.86v1.6zM6.49 5.18h.86v-1.6h-.86v1.6z">
          </path>
        </svg>
        <div class="platform-voucher">Shoee Voucher</div>
        <div style="flex: 1"></div>
        <span class="select-enter fs-6">Chọn hoặc nhập mã</span>
      </div>
      <div class="border-line"></div>
      <div class="lrow-select-item">
        <label class="stardust-checkbox stardust-checkbox--disabled">
          <input class="stardust-checkbox__input" type="checkbox" disabled />
        </label>
      </div>
      <div class="right rrow selected">
        <img class="shopee-svg-icon hpZGIt icon-coin-line" src="../assets/img/coin.png" />
        <div class="shopee-coin-title">Shopee Xu</div>
        <div class="count-num-selected">Bạn chưa chọn sản phẩm</div>
        <div id="stardust-popover0" class="stardust-popover _2Z2rR4" tabindex="0">
          <div class="stardust-popover__target mx-2" role="button">
            <div>
              <i class="bi bi-question-circle"></i>
            </div>
          </div>
        </div>
      </div>
      <div class="last-part right-part">- ₫0</div>
      <div class="border-line"></div>
      <div class="last-partbody-container">
        <div class="checkbox4">
          <label class="stardust-checkbox">
            <input class="stardust-checkbox__input" type="checkbox" v-model="checkbox1Value"
              @change="handleCheckbox1Change" />
          </label>
        </div>
        <button class="iGlIrs clear-btn-style">Chọn Tất Cả (1)</button>
        <button class="clear-btn-style ukPYq9">Xóa</button>
        <div class=""></div>
        <button class="clear-btn-style KbDVuv">Lưu vào danh mục đã thích</button>
        <div style="flex: 1"></div>
        <div class="last-total-item-container">
          <div class="last-total-item-focus">
            <div class="last-total-item">
              <div class="title-total-last fw-medium">Tổng thanh toán (0 item):</div>
              <div class="total-last-count">₫0</div>
            </div>
          </div>
          <div class="onR5FG"></div>
        </div>
        <button class="shopee-button-solid shopee-button-solid--primary">
          <span class="checkout-span fw-medium">Mua hàng</span>
        </button>
      </div>
    </div>
  </div>
</template>

<script>

export default {
  data() {
    return {
      product: null,
      qty: 1,
      checkbox1Value: false,
      checkbox2Value: false,
      checkbox3Value: false,
    };
  },
  mounted() {
    console.log('Giỏ hàng khi component được render:', this.$store.getters.cartItems);
  },
  watch: {
    cart: function (newCart) {
      console.log('Giỏ hàng sau khi thay đổi:', newCart);
    },
  },
  computed: {
    cart() {
      const cartItems = this.$store.getters.cartItems;
      console.log('Dữ liệu giỏ hàng từ computed property:', cartItems);
      return cartItems;
    },
  },
  methods: {
    addToCart() {
      const productToAdd = { ...this.product, qty: this.qty };
      this.$store.commit('addToCart', productToAdd);
      this.qty = 1; // Đặt lại giá trị qty về 1 sau khi thêm vào giỏ hàng

      console.log('Sản phẩm đã được thêm vào giỏ hàng:', productToAdd);
      console.log('Giỏ hàng sau khi thêm:', this.$store.getters.cartItems);
    },
    formatPrice(price) {
      const formatter = new Intl.NumberFormat('vi-VN', {
        style: 'currency',
        currency: 'VND',
      });
      return formatter.format(price).replace('₫', '');
    },

    handleQty(check) {
      if (check === 'plus') {
        this.qty++;
      } else if (check === 'minus' && this.qty > 1) {
        this.qty--;
      }
    },

    handleCheckbox1Change() {
      // Nếu checkbox 1 được chọn, chọn tất cả các checkbox khác
      if (this.checkbox1Value) {
        this.checkbox2Value = true;
        this.checkbox3Value = true;
      } else {
        this.checkbox2Value = false;
        this.checkbox3Value = false;
      }
    },
    handleCheckbox2Change() {
      if (this.checkbox2Value) {
        this.checkbox3Value = true;
      } else {
        this.checkbox3Value = false;
      }
    },
  },

};
</script>

<style scoped>
.container {
  margin-right: auto;
  margin-left: auto;
  width: 100%;
}

.stardust-checkbox__input {
  user-select: none;
  position: relative;
  width: 16px;
  height: 16px;
  flex-shrink: 0;
  border-radius: 2px;
  border: 1px solid rgba(0, 0, 0, .14);
  text-align: center;
  box-shadow: inset 0 2px 0 0 rgba(0, 0, 0, .02);
  margin-right: 8px;
}

.shipdiscount {
  display: flex;
  flex-direction: column;
  padding-top: 20px;
}

.shipping-discount {
  background-color: #fffefb;
  border: 1px solid rgba(224, 168, 0, 0.4);
  padding: 0.40rem 1rem;
  display: flex;
  align-items: center;
  margin-bottom: 0.625rem;
  border-radius: 2px;
}

.voucher {
  color: #ee4d2d;
  fill: currentColor;
  width: 1.3125rem;
  height: 1.25rem;
  margin-top: 0.0625rem;
}

.MCA-wE {
  width: unset;
}

.bXROAg {
  color: #222;
  margin-left: 0.5rem;
}

.BjIo5w {
  display: flex;
  align-items: center;
  box-shadow: 0 1px 1px 0 rgba(0, 0, 0, 0.05);
  overflow: hidden;
  border-radius: 3px;
  height: 55px;
  font-size: 14px;
  background: #fff;
  margin-bottom: 12px;
  color: #888;
  padding: 0 20px;
}

.mcsiKT {
  padding: 0 12px 0 20px;
  display: flex;
  flex-direction: row-reverse;
  min-width: 58px;
  box-sizing: border-box;
}

.stardust-checkbox {
  font-weight: 300;
  font-size: 12px;
  display: flex;
  align-items: center;
  cursor: default;
  position: relative;
  color: rgba(0, 0, 0, 0.54);
  max-width: 400px;
}

input {
  line-height: normal;
}

.products {
  color: rgba(0, 0, 0, 0.8);
  width: 46.27949%;
}

.quantity,
.unit-price {
  text-align: center;
}

.unit-price {
  width: 15.88022%;
}

.quantity {
  width: 15.4265%;
}

.total {
  width: 10.43557%;
  text-align: center;
}

.actions {
  width: 12.70417%;
  text-align: center;
}

.body {
  box-shadow: 0 1px 1px 0 rgba(0, 0, 0, 0.05);
  border-radius: 0.125rem;
  overflow: hidden;
  background: #fff;
  overflow: visible;
  margin-bottom: 12px;
}

.body .ur8hET {
  margin-bottom: 0.9375rem;
}

.clothes {
  border-bottom: 0;
}

.dressingup {
  height: 1.75rem;
  box-sizing: border-box;
  padding: 10px 44px;
}

.wholepleake {
  display: flex;
  align-items: center;
  flex: 1;
}

.wJCpl6 {
  text-decoration: none;
  color: rgba(0, 0, 0, 0.87);
  font-weight: 500;
  min-width: 50px;
  display: flex;
  align-items: center;
}

.buying {
  position: relative;
  padding-bottom: 1px;
}

.buying_focus {
  border: 1px solid rgba(0, 0, 0, 0.09);
  border-radius: 2px;
  margin: 22px 20px;
}

.add-on-deals {
  padding: 9px 12px;
  background: #fff3ed;
  line-height: 30px;
  font-size: 14px;
  font-weight: 500;
  color: rgba(0, 0, 0, 0.87);
}

.btn-add-on {
  padding: 1px 4px;
  margin-right: 8px;
  line-height: 12px;
  vertical-align: middle;
  color: #ee4d2d;
  font-size: 10px;
  border: 1px solid;
  border-radius: 2px;
  font-weight: 400;
}

.adding {
  margin-left: 12px;
  display: inline-block;
  color: #ee4d2d;
  text-transform: capitalize;
}

.forward-icon {
  vertical-align: -2px;
}

.store-container {
  margin-top: 0;
  padding: 20px;
}

.mystore {
  text-decoration: none;
  color: rgba(0, 0, 0, 0.87);
  display: block;
}

.storenav {
  display: flex;
  align-items: center;
}

.title-clothes {
  width: 29.03811%;
  box-sizing: border-box;
  position: relative;
  flex-direction: column;
}

.title-clothes,
.title-clothes-focus {
  display: flex;
  flex-direction: row;
}

.describe-clothes {
  display: flex;
  flex: 1;
  flex-direction: column;
  padding: 5px 20px 0 10px;
  font-size: 14px;
}

.describe-clothes-focus,
.describe-clothes {
  line-height: 16px;
  overflow: hidden;
}

.describe-clothes-focus {
  text-decoration: none;
  color: rgba(0, 0, 0, 0.87);
  margin-bottom: 5px;
  max-height: 32px;
  text-overflow: ellipsis;
  word-break: break-all;
  display: -webkit-box;
  -webkit-box-orient: vertical;
  -webkit-line-clamp: 2;
}

.variation,
.show-money {
  display: flex;
  align-items: center;
  justify-content: center;
}

.variation {
  width: 17.24138%;
}

.variation-focus {
  display: flex;
  align-items: center;
  justify-content: space-between;
  cursor: pointer;
  position: relative;
  outline: none;
  flex: 1;
}

.variation-container {
  flex: 1;
  color: rgba(0, 0, 0, 0.54);
  display: flex;
  flex-direction: column;
  font-size: 0.875rem;
  margin-right: 10px;
}

.variation-title {
  display: flex;
  align-items: center;
  text-transform: capitalize;
  text-align: left;
}

.triangle {
  border-left: 4px solid transparent;
  border-right: 4px solid transparent;
  background: none;
  padding: 0;
  border-top: 5px solid rgba(0, 0, 0, 0.54);
  border-bottom: 0;
  transition: transform 0.1s cubic-bezier(0.4, 0, 0.6, 1);
  transform: rotate(0);
  margin: 0 0 0 10px;
  cursor: pointer;
}

.size {
  text-overflow: ellipsis;
  overflow: hidden;
  word-break: break-word;
  display: -webkit-box;
  -webkit-box-orient: vertical;
  -webkit-line-clamp: 2;
  text-align: left;
  margin-top: 5px;
}

.show-money {
  flex-direction: column;
  width: 15.88022%;
}

.linethrough {
  margin-right: 10px;
}

.sale-money {
  color: rgba(0, 0, 0, 0.54);
  text-decoration: line-through;
}

.in-decrease-value {
  justify-content: center;
  display: flex;
  align-items: center;
  flex-direction: column;
  width: 15.4265%;
}

.btn-indecrease-container {
  display: flex;
  align-items: center;
}

.btn5 {
  outline: none;
  cursor: pointer;
  font-size: 0.875rem;
  font-weight: 300;
  line-height: 1;
  letter-spacing: 0;
  display: flex;
  align-items: center;
  justify-content: center;
  transition: background-color 0.1s cubic-bezier(0.4, 0, 0.6, 1);
  border: 1px solid rgba(0, 0, 0, 0.09);
  border-radius: 2px;
  background: transparent;
  color: rgba(0, 0, 0, 0.8);
  width: 32px;
  height: 32px;
}

.btn5 .shopee-svg-icon {
  font-size: 10px;
  width: 10px;
  height: 10px;
  flex-shrink: 0;
}

.count-number {
  width: 50px;
  height: 32px;
  border-left: 0;
  border-right: 0;
  font-size: 16px;
  font-weight: 400;
  box-sizing: border-box;
  text-align: center;
  cursor: text;
  border-radius: 0;
}

.delete,
.total-price {
  display: flex;
  align-items: center;
  justify-content: center;
}

.total-price {
  width: 10.43557%;
  color: #ee4d2d;
}

.delete {
  width: 12.70417%;
  text-transform: capitalize;
}

.find {
  flex-direction: column;
}

.delete-btn {
  cursor: pointer;
  background: none;
  border: 0;
}

.similar {
  z-index: 2;
  max-width: 100%;
}

.shopee-button-no-outline {
  cursor: pointer;
  font-size: 0.875rem;
  line-height: 1;
  letter-spacing: 0;
  display: flex;
  align-items: center;
  justify-content: center;
  transition: background-color 0.1s cubic-bezier(0.4, 0, 0.6, 1);
  position: relative;
  overflow: visible;
  outline: 0;
  padding: 0.3125rem 0.4375rem;
  background-color: transparent;
}

.y36pik.y36pik {
  color: #ee4d2d;
  font-weight: 400;
  border: 0.0625rem solid transparent;
  height: 1.875rem;
  max-width: 100%;
}

.XHOHXQ {
  margin-left: 0.25rem;
  width: 0.625rem;
}

.voucher-container {
  display: flex;
  align-items: center;
  padding: 1rem 0 1rem 2.5rem;
  border-top: 1px solid rgba(0, 0, 0, 0.09);
}

.L-deCr {
  color: #ee4d2d;
  fill: currentColor;
  width: 1.3125rem;
  height: 1.25rem;
  margin-top: 0.0625rem;
}

.content-voucher {
  margin: 0 0 0 0.875rem;
  height: 1.75rem;
  display: flex;
  align-items: center;
}

.content {
  color: rgba(0, 0, 0, 0.87);
}

.new {
  background-color: #ee4d2d;
  color: #fff;
  text-transform: capitalize;
  padding: 0.125rem 0.25rem;
  margin: 0 0.1875rem 0 0.25rem;
  font-size: 0.75rem;
  border-radius: 1px;
}

.more-voucher-container {
  position: relative;
  z-index: 0;
  margin: 0 0 0 1.5rem;
}

.more-voucher {
  white-space: nowrap;
  color: #05a;
}

.shipping-container {
  display: flex;
  align-items: center;
  padding: 1.25rem 0 1.25rem 2.5rem;
  border-top: 1px solid rgba(0, 0, 0, 0.09);
}

.MS9XQD {
  color: #00bfa5;
  stroke: currentColor;
  fill: currentColor;
  width: 1.25rem;
  height: 0.9375rem;
}

.shipping-content {
  margin-left: 0.9375rem;
}

.shopee-drawer-container {
  display: flex;
  position: relative;
  overflow: visible;
  outline: 0;
}

.shopee-drawer {
  margin-left: 0.375rem;
  color: #05a;
  cursor: pointer;
}

.rnocow {
  z-index: 2;
  position: sticky;
  bottom: 0;
  display: grid;
  grid-template-columns: 1fr 20.3125rem 11.875rem;
  align-items: center;
  box-sizing: border-box;
  background: #fff;
  width: 100%;
  flex: 1;
  font-size: 1rem;
  margin-top: 0.75rem;
}

.platform-voucher-container {
  grid-column-start: 2;
  grid-column-end: 4;
  display: flex;
  align-items: center;
  padding: 0.75rem 0;
}

.icon-vocher-line {
  color: #ee4d2d;
  fill: currentColor;
  width: 1.3125rem;
  height: 1.25rem;
}

.platform-voucher {
  margin: 0 0.3125rem;
  font-weight: 500;
  flex-shrink: 0;
}

.select-enter {
  margin-right: 1.875rem;
  text-transform: capitalize;
  color: #05a;
  font-size: 0.875rem;
  white-space: nowrap;
  cursor: pointer;
}

.border-line {
  grid-column-start: 1;
  grid-column-end: 4;
  border-top: 1px dashed rgba(0, 0, 0, 0.09);
}

.lrow-select-item {
  display: flex;
  flex-direction: row-reverse;
  min-width: 58px;
  box-sizing: border-box;
  grid-column-start: 1;
  grid-column-end: 2;
  flex: 0 0 auto;
  padding: 16px 12px 16px 20px;
}

.stardust-checkbox--disable {
  cursor: no-drop;
}


.right {
  font-size: 14px;
  box-sizing: border-box;
}

.rrow {
  display: flex;
  align-items: center;
  justify-content: flex-start;
  grid-column-start: 2;
  grid-column-end: 3;
}

.hpZGIt {
  width: 18px;
  height: 18px;
  flex: 0 0 auto;
  fill: none;
}

.shopee-coin-title {
  font-weight: 500;
  flex-shrink: 0;
  margin-left: 8px;
}

.count-num-selected {
  font-weight: 500;
  flex: 0 1 auto;
  color: #929292;
  margin-left: 17px;
}

._2Z2rR4 {
  z-index: 2;
}

.stardust-popover {
  position: relative;
}

.OzpV75 {
  stroke: currentColor;
  color: rgba(0, 0, 0, 0.54);
  font-size: 12px;
  padding-right: 6px;
  padding-left: 6px;
}

.last-part {
  display: flex;
  align-items: center;
  grid-column-start: 3;
  grid-column-end: 4;
  justify-content: flex-end;
}

.right-part {
  padding-right: 30px;
  font-weight: 500;
  color: #d0d0d0;
}

.last-partbody-container {
  padding: 12px 24px;
  grid-column-start: 1;
  grid-column-end: 4;
  display: flex;
  align-items: center;
  flex: 1;
  width: 100%;
}

button {
  color: inherit;
  font: inherit;
  margin: 0;
  overflow: visible;
  text-transform: none;
  cursor: pointer;
}

.clear-btn-style {
  background: 0;
  border: 0;
}

.ukPYq9 {
  margin: 0 8px;
}

.KbDVuv {
  color: #ee4d2d;
  margin: 0 8px;
  max-width: 168px;
  white-space: nowrap;
  overflow: hidden;
  text-overflow: ellipsis;
}

.last-total-item-container {
  display: flex;
  flex-direction: column;
}

.last-total-item-focus {
  display: flex;
  justify-content: flex-end;
  align-items: center;
}

.last-total-item {
  margin-left: 20px;
  display: flex;
  align-items: center;
}

.title-total-last {
  font-size: 16px;
  color: #222;
  line-height: 19px;
}

.total-last-count {
  font-size: 24px;
  line-height: 28px;
  margin-left: 5px;
  color: #ee4d2d;
}

.onR5FG {
  font-size: 14px;
  margin-top: 1px;
  display: flex;
  justify-content: flex-end;
}

.rnocow .shopee-button-solid {
  padding: 13px 36px;
  margin: 0 22px 0 15px;
  text-transform: capitalize;
  font-weight: 300;
  height: 2.5rem;
  box-sizing: border-box;
  font-size: 0.875rem;
  border-radius: 2px;
  width: 13.125rem;
}

.shopee-button-solid--primary {
  position: relative;
  overflow: visible;
  outline: 0;
  background: #ee4d2d;
}

.shopee-button-solid {
  cursor: pointer;
  border: 0;
  line-height: 1;
  letter-spacing: 0;
  display: flex;
  align-items: center;
  justify-content: center;
  color: #fff;
  transition: opacity 0.2s ease;
  user-select: none;
  box-shadow: 0 1px 1px 0 rgba(0, 0, 0, 0.09);
}

.checkout-span {
  width: 100%;
}

.chat {
  width: 1.375rem;
  height: 1rem;
  cursor: pointer;
  user-select: none;
}</style>