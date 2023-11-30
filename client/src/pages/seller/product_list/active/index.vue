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
                <td><label class="label-input w-auto text-center text-nowrap">Doanh số</label></td>
                <td><label class="label-input w-auto text-center text-nowrap">Thao tác</label></td>
            </tr>
        </thead>
        <tbody>
        </tbody>
    </table>
    <div class="not-product d-flex flex-column">
        <img :src="d83309b" alt="" class="img-fluid">
        <div class="text-small">Không tìm thấy sản phẩm</div>
    </div>
</template>
  
<script>
import d83309b from '@/assets/img/sprite.src.pages.Index.d83309b.png';

export default {
    data() {
        return {
            d83309b: d83309b
        };
    },
};
</script>

<style lang="scss" scoped>
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
        width:100px;
        height:70px;
    }

}
</style>
  