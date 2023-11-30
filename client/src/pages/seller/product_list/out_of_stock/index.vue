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
        <tbody v-for="(product, index) in products" :key="index">
                <tr v-for="(product, index) in products[index]" :key="index">
                    <td><label class="label-input w-auto text-center text-nowrap">{{ product.name }}</label></td>
                    <td><label class="label-input w-auto text-center text-nowrap">{{ product.SKU || 'Chưa có' }}</label>
                    </td>
                    <td><label class="label-input w-auto text-center text-nowrap">{{
                        productCategory[index][0].category_name }}</label></td>
                    <td><label class="label-input w-auto text-center text-nowrap">{{ productDetails[index][0].price
                    }}</label>
                    </td>
                    <td><label class="label-input w-auto text-center text-nowrap">{{
                        productDetails[index][0].qty_in_stock }}</label></td>
                    <td>
                        <i class="bi bi-pencil bg-danger text-white px-2 py-1 rounded me-2 cursor-pointer"></i>
                        <i class="bi bi-trash bg-danger text-white px-2 py-1 rounded cursor-pointer"
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
                    <button type="button" class="bt-primary-ac me-2" @click="closeConfirmDeleteModal">Hủy</button>
                    <button type="submit" class="bt-primary-ac" @click="confirmDelete">Xóa</button>
                </div>
            </div>
        </div>
    </form>
</template>
  
<script>
import d83309b from '@/assets/img/sprite.src.pages.Index.d83309b.png';
import axios from 'axios';

export default {
    data() {
        return {
            d83309b: d83309b,
            products: [],
            productDetails: [],
            productCategory: [],
            deletingProductIndex: null,
            showModal: false,
        };
    },
    mounted() {
        this.fetched();
    },
    methods: {
        fetched() {
            axios.get('/api/product/list/out-of-stock')
                .then(response => {
                    this.products = response.data.data[0]
                    this.productDetails = response.data.data[1]
                    this.productCategory = response.data.data[2]
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
                    this.fetched();
                    this.showModal = false;
                })
                .catch(error => {
                    console.error('Error fetching data:', error)
                });
        }
    }
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
  