<template>
    <div class="container flex-grow-1 mt-4">
        <div class="row d-flex justify-content-center align-items-center">
            <div class="col-lg-8 p-2">
                <div class="card">
                    <!-- slide -->
                    <div class="slider">
                        <base-slider />
                    </div>
                </div>
            </div>

            <div class="col-lg-4 p-2">
                <div class="row">
                    <div class="col-md-12 pb-1 p-0">
                        <div class="card">
                            <div class="">
                                <div class="justify-content-between">
                                    <div class="">
                                        <img src="../../assets/img/banner_small2.jpg" alt="Credit Card"
                                            class="w-100 rounded-sm cover" />
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12 p-0">
                        <div class="card">
                            <div class="">
                                <div class="align-items-start justify-content-between">
                                    <div class="">
                                        <div class="div">

                                            <img src="../../assets/img/banner_small3.jpg" alt="Credit Card"
                                                class="w-100 rounded-sm" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class=" container" style="max-width: 1300px;">
            <div class="home-page-a02-nav d-flex">
                <a class="text-decoration-none text-black" href="">
                    <div class="home-page-a02-nav-a">
                        <div class="home-page-a02-img">
                            <img width="45px" class="mx-auto d-block" src="../../assets/img/banner-11.png" alt="">
                        </div>
                        <div class="home-page-a02-text">Khung Giờ Săn Sale</div>
                    </div>
                </a>
                <a class="text-decoration-none text-black" href="">
                    <div class="home-page-a02-nav-a">
                        <div class="home-page-a02-img">
                            <img width="45px" class="mx-auto d-block" src="../../assets/img/banner-12.png" alt="">
                        </div>
                        <div class="home-page-a02-text">Gì Cũng Rẻ - Mua Là Freeship</div>
                    </div>
                </a>
                <a class="text-decoration-none text-black" href="">
                    <div class="home-page-a02-nav-a">
                        <div class="home-page-a02-img">
                            <img width="45px" class="mx-auto d-block" src="../../assets/img/banner-13.png" alt="">
                        </div>
                        <div class="home-page-a02-text">Mã Giảm Giá</div>
                    </div>
                </a>
                <a class="text-decoration-none text-black" href="">
                    <div class="home-page-a02-nav-a">
                        <div class="home-page-a02-img">
                            <img width="45px" class="mx-auto d-block" src="../../assets/img/banner-14.png" alt="">
                        </div>
                        <div class="home-page-a02-text">Miễn Phí Vận Chuyển</div>
                    </div>
                </a>
                <a class="text-decoration-none text-black" href="">
                    <div class="home-page-a02-nav-a">
                        <div class="home-page-a02-img">
                            <img width="45px" class="mx-auto d-block" src="../../assets/img/banner-15.png" alt="">
                        </div>
                        <div class="home-page-a02-text">Bắt Trend - Giá Sốc</div>
                    </div>
                </a>
                <a class="text-decoration-none text-black" href="">
                    <div class="home-page-a02-nav-a">
                        <div class="home-page-a02-img">
                            <img width="45px" class="mx-auto d-block" src="../../assets/img/banner-16.png" alt="">
                        </div>
                        <div class="home-page-a02-text">Hoàn Xu Xtra Từ 100K</div>
                    </div>
                </a>
                <a class="text-decoration-none text-black" href="">
                    <div class="home-page-a02-nav-a">
                        <div class="home-page-a02-img">
                            <img width="45px" class="mx-auto d-block" src="../../assets/img/banner-17.png" alt="">
                        </div>
                        <div class="home-page-a02-text">Hàng Hiệu Giá Tốt</div>
                    </div>
                </a>
                <a class="text-decoration-none text-black" href="">
                    <div class="home-page-a02-nav-a">
                        <div class="home-page-a02-img">
                            <img width="45px" class="mx-auto d-block" src="../../assets/img/banner-18.png" alt="">
                        </div>
                        <div class="home-page-a02-text">Kho Xu Tích Lũy</div>
                    </div>
                </a>
                <a class="text-decoration-none text-black" href="">
                    <div class="home-page-a02-nav-a">
                        <div class="home-page-a02-img">
                            <img width="45px" class="mx-auto d-block" src="../../assets/img/banner-19.png" alt="">
                        </div>
                        <div class="home-page-a02-text">Nạp Điện Thoại & Thẻ Game</div>
                    </div>
                </a>
                <a class="text-decoration-none text-black" href="">
                    <div class="home-page-a02-nav-a">
                        <div class="home-page-a02-img">
                            <img width="45px" class="mx-auto d-block" src="../../assets/img/banner-20.png" alt="">
                        </div>
                        <div class="home-page-a02-text">Hàng Quốc Tế</div>
                    </div>
                </a>
            </div>
        </div>
    </div>
</template>

<script>
import BaseSlider from './slide/BaseSlider.vue';
export default {
    name: "",
    components: {
        BaseSlider
    },
    data() {

    },
    methods: {

    }
}

</script>

<style lang="scss" scoped>
.card {
    border: 0px solid;
}

.home-page-a02-nav {
    justify-content: space-around;
    background-color: #fff;
    min-height: 108px;
    /* margin: 10px auto 0; */
    margin-top: 10px;
    flex-wrap: wrap;
    transition: transform linear 0.1s;
}

.home-page-a02-nav-a {
    width: 100px;
}

.home-page-a02-nav-a:hover {
    transform: translateY(-0.0625rem);
}

.home-page-a02-img {
    margin: 18px 27.500px 8px 27.500px;
}

.home-page-a02-text {
    text-align: center;
    text-overflow: ellipsis;
    font-size: .8125rem;
    line-height: .875rem;
    max-width: 150px;
    margin-bottom: 8px;
    word-wrap: break-word;
    overflow: hidden;
    white-space: pre-line;
    text-decoration: none;

}

.home-page-b {
    max-width: 1230px;
}

.home-page-b-title {
    margin-top: 20px;
    text-transform: uppercase;
    background: #fff;
    height: 3.75rem;
    border-bottom: 1px solid rgba(0, 0, 0, .05);
    padding: 0 1.25rem;
    font-size: 1rem;
    color: rgba(0, 0, 0, .54);
    font-weight: 500;
    display: flex;
    align-items: center;
}
</style>