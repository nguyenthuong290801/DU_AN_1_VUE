<template>
    <div class="content">
      <div class="wrapper">
        <div v-if="showRegsiter && !showFormCreate" class="form-control">
          <div class="d-flex">
            <p class="login m-0">Đăng nhập với SMS</p>
          </div>
          <small v-if="errorPhone" class="text-danger">Số điện thoại không hợp lệ!</small>
          <small v-if="errorPhoneR" class="text-danger">Không được để trống!</small>
          <div class="box">
            <input @input="handleValidate" class="email" type="text" placeholder="Số điện thoại" v-model="numberPhone">
            <button @click="handlePhone" class="fw-semibold" type="button" :disabled="errorPhone">TIẾP THEO</button>
          </div>
          <div class="footer">Quay lại
            <router-link to="/buyer/login">Đăng nhập</router-link>
          </div>
        </div>
        <div v-if="showOPT && !showFormCreate" class="form-control">
          <div class="d-flex justify-content-between align-items-center">
            <p class="login m-0">Quên mật khẩu</p>
            <p @click="goBack" class="rehome text-decoration-none">Quay lại</p>
          </div>
          <small v-if="errorOTP" class="text-danger">Mã OPT không hợp lệ!</small>
          <div class="box">
            <input class="email" type="text" placeholder="OTP" v-model="OTP">
            <button @click="handleOTP" class="fw-semibold" type="button">
              TIẾP THEO
            </button>
            <button @click="handlePhone" class="fw-semibold" type="button" :disabled="resendTimeout > 0">
              GỬI LẠI
              <span v-if="resendTimeout > 0"> ({{ resendTimeout }}s)</span>
            </button>
          </div>
          <div class="footer">Quay lại
            <router-link to="/buyer/login">Đăng nhập</router-link>
          </div>
        </div>
      </div>
    </div>
  </template>
  
  <script>
  import axios from 'axios';
  
  export default
    {
      data() {
        return {
          numberPhone: null,
          errorPhone: false,
          errorOTP: false,
          errorPhoneR: false,
          showRegsiter: true,
          showOPT: false,
          OTP: null,
          secret: null,
          password: null,
          confirmPassword: null,
          resendTimeout: 0,
          userFacebook: null,
        }
      },
      watch: {
        errorPhone(newP, oldP) {
          this.errorPhoneR = false;
        },
      },
      methods: {
        handlePhone() {
          if (this.showOPT) {
            this.startResendTimer();
          }
  
          if (this.numberPhone == null) {
            this.errorPhoneR = true;
          }
  
          if (typeof this.numberPhone !== "number" && this.errorPhone == false) {
            const numberPhone = this.numberPhone.substr(1)
            axios.post(`/api/auth/sms`, numberPhone)
              .then(response => {
                this.secret = response.data.data
                this.showRegsiter = false;
                this.showOPT = true;
              })
              .catch(error => {
                console.error('Error:', error);
              });
          }
        },
        goBack() {
          this.showRegsiter = true;
          this.numberPhone = null;
          this.showOPT = false;
          this.OTP = null;
          this.resendTimeout = 0;
        },
        handleValidate() {
          const phoneRegex = /^[0-9]{10}$/;
  
          if (phoneRegex.test(this.numberPhone)) {
            this.errorPhone = false;
          } else {
            this.errorPhone = true;
          }
        },
        handleOTP() {
  
          if (typeof this.OTP !== "number") {
            let data = [
              this.secret,
              this.OTP,
            ]
  
            axios.post(`/api/auth/sms/otp`, data)
              .then(response => {
                response.data.data
  
                if (response.data.data !== true) {
                  this.errorOTP = true
                } else {
                  this.errorOTP = false
                  this.$router.push('/')
                }
              })
              .catch(error => {
                console.error('Error:', error);
              });
          }
        },
        startResendTimer() {
          this.resendTimeout = 15;
          const timerInterval = setInterval(() => {
            this.resendTimeout -= 1;
            if (this.resendTimeout <= 0) {
              clearInterval(timerInterval);
            }
          }, 1000);
        },
      }
    }
  </script>
  
  <style scoped>
  .header-right a {
    color: #ee4d2d;
    font-size: 14px;
    text-decoration: none;
    text-decoration-style: solid;
  }
  
  .content {
    background-color: rgb(238, 77, 45);
    height: 600px;
    position: relative;
  }
  
  .wrapper {
    background-image: url('../assets/img/background.png');
    background-size: cover;
    background-repeat: no-repeat;
    background-position: center center;
    width: 1040px;
    height: 600px;
    display: flex;
    align-items: center;
    justify-content: flex-end;
    margin: 0 auto;
  }
  
  .form-control {
    width: 397px;
    min-height: 500px;
    background-color: #fff;
    box-sizing: border-box;
    box-shadow: 0 3px 10px 0 rgb(0 0 0 / 14%);
    border-radius: .25rem;
  }
  
  .box {
    text-align: center;
    margin-top: 10px;
  }
  
  .login {
    font-size: 20px;
    color: #222;
    padding: 22px 16px;
    margin-top: 10px;
    margin-bottom: 10px;
  }
  
  .rehome {
    font-size: 14px;
    color: #222;
    padding: 22px 16px;
    margin-top: 10px;
    margin-bottom: 10px;
    cursor: pointer;
  }
  
  small {
    padding: 0px 0px 0px 16px;
  }
  
  .email {
    width: 335px;
    height: 40.8px;
    border: 1px solid rgba(0, 0, 0, .14);
    border-radius: 2px;
    box-shadow: inset 0 2px 0 rgb(0 0 0 / 2%);
    padding: 12px;
    font-size: 15px;
    margin-bottom: 30px;
  }
  
  
  input[type=email]:focus,
  input[type=password]:focus {
    border: 1px solid #cccccc;
  }
  
  button[type=button] {
    width: 335px;
    height: 40.8px;
    border-radius: 2px;
    padding: 12px;
    font-size: 14px;
    margin-bottom: 10px;
    color: #fff;
    background-color: #EE4D2D;
    border: none;
    text-decoration: none;
    cursor: pointer;
  }
  
  button[disabled] {
    background-color: #ee4d2d8e;
    cursor: default;
  }
  
  .line1 {
    color: #dbdbdb;
    border-bottom: 1px solid #dbdbdd;
    height: 1px;
    width: 100%;
    margin-top: 8px;
    margin-left: 31px;
    margin-right: 10px;
    margin-bottom: 30px;
  }
  
  
  .line2 {
    color: #dbdbdb;
    border-bottom: 1px solid #dbdbdd;
    width: 100%;
    margin-top: 8px;
    margin-left: 10px;
    margin-right: 31px;
    margin-bottom: 30px;
  }
  
  .text {
    color: #ccc;
    font-size: 12px;
  }
  
  
  .icon {
    display: flex;
    margin-left: 31px;
    margin-right: 31px;
    justify-content: center;
    margin-bottom: 10px;
  }
  
  button[type=includeFb] {
    width: 150px;
    height: 40px;
    border-radius: 2px;
    border: 1px solid #ccc;
    background-image: url('../assets/img/Facebook_Logo.webp');
    background-size: 22px 22px;
    background-repeat: no-repeat;
    background-position: 9px 9px;
    font-size: 14px;
    padding-left: 35px;
  }
  
  button[type=includeGg] {
    width: 150px;
    height: 40px;
    background-color: #4285f4;
    border-radius: 2px;
    border: 1px solid #ccc;
    background-image: url('../assets/img/google.png');
    background-size: 22px 22px;
    background-repeat: no-repeat;
    background-position: 9px 9px;
    padding-left: 35px;
  }
  
  .footer {
    font-size: 14px;
    text-align: center;
  }
  
  .footer a {
    color: #EE4D2D;
    font-size: 14px;
    text-align: center;
    text-decoration: none;
  }
  
  .footer a:hover {
    color: #EE4D2D;
  }
  </style>