<template>
  <aside class="is-open">
    <div class="sidebar-content">
      <div @click="toggleSection('shipping')" class="bg-light rounded p-2 box-shadow">
        <i class="bi bi-box2"></i>
        <span class="mx-2">Vận Chuyển</span>
      </div>
      <ul v-show="openSections.shipping">
        <li><router-link to="#">Quản Lý Vận Chuyển</router-link></li>
        <li><router-link to="#">Cài Đặt Vận Chuyển</router-link></li>
      </ul>
    </div>
    <div class="sidebar-content">
      <div @click="toggleSection('orders')" class="bg-light rounded p-2 box-shadow">
        <i class="bi bi-receipt-cutoff"></i>
        <span class="mx-2">Quản Lý Đơn Hàng</span>
      </div>
      <ul v-show="openSections.orders">
        <li><router-link to="#">Tất Cả</router-link></li>
        <li><router-link to="#">Đơn Hủy</router-link></li>
        <li><router-link to="#">Trả Hàng/Hoàn Tiền</router-link></li>
      </ul>
    </div>
    <div class="sidebar-content">
      <div @click="toggleSection('products')" class="bg-light rounded p-2 box-shadow">
        <i class="bi bi-bag"></i>
        <span class="mx-2">Quản Lý Sản Phẩm</span>
      </div>
      <ul v-show="openSections.products">
        <li><router-link to="/portal/product/list/all">Tất Cả Sản Phẩm</router-link></li>
        <li><router-link to="/portal/product/new">Thêm Sản Phẩm</router-link></li>
        <li><router-link to="#">Sản Phẩm Vi Phạm</router-link></li>
      </ul>
    </div>
    <!-- <div class="sidebar-content">
      <div @click="toggleSection('marketing')" class="bg-light rounded p-2 box-shadow">
        <i class="bi bi-graph-up-arrow"></i>
        <span class="mx-2">Kênh Marketing</span>
      </div>
      <ul v-show="openSections.marketing">
        <li><router-link to="#">Kênh Marketing</router-link></li>
        <li><router-link to="#">Quảng Cáo Shoppe</router-link></li>
        <li><router-link to="#">Mã Giảm Giá Của Tôi</router-link></li>
        <li><router-link to="#">Tăng Đơn Cùng KOL</router-link></li>
        <li><router-link to="#">Hiệu Quả Cùng Shopee Live</router-link></li>
      </ul>
    </div> -->
  </aside>
</template>

<script>
export default {
  data() {
    return {
      openSections: {
        shipping: true,
        orders: true,
        products: true,
        marketing: true,
      }
    };
  },
  methods: {
    toggleSection(section) {
      this.openSections[section] = !this.openSections[section];
    }
  }
};
</script>

<style lang="scss" scoped>
aside {
  width: 250px;
  height: 100vh;
  position: fixed;
  top: 55px;
  left: -250px;
  transition: left 0.3s;
  background: #ffffff;
  z-index: 0;
  overflow: hidden;
  overflow-y: auto;
}

.box-shadow {
  box-shadow: 0px 1px 0px #d2d2d2;
  cursor: pointer;
}

.is-open {
  left: 0;
}

.sidebar-content {
  padding: 10px 20px;
  max-height: calc(100vh - 70px);

  &:last-child {
    margin-bottom: 100px;
  }
}

span {
  font-weight:500;
  color: #555555;
}

ul {
  list-style: none;
  padding: 0;
  margin-left: 25px;
}

li {
  margin: 10px 0;

}

a {
  color: #6e6e6e;
  text-decoration: none;

  &:hover {
    color: #555555;
  }
}

aside::-webkit-scrollbar {
  width: 5px;
}

aside::-webkit-scrollbar-track {
  background: transparent;
}

aside::-webkit-scrollbar-thumb {
  background: #b4b4b4;
  border-radius: 6px;
}

aside::-webkit-scrollbar-thumb:hover {
  background: #555;
}
</style>
