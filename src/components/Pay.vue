<template>
  <div class="container">
    <div class="shipdiscount" role="main" style="margin-bottom: 0">
      <div class="line"></div>
      <div class="BjIo5w d-block p-4">
        <div class="d-flex align-items-center mb-2">
          <svg height="16" viewBox="0 0 12 16" width="12">
            <path fill="#ee4d2d" fill-rule="evenodd"
                  d="M6 3.2c1.506 0 2.727 1.195 2.727 2.667 0 1.473-1.22 2.666-2.727 2.666S3.273 7.34 3.273 5.867C3.273 4.395 4.493 3.2 6 3.2zM0 6c0-3.315 2.686-6 6-6s6 2.685 6 6c0 2.498-1.964 5.742-6 9.933C1.613 11.743 0 8.498 0 6z"></path>
          </svg>
          <h2 class="mx-2 fs-5 fw-normal" style="color: #ee4d2d">Địa Chỉ Nhận Hàng</h2>
        </div>
        <div class="d-flex align-items-center mt-2">
          <h6 class="text-black mx-3">Hoàng Phúc (+84) 939745028</h6>
          <h6 class="text-black fw-normal">105/B, Hưng Phú, Cái Răng, Ninh Kiều, TP.Cần Thơ</h6>
          <h6 class="default">Mặc Định</h6>
          <button class="bg-white mx-5 mb-2 text-primary fw-medium border-0 p-0 m-0 d-block" @click="isOpen = true">Thay
            Đổi
          </button>
        </div>
      </div>


      <div class="body">
        <div class="BjIo5w shadow-none mt-4">
          <div class="products mx-1">Sản phẩm</div>
          <div class="unit-price fw-medium">Đơn Giá</div>
          <div class="quantity fw-medium">Số Lượng</div>
          <div class="total fw-medium">Thành Tiền</div>
        </div>
        <div class="dressingup clothes">
          <div class="wholepleake me-5">
            <svg width="62" height="16" fill="none" class="me-2">
              <path fill="#ee4d2d" fill-rule="evenodd"
                    d="M0 2C0 .9.9 0 2 0h58a2 2 0 012 2v12a2 2 0 01-2 2H2a2 2 0 01-2-2V2z"></path>
              <g clip-path="">
                <path fill="#fff"
                      d="M8.7 13H7V8.7L5.6 6.3A828.9 828.9 0 004 4h2l2 3.3a1197.3 1197.3 0 002-3.3h1.6L8.7 8.7V13zm7.9-1.7h1.7c0 .3-.2.6-.5 1-.2.3-.5.5-1 .7l-.6.2h-.8c-.5 0-1 0-1.5-.2l-1-.8a4 4 0 01-.9-2.4c0-1 .3-1.9 1-2.6a3 3 0 012.4-1l.8.1a2.8 2.8 0 011.3.7l.4.6.3.8V10h-4.6l.2 1 .4.7.6.5.7.1c.4 0 .7 0 .9-.2l.2-.6v-.1zm0-2.3l-.1-1-.3-.3c0-.2-.1-.2-.2-.3l-.8-.2c-.3 0-.6.2-.9.5l-.3.5a4 4 0 00-.3.8h3zm-1.4-4.2l-.7.7h-1.4l1.5-2h1.1l1.5 2h-1.4l-.6-.7zm8.1 1.6H25V13h-1.7v-.5.1H23l-.7.5-.9.1-1-.1-.7-.4c-.3-.2-.4-.5-.6-.8l-.2-1.3V6.4h1.7v3.7c0 1 0 1.6.3 1.7.2.2.5.3.7.3h.4l.4-.2.3-.3.3-.5.2-1.4V6.4zM34.7 13a11.2 11.2 0 01-1.5.2 3.4 3.4 0 01-1.3-.2 2 2 0 01-.5-.3l-.3-.5-.2-.6V7.4h-1.2v-1h1.1V5h1.7v1.5h1.9v1h-2v3l.2 1.2.1.3.2.2h.3l.2.1c.2 0 .6 0 1.3-.3v1zm2.4 0h-1.7V3.5h1.7v3.4a3.7 3.7 0 01.2-.1 2.8 2.8 0 013.4 0l.4.4.2.7V13h-1.6V9.3 8.1l-.4-.6-.6-.2a1 1 0 00-.4.1 2 2 0 00-.4.2l-.3.3a3 3 0 00-.3.5l-.1.5-.1.9V13zm5.4-6.6H44V13h-1.6V6.4zm-.8-.9l1.8-2h1.8l-2.1 2h-1.5zm7.7 5.8H51v.5l-.4.5a2 2 0 01-.4.4l-.6.3-1.4.2c-.5 0-1 0-1.4-.2l-1-.7c-.3-.3-.5-.7-.6-1.2-.2-.4-.3-.9-.3-1.4 0-.5.1-1 .3-1.4a2.6 2.6 0 011.6-1.8c.4-.2.9-.3 1.4-.3.6 0 1 .1 1.5.3.4.1.7.4 1 .6l.2.5.1.5h-1.6c0-.3-.1-.5-.3-.6-.2-.2-.4-.3-.8-.3s-.8.2-1.2.6c-.3.4-.4 1-.4 2 0 .9.1 1.5.4 1.8.4.4.8.6 1.2.6h.5l.3-.2.2-.3v-.4zm4 1.7h-1.6V3.5h1.7v3.4a3.7 3.7 0 01.2-.1 2.8 2.8 0 013.4 0l.3.4.3.7V13h-1.6V9.3L56 8.1c-.1-.3-.2-.5-.4-.6l-.6-.2a1 1 0 00-.3.1 2 2 0 00-.4.2l-.3.3a3 3 0 00-.3.5l-.2.5V13z"></path>
              </g>
            </svg>
            KHUYẾN MÃI 247
            <a href="" class="ms-2 px-2 text-decoration-none" style="border-left: 1px solid #ccc; color: #00bfa5">
              <svg viewBox="0 0 16 16" class="chat">
                <g fill-rule="evenodd">
                  <path fill="#00bfa5"
                        d="M15 4a1 1 0 01.993.883L16 5v9.932a.5.5 0 01-.82.385l-2.061-1.718-8.199.001a1 1 0 01-.98-.8l-.016-.117-.108-1.284 8.058.001a2 2 0 001.976-1.692l.018-.155L14.293 4H15zm-2.48-4a1 1 0 011 1l-.003.077-.646 8.4a1 1 0 01-.997.923l-8.994-.001-2.06 1.718a.5.5 0 01-.233.108l-.087.007a.5.5 0 01-.492-.41L0 11.732V1a1 1 0 011-1h11.52zM3.646 4.246a.5.5 0 000 .708c.305.304.694.526 1.146.682A4.936 4.936 0 006.4 5.9c.464 0 1.02-.062 1.608-.264.452-.156.841-.378 1.146-.682a.5.5 0 10-.708-.708c-.185.186-.445.335-.764.444a4.004 4.004 0 01-2.564 0c-.319-.11-.579-.258-.764-.444a.5.5 0 00-.708 0z"></path>
                </g>
              </svg>
              Chat ngay
            </a>
          </div>
        </div>
        <div class="buying mt-3">
          <div class="mystore store-container">
            <div class="storenav mx-4">
              <div class="title-clothes">
                <div class="title-clothes-focus">
                  <img src="../assets/img/item-28.jpeg" alt="" class="object-fit-cover" style="width: 40px">
                  <div class="describe-clothes">
                    <p class="describe-clothes-focus">
                      Quần dài ống đứng màu trơn đơn giản thời trang
                      cho nữ
                    </p>
                  </div>
                </div>
              </div>
              <div class="variation">
                <div class="variation-focus">
                  <div class="variation-container" role="button">
                    <div class="variation-title">
                      Kích Thước:
                      <button class="triangle"></button>
                    </div>
                    <div class="size">Den-S</div>
                  </div>
                  <div></div>
                </div>
              </div>
              <div class="show-money">
                <div>
                  <span class="linethrough">₫299.000</span>
                </div>
              </div>
              <div class="in-decrease-value">
                1
              </div>
              <div class="total-price">
                <span>₫299.000</span>
              </div>
            </div>
          </div>
        </div>
        <div class="rnocow">
          <div class="platform-voucher-container">
            <svg fill="none" viewBox="0 -2 23 22" class="voucher">
              <g filter="">
                <mask id="a" fill="#fff">
                  <path fill-rule="evenodd" clip-rule="evenodd"
                        d="M1 2h18v2.32a1.5 1.5 0 000 2.75v.65a1.5 1.5 0 000 2.75v.65a1.5 1.5 0 000 2.75V16H1v-2.12a1.5 1.5 0 000-2.75v-.65a1.5 1.5 0 000-2.75v-.65a1.5 1.5 0 000-2.75V2z"></path>
                </mask>
                <path
                    d="M19 2h1V1h-1v1zM1 2V1H0v1h1zm18 2.32l.4.92.6-.26v-.66h-1zm0 2.75h1v-.65l-.6-.26-.4.91zm0 .65l.4.92.6-.26v-.66h-1zm0 2.75h1v-.65l-.6-.26-.4.91zm0 .65l.4.92.6-.26v-.66h-1zm0 2.75h1v-.65l-.6-.26-.4.91zM19 16v1h1v-1h-1zM1 16H0v1h1v-1zm0-2.12l-.4-.92-.6.26v.66h1zm0-2.75H0v.65l.6.26.4-.91zm0-.65l-.4-.92-.6.26v.66h1zm0-2.75H0v.65l.6.26.4-.91zm0-.65l-.4-.92-.6.26v.66h1zm0-2.75H0v.65l.6.26.4-.91zM19 1H1v2h18V1zm1 3.32V2h-2v2.32h2zm-.9 1.38c0-.2.12-.38.3-.46l-.8-1.83a2.5 2.5 0 00-1.5 2.29h2zm.3.46a.5.5 0 01-.3-.46h-2c0 1.03.62 1.9 1.5 2.3l.8-1.84zm.6 1.56v-.65h-2v.65h2zm-.9 1.38c0-.2.12-.38.3-.46l-.8-1.83a2.5 2.5 0 00-1.5 2.29h2zm.3.46a.5.5 0 01-.3-.46h-2c0 1.03.62 1.9 1.5 2.3l.8-1.84zm.6 1.56v-.65h-2v.65h2zm-.9 1.38c0-.2.12-.38.3-.46l-.8-1.83a2.5 2.5 0 00-1.5 2.29h2zm.3.46a.5.5 0 01-.3-.46h-2c0 1.03.62 1.9 1.5 2.3l.8-1.84zM20 16v-2.13h-2V16h2zM1 17h18v-2H1v2zm-1-3.12V16h2v-2.12H0zm1.4.91a2.5 2.5 0 001.5-2.29h-2a.5.5 0 01-.3.46l.8 1.83zm1.5-2.29a2.5 2.5 0 00-1.5-2.3l-.8 1.84c.18.08.3.26.3.46h2zM0 10.48v.65h2v-.65H0zM.9 9.1a.5.5 0 01-.3.46l.8 1.83A2.5 2.5 0 002.9 9.1h-2zm-.3-.46c.18.08.3.26.3.46h2a2.5 2.5 0 00-1.5-2.3L.6 8.65zM0 7.08v.65h2v-.65H0zM.9 5.7a.5.5 0 01-.3.46l.8 1.83A2.5 2.5 0 002.9 5.7h-2zm-.3-.46c.18.08.3.26.3.46h2a2.5 2.5 0 00-1.5-2.3L.6 5.25zM0 2v2.33h2V2H0z"></path>
              </g>
              <path clip-rule="evenodd"
                    d="M6.49 14.18h.86v-1.6h-.86v1.6zM6.49 11.18h.86v-1.6h-.86v1.6zM6.49 8.18h.86v-1.6h-.86v1.6zM6.49 5.18h.86v-1.6h-.86v1.6z"></path>
            </svg>
            <div class="platform-voucher">Voucher của Shop</div>
            <div style="flex: 1"></div>
            <!--            <span class="select-enter fs-6">Chọn Voucher</span>-->
            <VoucherModal/>
          </div>
        </div>
      </div>
    </div>
    <div class="shipping-method">
      <div class="Tn7sb8 OUah6W">
        <div class="u-JjSt">
          <span style="line-height: 40px">Lời nhắn: </span>
          <div class="nWvmL7">
            <div class="position-relative _0HwzC1">
              <div class="peusTR bg-white">
                <input class="gQuJxM" type="text" placeholder="Lưu ý cho người bán..." aria-label="Lời nhắn:">
                <div></div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="OUah6W Fzg+Gz">
        <div class="Oa38lC">
          Đơn vị vận chuyển
          :
        </div>
        <div class="_9HO6as">
          <div>Nhanh</div>
        </div>
        <div class="GEI150"></div>
        <div class="_3zds3i">Nhận hàng vào ngày 24 Th11 - 25 Th11</div>
        <button class="elfp9W div-style bg-white fw-semibold">
          <ShippingUnit/>
        </button>

        <div class="dnXfYW d-flex">
          <small>₫</small>
          <div>31.200</div>
        </div>
        <div class="EGXRIm"></div>
        <div class="_9evL72">
          <a href="https://shopee.vn/m/shopee-dong-kiem" class="d-flex text-decoration-none text-body">
            <div class="AlFfD+ NL2dLs">Được đồng kiểm.</div>
            <svg width="20px" viewBox="0 0 15 15" x="0" y="0">
              <g>
                <circle cx="7.5" cy="7.5" fill="none" r="6.5" stroke-miterlimit="10"></circle>
                <path stroke="none"
                      d="m5.3 5.3c.1-.3.3-.6.5-.8s.4-.4.7-.5.6-.2 1-.2c.3 0 .6 0 .9.1s.5.2.7.4.4.4.5.7.2.6.2.9c0 .2 0 .4-.1.6s-.1.3-.2.5c-.1.1-.2.2-.3.3-.1.2-.2.3-.4.4-.1.1-.2.2-.3.3s-.2.2-.3.4c-.1.1-.1.2-.2.4s-.1.3-.1.5v.4h-.9v-.5c0-.3.1-.6.2-.8s.2-.4.3-.5c.2-.2.3-.3.5-.5.1-.1.3-.3.4-.4.1-.2.2-.3.3-.5s.1-.4.1-.7c0-.4-.2-.7-.4-.9s-.5-.3-.9-.3c-.3 0-.5 0-.7.1-.1.1-.3.2-.4.4-.1.1-.2.3-.3.5 0 .2-.1.5-.1.7h-.9c0-.3.1-.7.2-1zm2.8 5.1v1.2h-1.2v-1.2z"></path>
              </g>
            </svg>
          </a>
        </div>
      </div>
    </div>
    <div class="rnocow d-block p-4">
      <div class="platform-voucher-container mx-4">
        <svg fill="none" viewBox="0 -2 23 22" class="voucher">
          <g filter="">
            <mask id="a" fill="#fff">
              <path fill-rule="evenodd" clip-rule="evenodd"
                    d="M1 2h18v2.32a1.5 1.5 0 000 2.75v.65a1.5 1.5 0 000 2.75v.65a1.5 1.5 0 000 2.75V16H1v-2.12a1.5 1.5 0 000-2.75v-.65a1.5 1.5 0 000-2.75v-.65a1.5 1.5 0 000-2.75V2z"></path>
            </mask>
            <path
                d="M19 2h1V1h-1v1zM1 2V1H0v1h1zm18 2.32l.4.92.6-.26v-.66h-1zm0 2.75h1v-.65l-.6-.26-.4.91zm0 .65l.4.92.6-.26v-.66h-1zm0 2.75h1v-.65l-.6-.26-.4.91zm0 .65l.4.92.6-.26v-.66h-1zm0 2.75h1v-.65l-.6-.26-.4.91zM19 16v1h1v-1h-1zM1 16H0v1h1v-1zm0-2.12l-.4-.92-.6.26v.66h1zm0-2.75H0v.65l.6.26.4-.91zm0-.65l-.4-.92-.6.26v.66h1zm0-2.75H0v.65l.6.26.4-.91zm0-.65l-.4-.92-.6.26v.66h1zm0-2.75H0v.65l.6.26.4-.91zM19 1H1v2h18V1zm1 3.32V2h-2v2.32h2zm-.9 1.38c0-.2.12-.38.3-.46l-.8-1.83a2.5 2.5 0 00-1.5 2.29h2zm.3.46a.5.5 0 01-.3-.46h-2c0 1.03.62 1.9 1.5 2.3l.8-1.84zm.6 1.56v-.65h-2v.65h2zm-.9 1.38c0-.2.12-.38.3-.46l-.8-1.83a2.5 2.5 0 00-1.5 2.29h2zm.3.46a.5.5 0 01-.3-.46h-2c0 1.03.62 1.9 1.5 2.3l.8-1.84zm.6 1.56v-.65h-2v.65h2zm-.9 1.38c0-.2.12-.38.3-.46l-.8-1.83a2.5 2.5 0 00-1.5 2.29h2zm.3.46a.5.5 0 01-.3-.46h-2c0 1.03.62 1.9 1.5 2.3l.8-1.84zM20 16v-2.13h-2V16h2zM1 17h18v-2H1v2zm-1-3.12V16h2v-2.12H0zm1.4.91a2.5 2.5 0 001.5-2.29h-2a.5.5 0 01-.3.46l.8 1.83zm1.5-2.29a2.5 2.5 0 00-1.5-2.3l-.8 1.84c.18.08.3.26.3.46h2zM0 10.48v.65h2v-.65H0zM.9 9.1a.5.5 0 01-.3.46l.8 1.83A2.5 2.5 0 002.9 9.1h-2zm-.3-.46c.18.08.3.26.3.46h2a2.5 2.5 0 00-1.5-2.3L.6 8.65zM0 7.08v.65h2v-.65H0zM.9 5.7a.5.5 0 01-.3.46l.8 1.83A2.5 2.5 0 002.9 5.7h-2zm-.3-.46c.18.08.3.26.3.46h2a2.5 2.5 0 00-1.5-2.3L.6 5.25zM0 2v2.33h2V2H0z"></path>
          </g>
          <path clip-rule="evenodd"
                d="M6.49 14.18h.86v-1.6h-.86v1.6zM6.49 11.18h.86v-1.6h-.86v1.6zM6.49 8.18h.86v-1.6h-.86v1.6zM6.49 5.18h.86v-1.6h-.86v1.6z"></path>
        </svg>
        <div class="platform-voucher fs-5">Shopee Voucher</div>
        <div style="flex: 1"></div>
        <VoucherShopee />
      </div>
      <div class="border-line"></div>
      <div class="right d-flex justify-content-between align-items-center m-4">
        <div class="d-flex justify-content-between align-items-center">
          <img class="hpZGIt icon-coin-line" src="../assets/img/coin.png"/>
          <div class="shopee-coin-title">Shopee Xu</div>
          <div class="count-num-selected">Không thể sử dụng xu</div>
        </div>
        <div class="d-flex justify-content-end align-items-center">
          <div class="last-part right-part">[- ₫0]</div>
          <div class="checkbox4">
            <label class="stardust-checkbox">
              <input class="stardust-checkbox__input" type="checkbox"/>
            </label>
          </div>
        </div>

      </div>
      <div class="border-line"></div>
    </div>
    <div class="bg-white mt-3">
      <div class="_2qsKTk">
        <div class="SzEjHI zDPGhr">Phương thức thanh toán</div>
        <button class="FooGkf div-style border-0 bg-white">Thay đổi</button>
      </div>
    </div>
    <div class="d-flex bg-white justify-content-center">
      <div class="col-xl-6 w-100">
        <div class="nav-align-top mb-4">
          <ul class="nav nav-tabs nav-fill" role="tablist">
            <li class="nav-item">
              <button
                  type="button"
                  class="nav-link product-variation"
                  role="tab"
                  data-bs-toggle="tab"
                  data-bs-target="#navs-justified-home"
                  aria-controls="navs-justified-home"
                  aria-selected="true"
                  @focus="handleFocus"
                  @blur="handleBlur"
              >
                Apple Pay
                <div v-show="isFocused" class="product-variation__tick">
                  <svg enable-background="new 0 0 12 12" viewBox="0 0 12 12" x="0" y="0" class="shopee-svg-icon icon-tick-bold">
                    <g>
                      <path d="m5.2 10.9c-.2 0-.5-.1-.7-.2l-4.2-3.7c-.4-.4-.5-1-.1-1.4s1-.5 1.4-.1l3.4 3 5.1-7c .3-.4 1-.5 1.4-.2s.5 1 .2 1.4l-5.7 7.9c-.2.2-.4.4-.7.4 0-.1 0-.1-.1-.1z"></path>
                    </g>
                  </svg>
                </div>
              </button>
            </li>
            <li class="nav-item">
              <button
                  type="button"
                  class="nav-link product-variation"
                  role="tab"
                  data-bs-toggle="tab"
                  data-bs-target="#navs-justified-profile"
                  aria-controls="navs-justified-profile"
                  aria-selected="false"
                  @focus="handleFocus2"
                  @blur="handleBlur2"
              >
                Ví ShopeePay
                <div v-show="isFocused2" class="product-variation__tick">
                  <svg enable-background="new 0 0 12 12" viewBox="0 0 12 12" x="0" y="0" class="shopee-svg-icon icon-tick-bold">
                    <g>
                      <path d="m5.2 10.9c-.2 0-.5-.1-.7-.2l-4.2-3.7c-.4-.4-.5-1-.1-1.4s1-.5 1.4-.1l3.4 3 5.1-7c .3-.4 1-.5 1.4-.2s.5 1 .2 1.4l-5.7 7.9c-.2.2-.4.4-.7.4 0-.1 0-.1-.1-.1z"></path>
                    </g>
                  </svg>
                </div>
              </button>
            </li>
            <li class="nav-item">
              <button
                  type="button"
                  class="nav-link product-variation"
                  role="tab"
                  data-bs-toggle="tab"
                  data-bs-target="#navs-justified-messages"
                  aria-controls="navs-justified-messages"
                  aria-selected="false"
                  @focus="handleFocus3"
                  @blur="handleBlur3"
              >
                Thẻ Tín dụng/Ghi nợ
                <div v-show="isFocused3" class="product-variation__tick">
                  <svg enable-background="new 0 0 12 12" viewBox="0 0 12 12" x="0" y="0" class="shopee-svg-icon icon-tick-bold">
                    <g>
                      <path d="m5.2 10.9c-.2 0-.5-.1-.7-.2l-4.2-3.7c-.4-.4-.5-1-.1-1.4s1-.5 1.4-.1l3.4 3 5.1-7c .3-.4 1-.5 1.4-.2s.5 1 .2 1.4l-5.7 7.9c-.2.2-.4.4-.7.4 0-.1 0-.1-.1-.1z"></path>
                    </g>
                  </svg>
                </div>
              </button>
            </li>
            <li class="nav-item">
              <button
                  type="button"
                  class="nav-link product-variation"
                  role="tab"
                  data-bs-toggle="tab"
                  data-bs-target="#ttknh"
                  aria-controls="navs-justified-messages"
                  aria-selected="false"
                  @focus="handleFocus4"
                  @blur="handleBlur4"
              >
                Thanh toán khi nhận hàng
                <div v-show="isFocused4" class="product-variation__tick">
                  <svg enable-background="new 0 0 12 12" viewBox="0 0 12 12" x="0" y="0" class="shopee-svg-icon icon-tick-bold">
                    <g>
                      <path d="m5.2 10.9c-.2 0-.5-.1-.7-.2l-4.2-3.7c-.4-.4-.5-1-.1-1.4s1-.5 1.4-.1l3.4 3 5.1-7c .3-.4 1-.5 1.4-.2s.5 1 .2 1.4l-5.7 7.9c-.2.2-.4.4-.7.4 0-.1 0-.1-.1-.1z"></path>
                    </g>
                  </svg>
                </div>
              </button>
            </li>
          </ul>
          <div class="tab-content">
            <div class="tab-pane fade show active" id="navs-justified-home" role="tabpanel">
              <!--nội dung-->
              <div class="pt-1">
                <div class="_2Ufr+P">
                  <div class="xFYG7Q"></div>
                    <div class="w-100 flex-1">
                      <div class="stardust-radio align-items-center stardust-radio--checked" role="radio">
                        <div class="stardust-radio-button stardust-radio-button--checked">
                          <div class="stardust-radio-button__outer-circle">
                            <div class="stardust-radio-button__inner-circle"></div>
                          </div>
                        </div>
                        <div class="stardust-radio__content">
                          <div class="d-flex align-items-center ms-3">
                            <div class="checkout-bank-transfer-item__icon-container">
                              <img src="../assets/img/apple-pay.png" alt="" class="checkout-bank-transfer-item__icon">
                            </div>
                            <div class="CN+b4v">
                              <div class="-NDhMl">Apple Pay</div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                </div>
              </div>
            </div>
            <div class="tab-pane fade" id="navs-justified-profile" role="tabpanel">
              <div class="pt-1">
                <div class="checkout-payment-setting__banners">
                  <div class="channel-banner channel-banner__single" style="background-color: rgb(238, 77, 45);">
                    <div class="channel-banner__icon" style="background-image: url(&quot;https://cf.shopee.vn/file/vn-11134004-7r98o-lncty86bh7cq30&quot;)"></div>
                    <div class="channel-banner__logo" style="background-image: url(&quot;https://cf.shopee.vn/file/vn-11134004-7r98o-lncty6zl7qey8c&quot;);"></div>
                    <div class="channel-banner__main-desc">
                      <div class="channel-banner__sub-desc">
                        <span class="channel-promotion__discount-title fw-normal">Giảm ngay </span>
                        <span class="channel-promotion__discount-title mx-1 fw-normal">80.000đ </span>
                      </div>
                    </div>
                    <div class="channel-banner__sub-desc">Kích Hoạt Ví ShopeePay Ngay</div>
                  </div>
                </div>
                <div class="bank-transfer-category">
                  <div class="w-100 flex-1">
                    <div class="stardust-radio">
                      <div class="stardust-radio-button">
                        <div class="stardust-radio-button__outer-circle">
                          <div class="stardust-radio-button__inner-circle" style="opacity: 0;"></div>
                        </div>
                      </div>
                      <div class="flex-1">
                        <div class="d-flex align-items-center ms-3">
                          <div class="checkout-bank-transfer-item__icon-container">
                            <img src="../assets/img/xu.png" alt="" class="checkout-bank-transfer-item__icon">
                          </div>
                          <div class="checkout-bank-transfer-item__main">
                            <div>Ví ShopeePay Số dư</div>
                            <div><small>₫</small>0</div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="tab-pane fade" id="navs-justified-messages" role="tabpanel">
              <div class="pt-1">
                <div class="credit-card-subcategory">
                  <div class="checkout-payment-method-view__current-title">Chọn thẻ
                    <div class="w-100 flex-1 ms-2">
                      <button class="stardust-button py-2">
                        <svg enable-background="new 0 0 10 10" viewBox="0 0 10 10" role="img"
                             class="stardust-icon mx-2">
                          <path stroke="none" d="m10 4.5h-4.5v-4.5h-1v4.5h-4.5v1h4.5v4.5h1v-4.5h4.5z"></path>
                        </svg>
                        Thẻ khác
                      </button>
                    </div>
                  </div>
                </div>
                <!--thẻ ngân hàng-->
                <div class="checkout-payment-setting__promotions">
                  <div class="channel-promotion channel-promotion--clickable"
                       style="background-color: rgb(0, 70, 255);">
                    <div class="channel-promotion__bank-logo"
                         style="background-image: url(&quot;https://cf.shopee.vn/file/vn-11134004-7qukw-ljxntozsikz8ec&quot;);">
                      <div class="channel-promotion__triangle"></div>
                    </div>
                    <div class="channel-promotion__discount-info d-flex align-items-center">
                      <span class="text-white mx-1" style="font-size: 1.5rem;"><small>₫</small>50000</span>
                      <div class="channel-promotion__discount-title">Giảm</div>
                    </div>
                    <div class="text-white" style="font-size: .75rem">Đơn từ đ400.000 - Mỗi ngày</div>
                  </div>
                  <div class="channel-promotion channel-promotion--clickable"
                       style="background-color: rgb(24, 98, 175);">
                    <div class="channel-promotion__bank-logo"
                         style="background-image: url(&quot;https://cf.shopee.vn/file/b0badd89398ddace65609ca86c4bb41a&quot;);">
                      <div class="channel-promotion__triangle"></div>
                    </div>
                    <div class="channel-promotion__discount-info d-flex align-items-center">
                      <span class=" text-white mx-1" style="font-size: 1.5rem;"><small>₫</small>30%</span>
                      <div class="channel-promotion__discount-title">Giảm</div>
                    </div>
                    <div class="text-white" style="font-size: .75rem">Đơn bất kỳ - Mỗi ngày trong tuần</div>
                  </div>
                  <div class="channel-promotion channel-promotion--clickable"
                       style="background-color: rgb(0, 107, 104)">
                    <div class="channel-promotion__bank-logo"
                         style="background-image: url(&quot;https://cf.shopee.vn/file/ec6e5963e33a360e2de5be5ac46ab2c9&quot;);">
                      <div class="channel-promotion__triangle"></div>
                    </div>
                    <div class="channel-promotion__discount-info d-flex align-items-center">
                      <span class=" text-white mx-1" style="font-size: 1.5rem;"><small>₫</small>50000</span>
                      <div class="channel-promotion__discount-title">Giảm</div>
                    </div>
                    <div class="text-white" style="font-size: .75rem">Đơn từ đ700.000 - Mỗi ngày trong tuần</div>
                  </div>
                  <div class="channel-promotion channel-promotion--clickable"
                       style="background-color: rgb(236, 31, 39);">
                    <div class="channel-promotion__bank-logo"
                         style="background-image: url(&quot;https://cf.shopee.vn/file/af2f5ace8a0dbce9577fd9cdb3ff3f59&quot;);">
                      <div class="channel-promotion__triangle"></div>
                    </div>
                    <div class="channel-promotion__discount-info d-flex align-items-center">
                      <span class=" text-white mx-1" style="font-size: 1.5rem;"><small>₫</small>50000</span>
                      <div class="channel-promotion__discount-title">Giảm</div>
                    </div>
                    <div class="text-white" style="font-size: .75rem">Đơn từ đ400.000 - Mỗi ngày</div>
                  </div>
                  <div class="channel-promotion channel-promotion--clickable"
                       style="background-color: rgb(92, 46, 136);">
                    <div class="channel-promotion__bank-logo"
                         style="background-image: url(&quot;https://cf.shopee.vn/file/vn-11134004-7r98o-llesa790620m5d&quot;);">
                      <div class="channel-promotion__triangle"></div>
                    </div>
                    <div class="channel-promotion__discount-info d-flex align-items-center">
                      <span class=" text-white mx-1" style="font-size: 1.5rem;"><small>₫</small>100000</span>
                      <div class="channel-promotion__discount-title">Giảm</div>
                    </div>
                    <div class="text-white" style="font-size: .75rem">Đơn từ đ500.000 - Mỗi thứ 6, 7, chủ nhật</div>
                  </div>
                  <div class="channel-promotion channel-promotion--clickable"
                       style="background-color: rgb(134, 79, 16);">
                    <div class="channel-promotion__bank-logo"
                         style="background-image: url(&quot;https://cf.shopee.vn/file/sg-11134004-7qvfk-lh4ncvdisop8fb&quot;);">
                      <div class="channel-promotion__triangle"></div>
                    </div>
                    <div class="channel-promotion__discount-info d-flex align-items-center">
                      <span class=" text-white mx-1" style="font-size: 1.5rem;"><small>₫</small>50000</span>
                      <div class="channel-promotion__discount-title">Giảm</div>
                    </div>
                    <div class="text-white" style="font-size: .75rem">Đơn từ đ350.000 - Mỗi ngày trong tuần</div>
                  </div>
                  <div class="channel-promotion channel-promotion--clickable"
                       style="background-color: rgb(175, 26, 113);">
                    <div class="channel-promotion__bank-logo"
                         style="background-image: url(https://images.viblo.asia/ae87b957-f016-45c0-9c29-34b34a9b3262.png);">
                      <div class="channel-promotion__triangle"></div>
                    </div>
                    <div class="channel-promotion__discount-info d-flex align-items-center">
                      <span class=" text-white mx-1" style="font-size: 1.5rem;"><small>₫</small>50000</span>
                      <div class="channel-promotion__discount-title">Giảm</div>
                    </div>
                    <div class="text-white" style="font-size: .75rem">Đơn từ đ500.000 - Mỗi ngày</div>
                  </div>
                  <div class="channel-promotion channel-promotion--clickable"
                       style="background-color: rgb(135, 209, 220);">
                    <div class="channel-promotion__bank-logo"
                         style="background-image: url(&quot;https://cf.shopee.vn/file/vn-11134004-7r98o-lmx490bmkw67b1&quot;);">
                      <div class="channel-promotion__triangle"></div>
                    </div>
                    <div class="channel-promotion__discount-info d-flex align-items-center">
                      <span class=" text-white mx-1" style="font-size: 1.5rem;"><small>₫</small>50000</span>
                      <div class="channel-promotion__discount-title">Giảm</div>
                    </div>
                    <div class="text-white" style="font-size: .75rem">Đơn từ đ500.000 - Mỗi ngày</div>
                  </div>
                  <div class="channel-promotion channel-promotion--clickable"
                       style="background-color: rgb(227, 25, 51);">
                    <div class="channel-promotion__bank-logo"
                         style="background-image: url(&quot;https://cf.shopee.vn/file/f6dc90fcac3a823fec5ec3bf4906bf47&quot;);">
                      <div class="channel-promotion__triangle"></div>
                    </div>
                    <div class="channel-promotion__discount-info d-flex align-items-center">
                      <span class=" text-white mx-1" style="font-size: 1.5rem;"><small>₫</small>50000</span>
                      <div class="channel-promotion__discount-title">Giảm</div>
                    </div>
                    <div class="text-white" style="font-size: .75rem">Đơn từ đ500.000 - Mỗi ngày</div>
                  </div>
                  <div class="channel-promotion channel-promotion--clickable"
                       style="background-color: rgb(0, 114, 188);">
                    <div class="channel-promotion__bank-logo"
                         style="background-image: url(&quot;https://cf.shopee.vn/file/vn-11134004-7r98o-llesuw8fz1yud7&quot;);">
                      <div class="channel-promotion__triangle"></div>
                    </div>
                    <div class="channel-promotion__discount-info d-flex align-items-center">
                      <span class=" text-white mx-1" style="font-size: 1.5rem;"><small>₫</small>50000</span>
                      <div class="channel-promotion__discount-title">Giảm</div>
                    </div>
                    <div class="text-white" style="font-size: .75rem">Đơn từ đ500.000 - Mỗi ngày</div>
                  </div>
                  <div class="channel-promotion channel-promotion--clickable"
                       style="background-color: rgb(0, 93, 152);">
                    <div class="channel-promotion__bank-logo"
                         style="background-image: url(&quot;https://cf.shopee.vn/file/f65c401b233cbb13cecb2ed13d264c8f&quot;);">
                      <div class="channel-promotion__triangle"></div>
                    </div>
                    <div class="channel-promotion__discount-info d-flex align-items-center">
                      <span class=" text-white mx-1" style="font-size: 1.5rem;"><small>₫</small>50000</span>
                      <div class="channel-promotion__discount-title">Giảm</div>
                    </div>
                    <div class="text-white" style="font-size: .75rem">Đơn từ đ400.000 - Mỗi ngày</div>
                  </div>
                  <div class="channel-promotion channel-promotion--clickable"
                       style="background-color: rgb(0, 80, 47);">
                    <div class="channel-promotion__bank-logo"
                         style="background-image: url(&quot;https://cf.shopee.vn/file/977432da06a04e47fd796fb0efa556f8&quot;);">
                      <div class="channel-promotion__triangle"></div>
                    </div>
                    <div class="channel-promotion__discount-info d-flex align-items-center">
                      <span class=" text-white mx-1" style="font-size: 1.5rem;"><small>₫</small>50000</span>
                      <div class="channel-promotion__discount-title">Giảm</div>
                    </div>
                    <div class="text-white" style="font-size: .75rem">Đơn từ đ400.000 - Mỗi ngày</div>
                  </div>
                </div>
              </div>
            </div>
            <div class="tab-pane fade show active" id="ttknh" role="tabpanel">

            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="KQyCj0">
      <h3 class="bwwaGp iL6wsx BcITa9">Tổng tiền hàng</h3>
      <div class="bwwaGp R3a05f BcITa9">₫15.000</div>
      <h3 class="bwwaGp iL6wsx RY9Grr">Phí vận chuyển</h3>
      <div class="bwwaGp R3a05f RY9Grr">₫31.200</div>
      <h3 class="bwwaGp iL6wsx _5y8V6a">Tổng thanh toán:</h3>
      <div class="bwwaGp l2Nmnm R3a05f _5y8V6a">₫346.200</div>
      <div class="uTFqRt">
        <div class="k4VpYA">
          <div class="C-NSr-">
            Nhấn "Đặt hàng" đồng nghĩa với việc bạn đồng ý tuân theo
            <a href="https://help.shopee.vn/portal/article/77242" class="text-decoration-none">Điều khoản Shopee</a>
          </div>
        </div>
        <button class="stardust-button stardust-button--primary stardust-button--large apLZEG">Đặt hàng</button>
      </div>
    </div>
  </div>

  <!-- Vue Modal -->
  <div class="position-relative">
    <teleport to="body">
      <div class="modal" v-if="isOpen">
        <div>
          <h5 class="text-body-tertiary p-3" style="border-bottom: 1px solid #ccc">Địa chỉ của tôi</h5>
          <!--content-->
          <div>
            <div
                v-for="(address, index) in addresses"
                :key="index"
                class="d-flex QsXnat"
                @click="handleAddressClick(address)"
            >
              <i
                  class="bi bi-record-circle fs-5"
                  :style="{ color: address.isActive ? '#ee4d2d' : '#ccc' }"
                  style="cursor: pointer; padding: 0 10px 0 0;"
              ></i>
              <div class="oz79Fh">
                <div role="heading" class="b3Bzag HN9LCm">
                  <div id="address-card_c987cf95-913c-4dfa-a2cc-eb4f393c3547_header" class="rfuUdM sOgNxc">
                    <span class="QoyM7r _9rN-3o d-block">{{ address.name }}</span>
                    <div class="b4+1yh"></div>
                    <div role="row" class="OlQ-nA UfDIlr _6MOlMb">{{ address.phone }}</div>
                  </div>
                  <div class="_7oOQ+Z">
                    <button class="VWye8T">Cập nhật</button>
                  </div>
                </div>
                <div class="justify-content-between mb-1">
                  <div class="rfuUdM sOgNxc">
                    <div class="UnzFoC">
                      <div role="row" class="_6MOlMb">{{ address.address }}</div>
                    </div>
                  </div>
                  <div class="_3shwsO _6MOlMb">
                    <span class="yN4t3M lUnBgd jbmxUz" v-if="address.isActive">Mặc định</span>
                    <div class="yN4t3M GeOdQ1 jbmxUz" v-if="address.isActive">Địa chỉ lấy hàng</div>
                    <div class="yN4t3M GeOdQ1 jbmxUz" v-if="address.isActive">Địa chỉ trả hàng</div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <button class="TKcWpJ JiAm6E mt-2">
            <svg viewBox="0 0 10 10" class="WWYAjA">
              <path stroke="none" d="m10 4.5h-4.5v-4.5h-1v4.5h-4.5v1h4.5v4.5h1v-4.5h4.5z"></path>
            </svg>
<!--            Thêm Địa Chỉ Mới-->
            <AddNewAddressModal />
          </button>
          <div class="d-flex mt-5 pt-5 justify-content-end">
            <button class="close mt-5 bg-white" @click="isOpen = false">Hủy</button>
            <button class="confirm mt-5">Xác nhận</button>
          </div>
        </div>
      </div>
    </teleport>
  </div>
</template>

<script setup>
import VoucherModal from './modal/VoucherPopover.vue';
import ShippingUnit from './modal/ShippingUnit.vue';
import VoucherShopee from './modal/VoucherShopee.vue';
import AddNewAddressModal from './modal/AddNewAddressModal.vue'

import {ref} from 'vue';

const isOpen = ref(false);

const isFocused = ref(false);
const isFocused2 = ref(false);
const isFocused3 = ref(false);
const isFocused4 = ref(false);

//
const addresses = ref([
  { name: 'Hoàng Phúc', phone: '(+84) 939745028', address: '105/B Hưng Phú, Cái Răng, Ninh Kiều, Tp. Cần Thơ', isActive: true },
  { name: 'Anh Thương', phone: '(+84) 939745028', address: '123/A Trần Hoàng Na, Ninh Kiều, Tp. Cần Thơ', isActive: false },
]);

const handleAddressClick = (selectedAddress) => {
  addresses.value.forEach((address) => {
    address.isActive = address === selectedAddress;
  });
};

const handleFocus = () => {
  isFocused.value = true;
};

const handleBlur = () => {
  isFocused.value = false;
};
const handleFocus2 = () => {
  isFocused2.value = true;
};

const handleBlur2 = () => {
  isFocused2.value = false;
};
const handleFocus3 = () => {
  isFocused3.value = true;
};

const handleBlur3 = () => {
  isFocused3.value = false;
};
const handleFocus4 = () => {
  isFocused4.value = true;
};

const handleBlur4 = () => {
  isFocused4.value = false;
}
</script>

<style scoped>
.container {
  margin-right: auto;
  margin-left: auto;
  width: 100%;
}
.flex-1{
  flex: 1;
}
.stardust-checkbox__input {
  user-select: none;
  cursor: not-allowed;
  position: relative;
  width: 16px;
  height: 16px;
  flex-shrink: 0;
  border-radius: 2px;
  border: 1px solid rgba(0, 0, 0, .14);
  text-align: center;
  box-shadow: inset 0 2px 0 0 rgba(0, 0, 0, .02);
  margin-right: 8px;
}

.shipdiscount {
  display: flex;
  flex-direction: column;
  padding-top: 20px;
}

.voucher {
  color: #ee4d2d;
  fill: currentColor;
  width: 1.3125rem;
  height: 1.25rem;
  margin-top: 0.0625rem;
}

.BjIo5w {
  display: flex;
  align-items: center;
  box-shadow: 0 1px 1px 0 rgba(0, 0, 0, 0.05);
  overflow: hidden;
  border-radius: 3px;
  font-size: 14px;
  background: #fff;
  margin-bottom: 12px;
  color: #888;
  padding: 0 20px;
}

.stardust-checkbox {
  font-weight: 300;
  font-size: 12px;
  display: flex;
  align-items: center;
  cursor: default;
  position: relative;
  color: rgba(0, 0, 0, 0.54);
  max-width: 400px;
}

input {
  line-height: normal;
}

.products {
  color: #222;
  width: 46.27949%;
  padding: 0px 20px;
  font-size: 18px;
}

.quantity,
.unit-price {
  text-align: center;
}

.unit-price {
  width: 15.88022%;
}

.quantity {
  width: 15.4265%;
}

.total {
  width: 18.43557%;
  text-align: end;
}

.body {
  box-shadow: 0 1px 1px 0 rgba(0, 0, 0, 0.05);
  border-radius: 0.125rem;
  overflow: hidden;
  background: #fff;
  overflow: visible;
  margin-bottom: 12px;
}

.clothes {
  border-bottom: 0;
}

.dressingup {
  height: 1.75rem;
  box-sizing: border-box;
  padding: 10px 44px;
}

.wholepleake {
  display: flex;
  align-items: center;
}

.store-container {
  margin-top: 0;
  padding: 20px;
}

.mystore {
  text-decoration: none;
  color: rgba(0, 0, 0, 0.87);
  display: block;
}

.storenav {
  display: flex;
  align-items: center;
}

.title-clothes {
  width: 29.03811%;
  box-sizing: border-box;
  position: relative;
  flex-direction: column;
}

.title-clothes,
.title-clothes-focus {
  display: flex;
  flex-direction: row;
}

.describe-clothes {
  display: flex;
  flex: 1;
  flex-direction: column;
  padding: 5px 20px 0 10px;
  font-size: 14px;
}

.describe-clothes-focus,
.describe-clothes {
  line-height: 16px;
  overflow: hidden;
}

.describe-clothes-focus {
  text-decoration: none;
  color: #000;
  margin-bottom: 5px;
  max-height: 32px;
  white-space: nowrap;
}

.variation,
.show-money {
  display: flex;
  align-items: center;
  justify-content: center;
}

.variation {
  width: 25.24138%;
}

.variation-focus {
  display: flex;
  align-items: center;
  justify-content: space-between;
  cursor: pointer;
  position: relative;
  outline: none;
}

.variation-container {
  flex: 1;
  color: rgba(0, 0, 0, 0.54);
  display: flex;
  flex-direction: column;
  font-size: 0.875rem;
  margin-right: 10px;
}

.variation-title {
  display: flex;
  align-items: center;
  text-transform: capitalize;
  text-align: left;
}

.triangle {
  border-left: 4px solid transparent;
  border-right: 4px solid transparent;
  background: none;
  padding: 0;
  border-top: 5px solid rgba(0, 0, 0, 0.54);
  border-bottom: 0;
  transition: transform 0.1s cubic-bezier(0.4, 0, 0.6, 1);
  transform: rotate(0);
  margin: 0 0 0 10px;
  cursor: pointer;
}

.size {
  text-overflow: ellipsis;
  overflow: hidden;
  word-break: break-word;
  display: -webkit-box;
  -webkit-box-orient: vertical;
  -webkit-line-clamp: 2;
  text-align: left;
  margin-top: 5px;
}

.show-money {
  flex-direction: column;
  width: 2.58022%;
}

.linethrough {
  margin-right: 10px;
}

.in-decrease-value {
  justify-content: center;
  display: flex;
  align-items: center;
  flex-direction: column;
  width: 28.2265%;
}

.total-price {
  display: flex;
  align-items: center;
  justify-content: center;
}

.total-price {
  width: 9.43557%;
  color: #ee4d2d;
  margin-left: 50px;
  padding-left: 38px;
}

.rnocow {
  z-index: 2;
  bottom: 0;
  display: grid;
  grid-template-columns: 1fr 20.3125rem 11.875rem;
  align-items: center;
  box-sizing: border-box;
  background: #fff;
  width: 100%;
  flex: 1;
  font-size: 1rem;
  margin-top: 0.75rem;
}

.platform-voucher-container {
  grid-column-start: 2;
  grid-column-end: 4;
  display: flex;
  align-items: center;
  padding: 0.75rem 0;
}

.platform-voucher {
  margin: 0 0.3125rem;
  font-weight: 400;
  flex-shrink: 0;
  font-size: 15px;
}

.select-enter {
  margin-right: 1.875rem;
  text-transform: capitalize;
  color: #05a;
  font-size: 0.875rem;
  white-space: nowrap;
  cursor: pointer;
}

.border-line {
  grid-column-start: 1;
  grid-column-end: 4;
  border-top: 1px dashed rgba(0, 0, 0, 0.09);
}

.right {
  font-size: 14px;
  box-sizing: border-box;
}

.hpZGIt {
  width: 28px;
  flex: 0 0 auto;
  fill: none;
}

.shopee-coin-title {
  font-weight: 500;
  flex-shrink: 0;
  margin-left: 8px;
}

.count-num-selected {
  font-weight: 500;
  flex: 0 1 auto;
  color: #929292;
  margin-left: 17px;
}

.last-part {
  display: flex;
  align-items: center;
  grid-column-start: 3;
  grid-column-end: 4;
  justify-content: flex-end;
}

.right-part {
  padding-right: 30px;
  font-weight: 500;
  color: #d0d0d0;
}

button {
  color: inherit;
  font: inherit;
  margin: 0;
  overflow: visible;
  text-transform: none;
  cursor: pointer;
}

.chat {
  width: 1.375rem;
  height: 1rem;
  cursor: pointer;
  user-select: none;
}

.line {
  height: 3px;
  width: 100%;
  background-position-x: -30px;
  background-size: 116px 3px;
  background-image: repeating-linear-gradient(45deg, #6fa6d6, #6fa6d6 33px, transparent 0, transparent 41px, #f18d9b 0, #f18d9b 74px, transparent 0, transparent 82px);
}

.default {
  padding: 1px 5px;
  margin-left: 1.5em;
  color: #ee4d2d;
  border-radius: 1px;
  border: 0.5px solid;
  font-size: 10px;
  text-transform: capitalize;
  flex-shrink: 0;
}

.shipping-method {
  display: flex;
  justify-content: flex-end;
  background-color: #fafdff;
  min-width: 0;
  min-height: 0;
  border-bottom: 1px dashed rgba(0, 0, 0, .09);
}

.Tn7sb8 {
  flex: 4;
}

.OUah6W {
  display: flex;
  flex-direction: column;
  min-width: 0;
  min-height: 0;
  font-size: 14px;
}

.OUah6W:last-child {
  border-left: 1px dashed rgba(0, 0, 0, .09);
}

.u-JjSt {
  display: flex;
  border-top: 0;
  min-width: 0;
  min-height: 0;
  padding: 16px 30px;
}

.nWvmL7 {
  flex: 1;
}

._0HwzC1 {
  margin-left: 15px;
  margin-bottom: 0;
  flex: 1;
  font-size: 12px;
  font-weight: 300;
}

.peusTR {
  display: flex;
  align-items: center;
  box-shadow: inset 0 2px 0 0 rgba(0, 0, 0, .02);
  border-radius: 2px;
  height: 40px;
  box-sizing: border-box;
  border: 1px solid rgba(0, 0, 0, .14);
  transition: border-color .3s ease-in-out, box-shadow .3s ease-in-out, background-color .3s ease-in-out;
}

._0HwzC1 input {
  padding: 4px 12px;
  width: 100%;
  height: 40px;
}

.gQuJxM {
  height: 38px;
  box-sizing: border-box;
  width: 100%;
  padding: 10px;
  background-color: initial;
  flex: 1;
  outline: none;
  font-size: .875rem;
  min-width: 0;
  color: #222;
  border: 0;
}

.Fzg\+Gz {
  flex: 6;
  padding: 16px 0;
  display: grid;
  grid-template-columns: auto;
  grid-template-rows: auto;
  align-items: center;
  grid-column-gap: 10px;
}

.Oa38lC {
  min-width: 0;
  min-height: 0;
  padding-left: 20px;
  display: flex;
  flex: 0 0 auto;
  color: #00bfa5;
  grid-column-start: 1;
  grid-column-end: 2;
}

._9HO6as {
  flex: 0 0 auto;
  font-weight: 500;
  grid-column-start: 2;
  grid-column-end: 3;
  grid-row-start: 1;
  grid-row-end: 2;
}

.GEI150 {
  grid-column-start: 1;
  grid-column-end: 2;
  -ms-grid-column-span: 1;
}

._3zds3i {
  margin-top: 5px;
  font-size: 12px;
  color: #888;
  grid-column-start: 2;
  grid-column-end: 5;
  -ms-grid-column-span: 3;
  grid-row-start: 3;
  grid-row-end: 3;
  -ms-grid-row-span: 0;
}

button.elfp9W.div-style {
  flex: 0 0 auto;
  text-align: center;
  text-transform: uppercase;
  color: #05a;
  cursor: pointer;
  user-select: none;
  grid-column-start: 3;
  grid-column-end: 4;
  -ms-grid-column-span: 1;
  grid-row-start: 1;
  grid-row-end: 2;
  -ms-grid-row-span: 1;
  border: none;
}

.OX-2Lj .div-style {
  display: block;
  background: none;
  border: 0;
  padding: 0;
  margin: 0;
  cursor: pointer;
  text-align: inherit;
}

.dnXfYW {
  flex: 1;
  text-align: right;
  font-size: 14px;
  font-weight: 500;
  color: #222;
  grid-column-start: 5;
  grid-column-end: 5;
  grid-row-start: 1;
  grid-row-end: 2;
}

.EGXRIm {
  border-top: 1px dashed rgba(0, 0, 0, .09);
  height: 1px;
  width: 100%;
  margin-top: 16px;
  margin-bottom: 16px;
  grid-column-start: 1;
  grid-column-end: 5;
  -ms-grid-column-span: 4;
  grid-row-start: auto;
}

._9evL72 {
  grid-row-end: span 1;
  padding-left: 20px;
  display: flex;
  align-items: center;
}

._9evL72, .EGXRIm {
  grid-column-start: 1;
  grid-column-end: 5;
  -ms-grid-column-span: 4;
  grid-row-start: auto;
}

._9evL72 .AlFfD\+.NL2dLs {
  color: inherit;
}

._9evL72 .AlFfD\+ {
  color: #929292;
}

._2qsKTk {
  display: flex;
  align-items: center;
  min-height: 90px;
  padding-left: 30px;
  padding-right: 30px;
  box-sizing: border-box;
}

.zDPGhr {
  flex: 1;
}

.SzEjHI {
  width: 200px;
  font-size: 18px;
  color: #222;
}

.KoRB7y {
  font-size: 14px;
  color: #222;
}

button.FooGkf.div-style {
  margin-left: 60px;
  color: #05a;
  text-transform: uppercase;
  font-weight: 500;
  cursor: pointer;
}

.OX-2Lj .div-style {
  display: block;
  background: none;
  border: 0;
  padding: 0;
  margin: 0;
  cursor: pointer;
  text-align: inherit;
}

.KQyCj0 {
  background: #fffefb;
  box-shadow: 0 1px 1px 0 rgba(0, 0, 0, .05);
  border-top: 1px solid #f1f0ed;
  padding-top: 15px;
  display: grid;
  grid-template-columns: 1fr -webkit-max-content -webkit-max-content;
  grid-template-columns: 1fr max-content max-content;
  grid-template-rows: auto;
  grid-column-gap: 10px;
}

h3.bwwaGp.iL6wsx {
  color: rgba(0, 0, 0, .54);
  grid-column-start: 2;
  grid-column-end: 3;
  -ms-grid-column-span: 1;
}

.OX-2Lj h1, .OX-2Lj h2, .OX-2Lj h3 {
  margin: 0;
  padding: 0;
  font-size: inherit;
  font-weight: inherit;
  line-height: inherit;
  color: inherit;
}

.BcITa9 {
  grid-row-start: 11;
  grid-row-end: 12;
}

.BcITa9 {
  grid-row-start: 11;
  grid-row-end: 12;
}

.BcITa9, .GJEkd- {
  -ms-grid-row-span: 1;
}

.R3a05f {
  padding: 0 25px 0 10px;
  height: 40px;
  min-width: 100px;
  grid-column-start: 3;
  grid-column-end: 4;
  -ms-grid-column-span: 1;
  justify-content: flex-end;
}

.bwwaGp {
  font-size: 14px;
  display: flex;
  align-items: center;
}

.RY9Grr {
  grid-row-start: 12;
  grid-row-end: 13;
}

.R3a05f {
  padding: 0 25px px 0 10px;
  height: 40px;
  min-width: 100px;
  grid-column-start: 3;
  grid-column-end: 4;
  -ms-grid-column-span: 1;
  justify-content: flex-end;
}

._5y8V6a {
  grid-row-start: 29;
  grid-row-end: 30;
}

.l2Nmnm {
  height: 50px;
  font-size: 28px;
  font-weight: 500;
  color: #ee4d2d;
}

.uTFqRt {
  grid-column-start: 1;
  grid-column-end: 4;
  -ms-grid-column-span: 3;
  grid-row-start: 32;
  grid-row-end: 33;
  -ms-grid-row-span: 1;
  min-height: 95px;
  padding: 0 30px;
  margin: 10px 0 0;
  display: flex;
  justify-content: flex-end;
  align-items: center;
  border-top: 1px dashed rgba(0, 0, 0, .09);
}

.k4VpYA {
  padding: 40px 25px 32px 0;
  flex: 1;
}

.C-NSr-:first-child {
  padding: 0 15px;
}

.C-NSr- {
  padding: 12px 15px 0;
  font-size: 14px;
  background-color: #fffdf8;
  color: rgba(0, 0, 0, .54);
}

.C-NSr- a {
  color: #05a;
}

.stardust-button--primary {
  background: #ee4d2d;
  color: #fff;
}

.stardust-button--primary {
  background: #ee4d2d;
  color: #fff;
}

.stardust-button {
  display: flex;
  align-items: center;
  justify-content: center;
  align-self: flex-start;
  background: #fff;
  border: 1px solid rgba(0, 0, 0, .09);
  box-shadow: 0 1px 1px 0 rgba(0, 0, 0, .03);
  border-radius: 2px !important;
  color: #555;
  text-transform: capitalize;
  outline: none;
}

.apLZEG {
  width: 210px;
  height: 40px;
  border: 0;
  border-radius: 2px;
  padding: 0;
  align-self: center !important;
  text-transform: none !important;
}

.stardust-button--primary {
  background-color: #ee4d2d;
  border-color: #cd3011;
  color: #fff;
}

.modal {
  position: absolute;
  top: 0;
  left: 0;
  background-color: rgba(0, 0, 0, 0.1);
  width: 100%;
  height: 100%;
  display: flex;
  justify-content: center;
  align-items: center;
}

.modal > div {
  background-color: #fff;
  padding: 20px 30px;
  border-radius: 3px;
  min-width: 500px;
  min-height: 600px;
}

.close {
  height: 40px;
  font-size: 1rem;
  line-height: 1.5rem;
  margin-right: 8px;
  color: rgba(0, 0, 0, .65);
  border: 1px solid rgba(0, 0, 0, .09);
  box-shadow: 0 1px 1px rgba(0, 0, 0, .03);
  min-width: 140px;
}

.confirm {
  color: #fff;
  background-color: #ee4d2d;
  align-items: center;
  display: flex;
  justify-content: center;
  outline: none;
  padding: 10px;
  border: 0;
  border-radius: 2px;
  min-width: 140px;
  font-size: 14px;
  cursor: pointer;
}

.oz79Fh {
  min-width: 0;
  width: 100%;
}

.b3Bzag {
  margin-bottom: 4px;
}

.HN9LCm {
  justify-content: space-between;
}

.rfuUdM {
  margin-right: 8px;
}

.sOgNxc {
  flex-grow: 1;
  overflow-x: hidden;
}

.QoyM7r {
  color: rgba(0, 0, 0, .87);
  font-size: 1rem;
  line-height: 1.5rem;
}

._9rN-3o {
  font-weight: 500;
  min-width: 0;
}

._9rN-3o {
  display: inline-flex;
}

._6MOlMb, ._9rN-3o {
  align-items: center;
}

.b4\+1yh {
  border-left: 0.5px solid rgba(0, 0, 0, .26);
  margin: 0 8px;
}

._0pkIbi, .UfDIlr {
  font-size: .875rem;
  line-height: 1.25rem;
}

.UfDIlr {
  color: rgba(0, 0, 0, .54);
}

.OlQ-nA {
  white-space: nowrap;
}

._6MOlMb, ._9rN-3o {
  align-items: center;
}

._7oOQ\+Z {
  flex-basis: 40px;
}

._7oOQ\+Z {
  justify-content: flex-end;
}

._6MOlMb, ._7oOQ\+Z, .HN9LCm, .sOgNxc {
  display: flex;
}

.VWye8T {
  border: 0;
  background: none;
  outline: none;
  padding: 4px;
  color: #08f;
  white-space: nowrap;
}

button, html input[type=button], input[type=reset], input[type=submit] {
  -webkit-appearance: button;
  cursor: pointer;
}

.UnzFoC {
  font-size: .875rem;
  line-height: 1.25rem;
}

.GeOdQ1, .UnzFoC {
  color: rgba(0, 0, 0, .54);
}

._3shwsO {
  margin-top: 4px;
}

._3shwsO {
  flex-wrap: wrap;
}

.lUnBgd {
  color: #ee4d2d;
  border-color: #ee4d2d;
}

.yN4t3M {
  margin: 0 4px 4px 0;
}

.jbmxUz {
  border-radius: 1px;
  padding: 2px 4px;
  border: 0.5px solid;
}

.QsXnat {
  border-bottom: 1px solid rgba(0, 0, 0, .09);
  background: #fff;
  padding: 16px 0;
}

.TKcWpJ {
  color: rgba(0, 0, 0, .65);
  border: 1px solid rgba(0, 0, 0, .09);
  box-shadow: 0 1px 1px rgba(0, 0, 0, .03);
  height: 40px;
  font-size: 1rem;
  line-height: 1.5rem;
}

.JiAm6E {
  align-items: center;
  display: flex;
  justify-content: center;
  outline: none;
  padding: 10px;
  border: 1px solid #ccc;
  background: none;
  border-radius: 2px;
  min-width: 140px;
  font-size: 14px;
  cursor: pointer;
}

svg:not(:root) {
  overflow: hidden;
}

.WWYAjA {
  width: 16px;
  height: 16px;
  fill: rgba(0, 0, 0, .54);
  margin-right: 8px;
}

.checkout-payment-setting .product-variation {
  font-weight: 500;
  border-radius: 2px;
  height: 2.5rem;
  display: flex;
  align-items: center;
  margin-bottom: 0;
  margin-top: 0.625rem;
}

.product-variation {
  overflow: visible;
  cursor: pointer;
  min-width: 5rem;
  min-height: 2.125rem;
  box-sizing: border-box;
  padding: 0.25rem 0.75rem;
  margin: 0 8px 8px 0;
  color: rgba(0, 0, 0, .8);
  text-align: left;
  border-radius: 2px;
  border: 1px solid rgba(0, 0, 0, .09);
  position: relative;
  background: #fff;
  outline: 0;
  word-break: break-word;
  display: inline-flex;
  align-items: center;
  justify-content: center;
}
.product-variation:focus{
  border: 1px solid #ee4d2d;
}
.product-variation__tick {
  width: 0.9375rem;
  height: 0.9375rem;
  position: absolute;
  overflow: hidden;
  right: 0;
  bottom: 0;
}
.product-variation__tick:before {
  border: 0.9375rem solid transparent;
  border-bottom: 0.9375rem solid var(--brand-primary-color,#ee4d2d);
  content: "";
  position: absolute;
  right: -0.9375rem;
  bottom: 0;
}
.product-variation__tick>.icon-tick-bold {
  position: absolute;
  right: 0;
  bottom: 0;
  color: #fff;
  font-size: 8px;
}
.product-variation__tick>.icon-tick-bold {
  position: absolute;
  right: 0;
  bottom: 0;
  color: #fff;
  font-size: 8px;
}
.product-variation__tick>.icon-tick-bold {
  position: absolute;
  right: 0;
  bottom: 0;
  color: #fff;
  font-size: 8px;
}
svg:not(:root) {
  overflow: hidden;
}
.shopee-svg-icon {
  display: inline-block;
  width: 1em;
  height: 1em;
  fill: currentColor;
  position: relative;
}
._2Ufr\+P {
  display: flex;
  padding: 0 30px;
  box-sizing: border-box;
}
._2Ufr\+P .xFYG7Q {
  font-size: 1.125rem;
  width: 12.5rem;
  color: #222;
}
._2Ufr\+P .\-6\+lVf .kFAX99 .stardust-radio {
  cursor: pointer;
  padding-top: 0;
}
.stardust-radio {
  font-family: -apple-system,Helvetica Neue,Helvetica,Roboto,Droid Sans,Arial,sans-serif;
  font-weight: 400;
  font-size: 14px;
  color: rgba(0,0,0,.87);
  display: flex;
  cursor: pointer;
  padding: 16px 12px;
}
.OX-2Lj .stardust-radio-button {
  align-self: center;
}
.OX-2Lj .stardust-radio-button {
  padding-top: 3px;
  margin-right: 0.625rem;
}
.stardust-radio-button {
  margin-right: 8px;
  flex-shrink: 0;
  position: relative;
  width: 18px;
  height: 18px;
}
.stardust-radio-button__outer-circle {
  width: 18px;
  height: 18px;
  border-radius: 100%;
  border: 2px solid rgba(0,0,0,.26);
  display: flex;
  align-items: center;
  justify-content: center;
  box-sizing: border-box;
}
.stardust-radio-button--checked .stardust-radio-button__outer-circle {
  border-color: #ee4d2d;
}
.OX-2Lj .stardust-radio-button__outer-circle {
  border-width: 1px;
  border-color: rgba(0,0,0,.14);
}
.OX-2Lj .stardust-radio-button--checked .stardust-radio-button__inner-circle {
  background-color: #fff;
}
.stardust-radio-button__outer-circle>.stardust-radio-button__inner-circle {
  width: 6px;
  height: 6px;
  border-radius: 100%;
  background: #ee4d2d;
  opacity: 1;
}
.stardust-radio__content {
  cursor: pointer;
}
.checkout-bank-transfer-item__icon-container {
  flex: 0 0 2.8125rem;
}
.checkout-bank-transfer-item__icon {
  width: 2.8125rem;
  height: 2.8125rem;
  object-fit: scale-down;
  border-radius: 2px;
  border: 1px solid rgba(0,0,0,.14);
}
.CN\+b4v {
  display: flex;
  flex-direction: column;
  margin-left: 1.25rem;
  margin-right: 1.25rem;
  min-height: 2.5rem;
  justify-content: center;
}
.-NDhMl {
  flex: 0 1 auto;
}
.checkout-payment-setting__banners {
  padding: 0.9375rem 0;
  margin: 0 1.875rem 0.9375rem;
  border-bottom: 0.0625rem dashed rgba(0,0,0,.09);
}
.checkout-payment-setting__banners .channel-banner {
  margin: 0.625rem 0.625rem 0 0;
}
.channel-banner, .channel-banner__icon {
  background-position: 50%;
  background-repeat: no-repeat;
  background-size: contain;
}
.channel-banner {
  position: relative;
  max-width: 23.75rem;
  min-width: 15.75rem;
  height: 5.125rem;
  border-radius: 0.25rem;
  border-top-right-radius: 0.25rem;
  border-top-left-radius: 0;
  color: #fff;
  float: left;
  overflow: hidden;
}
.channel-banner__icon {
  position: absolute;
  top: 0;
  left: 0;
  width: 1.5625rem;
  height: 2rem;
}
.channel-banner__logo {
  position: absolute;
  top: 0.0625rem;
  right: 0.0625rem;
  height: 1.75rem;
  width: 4.375rem;
  border-top-right-radius: 0.25rem;
  background-position: 50%;
  background-repeat: no-repeat;
  background-size: contain;
}
.channel-banner__main-desc, .channel-banner__sub-desc {
  margin-left: 1.875rem;
  margin-top: 0.3125rem;
  white-space: pre-wrap;
  word-break: break-all;
}

.channel-banner__main-desc {
  padding-right: 4.6875rem;
  vertical-align: bottom;
  font-weight: 200;
  font-size: 1.25rem;
}
.channel-promotion__discount-title {
  font-size: 1.25rem;
  color: #fff;
}
.channel-banner__sub-desc {
  padding-right: 1.5625rem;
  font-size: .75rem;
  max-height: 1.75rem;
}
.checkout-payment-setting__banners:after {
  content: "";
  clear: both;
  display: table;
}
.bank-transfer-category:last-child {
  padding-bottom: 1.875rem;
}
.bank-transfer-category {
  display: flex;
  padding: 0 1.875rem;
  box-sizing: border-box;
}
.checkout-bank-transfer-item--disabled .stardust-radio {
  cursor: not-allowed;
}
.checkout-bank-transfer-item>.stardust-radio {
  cursor: pointer;
  padding-top: 0;
  align-items: center;
}
.OX-2Lj .stardust-radio-button {
  align-self: center;
}
.OX-2Lj .stardust-radio-button {
  padding-top: 3px;
  margin-right: 0.625rem;
}
.OX-2Lj .stardust-radio-button__outer-circle {
  border-width: 1px;
  border-color: rgba(0,0,0,.14);
}
.checkout-bank-transfer-item--disabled .stardust-radio-button__outer-circle {
  background-color: #ebebeb;
}
.checkout-bank-transfer-item__main {
  display: flex;
  flex-direction: column;
  margin-left: 1.25rem;
  margin-right: 1.25rem;
  min-height: 2.5rem;
  justify-content: center;
}
.credit-card-subcategory {
  display: flex;
  padding: 1.875rem;
  box-sizing: border-box;
  position: relative;
}
.OX-2Lj .stardust-button svg {
  fill: #555;
  margin-right: 10px;
}
.stardust-icon {
  stroke: currentColor;
  fill: currentColor;
  width: 1em;
  height: 1em;
}
.checkout-payment-setting__promotions {
  padding-top: 0.3125rem;
  padding-bottom: 0.9375rem;
  margin-left: 13.75rem;
  border-top: 0.0625rem dashed rgba(0,0,0,.09);
}
.checkout-payment-setting__promotions .channel-promotion {
  float: left;
  margin: 0.625rem 0.625rem 0 0;
}
.channel-promotion--clickable {
  cursor: pointer;
}
.channel-promotion {
  width: 16.75rem;
  height: 4.875rem;
  border-radius: 0.25rem;
  position: relative;
  overflow: hidden;
  padding: 0.225rem;
  float: left;
}
.channel-promotion__bank-logo {
  position: absolute;
  top: 0.125rem;
  right: 0.125rem;
  height: 1.875rem;
  width: 4.57875rem;
  background: #fff;
  border-top-right-radius: 0.25rem;
  background-position: 50%;
  background-repeat: no-repeat;
  background-size: contain;
}
.channel-promotion__triangle {
  position: absolute;
  width: 0;
  height: 0;
  left: -0.625rem;
  top: 0;
  border-color: transparent #fff transparent transparent;
  border-style: solid;
  border-width: 0 0.625rem 1.875rem 0;
}
</style>