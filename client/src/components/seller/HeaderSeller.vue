<template>
  <header>
    <nav class="nav-header">
      <div class="nav__left">
        <div class="nav__left-logo">
          <svg viewBox="0 0 113 126" xmlns="http://www.w3.org/2000/svg">
            <path
                d="M76.968 94.081c-.741 6.073-4.447 10.939-10.187 13.374-3.194 1.356-7.476 2.086-10.871 1.856-5.279-.2-10.241-1.478-14.812-3.809-1.664-.848-4.104-2.525-5.943-4.058-.42-.348-.635-.66-.232-1.228.43-.645 2.13-3.102 2.398-3.507.362-.552.956-.58 1.5-.153.075.057.628.486.74.569 4.4 3.423 10.076 5.994 16.384 6.235 7.955-.108 13.726-3.65 14.757-9.136 1.135-6.046-3.69-11.231-12.98-14.124-2.953-.92-10.38-3.872-11.75-4.672-6.474-3.77-9.488-8.717-9.058-14.807.657-8.438 8.534-14.762 18.53-14.804 4.744-.01 9.194 1.036 13.159 2.695 1.459.61 4.176 2.066 5.145 2.785.677.494.625 1.046.358 1.474-.395.656-1.57 2.483-2.043 3.245-.345.523-.773.583-1.38.2-5.112-3.41-10.37-4.567-15.103-4.661-6.828.134-11.978 4.165-12.316 9.691-.09 4.992 3.729 8.613 11.833 11.378C71.83 77.964 78.17 84.24 76.968 94.08ZM56.32 7.34c10.83 0 19.66 10.208 20.073 22.986H36.248C36.66 17.548 45.489 7.34 56.32 7.34ZM97.44 125.687c5.72-.155 10.355-4.776 10.844-10.504l.037-.692 4.05-81.638v-.001a2.402 2.402 0 0 0-2.4-2.526H83.95C83.312 13.454 71.185 0 56.32 0 41.455 0 29.33 13.454 28.69 30.326H2.632a2.402 2.402 0 0 0-2.35 2.588H.28l3.696 81.319.055 1.02c.564 5.658 4.7 10.215 10.322 10.425h.002l82.669.013.414-.004Z"
                fill-rule="evenodd"></path>
          </svg>
          <span @click="pageHome" class="cursor-pointer">Shopee</span>
          <Breadcrumb />
        </div>
      </div>
      <div class="nav__right">
        <div class="icon-header">
          <svg viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg">
            <path
                d="M10 15a1 1 0 0 1-1 1H7a1 1 0 0 1-1-1h4ZM8.5 0a.5.5 0 0 1 .5.5v.593a5.4 5.4 0 0 1 4.383 4.892l.54 7.015h.577a.5.5 0 1 1 0 1h-13a.5.5 0 1 1 0-1h.577l.54-7.015A5.4 5.4 0 0 1 7 1.093V.5a.5.5 0 0 1 .5-.5h1ZM8 2a4.4 4.4 0 0 0-4.386 4.062L3.08 13h9.84l-.534-6.938A4.4 4.4 0 0 0 8 2Z"
                fill-rule="evenodd"></path>
          </svg>
          <span class=" bg-danger rounded-pill text-small text-white">1</span>
          <ul>
            <div class="d-flex gap-5 justify-content-between border-bottom mb-2">
              <p class="mb-2">Thông báo gần đây</p>
              <div>
                <router-link to="" class="text-decoration-none text-primary">Xem thêm <i
                    class="bi bi-chevron-right"></i></router-link>
              </div>
            </div>
            <div class="newspaper">
              <div class="row">
                <div class="col-2">
                  <img src="../../assets/img/shopee-new.png" alt="image-news" class="img-fluid">
                </div>
                <div class="col-10">
                  <div>⏰Chỉ 2 phút!</div>
                  <li>
                    <router-link to="">Hãy chia sẻ ấn tượng của bạn về quảng cáo của Shopee tại đây nhé!</router-link>
                  </li>
                  <p class="text-small">Từ shopee: 18:08 10/11/2023</p>
                </div>
              </div>

            </div>

          </ul>
        </div>
        <div class="account">
          <img src="../../assets/img/avt.jpg" alt="avt">
          <span>
            Nguyễn Anh Thương
          </span>
          <ul>
            <li>
              <router-link to=""><i class="bi bi-grid text-black"></i> Hồ Sơ Shop</router-link>
            </li>
            <li>
              <router-link to=""><i class="bi bi-arrow-bar-right text-black"></i> Đăng xuất</router-link>
            </li>
          </ul>
        </div>
      </div>
    </nav>
  </header>
</template>

<script>
import Breadcrumb from '@/components/Breadcrumb.vue';

export default {
  components: {
    Breadcrumb,
  },
  created() {
    this.setBreadcrumbs();
  },
  methods: {
    setBreadcrumbs() {
      const route = this.$route;
      const matchedRoutes = route.matched;

      const isPortalRoute = matchedRoutes.some(matchRoute => matchRoute.path === '/portal');

      if (isPortalRoute) {
        this.breadcrumbs = [{text: '', link: '/portal'}];
      } else {
        this.breadcrumbs = matchedRoutes.map((matchRoute) => {
          return {
            text: matchRoute.path,
            link: matchRoute.path
          }
        });
      }
    },
    pageHome() {
      this.$router.push({
                path: `/portal`
            });
    }
  }
};
</script>

<style lang="scss">
.nav-header {
  padding: 7px 15px;
  display: flex;
  align-items: center;
  justify-content: space-between;
  box-shadow: 0px 2px 0px #d2d2d2;
  position: fixed;
  width: 100%;
  z-index: 1;
  background: #ffffff;

  .nav__left {
    display: flex;
    align-items: center;
    gap: 10px;

    .nav__left-logo {
      display: flex;
      align-items: center;
      gap: 5px;

      svg {
        fill: #ee4d2d;
        width: 25px;
      }

      span {
        color: #ee4d2d;
        font-weight: 500;
      }
    }
  }

  .nav__right {
    display: flex;
    align-items: center;
    gap: 30px;

    .account {
      cursor: pointer;
      padding: 5px 10px;
      border-radius: 20px;
      transition: all 0.3s ease-in-out;
      position: relative;

      img {
        width: 30px;
        border-radius: 25px;
      }

      &:hover {
        background: rgba(238, 238, 238, 0.5);
      }

      &:hover ul {
        display: block;
      }

      ul {
        display: none;
        position: absolute;
        top: calc(100% - 0px);
        right: 40px;
        background: #fff;
        padding: 10px;
        border-radius: 5px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        transition: 0.3s ease-in-out;
        list-style: none;

        li {
          padding: 5px;

          a {
            text-decoration: none;
            color: #757575;
            white-space: nowrap;

            &:hover {
              color: #000000;
            }
          }
        }
      }
    }

    &.account:hover ul {
      display: block;
    }

    .icon-header {
      padding: 5px 10px;
      border-radius: 20px;
      transition: all 0.3s ease-in-out;
      position: relative;

      svg {
        width: 20px;
        cursor: pointer;

        &:last-child {
          margin-right: 0;
        }
      }

      span {
        position: absolute;
        top:0;
        left:22px;
        padding: 2px 7px;
      }

      &:hover {
        background: rgba(238, 238, 238, 0.5);;
      }

      &:hover ul {
        display: block;
      }

      ul {
        display: none;
        position: absolute;
        top: calc(100% - 0px);
        right: -200px;
        background: #fff;
        padding: 10px;
        border-radius: 5px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        transition: 0.3s ease-in-out;
        list-style: none;
        width: 400px;

        li {
          padding: 5px;

          a {
            text-decoration: none;
            color: #757575;

            &:hover {
              color: #555555;
            }
          }
        }
      }
    }
  }
}

.text-small {
  font-size: 12px;
  color: #b4b4b4;
}
</style>
