<template>
  <button type="button" class="border-0 bg-white" data-bs-toggle="modal" data-bs-target="#exampleModal3"
    data-bs-whatever="@mdo">
    Thêm địa chỉ mới
  </button>

  <div class="modal fade" id="exampleModal3" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" style="">
      <div class="modal-content">
        <div class="z-1">
          <div class="_8YTXP1">
            <div class="npWbUe">
              <div class="X6833N d-flex align-items-center">Địa chỉ mới</div>
              <form>
                <div class="N8Novg">
                  <div class="liteMT">
                    <div class="_1QD3Ax">
                      <div class="RVGM1k or8ALc">
                        <div class="_1o-Bla">
                          <input class="nu+CNG" type="text" placeholder="Họ và tên" autocomplete="name" maxlength="64">
                        </div>
                      </div>
                      <div class="_8LKWaE"></div>
                      <div class="RVGM1k DzH7jj">
                        <div class="_1o-Bla">
                          <input class="nu+CNG" type="text" placeholder="Số điện thoại" autocomplete="user-address-phone"
                            value="">
                        </div>
                      </div>
                    </div>
                    <div class="_1QD3Ax">
                      <div class="fHLcCP">
                        <div class="kyO8vp">
                          <div class="_5zBa+t">
                            <input autocomplete="user-administrative-divisions" class="Wg+paG +kH+Tk" type="text"
                              placeholder="Tỉnh/ Thành phố, Quận/Huyện, Phường/Xã" value="">
                            <div class="I6zJh+">
                              <div class="pVRABl"></div>
                              <div class="gm-E4g"></div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="_1QD3Ax">
                      <div class="_5WMfKg">
                        <div class="bxu6nK gVvWmt _13mFPe">
                          <div class="pwKo1S">
                            <div class="gsfdlW">Địa chỉ cụ thể</div>
                            <textarea class="i1NyUw" rows="2" placeholder="Địa chỉ cụ thể"
                              autocomplete="user-street-address" maxlength="128"></textarea>
                          </div>
                        </div>
                        <div class="_8k8Sho"></div>
                      </div>
                    </div>
                    <div class="_1QD3Ax">
                      <div class="position-relative w-100" style="height: 120px">
                        <div class="_6Vn9fl y1Kg2K _3Q98bT">
                          <svg class="NnZY53" fill="none" viewBox="0 0 440 120" preserveAspectRatio="xMidYMid slice">
                            <g>
                              <path fill="#F7F8F9" d="M0 0h440v120H0z"></path>
                              <g filter="url(#filter0_d)" stroke="#FBFBFC">
                                <path stroke-width="10" d="M-6.779-.48l123 61"></path>
                                <path stroke-width="12" d="M11.524 124.548l30-67"></path>
                                <path stroke-width="10" d="M-7.796 33.512l112 55"></path>
                                <path stroke-width="12" d="M103.473 88.664l41-97"></path>
                                <path stroke-width="10" d="M322.96 33.054l35-48m5.078 109.853l-51-10M442.064 94l-78 1">
                                </path>
                                <path stroke-width="12" d="M410.037 130.663l-4-36"></path>
                                <path stroke-width="11" d="M73.36 39.047l28-44"></path>
                                <path stroke-width="12" d="M31.552 19.486l12-26"></path>
                                <path stroke-width="10" d="M116.01 60.422l41 18"></path>
                                <path stroke-width="12" d="M140.286 123.17l41-128"></path>
                                <path stroke-width="10" d="M164.244 42.682l-32-12"></path>
                                <path stroke-width="11" d="M256.298 124.068l-89-81"></path>
                                <path stroke-width="10"
                                  d="M242.102 24.626l-78-32M273.319-4.26l-80 71m26.348 26.974l-82 29m184.93-91.441l-102 62">
                                </path>
                                <path stroke-width="11" d="M144.386 123.146l-39-34"></path>
                                <path stroke-width="12" d="M79.949 125.762l25-39"></path>
                                <path d="M241.5-7c18 8 70.203 32.864 82 39.5 16 9 39.5 35 39.5 61 0 27-18 34.5-28.5 42.5"
                                  stroke-width="10"></path>
                                <path
                                  d="M240 23.5c31 25.5 74 52 72.5 62s-51.5 28.333-77 41M337.5 13s23.5-7 28-8S445 7.5 445 7.5"
                                  stroke-width="10"></path>
                                <path d="M413 4c-1 13-3.4 40.5-5 42.5s-39.667 9-56 12" stroke-width="11"></path>
                              </g>
                            </g>
                          </svg>
                          <button class="XP5-ww _4Orbuk" disabled>
                            <svg viewBox="0 0 10 10" class="mx-1 Ukp6xQ">
                              <path disabled="" stroke="none" d="m10 4.5h-4.5v-4.5h-1v4.5h-4.5v1h4.5v4.5h1v-4.5h4.5z">
                              </path>
                            </svg>
                            Thêm vị trí
                          </button>
                        </div>
                      </div>
                    </div>
                    <div class="p-SlGQ">
                      <div class="gaLgx1 text-start">Loại địa chỉ:</div>
                      <div class="y7wFk1" role="radiogroup" aria-label="Loại địa chỉ:"
                        aria-describedby="label-group-error-message_38d55a4b-e658-4cec-afa9-ba371aaf7dce">
                        <div v-for="(option, index) in options" :key="index" class="_29clTe"
                          :class="{ 'DieK3+': option.isActive }" role="radio" aria-checked="false" aria-disabled="false"
                          tabindex="0" @click="handleOptionClick(index)">
                          <span class="_5tM+TS">{{ option.label }}</span>
                        </div>
                      </div>
                    </div>
                    <div class="VcDyT0">
                      <label class="B2pqIw">
                        <input class="HMqETK" type="checkbox" role="checkbox" aria-checked="false" aria-disabled="false"
                          @change="handleChange" />
                        <div class="Ha5fn3" :class="{ 'CM3pEI': isChecked }"></div>
                        Đặt làm địa chỉ mặc định
                      </label>
                    </div>
                  </div>
                </div>
              </form>
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

<script setup>
import { ref } from 'vue';

const options = ref([
  { label: 'Nhà Riêng', isActive: false },
  { label: 'Văn Phòng', isActive: false },
]);

const isChecked = ref(false);

const handleChange = () => {
  isChecked.value = !isChecked.value;
};
const handleOptionClick = (selectedIndex) => {
  options.value.forEach((option, index) => {
    option.isActive = index === selectedIndex;
  });
};
</script>

<style scoped>
.cancel {
  border: 1px solid rgba(0, 0, 0, .26);
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
  transition: background-color .1s cubic-bezier(.4, 0, .6, 1);
}

.ok {
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

._8YTXP1 {
  display: flex;
  flex-direction: column;
  box-sizing: border-box;
  background-color: #fff;
  border-radius: 2px;
}

.npWbUe,
.tpHj2Q {
  padding: 24px;
  width: 500px;
  box-sizing: border-box;
}

.X6833N {
  font-size: 20px;
}

.N8Novg {
  position: relative;
  padding-top: 15px;
  height: 480px;
  box-sizing: border-box;
}

.liteMT {
  flex: 1;
  padding-bottom: 66px;
  -ms-overflow-style: none;
  scrollbar-width: none;
}

._1QD3Ax {
  width: 100%;
}

._1QD3Ax,
.mz40cu,
.N8Novg {
  display: flex;
}

._3DegeU,
._5eLwQh,
.DzH7jj,
.gVvWmt,
.K9DC7j,
.or8ALc {
  flex: 1;
}

.RVGM1k {
  position: relative;
  margin-bottom: 15px;
  margin-top: 6px;
}

._1o-Bla {
  position: relative;
  box-shadow: inset 0 2px 0 0 rgba(0, 0, 0, .02);
  border-radius: 2px;
  height: 40px;
  box-sizing: border-box;
  border: 1px solid rgba(0, 0, 0, .14);
  transition: border-color .3s ease-in-out, box-shadow .3s ease-in-out, background-color .3s ease-in-out;
}

._1o-Bla,
.VRsAkr {
  align-items: center;
  display: flex;
}

.nu\+CNG {
  height: 38px;
  box-sizing: border-box;
  width: 100%;
  padding: 10px;
  background-color: initial;
  flex: 1;
  outline: none;
  font-size: 14px;
  min-width: 0;
  color: #222;
  border: 0;
}

input {
  line-height: normal;
}

button,
input,
optgroup,
select,
textarea {
  color: inherit;
  font: inherit;
  margin: 0;
}

._8LKWaE {
  width: 16px;
}

._1QD3Ax {
  width: 100%;
}

._1QD3Ax,
.mz40cu,
.N8Novg {
  display: flex;
}

.fHLcCP {
  flex: 1;
  position: relative;
  margin-bottom: 15px;
}

.kyO8vp {
  position: relative;
  margin-top: 6px;
}

._5zBa\+t {
  position: relative;
  box-shadow: inset 0 2px 0 0 rgba(0, 0, 0, .02);
  border-radius: 2px;
  min-height: 40px;
  box-sizing: border-box;
  border: 1px solid rgba(0, 0, 0, .14);
  transition: border-color .3s ease-in-out, box-shadow .3s ease-in-out, background-color .3s ease-in-out;
}

._5zBa\+t,
.I6zJh\+ {
  display: flex;
  align-items: center;
  justify-content: end;
}

.U7XEpZ {
  display: none;
  position: absolute;
  top: -6px;
  left: 10px;
  font-size: 12px;
  color: rgba(0, 0, 0, .4);
  padding: 0 3px;
  background: #fff;
}

.ci-AdD,
.rXhGuK,
.Wg\+paG {
  box-sizing: border-box;
  padding: 10px;
  flex: 1;
}

.fQw0so,
.Wg\+paG::placeholder {
  color: #bbb;
}

.rXhGuK {
  word-break: normal;
  word-wrap: anywhere;
  outline: none;
}

.W\+WJnK,
.Wg\+paG {
  color: #222;
}

.\+kH\+Tk {
  border: 0;
  height: 1px;
  margin: -1px;
  overflow: hidden;
  padding: 10px;
  position: absolute;
  width: 1px;
}

.Wg\+paG {
  height: 38px;
  background-color: initial;
  outline: none;
  border: 0;
  min-width: 100%;
}

.I6zJh\+ {
  padding-right: 9px;
}

._5zBa\+t,
.I6zJh\+ {
  display: flex;
  align-items: center;
}

.etpANj,
.pVRABl {
  width: 16px;
  height: 16px;
  margin-right: 3px;
}

.gm-E4g {
  width: 0;
  height: 0;
  border-left: 4px solid transparent;
  border-right: 4px solid transparent;
  border-top: 4px solid rgba(0, 0, 0, .4);
}

._5WMfKg {
  margin-bottom: 15px;
  width: 100%;
}

.bxu6nK {
  position: relative;
  margin-bottom: 15px;
  margin-top: 6px;
}

._13mFPe._13mFPe {
  margin-bottom: 0;
}

.pwKo1S {
  box-shadow: inset 0 2px 0 0 rgba(0, 0, 0, .02);
  border-radius: 2px;
  height: -webkit-fit-content;
  height: -moz-fit-content;
  height: fit-content;
  box-sizing: border-box;
  border: 1px solid rgba(0, 0, 0, .14);
  transition: border-color .3s ease-in-out, box-shadow .3s ease-in-out, background-color .3s ease-in-out;
}

.pwKo1S {
  align-items: center;
  display: flex;
}

.gsfdlW {
  display: none;
  position: absolute;
  top: -6px;
  left: 10px;
  font-size: 12px;
  color: rgba(0, 0, 0, .4);
  padding: 0 3px;
  background: #fff;
}

.i1NyUw:disabled {
  color: #e7e7e7;
  -webkit-text-fill-color: #e7e7e7;
}

.i1NyUw:read-only {
  color: #bbb;
  pointer-events: none;
}

.i1NyUw {
  box-sizing: border-box;
  width: 100%;
  padding: 10px;
  background-color: initial;
  flex: 1;
  outline: none;
  font-size: 14px;
  min-width: 0;
  color: #222;
  border: 0;
}

textarea {
  overflow: auto;
}

.y1Kg2K._3Q98bT {
  cursor: not-allowed;
}

.y1Kg2K {
  cursor: pointer;
}

._6Vn9fl {
  position: absolute;
  width: 100%;
  height: 100%;
}

svg:not(:root) {
  overflow: hidden;
  width: 12px;
}

.NnZY53 {
  width: 100%;
  height: 100%;
}

._4Orbuk:disabled {
  cursor: not-allowed;
}

.XP5-ww:disabled {
  background: #fff;
  color: #ccc;
}

button[disabled],
html input[disabled] {
  cursor: default;
}

._4Orbuk {
  position: absolute;
  left: 50%;
  top: 50%;
  transform: translate(-50%, -50%);
}

.XP5-ww {
  align-items: center;
  display: flex;
  justify-content: center;
  padding: 8px 12px;
  border: 1px solid rgba(0, 0, 0, .09);
  background: #fff;
  box-sizing: border-box;
  box-shadow: 0 1px 1px rgba(0, 0, 0, .03);
  border-radius: 2px;
  cursor: not-allowed;
  position: absolute;
}

.p-SlGQ {
  margin-top: 10px;
  margin-bottom: 20px;
}

.p-SlGQ {
  flex-direction: column;
}

.p-SlGQ,
.y7wFk1 {
  display: flex;
}

.gaLgx1 {
  margin-right: 10px;
  margin-bottom: 8px;
  color: #555;
}

.gaLgx1 {
  flex-shrink: 0;
}

.y7wFk1 {
  align-items: center;
}

._29clTe {
  align-items: center;
  display: flex;
  padding: 0 12px;
  margin-right: 10px;
  height: 40px;
  max-width: 146px;
  border: 1px solid rgba(0, 0, 0, .09);
  box-sizing: border-box;
  box-shadow: 0 1px 1px rgba(0, 0, 0, .03);
  border-radius: 2px;
}

._5tM\+TS {
  overflow: hidden;
  text-overflow: ellipsis;
  white-space: nowrap;
}

.DieK3\+ {
  color: #ee4d2d;
  border-color: #ee4d2d;
}

.CM3pEI {
  background: #ee4d2d;
  border-color: #ee4d2d;
}

.VcDyT0 {
  display: flex;
  flex-wrap: wrap;
  margin-left: -12px;
}

.B2pqIw {
  align-items: center;
  display: flex;
  cursor: default;
  position: relative;
  color: rgba(0, 0, 0, .54);
  max-width: 400px;
  -webkit-user-select: none;
  -moz-user-select: none;
  user-select: none;
  margin-bottom: 12px;
  margin-left: 12px;
}

input[type=checkbox],
input[type=radio] {
  box-sizing: border-box;
  padding: 0;
}

.HMqETK {
  opacity: 0;
  top: 0;
  left: 0;
  position: absolute;
}

.Ha5fn3 {
  -webkit-user-select: none;
  -moz-user-select: none;
  user-select: none;
  position: relative;
  width: 16px;
  height: 16px;
  flex-shrink: 0;
  border-radius: 2px;
  border: 1px solid rgba(0, 0, 0, .14);
  text-align: center;
  box-shadow: inset 0 2px 0 0 rgba(0, 0, 0, .02);
  margin-right: 8px;
  box-sizing: initial;
}

.Ha5fn3:before {
  position: absolute;
  content: "";
  height: 5px;
  width: 9px;
  border-left: 2px solid #fff;
  border-bottom: 2px solid #fff;
  transform: rotate(-45deg);
  left: 3.8px;
  top: 4px;
}</style>