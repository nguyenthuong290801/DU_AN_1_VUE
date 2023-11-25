<template>
  <div class="p-3 d-flex justify-content-between gap-3">
    <label class="label-input"><span class="text-danger">* </span>Mô tả</label>
    <div class="d-flex flex-column w-100">
      <div class="d-flex flex-column">
        <div class="form-input">
            <textarea class="input-control area-control w-100"
                      v-model="description" @input="checkCharacterCountDescription"
                      placeholder="Nhập miêu tả"></textarea>
        </div>
        <div class="d-flex justify-content-between mt-2">
          <div class="d-flex flex-column">
            <small v-if="errorDescriptionRequired" class=" text-small text-danger"><i
                class="bi bi-1-circle-fill"></i>
              Không được để trống!</small>
            <small v-if="errorDescriptionVar" class="mt-1 text-small text-danger"><i class="bi bi-2-circle-fill"></i> Mô
              tả
              phải từ 50 ký tự trở lên!</small>
          </div>
          <p class="mb-0" style="text-align: right">{{ characterCountDescription }} / 3000 ký tự</p>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  name: 'Description',
  props: {
    errorDescriptionR: false,
  },
  emits: [
    'description',
  ],
  data() {
    return {
      description: null,
      characterCountDescription: 0,
      errorDescriptionRequired: false,
      errorDescriptionVar: false,
    }
  },
  watch: {
    errorDescriptionR(newError, oldError) {
      this.checkSubmit()
    }
  },
  methods: {
    checkCharacterCountDescription() {
      if (this.description !== null) {
        this.characterCountDescription = this.description.length;

        if (this.characterCountDescription > 3000) {
          this.description = this.description.substring(0, 3000);
          this.characterCountDescription = 3000;
        }

        if (this.description == '') {
          this.errorDescriptionRequired = true
        } else {
          this.errorDescriptionRequired = false
        }

        if (this.description.length < 50) {
          this.errorDescriptionVar = true
        } else {
          this.errorDescriptionVar = false
        }
      }

      if (
          !this.errorDescriptionRequired && !this.errorDescriptionVar
      ) {
        this.$emit('description', this.description)
      }

    },
    checkSubmit() {
      if (this.description == null) {
        this.errorDescriptionRequired = true
      } else {
        this.errorDescriptionRequired = false
      }
    }
  }
}
</script>