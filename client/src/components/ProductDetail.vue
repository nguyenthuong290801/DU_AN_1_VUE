<template>
  <div class="container detail-page">
    <div class="row detail-page-a">
      <div class="col-md-5 detai-page-b">
        <div class="detail-page-b-img">
          <img src="../assets/img/item-29.jpeg" alt="" width="466px" id="main-img">
          <p class="mt-2">
            <img class="me-1 hov" src="../assets/img/item-29.jpeg" alt="" width="90px">
            <img class="me-1 hov" src="../assets/img/item-28.jpeg" alt="" width="90px">
            <img class="me-1 hov" src="../assets/img/item-30.jpeg" alt="" width="90px">
            <img class="me-1 hov" src="../assets/img/item-31.jpeg" alt="" width="90px">
            <img class="me-1 hov" src="../assets/img/item-31.jpeg" alt="" width="90px">
          </p>
        </div>
        <div class="d-flex detail-page-b-text">
          <div class="d-flex col-md detail-page-b-text-01 nav-item-pipe">
            <div class="mt-1 mx-1">Chia sẻ:</div>
            <div class="detail-page-b-text-a">
              <i class="bi bi-messenger" style="font-size:24px; color: #0384ff;"></i>
            </div>
            <div class="detail-page-b-text-a">
              <i class="bi bi-facebook" style="font-size:24px; color: #3b5999;"></i>
            </div>
            <div class="detail-page-b-text-a">
              <i class="bi bi-pinterest" style="font-size:24px; color: #de0217;"></i>
            </div>
            <div class="detail-page-b-text-a">
              <i class="bi bi-twitter" style="font-size:24px; color: #10c2ff;"></i>
            </div>
          </div>
          <div class="d-flex col-md detail-page-b-text-01 mt-2">
            <button class="border-0 mb-5" style="background: #fff">
              <svg width="24" height="20">
                <path
                  d="M19.469 1.262c-5.284-1.53-7.47 4.142-7.47 4.142S9.815-.269 4.532 1.262C-1.937 3.138.44 13.832 12 19.333c11.559-5.501 13.938-16.195 7.469-18.07z"
                  stroke="#ff424f" stroke-width="1.5" fill="none" fill-rule="evenodd" stroke-linejoin="round">
                </path>
              </svg>
            </button>
            <div class="">Đã thích (7,5k)</div>
          </div>
        </div>
      </div>
      <div class="col-md-7 detail-page-c">
        <div class="detail-page-c-a">
          <div class="detail-page-c-a-01" v-if="product">
            <span>{{ product.name }}</span> <!-- tên -->
          </div>
          <div class="row detail-page-c-a-02">
            <div class="d-flex" style="margin: 10px 0;">
              <div class="detail-page-c-a-02-text-a">5.0</div>
              <div class="detail-page-c-a-02-start mt-1">
                <i class="bi bi-star-fill" style="color: #ee4d2d; font-size: 14px;"></i>
                <i class="bi bi-star-fill" style="color: #ee4d2d; font-size: 14px;"></i>
                <i class="bi bi-star-fill" style="color: #ee4d2d; font-size: 14px;"></i>
                <i class="bi bi-star-fill" style="color: #ee4d2d; font-size: 14px;"></i>
                <i class="bi bi-star-fill" style="color: #ee4d2d; font-size: 14px;"></i>
              </div>
              <div class="d-flex detail-page-c-a-02-text-01" style="margin:0;">
                <div class="detail-page-c-a-02-text-a">420</div>
                <div class="detail-page-c-a-02-text-b">Đánh giá</div>
              </div>
              <div class="d-flex detail-page-c-a-02-text-01" style="margin:0;">
                <div class="detail-page-c-a-02-text-a">800</div>
                <div class="detail-page-c-a-02-text-b">Đã bán</div>
                <i class="fa-regular fa-circle-question"
                  style="font-size: 14px; padding: 11px 0  0 5px; color: #767676;;"></i>
              </div>
              <button class="detail-page-c-a-02-button">Tố cáo</button>
            </div>
          </div>
          <div class="detail-page-c-a-03">
            <div class="detail-page-c-a-03-a">
              <div class="d-flex detail-page-c-a-03-text" v-if="product">
                <del class="detail-page-c-a-03-text-02 mx-3 fw-normal fs-5 text-body-tertiary mt-2">35.000</del>
                <div class="detail-page-c-a-03-text-01">₫</div>
                <div class="detail-page-c-a-03-text-02">{{ formatPrice(product.price) }}</div>
                <div class="mt-2 mb-1 sale mx-3 text-light">50% GIẢM</div>
              </div>
            </div>
          </div>
          <div class="detail-page-c-a-04">
            <div class="detail-page-c-a-04-a">
              <div class="d-flex">
                <div class="detail-page-c-a-04-a-text-01">Mã giảm giá của shop</div>
                <div class="detail-page-c-a-04-a-text-02 pipe2">
                  <div class="">10% Giảm</div>
                </div>
                <div class="detail-page-c-a-04-a-text-02 pipe2">
                  <div class="">50k Giảm</div>
                </div>
                <div class="detail-page-c-a-04-a-text-02 pipe2">
                  <div class="">50% Giảm</div>
                </div>
              </div>
            </div>
            <div class="detail-page-c-a-04-a">
              <div class="d-flex">
                <div class="detail-page-c-a-04-a-text-01">Deal Sốc</div>
                <div class="detail-page-c-a-05-a-text-01">
                  <div class="">mua kèm deal sốc</div>
                </div>
              </div>
            </div>
            <div class="detail-page-c-a-04-a">
              <div class="d-flex">
                <div class="detail-page-c-a-04-a-text-01">Vận Chuyển</div>
                <div class="detail-page-c-a-06-a-text-01">
                  <i class="bi bi-truck" style="color:#00c7a3; font-size: 18px;"></i>
                  <div style="margin-left: 10px;">Miễn phí vận chuyển</div>
                </div>
              </div>
            </div>
            <div class="detail-page-c-a-04-a" v-if="product">
              <div class="d-flex">
                <div class="detail-page-c-a-04-a-text-01">Số Lượng</div>
                <div class="d-flex detail-page-c-a-07-a-text-01">
                  <div class="amount-product" style="margin-right: 15px">
                    <div class="amount-product-a">
                      <button @click="handleQty('minus')" class="amount-product-button">
                        <i class="bi bi-dash-lg" style="color: #999999"></i>
                      </button>
                      <input class="amount-product-input" type="text" v-model="qty">
                      <button @click="handleQty('plus')" class="amount-product-button">
                        <i class="bi bi-plus" style="color: #999999"></i>
                      </button>
                    </div>

                  </div>
                  <div style="margin-left: 10px;">{{ product.qty_in_stock }} sản phẩm có sẵn</div>
                </div>
              </div>
            </div>
          </div>
          <div class="detail-page-c-cart">
            <button @click="handleAddToCart" type="button" class="detail-page-c-cart-a detail-page-c-cart-aa">
              <i class="bi bi-plus"></i> Thêm Vào Giỏ Hàng
            </button>
            <button type="button" class="detail-page-c-cart-a text-light px-5 detail-page-c-cart-a01">Mua Ngay</button>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="container detail-page">
    <div class="d-flex align-items-center">
      <div class="d-flex">
        <div class="m-3 d-flex justify-content-center align-items-center" style="border-right: 1px solid #ccc">
          <img style="border-radius: 50%" src="../assets/img/avt.jpg" height="70" alt="View Badge User"
            data-app-dark-img="illustrations/man-with-laptop-dark.png"
            data-app-light-img="illustrations/man-with-laptop-light.png" />
          <div class="mt-1 mx-1 ms-2">
            <div class="text-black mx-0 fw-semibold" style="font-size: 15px">TapHoaOnl_92</div>
            <div class="text-black mx-0 fs-6 text-body-tertiary">Online 4 giờ trước</div>
            <div class="chat mt-2 d-flex">
              <button class="detail-page-c-cart-a px-3 py-1" style="">
                <svg viewBox="0 0 16 16" width="15px">
                  <g fill-rule="evenodd">
                    <path fill="#ee4d2d"
                      d="M15 4a1 1 0 01.993.883L16 5v9.932a.5.5 0 01-.82.385l-2.061-1.718-8.199.001a1 1 0 01-.98-.8l-.016-.117-.108-1.284 8.058.001a2 2 0 001.976-1.692l.018-.155L14.293 4H15zm-2.48-4a1 1 0 011 1l-.003.077-.646 8.4a1 1 0 01-.997.923l-8.994-.001-2.06 1.718a.5.5 0 01-.233.108l-.087.007a.5.5 0 01-.492-.41L0 11.732V1a1 1 0 011-1h11.52zM3.646 4.246a.5.5 0 000 .708c.305.304.694.526 1.146.682A4.936 4.936 0 006.4 5.9c.464 0 1.02-.062 1.608-.264.452-.156.841-.378 1.146-.682a.5.5 0 10-.708-.708c-.185.186-.445.335-.764.444a4.004 4.004 0 01-2.564 0c-.319-.11-.579-.258-.764-.444a.5.5 0 00-.708 0z">
                    </path>
                  </g>
                </svg>
                <span>Chat Ngay</span>
              </button>
              <button class="px-3 py-1 mx-1 bg-light" style="border: 1px solid #ccc">
                <a class="text-decoration-none text-body-tertiary" href="">
                  <svg enable-background="new 0 0 15 15" viewBox="0 0 15 15" x="0" y="0" stroke-width="0" width="15px">
                    <g fill-rule="evenodd">
                      <path fill="rgb(85, 85, 85)"
                        d="m13 1.9c-.2-.5-.8-1-1.4-1h-8.4c-.6.1-1.2.5-1.4 1l-1.4 4.3c0 .8.3 1.6.9 2.1v4.8c0 .6.5 1 1.1 1h10.2c.6 0 1.1-.5 1.1-1v-4.6c.6-.4.9-1.2.9-2.3zm-11.4 3.4 1-3c .1-.2.4-.4.6-.4h8.3c.3 0 .5.2.6.4l1 3zm .6 3.5h.4c.7 0 1.4-.3 1.8-.8.4.5.9.8 1.5.8.7 0 1.3-.5 1.5-.8.2.3.8.8 1.5.8.6 0 1.1-.3 1.5-.8.4.5 1.1.8 1.7.8h.4v3.9c0 .1 0 .2-.1.3s-.2.1-.3.1h-9.5c-.1 0-.2 0-.3-.1s-.1-.2-.1-.3zm8.8-1.7h-1v .1s0 .3-.2.6c-.2.1-.5.2-.9.2-.3 0-.6-.1-.8-.3-.2-.3-.2-.6-.2-.6v-.1h-1v .1s0 .3-.2.5c-.2.3-.5.4-.8.4-1 0-1-.8-1-.8h-1c0 .8-.7.8-1.3.8s-1.1-1-1.2-1.7h12.1c0 .2-.1.9-.5 1.4-.2.2-.5.3-.8.3-1.2 0-1.2-.8-1.2-.9z">
                      </path>
                    </g>
                  </svg>
                  <span>Xem Shop</span>
                </a>
              </button>
            </div>
          </div>
        </div>
        <div class="m-3 d-flex justify-content-center align-items-center">
          <div class="mt-3 me-2 text-body-tertiary">
            <p>
              Đánh giá
            </p>
            <p>
              Sản phẩm
            </p>
          </div>
          <div class="mt-3 ms-4 mx-5" style="color: #ee4d2d;">
            <p>
              18
            </p>
            <p>
              40
            </p>
          </div>

          <div class="mx-3 mt-3 me-2 text-body-tertiary">
            <p>
              Tỉ Lệ Phản Hồi
            </p>
            <p>
              Thời Gian Phản Hồ
            </p>
          </div>
          <div class="mt-3 ms-4 me-2" style="color: #ee4d2d;">
            <p>
              8%
            </p>
            <p>
              trong vài giờ
            </p>
          </div>

          <div class="ms-5 mt-4 text-body-tertiary">
            <p>
              Tham Gia
            </p>
            <p>
              Người Theo Dõi
            </p>
          </div>
          <div class="mt-3 ms-5" style="color: #ee4d2d;">
            <p>
              21 tháng trước
            </p>
            <p>
              109
            </p>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- chi tiết & mô tả -->
  <div class="container detail-page">
    <div class="row">
      <div class="col-md-9 description-product">
        <div class="box-title">
          <h2 class="fs-5 m-2 p-3 mb-4 fw-normal bg-body-tertiary">CHI TIẾT SẢN PHẨM</h2>
          <div class="mx-4 d-flex">
            <p class="text-secondary">Danh mục</p>
            <span class="mx-5 text-body">thời trang nam</span>
          </div>
          <div class="mx-4 d-flex">
            <p class="text-secondary">Thương hiệu</p>
            <span class="mx-5 text-body">Paolu</span>
          </div>
          <div class="mx-4 d-flex">
            <p class="text-secondary">Phong cách</p>
            <span class="mx-5 text-body">Cơ bản, Hàn Quốc</span>
          </div>
          <div class="mx-4 d-flex">
            <p class="text-secondary">Chất liệu</p>
            <span class="mx-5 text-body">cotton 80%</span>
          </div>
          <div class="mx-4 d-flex">
            <p class="text-secondary">Xuất xứ</p>
            <span class="mx-5 text-body">Trung Quốc</span>
          </div>
          <div class="mx-4 d-flex">
            <p class="text-secondary">Mẫu</p>
            <span class="mx-5 text-body">In</span>
          </div>
          <div class="mx-4 d-flex">
            <p class="text-secondary">Gửi từ</p>
            <span class="mx-5 text-body">Hà Nội</span>
          </div>
          <div class="mx-4 d-flex">
            <p class="text-secondary">SỐ sản phẩm còn lại</p>
            <span class="mx-5 text-body">1245643</span>
          </div>
        </div>
        <div class="box-title">
          <h2 class="fs-5 m-2 p-3 mb-4 fw-normal bg-body-tertiary">MÔ TẢ SẢN PHẨM</h2>
          <div class="list-danhmuc mx-4">
            <p><span class=" p-1 text-secondary">Thông tin chi tiết của sản phẩm áo/Quần Jean/Kaki <br>
                - Xuất xứ: Việt Nam <br>
                - Chất pệu : Jean/Kaki dệt cực chuẩn, không nhăn, có độ bền cao<br>
                - Áo/Quần Nam/Nữ đẹp phong cách Hàn Quốc hiện đại giúp bạn phát huy được sự cá tính, năng động của bản
                thân.<br>
                - Chuẩn form, thoải mái, màu sắc trung, tôn dáng, phù hợp với mọi lứa tuổi<br>
                - Sản phẩm thiết kế đa dạng, trẻ trung, tạo sự khoẻ khoắn, cá tính cho người mặc<br>
                - Chất lượng sản phẩm tốt, hàng xưởng cao cấp, giá gốc</span></p><br>
            <p>Thương hiệu <span class="mx-4 text-secondary">
                - Trước khi giặt nên lột trái áo khoác và không giặt chung áo với những loại áo khác.
                - Không nên giặt Áo/Quần Jean/Kaki bằng máy giặt bởi điều này rất dễ làm hỏng vải áo. Với áo khoác bạn
                không phải giặt thường xuyên có thể giặt vài tuần 1 lần tùy vào tình trạng bám bẩn hoặc mức độ bạn sử dụng
                ngoài đường nhiều hay ít.
                - Không ngâm đồ trong xà phòng, nước giặt quá lâu, không nên sử dụng các chất tẩy rửa
                - Không nên để áo ở những nơi ẩm ướt, với tính chất hút ẩm, hút nước tốt, áo thun dễ bị ẩm mốc, thậm chí
                để lại những vết ố trên vải áo.
              </span></p>
            <p>chất pệu <span class="mx-4 text-secondary">
                1. Điều kiện áp dụng (trong vòng 03 ngày kể từ khi nhận sản phẩm):
                - Hàng hoá vẫn còn mới, chưa qua sử dụng
                - Hàng hóa hư hỏng do vận chuyển hoặc do nhà sản xuất.
              </span></p>
            <p>xuất xứ <span class="mx-4 text-secondary">
                - Shop cam kết bán hàng chính hãng, chất lượng luôn là hàng đầu, tạo sự uy tín đối với khách hàng
                - Sản phẩm cam kết như hình thật 100%
                - Áo được kiểm tra kỹ càng, cẩn thận và tư vấn nhiệt tình trước khi gói hàng giao cho Quý Khách
                - Hoàn tiền nếu sản phẩm không giống với mô tả.
                - Giao hàng ngay khi nhận được đơn
                - Đổi trả theo quy định của sàn
              </span></p>
          </div>
        </div>
      </div>
      <aside class="col-md-3 list-top-item">
        <h5>Mã giảm giá của shop</h5>
        <div class="detail-page-c-a-04-a-text-02 d-block pipe2 d-flex mt-3 justify-content-around" style="height: 120px">
          <div class="voucher me-2" style="border-right: 1px solid #ccc">
            <div class="mx-1 fw-medium">Giảm 3k</div>
            <div class="mx-1 fw-normal" style="font-size: 13px">Đơn tối thiểu</div>
            <div class="mx-1 fw-normal" style="font-size: 13px">₫100k</div>
            <div class="mx-1 fw-normal mt-3 text-body-tertiary" style="font-size: 11px">HSD: 13.01.2024</div>
          </div>
          <button class="btn text-light" style="background: #ee4d2d">Lưu</button>
        </div>
        <div class="detail-page-c-a-04-a-text-02 d-block pipe2 d-flex mt-3 justify-content-around" style="height: 120px">
          <div class="voucher me-2" style="border-right: 1px solid #ccc">
            <div class="mx-1 fw-medium">Giảm 3k</div>
            <div class="mx-1 fw-normal" style="font-size: 13px">Đơn tối thiểu</div>
            <div class="mx-1 fw-normal" style="font-size: 13px">₫100k</div>
            <div class="mx-1 fw-normal mt-3 text-body-tertiary" style="font-size: 11px">HSD: 13.01.2024</div>
          </div>
          <button class="btn text-light" style="background: #ee4d2d">Lưu</button>
        </div>
        <div class="detail-page-c-a-04-a-text-02 d-block pipe2 d-flex mt-3 justify-content-around" style="height: 120px">
          <div class="voucher me-2" style="border-right: 1px solid #ccc">
            <div class="mx-1 fw-medium">Giảm 3k</div>
            <div class="mx-1 fw-normal" style="font-size: 13px">Đơn tối thiểu</div>
            <div class="mx-1 fw-normal" style="font-size: 13px">₫100k</div>
            <div class="mx-1 fw-normal mt-3 text-body-tertiary" style="font-size: 11px">HSD: 13.01.2024</div>
          </div>
          <button class="btn text-light" style="background: #ee4d2d">Lưu</button>
        </div>
        <div class="detail-page-c-a-04-a-text-02 d-block pipe2 d-flex mt-3 justify-content-around" style="height: 120px">
          <div class="voucher me-2" style="border-right: 1px solid #ccc">
            <div class="mx-1 fw-medium">Giảm 3k</div>
            <div class="mx-1 fw-normal" style="font-size: 13px">Đơn tối thiểu</div>
            <div class="mx-1 fw-normal" style="font-size: 13px">₫100k</div>
            <div class="mx-1 fw-normal mt-3 text-body-tertiary" style="font-size: 11px">HSD: 13.01.2024</div>
          </div>
          <button class="btn text-light" style="background: #ee4d2d">Lưu</button>
        </div>
      </aside>
    </div>
  </div>

  <!-- Đánh giá -->
  <div class="container detail-page">
    <h5 class="fw-normal fs-5 py-3">ĐÁNH GIÁ SẢN PHẨM</h5>
    <div class="w-100 px-4 d-flex detail-page-c-cart-a p-4" style="background: #fffbf8">
      <div class="d-grid">
        <div style="color: #ee4d2d" class="fs-5"><strong class="fs-1 mx-1">5</strong>trên 5</div>
        <div class="d-flex">
          <i class="bi bi-star-fill" style="color: #ee4d2d; font-size: 20px;"></i>
          <i class="bi bi-star-fill" style="color: #ee4d2d; font-size: 20px;"></i>
          <i class="bi bi-star-fill" style="color: #ee4d2d; font-size: 20px;"></i>
          <i class="bi bi-star-fill" style="color: #ee4d2d; font-size: 20px;"></i>
          <i class="bi bi-star-fill" style="color: #ee4d2d; font-size: 20px;"></i>
        </div>
      </div>
      <div class="mx-5">
        <button class="px-4 mt-1 py-1 mx-2 review">Tất cả</button>
        <button class="px-4 mt-1 py-1 mx-2 review">5 sao (15)</button>
        <button class="px-4 mt-1 py-1 mx-2 review">4 sao (0)</button>
        <button class="px-4 mt-1 py-1 mx-2 review">3 sao (2)</button>
        <button class="px-4 mt-1 py-1 mx-2 review">2 sao (0)</button>
        <button class="px-4 mt-1 py-1 mx-2 review">1 sao (1)</button>
        <button class="px-4 mt-1 py-2 mx-2 review">Có Bình Luận (241)</button>
        <button class="px-4 mt-1 py-2 mx-2 review">Có Hình Ảnh / Video (134)</button>
      </div>
    </div>

    <!-- Đánh giá từ người dùng 1 -->
    <div class="mt-4">
      <div class="card-body">
        <div class="d-flex gap-3 mb-3">
          <div class=""><img class="rounded-circle" src="../assets/img/avt.jpg" alt="" width="40px"></div>
          <div class="">
            <p class="mb-1" style="font-size: 13px">gldncuacoccan</p>
            <i class="bi bi-star-fill" style="color: #ee4d2d; font-size:14px;"></i>
            <i class="bi bi-star-fill" style="color: #ee4d2d; font-size:14px;"></i>
            <i class="bi bi-star-fill" style="color: #ee4d2d; font-size:14px;"></i>
            <i class="bi bi-star-fill" style="color: #ee4d2d; font-size:14px;"></i>
            <i class="bi bi-star-fill" style="color: #ee4d2d; font-size:14px;"></i>
            <p class="text-muted mb-2" style="font-size: 12px">2023-11-08 21:27 | Phân loại hàng: xanh,M</p>
            <p>Má ơi quần siêu siêu đẹp mình siêu ưng...</p>
            <div class="d-flex mb-2">
              <img class="mx-1" src="../assets/img/item-30.jpeg" alt="" width="80px">
              <img class="mx-1" src="../assets/img/item-30.jpeg" alt="" width="80px">
              <img class="mx-1" src="../assets/img/item-30.jpeg" alt="" width="80px">
              <img class="mx-1" src="../assets/img/item-30.jpeg" alt="" width="80px">
              <img class="mx-1" src="../assets/img/item-30.jpeg" alt="" width="80px">
              <img class="mx-1" src="../assets/img/item-30.jpeg" alt="" width="80px">
            </div>
            <div class="bg-body-secondary p-3 mb-2 rounded-2">
              <h2 class="fs-6 fw-normal">Phản Hồi Của Người Bán</h2>
              <p class="fs-6 mb-4">Xin chào! Rất cảm ơn tình cảm và sự đánh giá cao của bạn. Sự hài lòng của bạn là phần
                thưởng lớn nhất của chúng tôi, cửa hàng sẽ làm việc chăm chỉ hơn và rất mong được bạn ghé thăm lần
                sau.</p>
            </div>
            <div class="d-flex align-items-center">
              <svg width="14px" height="13px" viewBox="0 0 14 13" version="1.1">
                <path fill="#ccc"
                  d="M0,12.7272727 L2.54545455,12.7272727 L2.54545455,5.09090909 L0,5.09090909 L0,12.7272727 Z M14,5.72727273 C14,5.02727273 13.4272727,4.45454545 12.7272727,4.45454545 L8.71818182,4.45454545 L9.35454545,1.52727273 L9.35454545,1.33636364 C9.35454545,1.08181818 9.22727273,0.827272727 9.1,0.636363636 L8.4,0 L4.2,4.2 C3.94545455,4.39090909 3.81818182,4.70909091 3.81818182,5.09090909 L3.81818182,11.4545455 C3.81818182,12.1545455 4.39090909,12.7272727 5.09090909,12.7272727 L10.8181818,12.7272727 C11.3272727,12.7272727 11.7727273,12.4090909 11.9636364,11.9636364 L13.8727273,7.44545455 C13.9363636,7.31818182 13.9363636,7.12727273 13.9363636,7 L13.9363636,5.72727273 L14,5.72727273 C14,5.79090909 14,5.72727273 14,5.72727273 Z">
                </path>
              </svg>
              <p class="mx-2 text-muted mb-0">12</p>
            </div>
          </div>
        </div>
        <hr>

        <div class="d-flex gap-3 mb-3">
          <div class=""><img class="rounded-circle" src="../assets/img/avt.jpg" alt="" width="40px"></div>
          <div class="">
            <p class="mb-1" style="font-size: 13px">gldncuacoccan</p>
            <i class="bi bi-star-fill" style="color: #ee4d2d; font-size:14px;"></i>
            <i class="bi bi-star-fill" style="color: #ee4d2d; font-size:14px;"></i>
            <i class="bi bi-star-fill" style="color: #ee4d2d; font-size:14px;"></i>
            <i class="bi bi-star-fill" style="color: #ee4d2d; font-size:14px;"></i>
            <i class="bi bi-star-fill" style="color: #ee4d2d; font-size:14px;"></i>
            <p class="text-muted mb-2" style="font-size: 12px">2023-11-08 21:27 | Phân loại hàng: xanh,M</p>
            <p>Má ơi quần siêu siêu đẹp mình siêu ưng...</p>
            <div class="d-flex mb-2">
              <img class="mx-1" src="../assets/img/item-30.jpeg" alt="" width="80px">
              <img class="mx-1" src="../assets/img/item-30.jpeg" alt="" width="80px">
              <img class="mx-1" src="../assets/img/item-30.jpeg" alt="" width="80px">
              <img class="mx-1" src="../assets/img/item-30.jpeg" alt="" width="80px">
              <img class="mx-1" src="../assets/img/item-30.jpeg" alt="" width="80px">
              <img class="mx-1" src="../assets/img/item-30.jpeg" alt="" width="80px">
            </div>
            <div class="bg-body-secondary p-3 mb-2 rounded-2">
              <h2 class="fs-6 fw-normal">Phản Hồi Của Người Bán</h2>
              <p class="fs-6 mb-4">Xin chào! Rất cảm ơn tình cảm và sự đánh giá cao của bạn. Sự hài lòng của bạn là phần
                thưởng lớn nhất của chúng tôi, cửa hàng sẽ làm việc chăm chỉ hơn và rất mong được bạn ghé thăm lần
                sau.</p>
            </div>
            <div class="d-flex align-items-center">
              <svg width="14px" height="13px" viewBox="0 0 14 13" version="1.1">
                <path fill="#ccc"
                  d="M0,12.7272727 L2.54545455,12.7272727 L2.54545455,5.09090909 L0,5.09090909 L0,12.7272727 Z M14,5.72727273 C14,5.02727273 13.4272727,4.45454545 12.7272727,4.45454545 L8.71818182,4.45454545 L9.35454545,1.52727273 L9.35454545,1.33636364 C9.35454545,1.08181818 9.22727273,0.827272727 9.1,0.636363636 L8.4,0 L4.2,4.2 C3.94545455,4.39090909 3.81818182,4.70909091 3.81818182,5.09090909 L3.81818182,11.4545455 C3.81818182,12.1545455 4.39090909,12.7272727 5.09090909,12.7272727 L10.8181818,12.7272727 C11.3272727,12.7272727 11.7727273,12.4090909 11.9636364,11.9636364 L13.8727273,7.44545455 C13.9363636,7.31818182 13.9363636,7.12727273 13.9363636,7 L13.9363636,5.72727273 L14,5.72727273 C14,5.79090909 14,5.72727273 14,5.72727273 Z">
                </path>
              </svg>
              <p class="mx-2 text-muted mb-0">12</p>
            </div>
          </div>
          <hr>
        </div>
        <div class="card-body">
          <div class="row justify-content-center">
            <div class="col-lg-4">
              <div class="demo-inline-spacing">
                <nav aria-label="Page navigation">
                  <ul class="pagination pagination-lg">
                    <li class="page-item prev">
                      <a class="page-link" href="javascript:void(0);"><i class="bi bi-chevron-left"></i></a>
                    </li>
                    <li class="page-item">
                      <a class="page-link" href="javascript:void(0);">1</a>
                    </li>
                    <li class="page-item">
                      <a class="page-link" href="javascript:void(0);">2</a>
                    </li>
                    <li class="page-item">
                      <a class="page-link" href="javascript:void(0);">3</a>
                    </li>
                    <li class="page-item">
                      <a class="page-link" href="javascript:void(0);">4</a>
                    </li>
                    <li class="page-item">
                      <a class="page-link" href="javascript:void(0);">5</a>
                    </li>
                    <li class="page-item next">
                      <a class="page-link" href="javascript:void(0);"><i class="bi bi-chevron-right"></i></a>
                    </li>
                  </ul>
                </nav>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
import axios from 'axios';
import Swal from 'sweetalert2';
export default {
  data() {
    return {
      product: null,
      qty: 1,
    };
  },
  mounted() {
    this.fetchProduct(this.$route.params.slug);

  },
  methods: {
    fetchProduct(slug) {
      axios.get(`/api/product/${slug}`)
        .then(response => {
          this.product = response.data;
          const product_id = this.product.data[0].id;
          this.fetchProductDetail(product_id);
        })
        .catch(error => {
          console.error('Error fetching data:', error)
        });
    },
    fetchProductDetail(product_id) {
      axios.get(`/api/product-detail/${product_id}`)
        .then(response => {
          this.productDetail = response.data;
          this.handleProduct()
        })
        .catch(error => {
          console.error('Error fetching data:', error)
        });
    },
    handleProduct() {
      if (this.product && this.productDetail) {
        this.product = { ...this.product.data[0], ...this.productDetail.data[0] };
      }
    },
    formatPrice(price) {
      const formatter = new Intl.NumberFormat('vi-VN', {
        style: 'currency',
        currency: 'VND',
      });
      return formatter.format(price).replace('₫', '');
    },
    handleQty(check) {
      if (check === 'plus') {
        this.qty++;
      } else if (check === 'minus' && this.qty > 1) {
        this.qty--;
      }
      this.$store.commit('updateCartItemQty', { index: this.product.id, qty: this.qty })
    },

    addToCart() {
      const productToAdd = { ...this.product, qty: this.qty };
      this.$store.commit('addToCart', productToAdd);
      this.qty = 1; 

      console.log('Sản phẩm đã được thêm vào giỏ hàng:', productToAdd);
      console.log('Giỏ hàng sau khi thêm:', this.$store.getters.cartItems);
    },
    handleAddToCart() {
      Swal.fire({
        icon: 'success',
        title: 'Thêm vào giỏ hàng thành công!',
        showConfirmButton: false,
        timer: 1500,
      });
      this.addToCart();
    },
  }
}
</script>

<style lang="css">
/* Detail Products */
.detail-page {
  margin-top: 20px;
  margin-bottom: 20px;
  max-width: 1200px;
  background-color: #ffffff;
}

.detail-page-b-text {
  margin-top: 30px;
  font-size: 16px;
}

.detail-page-b-text-01 {
  margin: 0;
  padding: 0 30px 0 30px;
  cursor: pointer;
}

.detail-page-b-text-a {
  margin-left: 5px;
  font-size: 15px;
}

.detail-page-b-img-a {
  padding-top: 15px;
}

.icon-heart {
  font-size: 22px;
  margin-right: 10px;
  margin-top: 2px;
  color: #ff4d59;
}

.detail-page-c {
  padding-left: 0;
}

.detail-page-c-a {
  padding: 20px 10px 0 0;
}

.detail-page-c-a-01 {
  font-size: 1.25rem;
}

.detail-page-c-a-02-text {
  font-size: 18px;
  color: #ee4d2d;
  border-bottom: 1px solid #ee4d2d;
  margin-right: 5px;
}

.detail-page-c-a-02-start {
  padding-right: 15px;
}

.detail-page-c-a-02-text-01 {
  padding-left: 15px;
  padding-right: 15px;
  border-left: 1px solid rgba(0, 0, 0, .14);
}

.detail-page-c-a-02-text-a {
  font-size: 18px;
  border-bottom: 1px solid #555;
  margin-right: 5px;
  margin-top: 3px;
}

.detail-page-c-a-02-text-b {
  font-size: 15px;
  color: #767676;
  text-transform: capitalize;
  padding-top: 5px;
}

.detail-page-c-a-02-button {
  border: unset;
  background: none;
  color: rgba(0, 0, 0, .54);
  font-size: 14px;
  margin-left: auto;
}

.detail-page-c-a-03 {
  margin-top: 10px;
}

.detail-page-c-a-03-a {
  background-color: #fafafa;
}

.detail-page-c-a-03-text {
  padding: 15px 40px 15px 5px;
}

.detail-page-c-a-03-text-01 {
  font-size: 18px;
  padding-top: 8px;
  padding-right: 2px;
  color: #ee4d2d;
}

.detail-page-c-a-03-text-02 {
  font-size: 1.875rem;
  font-weight: 500;
  color: #ee4d2d;
}

.detail-page-c-a-04 {
  margin-top: 25px;
  padding: 0 20px 0 20px;
}

.detail-page-c-a-04-a {
  margin-top: -4px;
  margin-bottom: 25px;
  margin-left: -4px;
  padding: 4px;
  color: #222;
  display: flex;
  align-items: center;
}

.detail-page-c-a-04-a-text-01 {
  color: #757575;
  width: 110px;
  text-transform: capitalize;
  font-size: 15px;
}

.detail-page-c-a-04-a-text-02 {
  font-size: 15px;
  font-weight: 500;
  background: rgba(208, 1, 27, .08);
  padding: 3px 7px;
  border: 0;
  color: #ee4d2d;
  margin-right: 0.625rem;
  display: flex;
  justify-content: center;
  align-items: center;
  height: 22px;
  position: relative;
  top: 10px;
}

.pipe2::after {
  content: "";
  width: 6px;
  height: calc(100% - 5px);
  position: absolute;
  top: 2.5px;
  background-image: radial-gradient(#fff 2px, transparent 0);
  background-size: 6px 6px;
  background-position-x: -6px;
  right: -3px;
}

.pipe2::before {
  content: "";
  width: 6px;
  height: calc(100% - 5px);
  position: absolute;
  top: 2.5px;
  background-image: radial-gradient(#fff 2px, transparent 0);
  background-size: 6px 6px;
  background-position-x: -6px;
  left: -3px;
}

.detail-page-c-a-05-a-text-01 {
  font-size: 15px;
  text-transform: capitalize;
  font-weight: 500;
  background: rgba(208, 1, 27, .08);
  padding: 3px 7px;
  border: 0;
  color: #ee4d2d;
  margin-right: 0.625rem;
  display: flex;
  justify-content: center;
  align-items: center;
  height: 22px;
}

.sale {
  font-size: .75rem;
  text-transform: uppercase;
  background: #ee4d2d;
  border-radius: 2px;
  padding: 10px 4px;
  font-weight: 600;
  line-height: 1;
}

.detail-page-c-a-06-a-text-01 {
  font-size: 15px;
  color: #222;
  display: flex;
  justify-content: center;
  align-items: center;
}

.detail-page-c-a-07-a-text-01 {
  font-size: 15px;
  color: #757575;
  ;
  /* display: flex;
  justify-content: center;
  align-items: center; */
}

.amount-product-a {
  display: flex;
  align-items: center;
}

.amount-product-button {
  outline: none;
  border: 1px solid #e8e8e8;
  border-radius: 2px;
  width: 32px;
  height: 32px;
  background-color: #fff;
}

.amount-product-input {
  width: 50px;
  height: 32px;
  border: 1px solid #e8e8e8;
  font-size: 16px;
  text-align: center;
  background-color: #fff;
}

.detail-page-c-cart {
  margin-top: 15px;
  margin-left: 6px;
}

.detail-page-c-cart-a {
  font-size: 16px;
  padding: 10px 20px 10px 20px;
  text-transform: capitalize;
  border: 1px solid #ee4d2d;
  color: #ee4d2d;
  background-color: rgba(255, 87, 34, .1);
  border-radius: 2px;
}

.detail-page-c-cart-aa:hover {
  background-color: rgb(208 50 0 / 10%);
}

.detail-page-c-cart-a01 {
  margin-left: 15px;
  background-color: #ee4d2d;
  outline: none;
}

.detail-page-c-cart-a01:hover {
  opacity: 0.9;
}

p .hov {
  border: 2px solid white;
  cursor: pointer;
}

p .hov:hover {
  border: 2px solid red;
}

.review {
  border: 1px solid #cccccc;
  background-color: #fff;
  border-radius: 3px;
}

.review:focus {
  border: 1px solid #ee4d2d;
  color: #ee4d2d;
}

.page-item a {
  border: 1px solid #fff;
  color: #ccc;
}

.page-item a:focus {
  color: #fff;
  background: #ee4d2d;
}
</style>