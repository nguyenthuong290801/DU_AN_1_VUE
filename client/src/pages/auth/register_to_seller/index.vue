<template>
    <div class="container">
        <div class="row p-2">
            <div class="col-10 pe-0">
                <div class="list">
                    <div class="row">
                        <div class="p-3 d-flex justify-content-between gap-3">
                            <div class="d-flex justify-content-between gap-3 w-100">
                                <label class="label-input"><span class="text-danger">* </span>Tên cửa hàng</label>
                                <div class="d-flex flex-column w-100">
                                    <div class="form-input">
                                        <input type="text" class="input-control" v-model="name" @input="checkCharacterCount"
                                            placeholder="Nhập vào">
                                        <p class="m-0 p-10 bg-light">{{ characterCount }} / 120 ký tự</p>
                                    </div>
                                    <small v-if="errorNameProductRequired" class="mt-2 text-small text-danger"><i
                                            class="bi bi-1-circle-fill"></i> Không được để trống!</small>
                                </div>
                            </div>
                        </div>
                        <div class="p-3">
                            <button class="float-end bt-primary-ac w-25" @click="handleSubmit(this.name)">Lưu thông
                                tin</button>
                        </div>
                    </div>
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
                name: null,
                characterCount: 0,
                errorNameProductRequired: false,
            }
        },
        methods: {
            checkCharacterCount() {
                if (this.name !== null) {
                    this.characterCount = this.name.length
                    if (this.characterCount > 120) {
                        this.name = this.name.substring(0, 120)
                        this.characterCount = 120
                    }
                }

                if (this.name == '') {
                    this.errorNameProductRequired = true
                } else {
                    this.errorNameProductRequired = false
                }
            },
            handleSubmit(name) {
                const data = {
                    'site_user_id': localStorage.getItem('idCustomer'),
                    'name_role': 'seller',
                    'name_shop': name,
                }

                axios.post(`/api/seller/new`, data)
                    .then(response => {
                        if(response.data.data) {
                            if(response.data.data !== null){
                                this.$router.push('/portal/seller')
                            };
                            
                        }
                    })
                    .catch(error => {
                        console.error('Error:', error);
                    });
            }
        }

    }
</script>

<style lang="scss">
@import "@/assets/style/main";

.list {
    background: #ffffff;
    margin-bottom: 10px;
    padding: 20px;
    border-radius: 10px;
    background-color: #ffffff;

    &-right {
        margin-right: 10px;
    }

    a {
        font-size: 12px;
        color: #999999;
    }
}

.container {
    float: right;
}

body {
    background-color: #f4f4f4;
}
</style>