<template>
  <button type="button" class="elfp9W div-style bg-white fw-semibold border-0 bg-white" data-bs-toggle="modal"
    data-bs-target="#staticBackdrop">
    Thay đổi
  </button>

  <!-- Modal -->
  <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
    aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-lg border-1">
      <div class="modal-content position-relative">
        <div>
          <div class="fs7iYc text-start fw-medium">Chọn đơn vị vận chuyển</div>
          <div class="Jk2CC4">
            <div class="sYxrqg NIw8Pg">
              <div class="m3x7Sj">
                <div class="gdNPsY">KÊNH VẬN CHUYỂN LIÊN KẾT VỚI SHOPEE</div>
                <div class="k9zMfU">Bạn có thể theo dõi đơn hàng trên ứng dụng Shopee khi chọn một trong các đơn vị vận
                  chuyển:
                </div>
              </div>
              <div class="ZtGG3s">
                <div v-for="(item, index) in items" :key="index" class="d-flex flex-column mb-1">
                  <div role="radio" class="WEAqLJ" :class="{ 'clicked': item.clicked }" @click="toggleClicked(index)">
                    <div class="E0Vlko"
                      :style="{ 'box-shadow': item.clicked ? 'inset 4px 0 0 #ee4d2d' : 'inset 4px 0 0 rgba(0, 0, 0, .09)' }">
                      <div class="_0wKJMs">
                        <div class="D4KQjo">
                          <div class="ebivte">{{ item.label }}</div>
                          <div class="QmQd0E">
                            <div style="text-transform: lowercase;" class="lcrUW8">đ{{ formatPrice(item.price) }}</div>
                          </div>
                        </div>
                        <div>
                          <div class="_4o1jCw">{{ item.deliveryDate }}</div>
                        </div>
                      </div>
                      <!-- dấu tích -->
                      <div v-if="item.clicked" class="XS5QEw _9i2fbO">
                        <svg enable-background="new 0 0 15 15" class="stardust-icon stardust-icon-tick">
                          <path stroke="none"
                            d="m6.5 13.6c-.2 0-.5-.1-.7-.2l-5.5-4.8c-.4-.4-.5-1-.1-1.4s1-.5 1.4-.1l4.7 4 6.8-9.4c.3-.4.9-.5 1.4-.2.4.3.5 1 .2 1.4l-7.4 10.3c-.2.2-.4.4-.7.4 0 0 0 0-.1 0z">
                          </path>
                        </svg>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="d-flex mt-5 pt-5 justify-content-end p-4">
          <button class="close mt-5 bg-white fw-medium" data-bs-dismiss="modal">TRỞ LẠI</button>
          <button class="confirm mt-5 fw-medium" @click="handleAddToCart">HOÀN THÀNH</button>
        </div>
      </div>
    </div>
  </div>
</template>

<script setup>
import Swal from 'sweetalert2';
import { ref, defineProps } from 'vue';

const props = defineProps(['shippingPrice', 'handleAddToCart']);

const items = ref([
  { label: 'Nhanh', price: '31500', deliveryDate: 'Nhận hàng vào 28 Th11 - 29 Th11', clicked: false },
  { label: 'Tiết kiệm', price: '26000', deliveryDate: 'Nhận hàng vào 28 Th11 - 29 Th11', clicked: false },
]);

const toggleClicked = (index) => {
  items.value.forEach((item, i) => {
    item.clicked = i === index ? !item.clicked : false;
  });
};

const handleAddToCart = () => {
  const clickedItem = items.value.find((item) => item.clicked);
  console.log('Item được click:', clickedItem);
  props.handleAddToCart(clickedItem.price);
  Swal.fire({
    icon: 'success',
    title: 'Thay đổi thành công',
    showConfirmButton: false,
    timer: 1500,
  });
};

const formatPrice = (price) => {
  const formatter = new Intl.NumberFormat('vi-VN', {
    style: 'currency',
    currency: 'VND',
  });
  return formatter.format(price).replace('₫', '');
};
</script>

<style scoped>
button.elfp9W.div-style {
  flex: 0 0 auto;
  text-align: center;
  text-transform: uppercase;
  color: #05a;
  cursor: pointer;
  user-select: none;
  grid-column-start: 3;
  grid-column-end: 4;
  -ms-grid-column-span: 1;
  grid-row-start: 1;
  grid-row-end: 2;
  -ms-grid-row-span: 1;
  border: none;
}

.fs7iYc {
  margin-top: 30px;
  margin-right: 30px;
  margin-left: 30px;
  color: #222;
  font-size: 1.2rem;
  text-transform: none;
}

.Jk2CC4 {
  display: flex;
  flex-direction: column;
  max-height: 480px;
  overflow-y: auto;
  text-align: left;
}

.sYxrqg {
  box-sizing: border-box;
  margin-top: 16px;
  padding-right: 30px;
  padding-left: 30px;
  overflow: auto;
}

.xvSSUW .m3x7Sj {
  margin-top: 12px;
}

.m3x7Sj {
  padding-bottom: 9px;
  position: relative;
}

.gdNPsY {
  color: #929292;
}

.k9zMfU {
  color: #bbb;
  font-size: .75rem;
  margin-top: 3px;
  text-transform: none;
  font-weight: 400;
}

.WEAqLJ {
  display: flex;
  flex: 1;
}

.E0Vlko {
  display: flex;
  flex: 1;
  padding: 20px;
  background-color: #fafafa;
  box-shadow: inset 4px 0 0 rgba(0, 0, 0, .09);
}

.WEAqLJ.clicked .E0Vlko {
  box-shadow: inset 4px 0 0 #ee4d2d;
}

.XS5QEw._9i2fbO {
  display: flex;
  align-items: center;
  margin-left: auto;
}

._0wKJMs {
  flex: 1;
}

.D4KQjo {
  display: flex;
  flex-wrap: wrap;
  color: #222;
}

.D4KQjo .ebivte {
  font-size: 1rem;
  font-weight: 500;
  text-transform: none;
}

.QmQd0E {
  display: flex;
  margin-left: 20px;
}

.D4KQjo .lcrUW8 {
  margin-left: 3px;
  color: #ee4d2d;
  font-weight: 400;
  font-size: 1rem;
}

._4o1jCw {
  color: #929292;
  font-size: .75rem;
  margin-top: 4px;
  text-transform: none;
  font-weight: 400;
}

.XS5QEw._9i2fbO {
  display: flex;
  align-items: center;
  min-height: 100%;
}

.XS5QEw svg {
  color: #ee4d2d;
}

svg:not(:root) {
  overflow: hidden;
}

.stardust-icon {
  stroke: currentColor;
  fill: currentColor;
  width: 1em;
  height: 1em;
}

.close {
  height: 40px;
  font-size: 1rem;
  line-height: 1.5rem;
  margin-right: 8px;
  color: rgba(0, 0, 0, .65);
  border: 1px solid rgba(0, 0, 0, .09);
  box-shadow: 0 1px 1px rgba(0, 0, 0, .03);
  min-width: 140px;
}

.confirm {
  color: #fff;
  background-color: #ee4d2d;
  align-items: center;
  display: flex;
  justify-content: center;
  outline: none;
  padding: 10px;
  border: 0;
  border-radius: 2px;
  min-width: 140px;
  font-size: 14px;
  cursor: pointer;
}
</style>