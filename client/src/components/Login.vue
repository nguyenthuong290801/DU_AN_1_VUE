<template>
  <Loading :clickLoading="loading"></Loading>
  <div class="content">
    <div class="wrapper">
      <div class="form-control">
        <div class="d-flex">
          <p class="login">Đăng nhập</p>
          <div class="d-flex justify-content-center align-items-center">
            <div class="QR">
              Đăng nhập với mã QR
            </div>
            <a class="">
              <svg width="40" height="40" fill="none">
                <g clip-path="">
                  <path fill-rule="evenodd" clip-rule="evenodd" fill="#ee4d2d"
                    d="M18 0H0v18h18V0zM3 15V3h12v12H3zM18 22H0v18h18V22zm-3 15H3V25h12v12zM40 0H22v18h18V0zm-3 15H25V3h12v12z">
                  </path>
                  <path d="M37 37H22.5v3H40V22.5h-3V37z" fill="#ee4d2d"></path>
                  <path d="M27.5 32v-8h-3v8h3zM33.5 32v-8h-3v8h3zM6 6h6v6H6zM6 28h6v6H6zM28 6h6v6h-6z" fill="#ee4d2d">
                  </path>
                  <path d="M-4.3 4l44 43.9-22.8 22.7-43.9-44z" fill="#fff"></path>
                </g>
              </svg>
            </a>
          </div>
        </div>
        <div class="d-flex flex-column px-3 mb-2">
          <small v-if="errorPhone" class="text-danger">Số điện thoại không hợp lệ!</small>
          <small v-if="errorPhoneR" class="text-danger">Không được để trống!</small>
          <small v-if="errorPhoneP" class="text-danger">Mật khẩu chưa đúng định dạng!</small>
        </div>
        <form class="box" action="">
          <input @input="handleValidate" class="email1" type="text" placeholder="Số điện thoại" v-model="phone_number">
          <div class="password-main">
            <input @input="validatePassword" class="password" id="password" :type="showPassword ? 'text' : 'password'"
              v-model="password" placeholder="Mật khẩu" />
            <img class="eye" :src="showPassword ? eyeImage : closedEyeImage" alt="Password Toggle"
              @click="togglePasswordVisibility" />
          </div>

          <input @click="submitForm" class="fw-semibold" type="button" value="ĐĂNG NHẬP">
          <div class="forget">
            <router-link class="forgetPassword" to="/buyer/forgot-password">Quên mật khẩu</router-link>
            <router-link class="SMS" to="/buyer/login-phone">Đăng nhập với SMS</router-link>
          </div>
        </form>
        <div class="break">
          <div class="line1"></div>
          <div class="text">HOẶC</div>
          <div class="line2"></div>
        </div>
        <div class="icon">
          <div class="icon">
            <button type="includeFb" class="bg-white m-2" @click="login">Facebook</button>
            <button type="includeGg" class="bg-white m-2" @click="loginWithGoogle">Google</button>
          </div>
        </div>
        <div class="footer">Bạn mới biết đến Shopee?
          <router-link to="/buyer/register">Đăng ký</router-link>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
import closedEyeImage from '@/assets/img/eyebrow.png';
import eyeImage from '@/assets/img/eye.png';
import axios from 'axios';
import Loading from '@/components/Loading.vue';

export default {
  components: {
    Loading
  },
  data() {
    return {
      password: '',
      phone_number: null,
      showPassword: false,
      closedEyeImage,
      eyeImage,
      loggedInUser: null,
      userFacebook: null,
      loading: false,
      errorPhone: false,
      errorPhoneR: false,
      errorPhoneP: false,
    };
  },
  watch: {
    userFacebook(newU, oldU) {
      this.createUserFace(this.userFacebook);
    }
  },
  methods: {
    async login() {
      try {
        const { status } = await new Promise(FB.getLoginStatus);
        if (status === 'connected') {
          console.log(status);
        } else {
          const { authResponse } = await new Promise(FB.login);
          const userID = authResponse.userID
          const accessToken = authResponse.accessToken

          const apiEndpoint = `https://graph.facebook.com/v13.0/${userID}?fields=id,name,email,gender,picture&access_token=${accessToken}`;

          fetch(apiEndpoint)
            .then(response => response.json())
            .then(userData => {
              const data = {
                'user_facebook_id': userData.id,
                'user_facebook_name': userData.name,
              }
              this.userFacebook = data
            })
            .catch(error => {
              console.error('Lỗi khi lấy thông tin người dùng:', error);
            });

          if (!authResponse) {
            this.$router.push({
              path: `/`
            });
          }
        }

      } catch (error) {
        console.log(error);
      }
    },
    togglePasswordVisibility() {
      this.showPassword = !this.showPassword;
    },
    createUserFace(data) {
      axios.post(`/api/user-facebook/new`, data)
        .then(response => {
          console.log(response.data)
          this.$router.push('/')
        })
        .catch(error => {
          console.error('Error:', error);
        });
    },
    initFacebookSDK() {
      window.fbAsyncInit = function () {
        FB.init({
          appId: '191618287357589',
          cookie: true,
          xfbml: true,
          version: 'v10.0'
        });
      };
    },
    submitForm() {

      if (this.phone_number == null ||
        this.phone_number == '' ||
        this.password == null ||
        this.password == ''
      ) {
        this.errorPhoneR = true;
      }

      const data = {
        'phone_number': this.phone_number,
        'password': this.password,
      }

      axios.post(`/api/auth/sms/login`, data)
        .then(response => {
          console.log(response.data)
          this.$router.push('/')
        })
        .catch(error => {
          console.error('Error:', error);
        });
    },
    showLoading() {
      return new Promise((resolve, reject) => {
        this.loading = true;
        setTimeout(() => {
          this.loading = false;
          resolve();
        }, 2000);
      });
    },
    handleValidate() {
      const phoneRegex = /^[0-9]{10}$/;

      if (phoneRegex.test(this.phone_number)) {
        this.errorPhone = false;
      } else {
        this.errorPhone = true;
      }
    },
    validatePassword() {
      const passwordRegex = /^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,}$/;
      if (passwordRegex.test(this.password)) {
        this.errorPhoneP = false;
      } else {
        this.errorPhoneP = true;
      }
    }
  },
};
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
  min-height: 550px;
  background-color: #fff;
  box-sizing: border-box;
  box-shadow: 0 3px 10px 0 rgb(0 0 0 / 14%);
  border-radius: .25rem;
}

.box {
  text-align: center;
}

.login {
  font-size: 20px;
  color: #222;
  padding: 22px 16px;
  margin-top: 10px;
  margin-bottom: 10px;
}

.QR {
  padding: 10px 18px;
  margin: 10px 0;
  color: #ffbf00;
  font-size: .875rem;
  font-weight: 700;
  border: 2px solid #ffbf00;
  border-radius: 2px;
  position: relative;
  margin-right: .6rem;
}

.QR:after {
  position: absolute;
  content: "";
  box-sizing: border-box;
  width: 0.75rem;
  height: 0.75rem;
  transform: rotate(45deg) translateX(-50%);
  border-top: 2px solid #ffbf00;
  border-right: 2px solid #ffbf00;
  top: 50%;
  background: #fefaec;
  right: -0.75rem;
}

input[type=text] {
  width: 335px;
  height: 40.8px;
  border: 1px solid rgba(0, 0, 0, .14);
  border-radius: 2px;
  box-shadow: inset 0 2px 0 rgb(0 0 0 / 2%);
  padding: 12px;
  font-size: 15px;
  margin-bottom: 30px;
}

.eye {
  width: 22px;
  position: absolute;
  right: 8%;
  bottom: 0%;
  top: 10px;
  z-index: 10000;
  cursor: pointer;
  filter: grayscale(100%);
}

.password-main {
  position: relative;
}

.password {
  float: right;
  width: 335px;
  height: 40.8px;
  border: 1px solid rgba(0, 0, 0, .14);
  border-radius: 2px;
  box-shadow: inset 0 2px 0 rgb(0 0 0 / 2%);
  padding: 12px;
  font-size: 15px;
  margin-bottom: 30px;
  margin-right: 18px;
  cursor: pointer;
}

input[type=text]:focus,
input[type=password]:focus {
  border: 1px solid #cccccc;
}

input[type=button] {
  width: 335px;
  height: 40.8px;
  /* border: 1px solid rgba(0,0,0,.14); */
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

.forget {
  display: flex;
  justify-content: space-between;
  margin-left: 31px;
  margin-right: 31px;
}

.forgetPassword,
.SMS {
  text-decoration: none;
  color: #0055aa;
  font-size: 12px;
  margin-bottom: 10px;
}

.break {
  display: flex;
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
  /* line-height: 1.2; */
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
  color: #00000042;
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