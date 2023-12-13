<template>
    <table class="custom-table mt-3">
        <thead class="bg-light">
            <tr>
                <td><label class="label-input w-auto text-center text-nowrap">Tên sản phẩm</label></td>
                <td><label class="label-input w-auto text-center text-nowrap">SKU phân loại</label></td>
                <td><label class="label-input w-auto text-center text-nowrap">Phân loại hàng</label>
                </td>
                <td><label class="label-input w-auto text-center text-nowrap">Giá</label></td>
                <td><label class="label-input w-auto text-center text-nowrap">Kho hàng</label></td>
                <td><label class="label-input w-auto text-center text-nowrap">Thao tác</label></td>
            </tr>
        </thead>
        <tbody>
            <tr v-for="(product, index) in products.data" :key="index">
                <td><label class="label-input w-auto text-center text-nowrap">{{ product.name || 'Chưa có' }}</label></td>
                <td><label class="label-input w-auto text-center text-nowrap">{{ product.product_variation || 'Chưa có'
                }}</label></td>
                <td><label class="label-input w-auto text-center text-nowrap">{{ product.product_category || 'Chưa có'
                }}</label></td>
                <td><label class="label-input w-auto text-center text-nowrap">{{ formatPrice(product.price) || 'Chưa có'
                }}</label>
                </td>
                <td><label class="label-input w-auto text-center text-nowrap">{{ product.qty_in_stock || 'Hết hàng'
                }}</label></td>
                <td>
                    <i class="bi bi-pencil-fill text-danger px-2 py-1 rounded me-2 cursor-pointer"
                        @click="handleEditProduct(product.id)"></i>
                    <i class="bi bi-trash-fill text-danger px-2 py-1 rounded cursor-pointer"
                        @click="openConfirmDeleteModal(product.id)"></i>
                </td>
            </tr>
        </tbody>
    </table>
    <div v-if="products.length <= 0" class="not-product d-flex flex-column">
        <img :src="d83309b" alt="" class="img-fluid">
        <div class="text-small">Không tìm thấy sản phẩm</div>

    </div>

    <form @submit.prevent="confirmDelete">
        <div v-if="showModal" class="modal-main">
            <div class="modal-box">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Xác nhận xóa</h5>
                </div>
                <div class="modal-body">
                    Bạn có chắc chắn muốn xóa sản phẩm này không?
                </div>
                <div class="modal-footer">
                    <button type="button" class="bt-primary-sc me-2" @click="closeConfirmDeleteModal">Hủy</button>
                    <button type="submit" class="bt-primary-ac" @click="confirmDelete">Xóa</button>
                </div>
            </div>
        </div>
    </form>
</template>
  
<script>
import d83309b from '@/assets/img/sprite.src.pages.Index.d83309b.png';
import axios from 'axios';
import numeral from 'numeral';

export default {
    props: ['search'],
    data() {
        return {
            d83309b: d83309b,
            products: [],
            productDetails: [],
            productCategory: [],
            productConfiguration: [],
            productVariation: [],
            deletingProductIndex: null,
            showModal: false,
        };
    },
    watch: {
        search: function (newSearch, oldSearch) {
            if (newSearch) {
                this.fetchedSearch(this.search);
            }
        },
    },
    mounted() {
        this.checkAndFetch();
    },
    beforeRouteUpdate(to, from, next) {
        this.checkAndFetch();
        next();
    },
    methods: {
        fetchAPI() {
            const apiPromise = axios.get('/api/product')
            const apiPromise2 = axios.get('/api/product-detail')
            const apiPromise3 = axios.get('/api/product-category')
            const apiPromise4 = axios.get('/api/product-variation')
            const apiPromise5 = axios.get('/api/product-configuration')
            Promise.all([apiPromise, apiPromise2, apiPromise3, apiPromise4, apiPromise5])
                .then(response => {
                    this.products = response[0].data
                    this.productDetails = response[1].data
                    this.productCategory = response[2].data
                    this.productVariation = response[3].data
                    this.productConfiguration = response[4].data
                    this.handleProduct(this.products, this.productDetails, this.productCategory, this.productVariation, this.productConfiguration)

                })
                .catch(error => {
                    console.error('Error fetching data:', error)
                });
        },
        handleProduct(products, productDetail, productCategory, productVariation, productConfiguration) {
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

            Object.entries(products).forEach(([keyOne, valueOne]) => {
                if (keyOne == 'data') {
                    Object.entries(valueOne).forEach(([keyTwo, valueTwo]) => {
                        Object.entries(productCategory).forEach(([keyThree, valueThree]) => {
                            if (keyOne == 'data') {
                                Object.entries(valueThree).forEach(([keyFour, valueFour]) => {
                                    if (valueTwo.product_category_id === valueFour.id) {
                                        if (
                                            this.products.data[keyTwo].product_category == null ||
                                            this.products.data[keyTwo].product_category == undefined
                                        ) {
                                            this.products.data[keyTwo].product_category = valueFour.category_name
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
            return numeral(price).format('0,0 VND');
        },
        checkAndFetch() {
            if (this.$route.params.search) {
                this.fetchedSearch(this.$route.params.search);
            } else {
                this.fetchAPI();
            }
        },
        fetchedSearch(search) {
            axios.get(`/api/product/list/all/${search}`)
                .then(response => {
                    this.products.data = response.data.data
                })
                .catch(error => {
                    console.error('Error fetching data:', error)
                });
        },
        openConfirmDeleteModal(index) {
            this.deletingProductIndex = index;
            this.showModal = true;
        },
        closeConfirmDeleteModal() {
            this.showModal = false;
        },
        confirmDelete() {
            const index = this.deletingProductIndex;
            axios.post(`/api/product/delete/${index}`)
                .then(response => {
                    console.log(response.data.message)
                    this.fetchAPI();
                    this.showModal = false;
                })
                .catch(error => {
                    console.error('Error fetching data:', error)
                });
        },
        handleEditProduct(id) {
            this.$router.push({
                path: `/portal/seller/product/edit/${id}`
            });
        }
    },
};
</script>

<style lang="scss" scoped>
@import '@/assets/style/main.scss';

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

.not-product {
    height: 450px;
    display: flex;
    align-items: center;
    justify-content: center;

    img {
        width: 100px;
        height: 70px;
    }

}

.modal-box {
    position: fixed;
    top: 15%;
    left: 50%;
    width: 50%;
    border: 1px solid #ccc;
    border-radius: 10px;
    padding: 15px;
    background-color: #fff;
    transform: translate(-50%, -15%);
}

.modal-main {
    position: fixed;
    top: 0;
    left: 0;
    bottom: 0;
    right: 0;
    background-color: rgba(0, 0, 0, 0.1);
    z-index: 1000;
}
</style>
  