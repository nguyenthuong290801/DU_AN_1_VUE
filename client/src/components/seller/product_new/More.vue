<template>
  <div class="px-3 py-1 d-flex justify-content-start align-items-center gap-3">
    <label class="label-input">Hàng Đặt Trước
    </label>
    <div class="fs-4 d-flex gap-2 align-items-center justify-content-start w-auto">
      <div @click="toggleIcons" class="cursor-pointer">
        <i v-if="isIcon1Visible" class="bi bi-record2-fill" style="color: #EE4D2D;"></i>
        <i v-else class="bi bi-record2-fill text-secondary"></i>
      </div>
      <div class="border-end px-2">
        <p v-if="isIcon1Visible" class="m-0 text-nowrap">Mặc định</p>
        <p v-else class="m-0 text-nowrap">Tùy chỉnh</p>
      </div>
    </div>
    <p v-if="isIcon1Visible" class="m-0">
      Tôi sẽ gửi hàng trong 2 ngày (không bao gồm các ngày nghỉ lễ, Tết và những ngày đơn vị vận chuyển không
      làm
      việc)</p>
    <div v-else class="d-flex justify-content-start align-items-center gap-2">
      <label class="label-input w-auto text-nowrap">Tôi cần
      </label>
      <div class="form-input" style="width: 55px; height: 40px">
        <input class="input-control" style="width: 30px" type="text" v-model="preOrder">
        <div class="d-flex flex-column">
          <i @click="() => adjustPreOrder('up')" class="bi bi-caret-up-fill border cursor-pointer p-1 hover-icon"
            style="font-size: 7px"></i>
          <i @click="() => adjustPreOrder('down')" class="bi bi-caret-down-fill border cursor-pointer p-1 hover-icon"
            style="font-size: 7px"></i>
        </div>
      </div>
      <p class="m-0">
        ngày chuẩn bị hàng. Bạn có thể chọn từ 5 đến 15 ngày</p>
    </div>
  </div>
  <div class="px-3 py-1 d-flex justify-content-start align-items-center gap-3">
    <label class="label-input">Tình trạng
    </label>
    <div class="fs-4 d-flex gap-2 align-items-center justify-content-start w-auto">
      <div @click="toggleIconsMore" class="cursor-pointer">
        <i v-if="isIcon1VisibleMore" class="bi bi-record2-fill" style="color: #EE4D2D;"></i>
        <i v-else class="bi bi-record2-fill text-secondary"></i>
      </div>
      <div class="px-2">
        <p v-if="isIcon1VisibleMore" class="m-0 text-nowrap">Mới</p>
        <p v-if="!isIcon1VisibleMore" class="m-0 text-nowrap">Đã qua sử dụng</p>
      </div>
    </div>
  </div>
  <div class="p-3 d-flex justify-content-start gap-3">
    <label class="label-input">SKU sản phẩm
    </label>
    <div class="form-input w-auto">
      <input type="text" class="input-control" placeholder="-" v-model="SKU" @input="handleSKU">
    </div>
  </div>
</template>
<script>
export default {
  name: 'more',
  emits: [
    'preOrderDay',
    'status',
    'SKU'
  ],
  data() {
    return {
      statusNew: 'Mới',
      statusOld: 'Đã sử dụng',
      SKU: null,
      preOrder: 5,
      isIcon1Visible: true,
      isIcon1VisibleMore: true,
    }
  },
  watch: {
    preOrder(newP, oldP) {
      this.checkValue()
    },
  },
  methods: {
    toggleIcons() {
      this.isIcon1Visible = !this.isIcon1Visible

      if (this.isIcon1Visible) {
        this.preOrder = 2
        this.$emit('preOrderDay', this.preOrder)
      } else {
        this.$emit('preOrderDay', this.preOrder)
      }
    },
    toggleIconsMore() {
      this.isIcon1VisibleMore = !this.isIcon1VisibleMore

      if (this.isIcon1VisibleMore) {
        this.$emit('status', this.statusNew)
      } else {
        this.$emit('status', this.statusOld)
      }
    },
    adjustPreOrder(action) {
      if (this.preOrder !== null) {
        if (action === 'up') {
          this.preOrder = Math.min(this.preOrder + 1, 15);
        } else if (action === 'down') {
          this.preOrder = Math.max(this.preOrder - 1, 5);
        }
      }
    },
    checkValue() {
      if (this.preOrder !== null) {
        if (this.preOrder < 5) {
          this.preOrder = 5;
        } else if (this.preOrder > 15) {
          this.preOrder = 15;
        }
      }

      if (!this.isIcon1Visible) {
        this.$emit('preOrderDay', this.preOrder)
      }
    },
    handleSKU() {
      if (this.SKU !== null) {
        this.$emit('SKU', this.SKU)
      }
    }
  }
}
</script>

<style>
.hover-icon {
  &:hover {
    background: rgba(238, 238, 238, 0.76);
    color: #C6303E;
  }
}
</style>