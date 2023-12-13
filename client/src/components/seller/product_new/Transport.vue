<template>
  <div class="p-3 d-flex justify-content-start gap-3">
    <label class="label-input"><span class="text-danger">* </span>Cân nặng (Sau khi đóng gói)
    </label>
    <div class="d-flex flex-column">
      <div class="form-input w-auto">
        <input v-model="weight" @input="checkWeight" type="text" class="input-control"
               placeholder="Nhập vào">
        <small class="px-2 py-1 border-start">gr</small>
      </div>
      <small v-if="errorRequired" class="mt-2 text-small text-danger"><i class="bi bi-1-circle-fill"></i> Không được để
        trống!</small>
      <small v-if="errorNaN" class="mt-2 text-small text-danger"><i class="bi bi-2-circle-fill"></i> Chỉ chứa chữ
        số!</small>
      <small v-if="errorNaNN" class="mt-2 text-small text-danger"><i class="bi bi-3-circle-fill"></i> Chỉ chứa chữ số
        dương!</small>
    </div>
  </div>
  <div class="p-3 d-flex gap-3">
    <label class="label-input">Kích thước đóng gói (Phí vận chuyển thực tế sẽ thay đổi nếu bạn nhập sai kích
      thước)
    </label>
    <div class=" d-flex justify-content-start align-items-center h-25 gap-2">
      <div class="form-input">
        <input v-model="width" type="text" class="input-control"
               placeholder="R">
        <small class="px-2 py-1 border-start">cm</small>
      </div>
      <i class="bi bi-x-lg"></i>
      <div class="form-input">
        <input v-model="length" type="text" class="input-control"
               placeholder="D">
        <small class="px-2 py-1 border-start">cm</small>
      </div>
      <i class="bi bi-x-lg"></i>
      <div class="form-input">
        <input v-model="height" type="text" class="input-control"
               placeholder="C">
        <small class="px-2 py-1 border-start">cm</small>
      </div>
    </div>
  </div>
  <div class="p-3 d-flex gap-3">
    <label class="label-input"><span class="text-danger">* </span>Phí vận chuyển
    </label>
    <div class="d-flex flex-column w-100 border">
      <div class="bg-light p-3">
        <label class="fw-medium">Express</label>
      </div>
      <div class="bg-white p-3 d-flex justify-content-between">
        <label>Hỏa Tốc</label>
        <div class="d-flex gap-3">
          <label v-if="!isChecked">Nhập cân nặng</label>
          <label v-if="isChecked">{{ priceTransportH }}₫</label>
          <input type="checkbox" class="checkbox d-none" id="checkbox1" v-model="isChecked1"
                 @change="toggleCheckbox(1)">
          <span class="checkbox-label" @click="toggleCheckbox(1)">
              <span class="ball" :style="{ transform: isChecked1 ? 'translateX(24px)' : 'translateX(0)' }"></span>
            </span>
        </div>
      </div>
      <div class="bg-light p-3">
        <label class="fw-medium">Standard</label>
      </div>
      <div class="bg-white p-3 d-flex justify-content-between">
        <label>Nhanh</label>
        <div class="d-flex gap-3">
          <label v-if="!isChecked">Nhập cân nặng</label>
          <label v-if="isChecked">{{ priceTransportN }}₫</label>
          <input type="checkbox" class="checkbox d-none" id="checkbox1" v-model="isChecked2"
                 @change="toggleCheckbox(2)">
          <span class="checkbox-label" @click="toggleCheckbox(2)">
              <span class="ball" :style="{ transform: isChecked2 ? 'translateX(24px)' : 'translateX(0)' }"></span>
            </span>
        </div>
      </div>
      <div class="bg-light p-3">
        <label class="fw-medium">Economy</label>
      </div>
      <div class="bg-white p-3 d-flex justify-content-between">
        <label>Tiết kiệm</label>
        <div class="d-flex gap-3">
          <label v-if="!isChecked">Nhập cân nặng</label>
          <label v-if="isChecked">{{ priceTransportT }}₫</label>
          <input type="checkbox" class="checkbox d-none" id="checkbox2" v-model="isChecked3"
                 @change="toggleCheckbox(3)">
          <span class="checkbox-label" @click="toggleCheckbox(3)">
              <span class="ball" :style="{ transform: isChecked3 ? 'translateX(24px)' : 'translateX(0)' }"></span>
            </span>
        </div>
      </div>
    </div>
  </div>
  <p class="float-end px-3">Cài đặt đơn vị vận chuyển ở đây chỉ áp dụng cho sản phẩm này.
    Shop có thể
    <router-link to="/portal/setting/transport">nhấn tại đây</router-link>
    để kích hoạt thêm phương thức vận chuyển cho sản phẩm.
  </p>
</template>
<script>

export default {
  name: "Transport",
  props: {
    errorWeightR: false,
  },
  emits: [
    'totalTransport'
  ],
  data() {
    return {
      isChecked1: false,
      isChecked2: false,
      isChecked3: false,
      isChecked: false,
      priceTransport1: null,
      priceTransport2: null,
      priceTransport3: null,
      priceTransportH: null,
      priceTransportN: null,
      priceTransportT: null,
      weight: null,
      height: null,
      width: null,
      length: null,
      errorRequired: false,
      errorNaN: false,
      errorNaNN: false,
      priceTransport: [],
    }
  },
  watch: {
    errorWeightR(newE, oldE) {
      this.checkWeight()
    },
    weight(newW, oldW) {
      this.totalPrice()
    },
    width(newW, oldW) {
      this.totalPrice()
    },
    height(newH, oldH) {
      this.totalPrice()
    },
    long(newL, oldL) {
      this.totalPrice()
    },
    isChecked1(newW, oldW) {
      this.totalPrice()
    },
    isChecked2(newH, oldH) {
      this.totalPrice()
    },
    isChecked3(newL, oldL) {
      this.totalPrice()
    }
  },
  methods: {
    checkWeight() {
      if (this.weight !== undefined && !isNaN(this.weight)) {
        this.isChecked = true
        this.errorNaN = false
      } else {
        this.isChecked = false
        this.errorNaN = true
      }

      if (this.weight == '' || this.weight == undefined) {
        this.isChecked = false
        this.errorRequired = true
      } else {
        this.errorRequired = false
      }

      if (this.weight < 0) {
        this.errorNaNN = true
      } else {
        this.errorNaNN = false
      }
    },
    toggleCheckbox(checkboxNumber) {
      if (checkboxNumber === 1 && this.isChecked) {
        this.isChecked1 = !this.isChecked1;
      } else if (checkboxNumber === 2 && this.isChecked) {
        this.isChecked2 = !this.isChecked2;
      } else if (checkboxNumber === 3 && this.isChecked) {
        this.isChecked3 = !this.isChecked3;
      }
    },
    totalPrice() {
      if (this.weight < 1000) {
        this.priceTransport1 = 20000
        this.priceTransport2 = 19000
        this.priceTransport3 = 18000

        this.priceTransportH = this.priceTransport1.toLocaleString()
        this.priceTransportN = this.priceTransport2.toLocaleString()
        this.priceTransportT = this.priceTransport3.toLocaleString()
      }

      this.priceTransport = [];

      if (this.isChecked1) {
        const priceTransport = {
            'weight': this.weight,
            'length': this.length,
            'width': this.width,
            'height': this.height,
            'name': 'Express',
            'price': this.priceTransport1
        }

        this.priceTransport.push(priceTransport)
      }

      if (this.isChecked2) {
        const priceTransport = {
            'weight': this.weight,
            'length': this.length,
            'width': this.width,
            'height': this.height,
            'name': 'Standard',
            'price': this.priceTransport2
        }

        this.priceTransport.push(priceTransport)
      }

      if (this.isChecked3) {
        const priceTransport = {
            'weight': this.weight,
            'length': this.length,
            'width': this.width,
            'height': this.height,
            'name': 'Economy',
            'price': this.priceTransport3
        }

        this.priceTransport.push(priceTransport)
      }

      if (this.weight !== null) {
        this.$emit('totalTransport', this.priceTransport)
      }
    }

  }
}
</script>

<style>
.checkbox-label {
  background-color: rgba(110, 110, 110, 0.4);
  width: 50px;
  height: 26px;
  border-radius: 50px;
  position: relative;
  padding: 5px;
  cursor: pointer;
  display: flex;
  justify-content: space-between;
  align-items: center;
}

.checkbox-label .ball {
  background-color: #fff;
  width: 22px;
  height: 22px;
  position: absolute;
  left: 2px;
  top: 2px;
  border-radius: 50%;
  transition: transform 0.2s linear;
}

.checkbox:checked + .checkbox-label .ball {
  transform: translateX(24px);
}

.checkbox:checked + .checkbox-label {
  background-color: #00c206;;
}
</style>