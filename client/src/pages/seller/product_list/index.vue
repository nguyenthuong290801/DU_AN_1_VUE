<template>
    <section>
        <div class="row p-2">
            <div class="col-12 pe-0">
                <div class="list">
                    <div class="row border-bottom">
                        <ul class="d-flex gap-5 m-0 px-3">
                            <li :class="{ 'link-ac': this.$route.path === '/portal/product/list/all' }">
                                <router-link :class="{ 'item-ac': this.$route.path === '/portal/product/list/all' }"
                                    to="/portal/product/list/all">Tất cả</router-link>
                            </li>
                            <li :class="{ 'link-ac': this.$route.path === '/portal/product/list/active' }">
                                <router-link :class="{ 'item-ac': this.$route.path === '/portal/product/list/active' }"
                                    to="/portal/product/list/active">Đang hoạt động</router-link>
                            </li>
                            <li :class="{ 'link-ac': this.$route.path === '/portal/product/list/out-of-stock' }">
                                <router-link
                                    :class="{ 'item-ac': this.$route.path === '/portal/product/list/out-of-stock' }"
                                    to="/portal/product/list/out-of-stock">Hết hàng</router-link>
                            </li>
                            <li :class="{ 'link-ac': this.$route.path === '/portal/product/list/pending' }">
                                <router-link :class="{ 'item-ac': this.$route.path === '/portal/product/list/pending' }"
                                    to="/portal/product/list/pending">Chờ duyệt</router-link>
                            </li>
                            <li :class="{ 'link-ac': this.$route.path === '/portal/product/list/violate' }">
                                <router-link :class="{ 'item-ac': this.$route.path === '/portal/product/list/violate' }"
                                    to="/portal/product/list/violate">Vi phạm</router-link>
                            </li>
                        </ul>
                    </div>
                    <div class="row d-flex flex-nowrap justify-content-between gap-2 mt-3">
                        <form @submit.prevent="submitProductSearch" class="w-auto d-flex gap-3">
                            <div class="row">
                                <div class="form-input custom-dropdown" ref="dropdown">
                                    <div class="cursor-pointer">
                                        <div class="choice" @click="toggleDropdown">
                                            {{ selectedOption || 'Chọn danh mục' }}
                                            <i v-if="showDropdown" class="bi bi-chevron-up mx-1"></i>
                                            <i v-else class="bi bi-chevron-down mx-1"></i>
                                        </div>
                                        <div v-if="showDropdown" class="dropdown-content">
                                            <div :class="{ 'dropdown-item': true, 'dropdown-ac': selectedOption == 'Tên sản phẩm' }"
                                                @click="selectOption('Tên sản phẩm')">Tên sản phẩm</div>
                                            <div :class="{ 'dropdown-item': true, 'dropdown-ac': selectedOption == 'SKU sản phẩm' }"
                                                @click="selectOption('SKU sản phẩm')">SKU sản phẩm</div>
                                            <div :class="{ 'dropdown-item': true, 'dropdown-ac': selectedOption == 'SKU phân loại' }"
                                                @click="selectOption('SKU phân loại')">SKU phân loại
                                            </div>
                                        </div>
                                    </div>
                                    <input type="text" class="input-control" v-model="search"
                                        placeholder="Vui lòng nhập ít nhất 2 từ">

                                </div>
                            </div>
                            <button @click="submitProductSearch" class="bt-primary-ac w-auto">Tìm kiếm</button>
                        </form>
                        <router-link v-if="this.$route.path == '/portal/product/list/all'" to="/portal/product/new"
                            class="bt-primary-ac w-auto text-decoration-none text-white align-items-center d-flex"
                            style="font-size: 16px;">
                            <i class="bi bi-plus"></i> Thêm một sản phẩm
                        </router-link>
                    </div>
                    <div class="row">
                        <router-view></router-view>
                    </div>
                </div>
            </div>
        </div>
    </section>
</template>
  
<script>
import d83309b from '@/assets/img/sprite.src.pages.Index.d83309b.png';
import { slugify } from 'transliteration';

export default {
    data() {
        return {
            showDropdown: false,
            selectedOption: 'Tên sản phẩm',
            d83309b: d83309b,
            search: null,
        };
    },
    methods: {
        submitProductSearch() {
            const search = slugify(this.search, { separator: '-' })
            this.$router.push({
                path: `/portal/product/list/all/${search}`
            });
        },
        toggleDropdown() {
            this.showDropdown = !this.showDropdown;
            if (this.showDropdown) {
                document.addEventListener('click', this.closeDropdown);
            } else {
                document.removeEventListener('click', this.closeDropdown);
            }
        },
        selectOption(option) {
            this.selectedOption = option;
            this.showDropdown = false;
            document.removeEventListener('click', this.closeDropdown);
        },
        closeDropdown(event) {
            if (!this.$refs.dropdown.contains(event.target)) {
                this.showDropdown = false;
                document.removeEventListener('click', this.closeDropdown);
            }
        },
    },
};
</script>
  
<style lang="scss" scoped>
@import '@/assets/style/main.scss';

.custom-dropdown {
    position: relative;
    z-index: 1;
    overflow: unset;
    width: 500px;
}

.dropdown-content {
    position: absolute;
    top: 45px;
    left: 0;
    z-index: 1;
    background-color: #fff;
    width: 135px;
    border-radius: 5px;
    border: 1px solid #ccc;
}

.dropdown-item {
    padding: 10px;
    cursor: pointer;
}

.dropdown-ac {
    color: #C6303E;
    font-weight: 500;
}

.dropdown-item:hover {
    background: rgba(210, 210, 210, 0.2);
}

.choice {
    width: 120px;
    border-right: 1px solid #ccc;
    user-select: none;
}

.menu-list {
    background-color: transparent;
    border: none;

    .item-list {
        text-decoration: none;
        font-size: 14px;
        color: #000;
    }
}

ul {
    list-style: none;
    padding: 0;
    margin-left: 25px;
}

li {
    padding-bottom: 15px;
    a {
        color: #6e6e6e;
        text-decoration: none;
        font-size: 16px !important;
        padding: 0 20px;

        &:hover {
            color: #555555;
        }
    }
}

.link-ac {
    border-bottom: 3px solid #C6303E !important;
}

.item-ac {
    color: #C6303E !important;
    font-weight: 500;
}
</style>
  