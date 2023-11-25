<template>
  <div :class="{ 'p-3 d-flex gap-3': true, 'flex-column': !isOpenVariation }">
    <div class="d-flex gap-3">
      <label class="label-input">Phân loại hàng</label>
      <div v-if="!isOpenVariation">
        <div @click="moreVariation" class="drop-area w-auto h-auto p-0 cursor-pointer py-1">
          <div class="d-flex justify-content-center align-items-center gap-1">
            <i class="bi bi-plus border-end px-1"></i>
            <p class="text-small m-0 p-2">Thêm nhóm phân loại</p>
          </div>
        </div>
      </div>
    </div>
    <div v-if="!isOpenVariation" class="d-flex gap-3 mt-3">
      <label class="label-input"><span class="text-danger">* </span> Giá</label>
      <div class="d-flex flex-column w-25">
        <div class="form-input cursor-pointer">
          <small class="px-2 py-1 border-end">₫</small>
          <input v-model="priceNotVariation" @input="checkPrice" type="text" class="input-control" placeholder="Nhập vào">
        </div>
        <small v-if="errorPriceRequired" class="mt-2 text-small text-danger"><i class="bi bi-1-circle-fill"></i> Không
          được để trống!</small>
        <small v-if="errorPriceNaN" class="mt-2 text-small text-danger"><i class="bi bi-2-circle-fill"></i> Chỉ chứa chữ
          số!</small>
        <small v-if="errorPriceNaNN" class="mt-2 text-small text-danger"><i class="bi bi-3-circle-fill"></i> Chỉ chứa chữ
          số dương!</small>
      </div>
    </div>
    <div v-if="!isOpenVariation" class="d-flex gap-3 mt-3">
      <label class="label-input"><span class="text-danger">* </span> Kho</label>
      <div class="d-flex flex-column w-25">
        <div class="form-input cursor-pointer">
          <input v-model="qtyNotVariation" @input="checkQty" type="text" class="input-control" placeholder="0">
        </div>
        <small v-if="errorQtyRequired" class="mt-2 text-small text-danger"><i class="bi bi-1-circle-fill"></i> Không được
          để trống!</small>
        <small v-if="errorQtyNaN" class="mt-2 text-small text-danger"><i class="bi bi-2-circle-fill"></i> Chỉ chứa chữ
          số!</small>
        <small v-if="errorQtyNaNN" class="mt-2 text-small text-danger"><i class="bi bi-3-circle-fill"></i> Chỉ chứa chữ số
          dương!</small>
      </div>
    </div>
    <div v-else class="d-flex flex-column w-100">
      <div class="d-flex gap-3 bg-light p-3 border">
        <div class="d-flex flex-column">
          <label class="label-input text-nowrap w-25"><span class="text-danger">* </span> Nhóm phân loại 1:</label>
          <label class="label-input text-nowrap mt-4 w-25">Phân loại hàng</label>
        </div>
        <div class="w-100">
          <div class="d-flex justify-content-between">
            <label class="label-input text-nowrap w-auto">Màu sắc</label>
            <div>
              <i class="bi bi-x cursor-pointer" @click="removeVariation"></i>
            </div>
          </div>
          <div class="d-flex mt-4 gap-3 flex-wrap">
            <div v-for="(newVariation, index) in newVariations" :key="index">
              <div class="form-input w-auto cursor-pointer">
                <input @input="handleChange" type="text" class="input-control" placeholder="ví dụ: Trắng, Đỏ v.v"
                  v-model="colorVariation[index]">
              </div>
              <small v-if="colorVariation[index] == ''" class="mt-2 text-small text-danger"><i
                  class="bi bi-1-circle-fill"></i> Không được để trống!</small>
            </div>
            <div @click="newVariation"
              class="cursor-pointer px-2 border text-black-50 rounded d-flex justify-content-center align-items-center"
              style="height: 42px">
              <i class="bi bi-plus"></i>
            </div>
          </div>
        </div>
      </div>
      <div class="d-flex gap-3 mt-3 bg-light p-3 border">
        <div class="d-flex flex-column">
          <label class="label-input text-nowrap w-25">Nhóm phân loại 2:</label>
          <label class="label-input text-nowrap mt-4 w-25">Phân loại hàng</label>
        </div>
        <div class="w-100">
          <div class="d-flex justify-content-between">
            <div class="d-flex gap-3">
              <label class="label-input text-nowrap w-auto">Kích thước</label>
            </div>
          </div>
          <div class="d-flex mt-4 gap-3 flex-wrap">
            <div v-for="(newVariation, index) in newVariationsTwo" :key="index" class="form-input w-auto cursor-pointer">
              <input @input="handleChange" type="text" class="input-control" placeholder="ví dụ: S,M,L v.v"
                v-model="sizeVariation[index]">
            </div>
            <div @click="newVariationTwo"
              class="cursor-pointer px-2 border text-black-50 rounded d-flex justify-content-center align-items-center">
              <i class="bi bi-plus"></i>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div v-if="isOpenVariation" class="d-flex p-3 gap-3">
    <label class="label-input">Danh sách phân loại hàng</label>
    <div class="d-flex flex-column">
      <div class="d-flex gap-3">
        <div class="d-flex flex-column">
          <div class="form-input" style="height:41px">
            <small class="px-2 py-1 border-end">₫</small>
            <input type="text" class="input-control" placeholder="Giá" v-model="price_all">
          </div>
          <small v-if="errorPriceAllNaN" class="mt-2 text-small text-danger"><i class="bi bi-2-circle-fill"></i> Chỉ chứa
            chữ
            số!</small>
          <small v-if="errorPriceAllNaNN" class="mt-2 text-small text-danger"><i class="bi bi-3-circle-fill"></i> Chỉ
            chứa chữ
            số dương!</small>
        </div>
        <div class="d-flex flex-column">
          <div class="form-input" style="height:41px">
            <input type="text" class="input-control" placeholder="Kho hàng" v-model="qty_in_stock_all">
          </div>
          <small v-if="errorQtyAllNaN" class="mt-2 text-small text-danger"><i class="bi bi-2-circle-fill"></i> Chỉ chứa
            chữ
            số!</small>
          <small v-if="errorQtyAllNaNN" class="mt-2 text-small text-danger"><i class="bi bi-3-circle-fill"></i> Chỉ
            chứa chữ
            số dương!</small>
        </div>
        <div class="form-input" style="height:41px">
          <input type="text" class="input-control" placeholder="SKU phân loại" v-model="SKU_all">
        </div>
        <button @click="toAll" type="button"
          :class="{ 'text-nowrap': true, 'bt-primary': !isOpenAll, 'bt-primary-ac': isOpenAll }"
          style="height:41px"><span>Áp dụng cho
            tất cả
            phân loại</span>
        </button>
      </div>
      <table class="custom-table mt-3">
        <thead class="bg-light">
          <tr>
            <td><label class="label-input w-auto text-center text-nowrap"><span class="text-danger">* </span> Màu
                sắc</label></td>
            <td><label class="label-input w-auto text-center text-nowrap">Kích thước</label></td>
            <td><label class="label-input w-auto text-center text-nowrap"><span class="text-danger">* </span> Giá</label>
            </td>
            <td><label class="label-input w-auto text-center text-nowrap"><span class="text-danger">* </span> Kho
                hàng</label></td>
            <td><label class="label-input w-auto text-center text-nowrap"><span class="text-danger">* </span> SKU phân
                loại</label></td>
          </tr>
        </thead>
        <tbody>
          <tr v-for="(variation, index) in newVariations" :key="index">
            <td>
              <div class="text-break">{{ colorVariation[index] }}</div>
              <div class="d-flex justify-content-center align-items-center flex-column text-small cursor-pointer mt-2">
                <DropImage @images="handleImageWithIndex" :isMy="false" :qty="1"></DropImage>
              </div>
              <small v-if="errorImage" class="mt-2 text-small text-danger"><i class="bi bi-1-circle-fill"></i>
                Không
                được để trống!</small>
            </td>
            <td>
              <div class="border border-2 p-2 mt-1 rounded" v-for="valueSize in sizeVariation">{{ valueSize }}</div>
            </td>
            <td>
              <div class="d-flex flex-column" style="text-align: left !important;">
                <div class="form-input">
                  <small class="px-2 py-1 border-end">₫</small>
                  <input @input="handleChange" type="text" class="input-control" placeholder="Nhập vào"
                    v-model="price[index]">
                </div>
                <small v-if="errorPriceV" class="mt-2 text-small text-danger"><i class="bi bi-1-circle-fill"></i>
                  Không
                  được để trống!</small>
                <small v-if="errorPriceVNaN" class="mt-2 text-small text-danger"><i class="bi bi-2-circle-fill"></i> Chỉ
                  chứa
                  chữ
                  số!</small>
                <small v-if="errorPriceVNaNN" class="mt-2 text-small text-danger"><i class="bi bi-3-circle-fill"></i> Chỉ
                  chứa chữ
                  số dương!</small>
              </div>
            </td>
            <td>
              <div class="d-flex flex-column" style="text-align: left !important;">
                <div class="form-input">
                  <input @input="handleChange" type="text" class="input-control" placeholder="0"
                    v-model="qty_in_stock[index]">
                </div>
                <small v-if="errorQtyV" class="mt-2 text-small text-danger"><i class="bi bi-1-circle-fill"></i>
                  Không
                  được để trống!</small>
                <small v-if="errorQtyVNaN" class="mt-2 text-small text-danger"><i class="bi bi-2-circle-fill"></i> Chỉ
                  chứa
                  chữ
                  số!</small>
                <small v-if="errorQtyVNaNN" class="mt-2 text-small text-danger"><i class="bi bi-3-circle-fill"></i> Chỉ
                  chứa chữ
                  số dương!</small>
              </div>
            </td>
            <td>
              <div class="d-flex flex-column" style="text-align: left !important;">
                <div class="form-input">
                  <input @input="handleChange" type="text" class="input-control" placeholder="-" v-model="SKU[index]">
                </div>
                <small v-if="errorSKU" class="mt-2 text-small text-danger"><i class="bi bi-1-circle-fill"></i>
                  Không
                  được để trống!</small>
              </div>
            </td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
</template>

<script>
import DropImage from '@/components/seller/product_new/DropImage.vue';

export default {
  name: 'Variation',
  components: {
    DropImage
  },
  props: {
    errorPriceR: false,
    errorQtyR: false
  },
  emits: [
    'variation',
    'openVariation'
  ],
  data() {
    return {
      isOpenVariation: false,
      isOpenAll: false,
      errorPriceRequired: false,
      errorQtyRequired: false,
      errorPriceNaN: false,
      errorPriceNaNN: false,
      errorQtyNaN: false,
      errorQtyNaNN: false,
      errorPriceAllNaN: false,
      errorPriceAllNaNN: false,
      errorQtyAllNaN: false,
      errorQtyAllNaNN: false,
      errorImage: false,
      errorPriceV: false,
      errorQtyV: false,
      errorPriceVNaN: false,
      errorQtyVNaN: false,
      errorPriceVNaNN: false,
      errorQtyVNaNN: false,
      errorSKU: false,
      newVariations: 1,
      newVariationsTwo: 1,
      variationImages: [],
      colorVariation: [],
      sizeVariation: [],
      priceNotVariation: null,
      qtyNotVariation: null,
      price: [],
      qty_in_stock: [],
      SKU: [],
      price_all: null,
      qty_in_stock_all: null,
      SKU_all: null,
      items: [],
      allVariation: [],
      filledCount: 0,
      filledCountTwo: 0,
    }
  },
  watch: {
    price_all(newPrice, oldPrice) {
      this.checkValues();
      this.checkPriceAll();
    },
    qty_in_stock_all(newQty, oldQty) {
      this.checkValues();
      this.checkQtyAll();
    },
    SKU_all(newSku, oldSku) {
      this.checkValues();
    },
    errorQtyR(newE, oldE) {
      this.checkQty()
    },
    errorPriceR(newE, oldE) {
      this.checkPrice()
    },
  },
  methods: {
    moreVariation() {
      this.isOpenVariation = true
      this.$emit('openVariation', this.isOpenVariation);
    },
    checkValues() {
      if (this.price_all !== null &&
        this.qty_in_stock_all !== null &&
        this.SKU_all !== null &&
        this.price_all !== '' &&
        this.qty_in_stock_all !== '' &&
        this.SKU_all !== ''
      ) {
        this.isOpenAll = true
        this.handleChange()
      } else {
        this.isOpenAll = false
      }
    },
    checkPriceAll() {
      if (isNaN(this.price_all)) {
        this.errorPriceAllNaN = true
      } else {
        this.errorPriceAllNaN = false
      }

      if (this.price_all <= 0) {
        this.errorPriceAllNaNN = true
      } else {
        this.errorPriceAllNaNN = false
      }

      if (this.price_all == '') {
        this.errorPriceAllNaN = false
        this.errorPriceAllNaNN = false
      }
    },
    checkQtyAll() {
      if (isNaN(this.qty_in_stock_all)) {
        this.errorQtyAllNaN = true
      } else {
        this.errorQtyAllNaN = false
      }

      if (this.qty_in_stock_all <= 0) {
        this.errorQtyAllNaNN = true
      } else {
        this.errorQtyAllNaNN = false
      }

      if (this.qty_in_stock_all == '') {
        this.errorQtyAllNaN = false
        this.errorQtyAllNaNN = false
      }
    },
    checkPrice() {
      let validPrice = true;

      if (this.priceNotVariation === '' || this.priceNotVariation == null) {
        this.errorPriceRequired = true;
        validPrice = false;
      } else {
        this.errorPriceRequired = false;
      }

      if (isNaN(this.priceNotVariation)) {
        this.errorPriceNaN = true;
        validPrice = false;
      } else {
        this.errorPriceNaN = false;
      }

      if (this.priceNotVariation < 0) {
        this.errorPriceNaNN = true;
        validPrice = false;
      } else {
        this.errorPriceNaNN = false;
      }

      if (validPrice) {
        this.handleChange();
      }
    },
    checkQty() {
      let validQty = true;

      if (this.qtyNotVariation === '' || this.qtyNotVariation == null) {
        this.errorQtyRequired = true;
        validQty = false;
      } else {
        this.errorQtyRequired = false;
      }

      if (isNaN(this.qtyNotVariation)) {
        this.errorQtyNaN = true;
        validQty = false;
      } else {
        this.errorQtyNaN = false;
      }

      if (this.qtyNotVariation < 0) {
        this.errorQtyNaNN = true;
        validQty = false;
      } else {
        this.errorQtyNaNN = false;
      }

      if (validQty) {
        this.handleChange();
      }
    },
    removeVariation() {
      this.isOpenVariation = false
      this.newVariations = 1
      this.newVariationsTwo = 1
      this.colorVariation = []
      this.filledCount = 0
      this.filledCountTwo = 0
      this.sizeVariation = []
      this.price = []
      this.qty_in_stock = []
      this.SKU = []
      this.price_all = null
      this.qty_in_stock_all = null
      this.SKU_all = null
      this.handleChange()
      this.$emit('openVariation', this.isOpenVariation);
    },
    newVariation() {
      const currentColor = this.colorVariation[this.filledCount]

      if (currentColor !== undefined && currentColor !== '') {
        this.filledCount++
        this.newVariations++
      }
    },
    newVariationTwo(event) {
      event.preventDefault();
      const currentSize = this.sizeVariation[this.filledCountTwo]

      if (currentSize !== undefined && currentSize !== '') {
        this.filledCountTwo++
        this.newVariationsTwo++
      }
    },
    toAll() {
      for (let count = 0; count < this.newVariations; count++) {
        this.price[count] = this.price_all
        this.qty_in_stock[count] = this.qty_in_stock_all
        this.SKU[count] = this.SKU_all
      }
    },
    handleImageWithIndex(images) {
      this.variationImages.push(images)
      this.handleChange()
    },
    handleChange() {
      this.createVariationObjects()
      this.emitVariationEvent()
    },
    createVariationObjects() {
      const variationObjects = [];
      let sizeV = '';

      if (this.sizeVariation) {
        sizeV = this.sizeVariation.join(',');
      }

      for (let i = 0; i < this.colorVariation.length; i++) {
        if (
          this.colorVariation[i] &&
          this.price[i] &&
          this.qty_in_stock[i] &&
          this.SKU[i] &&
          this.variationImages[i]
        ) {
          const imageString = this.variationImages[i].join('');

          const variationObject = {
            color: this.colorVariation[i],
            size: sizeV || "Default Size",
            price: this.price[i],
            qty_in_stock: this.qty_in_stock[i],
            SKU: this.SKU[i],
            image: imageString
          };
          variationObjects.push(variationObject);
        }
      }

      this.allVariation = variationObjects;
    },
    emitVariationEvent() {
      if (this.isOpenVariation) {
        this.$emit('variation', this.allVariation);
      } else {
        const variationObjects = []

        const variationObject = {
          price: this.priceNotVariation,
          qty_in_stock: this.qtyNotVariation,
        }

        variationObjects.push(variationObject)

        this.$emit('variation', variationObjects);
      }

    },
  }
};
</script>

<style>
.custom-table {
  border-collapse: collapse;
  width: 100%;
  overflow: hidden;
}

.custom-table th,
.custom-table td {
  border: 1px solid #dee2e6;
  padding: 12px;
  text-align: center;
}
</style>
