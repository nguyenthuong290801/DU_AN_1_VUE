<template>
  <!-- Button trigger modal -->
  <button type="button" class="fs-6 bg-white border-0 select-enter" data-bs-toggle="modal" data-bs-target="#exampleModal">
    Chọn Voucher
  </button>

  <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="">
          <h6 class="fw-normal mx-3 my-3" id="exampleModalLabel">Kho Voucher</h6>
          <div class="lUl+ps">
            <span class="FTPbu3">Mã Voucher</span>
            <div class="_5sgxMq">
              <div class="position-relative">
                <div class="input-with-validator">
                  <input type="text" placeholder="Nhập mã voucher của Shop" class="w-100 border-0 focus-ring">
                </div>
              </div>
            </div>
            <button class="stardust-button stardust-button--disabled TtHulo CxgDW8 Bb4+ox">
              <span>Áp Dụng</span>
            </button>
          </div>
          <!--voucher-->
          <div class="W8WT2r">
            <!--voucher này ưu tiên-->
            <div class="vc_Card_container vc_Card_shop vc_VoucherStandardTemplate_shop vc_shop-voucher_pc">
              <div class="vc_Card_card">
                <div class="vc_Card_left">
                  <div class="vc_Card_sawtooth"></div>
                </div>
                <div class="vc_Card_right"></div>
                <div class="vc_VoucherStandardTemplate_hideOverflow"></div>
                <div class="vc_VoucherStandardTemplate_template">
                  <div class="vc_VoucherStandardTemplate_left">
                    <div class="d-flex justify-content-center align-items-center">
                      <img class="vc_Logo_logo vc_Logo_circular" src="../../assets/img/avt-voucher.jpg" alt="">
                    </div>
                  </div>
                  <div class="vc_VoucherStandardTemplate_middle">
                    <div class="vc_A11yAriaText_A11yContent">
                      <span aria-label="voucher"></span>
                      <span aria-label="Lựa chọn tốt nhất"></span>
                    </div>
                    <div class="d-flex">
                      <div class="vc_MainTitle_text vc_MainTitle_defaultLine">Giảm 10%</div>
                    </div>
                    <div class="vc_Subtitle_subTitle vc_Subtitle_defaultLine">Đơn Tối Thiểu ₫50k Giảm tối đa ₫10k</div>
                    <div class="vc_Label_label"></div>
                    <div class="vc_ProgressBarExpiry_progressBarExpiry">
                      <!--thanh voucher-->
                      <div class="vc_ProgressBar_progressBar vc_ProgressBarExpiry_progressBar" style="--vc-progress-bar-percentage: 85%;"></div>
                      <div class="vc_ProgressBarExpiry_usageLimitedText vc_ProgressBarExpiry_twoRowsLimitText">
                        <span class="vc_ProgressBarExpiry_isRunningOutSoon">Đã dùng 85%, </span>
                        <span class="vc_ProgressBarExpiry_validUntil">HSD: 30.11.2023</span>
                      </div>
                    </div>
                  </div>
                  <div class="vc_VoucherStandardTemplate_right">
                    <div class="d-flex align-items-center flex-column">
                      <div class="d-flex align-items-center justify-content-center position-relative z-1">
                        <div class="vc_RectButton_expand"></div>
                        <div class="vc_RectButton_btn vc_RectButton_claim">Lưu</div>
                      </div>
                    </div>
                  </div>
                  <div class="vc_CornerBadge_cornerBadge vc_CornerBadge_levelCorner vc_CornerBadge_bestChoice">
                    <div>Lựa chọn tốt nhất</div>
                  </div>
                </div>
              </div>
            </div>
            <!--voucher này đang bị làm ẩn-->
            <div class="vc_Card_container vc_Card_shop vc_VoucherStandardTemplate_shop vc_shop-voucher_pc">
              <div class="vc_Card_card">
                <div class="vc_Card_left">
                  <div class="vc_Card_sawtooth"></div>
                </div>
                <div class="vc_Card_right"></div>
                <div class="vc_VoucherStandardTemplate_hideOverflow"></div>
                <div class="vc_VoucherStandardTemplate_template" style="opacity: 0.5;">
                  <div class="vc_VoucherStandardTemplate_left">
                    <div class="d-flex justify-content-center align-items-center">
                      <img class="vc_Logo_logo vc_Logo_circular" src="../../assets/img/avt-voucher.jpg" alt="">
                    </div>
                  </div>
                  <div class="vc_VoucherStandardTemplate_middle">
                    <div class="vc_A11yAriaText_A11yContent">
                      <span aria-label="voucher"></span>
                      <span aria-label="Lựa chọn tốt nhất"></span>
                    </div>
                    <div class="d-flex">
                      <div class="vc_MainTitle_text vc_MainTitle_defaultLine">Giảm 30%</div>
                    </div>
                    <div class="vc_Subtitle_subTitle vc_Subtitle_defaultLine">Đơn Tối Thiểu ₫50k Giảm tối đa ₫40k</div>
                    <div class="vc_Label_label"></div>
                    <div class="vc_ProgressBarExpiry_progressBarExpiry">
                      <!--thanh voucher-->
                      <div class="vc_ProgressBar_progressBar vc_ProgressBarExpiry_progressBar" style="--vc-progress-bar-percentage: 50%;"></div>
                      <div class="vc_ProgressBarExpiry_usageLimitedText vc_ProgressBarExpiry_twoRowsLimitText">
                        <span class="vc_ProgressBarExpiry_isRunningOutSoon">Đã dùng 50%, </span>
                        <span class="vc_ProgressBarExpiry_validUntil">HSD: 30.11.2023</span>
                      </div>
                    </div>
                  </div>
                  <div class="vc_VoucherStandardTemplate_right">
                    <div class="d-flex align-items-center flex-column">
                      <div class="d-flex align-items-center justify-content-center position-relative z-1">
                        <div class="vc_RectButton_expand"></div>
                        <div class="vc_RectButton_btn vc_RectButton_claim">Lưu</div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <a href="" class="text-decoration-none">
                <div class="vc_WarningBanner_warningBanner">
                  <img src="../../assets/img/!.svg" alt="">
                  Mua thêm ₫106,8k sản phẩm để sử dụng Voucher
                </div>
              </a>
            </div>
          </div>

        </div>
        <div class="modal-footer">
          <button type="button" class="fs-6 cancel" style="height: 2.5rem" data-bs-dismiss="modal">TRỞ LẠI</button>
          <button type="button" class="fs-6 ok border-0">OK</button>
        </div>
      </div>
    </div>
  </div>
</template>

<script>

</script>

<style scoped>
.select-enter {
  margin-right: 1.875rem;
  text-transform: capitalize;
  color: #05a;
  font-size: 0.875rem;
  white-space: nowrap;
  cursor: pointer;
}
.lUl\+ps {
  display: flex;
  padding: 0.9375rem;
  align-items: center;
  background: #f8f8f8;
}
.lUl\+ps .FTPbu3 {
  flex-shrink: 0;
  text-transform: capitalize;
  margin-right: 0.6875rem;
}
.lUl\+ps ._5sgxMq {
  flex: 1;
}
.pzrFRF>div .input-with-validator {
  width: 100%;
}
.input-with-validator {
  display: flex;
  align-items: center;
  background-color: #fff;
  position: relative;
  border-radius: 2px;
  border: 1px solid rgba(0,0,0,.14);
  box-sizing: border-box;
  box-shadow: inset 0 2px 0 0 rgba(0,0,0,.02);
  color: #222;
  height: 40px;
  padding: 10px;
  transition: border-color .1s ease;
}
.lUl\+ps .CxgDW8.Bb4\+ox {
  color: #ccc;
}
.lUl\+ps .CxgDW8.CxgDW8 {
  text-transform: uppercase;
  text-overflow: ellipsis;
  overflow: hidden;
  white-space: nowrap;
  margin-left: 0.5rem;
  width: 5.875rem;
  height: 2.5rem;
  flex-shrink: 0;
}
.OX-2Lj .stardust-button--disabled {
  background: #fff;
}
.OX-2Lj .stardust-button {
  display: flex;
  align-items: center;
  justify-content: center;
  align-self: flex-start;
  background: #fff;
  border: 1px solid rgba(0,0,0,.09);
  box-shadow: 0 1px 1px 0 rgba(0,0,0,.03);
  border-radius: 2px!important;
  color: #555;
  text-transform: capitalize;
  outline: none;
}
.TtHulo.stardust-button--disabled, .TtHulo.stardust-button--disabled:hover {
  background-color: #fff;
  opacity: unset;
  color: #ccc;
  border-color: rgba(0,0,0,.05);
}
button[disabled], html input[disabled] {
  cursor: default;
}
.W8WT2r {
  padding: 0 0 2.75rem;
  margin: 0;
}
.vc_shop-voucher_pc {
  --vc-logo-size: 3.5rem;
  --vc-expiry-font-size: 0.75rem;
  --vc-expiry-line-height: 0.875rem;
  --vc-expiry-margin-top: 0.25rem;
  --vc-main-title-font-size: 1rem;
  --vc-main-title-line-height: 1.25rem;
  --vc-subtitle-font-size: 0.875rem;
  --vc-subtitle-line-height: 1rem;
  --vc-product-scope-font-size: 0.75rem;
  --vc-product-scope-line-height: 0.875rem;
  --vc-product-scope-padding: 0.0625rem 0.25rem;
  --vc-icon-text-font-size: 0.75rem;
  --vc-icon-text-line-height: 0.875rem;
  --vc-icon-text-max-height: 1.75rem;
  --vc-icon-text-margin-top: 0.25rem;
  --vc-radio-button-border: 0.0625rem solid rgba(0,0,0,.14);
  --vc-radio-button-box-shadow: #000 0 0.125rem 0 0;
  --vc-rect-button-height: 1.75rem;
  --vc-rect-button-min-width: 4rem;
  --vc-rect-button-font-size: 0.875rem;
  --vc-corner-badge-padding: 0.125rem 0.3125rem;
  --vc-corner-badge-font-size: 0.75rem;
  --vc-corner-badge-line-height: 0.875rem;
  --vc-card-width: auto;
  margin-bottom: 12px;
}
.vc_Card_shop {
  --vc-card-left-border-color: #e8e8e8;
  --vc-card-left-fill-color: #fff;
  --vc-card-right-border-color: #e8e8e8;
  --vc-card-background-color: #fff;
}
 .vc_Card_card, .vc_Card_container {
   width: var(--vc-card-width,28.375rem);
 }
.vc_Card_card {
  height: 7.375rem;
  position: relative;
}
.vc_Card_left {
  background: linear-gradient(180deg,var(--vc-card-left-border-color,#e8e8e8) var(--vc-card-sawtooth-margin,.25rem),transparent 0,transparent calc(100% - var(--vc-card-sawtooth-margin, .25rem)),var(--vc-card-left-border-color,#e8e8e8) calc(100% - var(--vc-card-sawtooth-margin, .25rem))) 0 0 /0.0625rem 100% no-repeat,linear-gradient(180deg,var(--vc-card-left-fill-color,#fff) var(--vc-card-sawtooth-margin,.25rem),transparent 0,transparent calc(100% - var(--vc-card-sawtooth-margin, .25rem)),var(--vc-card-left-fill-color,#fff) calc(100% - var(--vc-card-sawtooth-margin, .25rem))) 0 0/100% 100% no-repeat;
  border-bottom: 0.0625rem solid var(--vc-card-left-border-color,#e8e8e8);
  border-bottom-left-radius: 0.125rem;
  border-top: 0.0625rem solid var(--vc-card-left-border-color,#e8e8e8);
  border-top-left-radius: 0.125rem;
  box-sizing: border-box;
  height: 100%;
  left: 0;
  overflow: hidden;
  position: absolute;
  top: 0;
  width: var(--vc-card-height,7.375rem);
}
.vc_Card_sawtooth {
  background: linear-gradient(180deg,transparent calc(var(--vc-card-radius, .25rem)*2),var(--vc-card-left-border-color,#e8e8e8) 0) 0 0.0625rem /0.0625rem calc(var(--vc-card-radius, .25rem)*2 + var(--vc-card-gap, .125rem)) repeat-y,radial-gradient(circle at 0 var(--vc-card-radius,.25rem),transparent 0,transparent calc(var(--vc-card-radius, .25rem) - 0.0625rem),var(--vc-card-left-border-color,#e8e8e8) 0,var(--vc-card-left-border-color,#e8e8e8) var(--vc-card-radius,.25rem),var(--vc-card-left-fill-color,#fff) 0) 0 0.0625rem
  rem
 /100% calc(var(--vc-card-radius, .25rem)*2 + var(--vc-card-gap, .125rem)) repeat-y;
  bottom: calc(var(--vc-card-sawtooth-margin, .25rem) - 0.0625rem);
  position: absolute;
  top: calc(var(--vc-card-sawtooth-margin, .25rem) - 0.0625rem);
  width: 100%;
}
.vc_Card_right {
  background-color: var(--vc-card-background-color,#fff);
  border: 0.0625rem solid var(--vc-card-right-border-color,#e8e8e8);
  border-bottom-right-radius: 0.125rem;
  border-left: none;
  border-top-right-radius: 0.125rem;
  box-sizing: border-box;
  height: 100%;
  position: absolute;
  right: 0;
  top: 0;
  width: calc(100% - var(--vc-card-height, 7.375rem));
}
.vc_VoucherStandardTemplate_hideOverflow {
  border: 0.0625rem solid transparent;
  border-radius: 0.125rem;
  bottom: 0;
  left: 0;
  overflow: hidden;
  position: absolute;
  right: 0;
  top: 0;
}
.vc_VoucherStandardTemplate_template {
  border: 0.0625rem solid transparent;
  border-left: none;
  box-shadow: var(--vc-template-box-shadow,.125rem .125rem .3125rem rgba(0,0,0,.07));
  box-sizing: border-box;
  display: flex;
  height: 100%;
  position: relative;
  transition: background 1s ease;
}
.vc_VoucherStandardTemplate_left {
  align-items: center;
  border-right: 0.0625rem dashed #e8e8e8;
  box-sizing: border-box;
  display: flex;
  flex-direction: column;
  justify-content: center;
  position: relative;
  width: var(--vc-card-height,7.375rem);
}
.vc_Logo_circular {
  border: 0.0625rem solid #efefef;
  border-radius: 50%;
}
 .vc_Logo_logo {
   display: block;
   height: var(--vc-logo-size,3.5rem);
   width: var(--vc-logo-size,3.5rem);
 }
.vc_VoucherStandardTemplate_middle {
  display: flex;
  flex: 1;
  flex-direction: column;
  justify-content: center;
  overflow: hidden;
  padding-left: 0.75rem;
  position: relative;
}
.vc_A11yAriaText_A11yContent {
  clip: rect(0,0,0,0)!important;
  border: 0!important;
  height: 1px!important;
  margin: -1px!important;
  overflow: hidden!important;
  padding: 0!important;
  position: absolute!important;
  white-space: nowrap!important;
  width: 1px!important;
}
.vc_MainTitle_defaultLine, .vc_MainTitle_fsvLine {
  overflow: hidden;
  text-overflow: ellipsis;
}
 .vc_MainTitle_text {
   color: var(--vc-main-title-color,rgba(0,0,0,.8));
   font-size: var(--vc-main-title-font-size,1rem);
   font-weight: 500;
   line-height: var(--vc-main-title-line-height,1.25rem);
   white-space: var(--vc-card-mian-title-white-space,nowrap);
 }
.vc_Subtitle_defaultLine, .vc_Subtitle_oneLine {
  -webkit-box-orient: vertical;
  display: -webkit-box;
  overflow: hidden;
  text-overflow: ellipsis;
}
 .vc_Subtitle_defaultLine {
   -webkit-line-clamp: 2;
 }
 .vc_Subtitle_subTitle {
   color: var(--vc-sub-title-color,rgba(0,0,0,.8));
   font-size: var(--vc-subtitle-font-size,.875rem);
   font-weight: var(--vc-subtitle-font-weight,normal);
   line-height: var(--vc-subtitle-line-height,1rem);
   margin: var(--vc-sub-title-margin,0);
   padding: var(--vc-sub-title-padding,0);
   text-align: var(--vc-subtitle-text-align,unset);
   white-space: var(--vc-sub-title-white-space,unset);
   word-break: break-word;
 }
.vc_Label_label {
  display: flex;
  margin: var(--vc-card-label-margin,.3125rem 0 .25rem 0);
  min-width: 0;
  overflow: hidden;
  padding: var(--vc-card-label-padding,0);
  text-overflow: ellipsis;
  white-space: nowrap;
}
.vc_ProgressBarExpiry_progressBarExpiry {
  color: rgba(0,0,0,.54);
  font-size: var(--vc-expiry-font-size,.75rem);
  line-height: var(--vc-expiry-line-height,.875rem);
  margin: var(--vc-card-progress-expiry-margin,.25rem 0 0 0);
  margin-top: var(--vc-expiry-margin-top,.25rem);
  overflow: hidden;
  padding-right: var(--vc-card-progress-expiry-padding-right,0);
  text-overflow: ellipsis;
  white-space: nowrap;
}
.vc_ProgressBarExpiry_progressBar {
  margin-bottom: 0.25rem;
  margin-right: 0.3125rem;
}
 .vc_ProgressBar_progressBar {
   background: linear-gradient(90deg,transparent var(--vc-progress-bar-percentage),var(--vc-progress-bar-bg-color,#e8e8e8) 0),linear-gradient(90deg,var(--vc-progress-bar-start-color,#eb1717),var(--vc-progress-bar-end-color,#ffb000));
   border-radius: var(--vc-progress-bar-height,4px);
   height: var(--vc-progress-bar-height,4px);
 }
.vc_ProgressBarExpiry_usageLimitedText.vc_ProgressBarExpiry_twoRowsLimitText {
  -webkit-box-orient: vertical;
  -webkit-line-clamp: 2;
  display: -webkit-box;
  overflow: hidden;
  text-overflow: ellipsis;
}
 .vc_ProgressBarExpiry_usageLimitedText {
   line-height: var(--vc-card-progress-expiry-usage-limited-text-linehigh,unset);
   margin: var(--vc-card-progress-expiry-usage-limited-text-margin,0);
   white-space: normal;
 }
.vc_ProgressBarExpiry_isRunningOutSoon {
  color: #ff424f;
  font-weight: 500;
}
 .vc_ProgressBarExpiry_usageLimitedText {
   line-height: var(--vc-card-progress-expiry-usage-limited-text-linehigh,unset);
   margin: var(--vc-card-progress-expiry-usage-limited-text-margin,0);
   white-space: normal;
 }
.vc_ProgressBarExpiry_validUntil {
  color: rgba(0,0,0,.54);
}
.vc_VoucherStandardTemplate_right {
  align-items: flex-end;
  display: flex;
  flex-direction: column;
  justify-content: space-between;
  padding: 0.75rem;
  position: relative;
}
.vc_RectButton_expand {
  cursor: pointer;
  height: var(--vc-card-height,7.375rem);
  min-width: var(--vc-rect-button-min-width,3.4375rem);
  position: absolute;
  z-index: 1;
}
.vc_RectButton_btn.vc_RectButton_claim {
  background-color: #ee4d2d;
}
 .vc_RectButton_btn {
   -webkit-line-clamp: 1;
   align-items: center;
   background-color: #fff;
   border: 1px solid transparent;
   border-radius: 0.125rem;
   box-shadow: 0 1px 1px 0 #00000017;
   box-sizing: border-box;
   color: #fff;
   cursor: pointer;
   display: flex;
   font-size: var(--vc-rect-button-font-size,.875rem);
   height: var(--vc-rect-button-height,1.75rem);
   justify-content: center;
   min-width: var(--vc-rect-button-min-width,3.4375rem);
   outline: 0;
   overflow: hidden;
   padding: var(--vc-card-rect-button-padding,0 .5625rem);
   position: relative;
   text-overflow: ellipsis;
   text-transform: capitalize;
   white-space: nowrap;
 }
.vc_CornerBadge_bestChoice {
  background-color: var(--vc-corner-badge-bg-color,#4c7);
}
 .vc_CornerBadge_levelCorner {
   left: -0.25rem;
   top: 0.3125rem;
 }
 .vc_CornerBadge_cornerBadge {
   border-radius: 0.125rem 0.125rem 0.125rem 0;
   color: #fff;
   display: flex;
   font-size: var(--vc-corner-badge-font-size,.625rem);
   line-height: var(--vc-corner-badge-line-height,.75rem);
   padding: var(--vc-corner-badge-padding,.125rem .25rem);
   position: absolute;
 }
.vc_CornerBadge_bestChoice:after {
  border-left: 0.1875rem solid var(--vc-corner-badge-bg-color2,#4c7);
}
 .vc_CornerBadge_cornerBadge:after {
   border: 0.1875rem solid transparent;
   content: "";
   height: 0;
   left: 0.0625rem;
   position: absolute;
   top: calc(100% + 0.0625rem);
   transform: rotate(-45deg) translate(50%,-50%);
   width: 0;
 }
.vc_WarningBanner_warningBanner {
  align-items: center;
  background-color: #fff8e4;
  color: #ee4d2d;
  display: flex;
  font-size: var(--vc-warning-banner-font-size,.875rem);
  height: var(--vc-warning-banner-height,2.375rem);
  margin-top: var(--vc-warning-banner-margin-top,0);
  padding-left: var(--vc-warning-banner-padding-left-right,.625rem);
  padding-right: var(--vc-warning-banner-padding-left-right,.625rem);
  padding-top: var(--vc-warning-banner-padding-top,0);
}
.cancel{
  border: 1px solid rgba(0,0,0,.26);
  border-radius: 0.125rem;
  box-sizing: border-box;
  width: 140px;
  text-transform: uppercase;
  font-weight: 400;
  cursor: pointer;
  color: #555;
  margin-right: 6px;
  line-height: 1;
  background: none;
  transition: background-color .1s cubic-bezier(.4,0,.6,1);
}
.ok{
  border-radius: 0.125rem;
  box-sizing: border-box;
  width: 140px;
  color: #fff;
  background: #ee4d2d;
  max-width: 190px;
  cursor: pointer;
  font-weight: 400;
  line-height: 1;
  height: 40px;
}
</style>