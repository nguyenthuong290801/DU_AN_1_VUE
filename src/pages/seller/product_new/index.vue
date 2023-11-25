<template>
  <section id="section">
    <form @submit.prevent="submitProduct">
      <div class="row">
        <div class="col-10 container-box bg-white" @dragover.prevent>
          <div class="h5">Thông tin cơ bản</div>
          <div class="p-3 d-flex gap-3">
            <label class="text-nowrap"><span class="text-danger">* </span>Hình ảnh sản phẩm</label>
            <div class="d-flex flex-column">
              <div class="d-flex gap-3">
                <DropImage @images="handleImages" @imagesRemove="handleRemoveImages" :isMy="true" :qty="9"></DropImage>
              </div>
              <small v-if="errorImage" class="mt-2 text-small text-danger"><i class="bi bi-1-circle-fill"></i> Không được
                để trống!</small>
            </div>
          </div>
          <div class="p-3 d-flex justify-content-between gap-3">
            <label class="label-input"><span class="text-danger">* </span>Tên sản phẩm</label>
            <div class="d-flex flex-column w-100">
              <div class="form-input">
                <input type="text" class="input-control" v-model="product.name" @input="checkCharacterCount"
                  placeholder="Nhập vào">
                <p class="m-0 p-10 bg-light">{{ characterCount }} / 120 ký tự</p>
              </div>
              <small v-if="errorNameProductRequired" class="mt-2 text-small text-danger"><i
                  class="bi bi-1-circle-fill"></i> Không được để trống!</small>
            </div>
          </div>
          <div class="p-3 d-flex justify-content-between gap-3">
            <label class="label-input"><span class="text-danger">* </span>Ngành hàng</label>
            <div class="d-flex flex-column w-100">
              <div class="form-input">
                <input type="text" class="btn-open-modal input-control cursor-pointer" @click="openModal"
                  v-model="valueModel" placeholder="Chọn ngành hàng" />
              </div>
              <small v-if="errorCategoryRequired" class="mt-2 text-small text-danger"><i class="bi bi-1-circle-fill"></i>
                Không được để trống!</small>
            </div>
          </div>
          <div>
            <div class="modal" :class="{ 'show': showModal }">
              <div class="modal-content">
                <div class="d-flex justify-content-between">
                  <div class="fs-5">Ngành hàng</div>
                  <span class="close" @click="closeModal"><i class="bi bi-x"></i></span>
                </div>
                <div class="mt-3">
                  <CategoryTree @list_id="handleListId" :dataCategories="categories"
                    :categories="categories.filter(category => category.parent_category_id === null)" />
                </div>
              </div>
            </div>
          </div>
          <div class="d-flex flex-column">
            <Description @description="handleDescription" :errorDescriptionR="errorDescriptionRequired"></Description>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-10 container-box bg-white">
          <div class="h5">Thông tin chi tiết</div>
          <div v-if="optionsName.length > 0">
            <span class="text-small">Điền {{ this.optionsName.length }} thông tin thuộc tính để tăng
              mức độ hiển thị cho sản phẩm</span>
            <div v-for="(itemName, index) in optionsName" :key="index">
              <div class="row p-3" v-if="index % 2 === 0">
                <DropdownInput @valueOption="value => handleOption(value, itemName)" :label="itemName"
                  :options="extractValues(optionsValue[index])" :errorBrandR="errorBrandRequired" />
                <DropdownInput @valueOption="value => handleOption(value, optionsName[index + 1])"
                  v-if="optionsName[index + 1]" :label="optionsName[index + 1]"
                  :options="extractValues(optionsValue[index + 1])" />
              </div>
            </div>
          </div>
          <small v-else>Chọn ngành hàng để có thể sửa đổi</small>
        </div>
      </div>
      <div class="row">
        <div class="col-10 container-box bg-white">
          <div class="h5">Thông tin bán hàng</div>
          <Variation @variation="handleVariation" @openVariation="handleOpenVariation" v-if="optionsName.length > 0"
            :errorPriceR="errorPriceR" :errorQtyR="errorQtyR"></Variation>
          <small v-else>Chọn ngành hàng để có thể sửa đổi</small>
        </div>
      </div>
      <div class="row">
        <div class="col-10 container-box bg-white">
          <div class="h5">Vận chuyển</div>
          <Transport @totalTransport="HandleTransport" v-if="optionsName.length > 0" :errorWeightR="errorWeightR">
          </Transport>
          <small v-else>Chọn ngành hàng để có thể sửa đổi</small>
        </div>
      </div>
      <div class="row">
        <div class="col-10 container-box bg-white">
          <div class="h5">Thông tin khác</div>
          <More v-if="optionsName.length > 0" @preOrderDay="handlePreOrder" @SKU="handleSKU" @status="handleStatus">
          </More>
          <small v-else>Chọn ngành hàng để có thể sửa đổi</small>
        </div>
      </div>
      <div class="row">
        <div v-scroll="handleScroll" class="col-10 container-box bg-white">
          <button class="float-end bt-primary-ac" type="submit">Lưu sản phẩm</button>
        </div>
      </div>
    </form>
  </section>
</template>

<script>
import CategoryTree from '@/components/seller/product_new/CategoryTree.vue'
import DropdownInput from '@/components/seller/product_new/DropdownInput.vue';
import DropImage from '@/components/seller/product_new/DropImage.vue';
import Description from '@/components/seller/product_new/Description.vue';
import Variation from '@/components/seller/product_new/Variation.vue';
import Transport from '@/components/seller/product_new/Transport.vue';
import More from '@/components/seller/product_new/More.vue';
import axios from 'axios';

export default {
  components: {
    CategoryTree,
    DropdownInput,
    DropImage,
    Description,
    Variation,
    Transport,
    More
  },
  data() {
    return {
      data: [],
      optionsName: [],
      optionsValue: [],
      showModal: false,
      isFixed: false,
      errorNameProductRequired: false,
      errorCategoryRequired: false,
      errorDescriptionRequired: false,
      errorBrandRequired: false,
      errorPriceR: false,
      errorQtyR: false,
      errorWeightR: false,
      errorImage: false,
      isOpenVariation: false,
      characterCount: 0,
      valueModel: null,
      product: {
        name: null,
        product_category_id: null,
        description: null,
      },
      product_media: [],
      product_detail: {
        price: null,
        qty_in_stock: null,
        detail: [],
      },
      shipping: [],
      variation: [],
      product_more: {
        pre_order: '2',
        status: 'Mới',
        SKU: null
      },
      categories: [],
    };
  },
  mounted() {
    this.fetchProductCategoryFromAPI()
  },
  methods: {
    openModal() {
      this.showModal = true
    },
    closeModal() {
      this.showModal = false
    },
    checkCharacterCount() {
      if (this.product.name !== null) {
        this.characterCount = this.product.name.length
        if (this.characterCount > 120) {
          this.product.name = this.product.name.substring(0, 120)
          this.characterCount = 120
        }
      }

      if (this.product.name == '') {
        this.errorNameProductRequired = true
      } else {
        this.errorNameProductRequired = false
      }
    },
    handleListId(list_id) {
      if (list_id) {
        this.showModal = false
      }
      this.product.product_category_id = list_id[3]
      this.fetchAttributeOptionFromAPI(list_id[3])
      this.valueModel = ''
      let self = this

      for (let count = 0; count < list_id.length; count++) {
        if (list_id[count]) {
          let isLastElement = count === list_id.length - 1
          this.categories.forEach(function (value) {
            if (value.id == list_id[count] && value.category_name !== null) {
              self.valueModel += value.category_name
              if (!isLastElement) {
                self.valueModel += ' ➜ '
              }
            }
          })
        }
      }
    },
    handleImages(images) {
      for (let i = 0; i < images.length; i++) {
        const imageUrl = images[i];

        const isImageExists = this.product_media.some(item => item.url === imageUrl);

        if (!isImageExists) {
          const imagesFor = {
            type: 'image',
            url: imageUrl
          };

          this.product_media.push(imagesFor);
        }
      }
    },
    handleRemoveImages(index) {
      this.product_media.splice(index, 1);
    },
    handleDescription(description) {
      if (description) {
        this.product.description = description
      }
    },
    handleOption(value, label) {
      const newOption = {
        attribute_name: label,
        value: value,
      };

      this.product_detail.detail.push(newOption)
    },
    HandleTransport(totalTransport) {
      this.shipping = totalTransport
    },
    extractValues(obj) {
      return Object.values(obj).map(item => item.value)
    },
    handlePreOrder(preOrderDay) {
      this.product_more.pre_order = preOrderDay
    },
    handleStatus(status) {
      this.product_more.status = status
    },
    handleSKU(SKU) {
      this.product_more.SKU = SKU
    },
    fetchProductCategoryFromAPI() {
      axios.get('/api/product-category')
        .then(response => {
          this.categories = response.data.data
        })
        .catch(error => {
          console.error('Error fetching data:', error)
        });
    },
    fetchAttributeOptionFromAPI(attributeId) {
      axios.get(`/api/attribute-option/${attributeId}`)
        .then(response => {
          this.optionsName = response.data.data.attribute_name
          this.optionsValue = response.data.data.attribute_value
        })
        .catch(error => {
          console.error('Error fetching data:', error)
          this.optionsName = []
          this.optionsValue = []
        });
    },
    handleOpenVariation(openVariation) {
      this.isOpenVariation = openVariation
    },
    handleVariation(variation) {
      if (this.isOpenVariation) {
        this.variation = variation
      } else {
        this.product_detail.price = variation[0].price
        this.product_detail.qty_in_stock = variation[0].qty_in_stock
      }
    },
    submitProduct() {
      let hasError = false;

      if (this.product.product_category_id == null) {
        this.errorCategoryRequired = true;
        hasError = true;
      }

      if (this.product.name == null) {
        this.errorNameProductRequired = true;
        hasError = true;
      }

      if (this.product.description == null) {
        this.errorDescriptionRequired = true;
        hasError = true;
      } else {
        this.errorDescriptionRequired = false;
      }

      if (this.product_media.length <= 0) {
        this.errorImage = true;
        hasError = true;
      } else {
        this.errorImage = false;
      }

      if (!this.isOpenVariation) {
        if (this.product_detail.price == null && this.product_detail.qty_in_stock == null) {
          this.errorQtyR = true;
          this.errorPriceR = true;
          hasError = true;
        } else {
          this.errorQtyR = false;
          this.errorPriceR = false;
        }
      }

      if (this.shipping <= 0) {
        this.errorWeightR = true;
        hasError = true;
      } else {
        this.errorWeightR = false;
      }

      if (this.product_detail.detail.length <= 0) {
        this.errorBrandRequired = true;
        hasError = true;
      } else {
        let hasNonBrandAttribute = false;

        for (const option of this.product_detail.detail) {
          const attributeName = option.attribute_name;
          if (attributeName == 'Thương hiệu') {
            hasNonBrandAttribute = false;
            break;
          } else {
            hasNonBrandAttribute = true;
          }
        }

        this.errorBrandRequired = hasNonBrandAttribute;
        if (hasNonBrandAttribute) {
          hasError = true;
        }
      }
      console.log(hasError);
      if (!hasError) {
        if (this.variation.length <= 0) {
          this.variation = false
        }

        const data = {
          'product': this.product,
          'product_media': this.product_media,
          'product_detail': this.product_detail,
          'variation_option': this.variation,
          'shipping_method': this.shipping,
          'product_more': this.product_more
        };

        axios.post(`/api/product/new`, data)
          .then(response => {
            console.log(response.data)
            alert('Thanh cong')
          })
          .catch(error => {
            console.error('Error submitting product:', error);
          });
      }
    }
  },
};
</script>

<style lang="scss">
@import "@/assets/style/main";
@import "@/assets/style/var";

.drop-area {
  border: 1px dashed #ccc;
  border-radius: 10px;
  padding: 10px;
  text-align: center;
  cursor: pointer;
  width: 100px;
  height: 130px;
  transition: all 0.3s ease-in-out;
  box-shadow: 0px 1px 0px $color-boxshadow;
}

img {
  object-fit: contain;
  box-shadow: 0px 1px 0px $color-boxshadow;
}

.hover-icon {
  &:hover {
    display: block;
  }
}

.area-control {
  height: 100px;
}

.modal {
  display: none;
  position: fixed;
  z-index: 1;
  left: 0;
  top: 0;
  width: 100%;
  height: 100%;
  overflow: auto;
  background-color: $color-bg-modal;
}

.modal-content {
  background-color: #fefefe;
  position: fixed;
  left: 50%;
  top: 50%;
  transform: translate(-50%, -50%);
  padding: 20px;
  border: 0.5px solid $color-boxshadow;
  width: 90%;
}

.close {
  color: #aaaaaa;
  float: right;
  font-size: 28px;
  font-weight: bold;
}

.close:hover,
.close:focus {
  color: #000;
  text-decoration: none;
  cursor: pointer;
}

.show {
  display: block;
}
</style>