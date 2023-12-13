<template>
  <div
      class="drop-area text-small text-nowrap d-flex flex-column"
      @dragover.prevent
      @drop="handleDrop"
      @click="triggerFileInput"
      v-if="isDrop"
  >
    <i class="bi bi-image-fill fs-1" style="color: #EE4D2D;"></i>
    Hình ảnh
    <span>({{ this.qty }} ảnh tối đa)</span>
  </div>
  <div v-if="!isDrop" class="d-flex flex-column">
    <img :src="images[0]" :alt="'Product Image'" width="100" height="100" class="border rounded p-2">
    <button class="mt-2 h-close"
            @click="removeImage(0)">
      <p class="m-0">Gỡ bỏ</p>
    </button>
  </div>
  <input
      type="file"
      ref="fileInput"
      style="display: none"
      @change="handleInputChange"
  />
  <div>
    <ul v-if="this.isMy" class="d-flex flex-wrap gap-4 list-unstyled">
      <li v-for="(image, index) in images" :key="index" class="d-flex flex-column">
        <img :src="image" :alt="'Product Image ' + index" width="100" height="100" class="border rounded p-2">
        <button class="mt-2 h-close"
                @click="removeImage(index)">
          <p class="m-0">Gỡ bỏ</p>
        </button>
      </li>
    </ul>
  </div>
</template>
<script>

export default {
  name: 'DropImage',
  props: {
    qty: null,
    isMy: null,
  },
  emits: [
    'images',
    'imagesRemove'
  ],
  data() {
    return {
      images: [],
      isDrop: true,
    }
  },
  methods: {
    handleDrop(event) {
      event.preventDefault()
      event.stopPropagation()
      const files = event.dataTransfer.files
      this.handleFiles(files)
    },
    handleInputChange(event) {
      const files = event.target.files
      this.handleFiles(files)
    },
    triggerFileInput() {
      this.$refs.fileInput.click()
    },
    removeImage(index) {
      this.images.splice(index, 1)
      this.isDrop = true
      this.$emit('imagesRemove', index);
    },
    handleFiles(files) {
      const maxImages = this.qty;

      if (this.qty == 1) {
        this.isDrop = false
      }

      const remainingSlots = maxImages - this.images.length;

      const handleFilePromises = [];

      for (let i = 0; i < files.length && i < remainingSlots; i++) {
        const file = files[i];
        if (file.type.startsWith('image/')) {
          const handleFilePromise = this.getFileContent(file).then(content => {
            if (!this.isImageDuplicate(content)) {
              this.images.push(content);
            }
          });
          handleFilePromises.push(handleFilePromise);
        }
      }

      Promise.all(handleFilePromises).then(() => {
        if (this.images.length > maxImages) {
          this.images = this.images.slice(0, maxImages);
        }
        this.$emit('images', this.images);
      });
    },
    isImageDuplicate(content) {
      return this.images.some(imgContent => imgContent === content);
    },
    getFileContent(file) {
      return new Promise((resolve) => {
        const reader = new FileReader()
        reader.onload = (e) => {
          resolve(e.target.result)
        }
        reader.readAsDataURL(file)
      })
    },
  },
}
</script>