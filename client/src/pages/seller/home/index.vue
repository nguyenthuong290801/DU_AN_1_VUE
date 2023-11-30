<template>
  <section>
    <div class="row p-2">
      <div class="col-8 pe-0">
        <div class="list">
          <div class="row">
            <div class="h5">
              Danh sách cần làm
            </div>
            <p>Những việc bạn sẽ phải làm</p>
            <div class="row text-center">
              <div class="col rounded box-shadow p-2 mx-2">
                <router-link to="" class="text-decoration-none">
                  <div class="text-black fs-5 fw-medium">1</div>
                  <span>Chờ xác nhận</span>
                </router-link>
              </div>
              <div class="col rounded box-shadow p-2 mx-2">
                <router-link to="" class="text-decoration-none">
                  <div class="text-black fs-5 fw-medium">1</div>
                  <span>Chờ lấy hàng</span>
                </router-link>
              </div>
              <div class="col rounded box-shadow p-2 mx-2">
                <router-link to="" class="text-decoration-none">
                  <div class="text-black fs-5 fw-medium">1</div>
                  <span>Đã xử lý</span>
                </router-link>
              </div>
              <div class="col rounded box-shadow p-2 mx-2">
                <router-link to="" class="text-decoration-none">
                  <div class="text-black fs-5 fw-medium">1</div>
                  <span>Đơn hủy</span>
                </router-link>
              </div>
            </div>
            <div class="row text-center mt-4">
              <div class="col rounded box-shadow p-2 mx-2">
                <router-link to="" class="text-decoration-none">
                  <div class="text-black fs-5 fw-medium">1</div>
                  <span>Trả hàng/Hoàn tiền chờ xử lý</span>
                </router-link>
              </div>
              <div class="col rounded box-shadow p-2 mx-2">
                <router-link to="" class="text-decoration-none">
                  <div class="text-black fs-5 fw-medium">1</div>
                  <span>Sản phẩm bị tạm khóa</span>
                </router-link>
              </div>
              <div class="col rounded box-shadow p-2 mx-2">
                <router-link to="" class="text-decoration-none">
                  <div class="text-black fs-5 fw-medium">1</div>
                  <span>Sản phẩm hết hàng</span>
                </router-link>
              </div>
              <div class="col rounded box-shadow p-2 mx-2">
                <router-link to="" class="text-decoration-none">
                  <div class="text-black fs-5 fw-medium">1</div>
                  <span>Chương Trình khuyến mãi chờ xử lý</span>
                </router-link>
              </div>
            </div>
          </div>
        </div>
        <div class="list">
          <div class="row">
            <div class="d-flex justify-content-between">
              <div class="d-flex gap-2">
                <div class="h5">
                  Phân tích bán bàng
                </div>
                <span>( Hôm nay 00:00 GMT+7 10:00 )</span>
              </div>
              <div>
                <router-link to="" class="text-decoration-none text-primary">Xem thêm <i
                    class="bi bi-chevron-right"></i></router-link>
              </div>
            </div>
            <p>Tổng quan dữ liệu của shop đối với đơn hàng đã xác nhận</p>
            <div class="row">
              <div class="col">
                <Bar
                    id="my-chart-id"
                    :options="chartOptions"
                    :style="myStyles"
                    :data="chartData"
                />
              </div>
              <div class="col">
                <div class="row">
                  <div class="col">
                    <p class="mb-0">Lượt truy cập</p>
                    <div class="text-black fs-5 fw-medium">1</div>
                    <p>Vs hôm qua 0,00%</p>
                  </div>
                  <div class="col">
                    <p class="mb-0">Lượt xem</p>
                    <div class="text-black fs-5 fw-medium">1</div>
                    <p>Vs hôm qua 0,00%</p>
                  </div>
                </div>
                <hr>
                <div class="row">
                  <div class="col">
                    <p class="mb-0">Đơn hàng</p>
                    <div class="text-black fs-5 fw-medium">1</div>
                    <p>Vs hôm qua 0,00%</p>
                  </div>
                  <div class="col">
                    <p class="mb-0">Tỷ lệ chuyển đổi</p>
                    <div class="text-black fs-5 fw-medium">1</div>
                    <p>Vs hôm qua 0,00%</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-4 pe-0">
        <div class="list list-right">
          <div class="row mb-2">
            <div class="d-flex justify-content-between">
              <div class="h5">
                Thông báo
              </div>
              <div>
                <router-link to="" class="text-decoration-none text-primary">Xem thêm <i
                    class="bi bi-chevron-right"></i></router-link>
              </div>
            </div>
          </div>
          <div class="row">
            <div>
              <div class="fs-6 fw-medium">Shop đã thử chưa?</div>
              <p>💸 Nạp ngay Xu của Shop để: ⭐ Đa dạng hóa Giải thưởng của Shop. ⭐ Thưởng Xu - tăng view cho Livestream.
                Tạo TẠI ĐÂY!</p>
            </div>
            <p>Hôm Nay 00:00</p>
          </div>
        </div>
        <div class="list list-right">
          <div class="row mb-2">
            <div class="d-flex justify-content-between">
              <div class="h5">
                Nhiệm vụ người bán
              </div>
              <div>
                <router-link to="" class="text-decoration-none text-primary">Xem thêm <i
                    class="bi bi-chevron-right"></i></router-link>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="border rounded p-2">
              <div class="fs-6 fw-medium mb-3">Đăng tải 5 sản phẩm có tối thiểu 3 hình ảnh mỗi sản phẩm v...(0/5)</div>
              <p><i class="bi bi-gift-fill text-white bg-danger rounded-pill px-2 py-1"></i> Nhận 1 voucher giảm giá ₫15.000</p>
              <button class="border border-danger rounded bg-transparent text-danger px-3 box-shadow float-end">Bắt đầu</button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</template>

<script>
import {Bar} from 'vue-chartjs'
import {Chart as ChartJS, Title, Tooltip, Legend, BarElement, CategoryScale, LinearScale} from 'chart.js'

ChartJS.register(Title, Tooltip, Legend, BarElement, CategoryScale, LinearScale)
export default {
  components: {Bar},
  computed: {
    myStyles() {
      return {
        height: `${200}px`,
        position: 'relative'
      }
    }
  },
  data() {
    return {
      chartData: {
        labels: ['00:00', '06:00', '12:00', '18:00', '24:00'],
        datasets: [
          {
            label: 'Doanh số',
            backgroundColor: '#bbb',
            data: [40, 20, 12, 4, 5],
          }
        ]
      },
      chartOptions: {
        responsive: true
      },
    }
  },
}
</script>

<style lang="scss" scoped>
p {
  font-size: 14px;
  color: #999999;
}

.list {
  background: #ffffff;
  margin-bottom: 10px;
  padding: 20px;
  border-radius: 10px;
  box-shadow: 0px 2px 0px #d2d2d2;

  &-right {
    margin-right: 10px;
  }

  a {
    font-size: 12px;
    color: #999999;
  }
}

.box-shadow {
  box-shadow: 0px 1px 0px #d2d2d2;
  cursor: pointer;

  &:hover {
    box-shadow: 0px 3px 3px 0px #d2d2d2;
  }
}

section {
  width: 100%;
  height: 100%;
  z-index: 0;
  overflow: hidden;
  overflow-y: auto;
}

section::-webkit-scrollbar {
  width: 10px;
}

section::-webkit-scrollbar-track {
  background: transparent;
}

section::-webkit-scrollbar-thumb {
  background: #b4b4b4;
  border-radius: 6px;
}

section::-webkit-scrollbar-thumb:hover {
  background: #555;
}
</style>