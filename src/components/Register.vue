<template>
  <div class="content">
    <div class="wrapper">
      <div class="form-control">
        <div class="d-flex">
          <p class="login">Đăng ký</p>
        </div>
        <form class="box" action="">
          <input class="email" type="text" placeholder="Số điện thoại">
          <input class="fw-semibold" type="button" value="TIẾP THEO">
        </form>
        <div class="d-flex">
          <div class="line1"></div>
          <div class="text">HOẶC</div>
          <div class="line2"></div>
        </div>
        <div class="icon">
          <div class="icon">
            <button type="includeFb" class="bg-white m-2">Facebook</button>
            <button type="includeGg" class="bg-white m-2">Google</button>
          </div>
        </div>
        <div class="policy text-center mb-4">
          <div style="font-size: 12px">Bằng việc đăng kí, bạn đã đồng ý với Shopee về</div>
          <a style="font-size: 13px; color: #ee4d2d;
                    cursor: pointer;
                    user-select: none;
          ">Điều khoản dịch vụ</a>
          &
          <a style="font-size: 13px;color: #ee4d2d;
                    cursor: pointer;
                    user-select: none;
                    text-decoration: none;"
          >Chính sách bảo mật</a>
        </div>
        <div class="footer">Bạn đã có tài khoản?
          <a href="">Đăng nhập</a>
        </div>
      </div>
    </div>
  </div>
</template>

<script>

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
  min-height: 452px;
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


input[type=email]:focus, input[type=password]:focus {
  border: 1px solid #cccccc;
}

input[type=button] {
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
  background-image: url('../assets/img/Facebook_Logo_(2019).png.webp');
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