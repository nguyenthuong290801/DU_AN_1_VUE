<template>
  <div class="col-6 d-flex gap-3">
    <label class="label-input"><span v-if="label === 'Thương hiệu'" class="text-danger">* </span>{{ label }}</label>
    <div v-if="label === 'Kích thước (dài x rộng x cao)'" class="input-container d-flex w-75">
      <div class="form-input">
        <input class="input-control-small align-self-start" placeholder="Vui lòng chọn">
      </div>
    </div>
    <div v-else class="input-container d-flex w-75">
      <div class="d-flex flex-column w-100">
        <div class="form-input">
          <input class="input-control-small align-self-start cursor-pointer" :value="selectedValue"
                 @click="toggleDropdown" readonly placeholder="Vui lòng chọn">
          <div v-if="selectedValue" class="p-10 closeChoice" @click="clearSelectedValue"><i class="bi bi-x"></i></div>
        </div>
        <small v-if="label == 'Thương hiệu' && errorBrandRequired" class="mt-2 text-small text-danger"><i
            class="bi bi-1-circle-fill"></i> Không được để trống!</small>
      </div>
      <div class="dropdown-container" v-if="isOpen" @click.stop>
        <div class="d-flex align-items-center">
          <i class="bi bi-search p-2 border-b bg-light"></i>
          <input class="search-input" v-model="searchQuery" placeholder="Tìm kiếm...">
        </div>
        <ul class="dropdown-list">
          <li v-for="option in filteredOptions" :key="option" @click="selectOption(option)">{{ option }}</li>
        </ul>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  props: {
    label: String,
    options: Array,
    errorBrandR: false,
  },
  emits: [
      'valueOption',
  ],
  data() {
    return {
      selectedValue: '',
      isOpen: false,
      searchQuery: '',
      errorBrandRequired: false,
    };
  },
  computed: {
    filteredOptions() {
      return this.options.filter(option => option.toLowerCase().includes(this.searchQuery.toLowerCase()));
    }
  },
  watch: {
    errorBrandR(newBrand, oldBrand) {
      this.checkValue()
    }
  },
  methods: {
    toggleDropdown() {
      this.isOpen = !this.isOpen;
      if (this.isOpen) {
        document.addEventListener('click', this.closeDropdown);
      } else {
        document.removeEventListener('click', this.closeDropdown);
      }
    },
    closeDropdown(event) {
      if (!this.$el.contains(event.target)) {
        this.isOpen = false;
        document.removeEventListener('click', this.closeDropdown);
      }
    },
    selectOption(option) {
      this.selectedValue = option;
      this.$emit('valueOption', option)
      this.isOpen = false;
    },
    clearSelectedValue() {
      this.selectedValue = '';
    },
    checkValue() {
      if(this.errorBrandR == false) {
        this.errorBrandRequired = false
      } else {
        this.errorBrandRequired = true
      }
    }
  }
};
</script>

<style scoped>
.input-container {
  position: relative;
}

.cursor-pointer {
  cursor: pointer;
}

.closeChoice {
  cursor: pointer;

  &:hover {
    background: #DC3545;
    color: #fff;
  }
}

.dropdown-container {
  position: absolute;
  top: 100%;
  left: 0;
  width: 100%;
  background-color: #fff;
  border: 1px solid #ccc;
  border-radius: 10px;
  margin-top: 5px;
  overflow: hidden;
  z-index: 1;
}

.border-b {
  border-bottom: 1px solid #ccc;
}

.search-input {
  width: 100%;
  padding: 8px;
  box-sizing: border-box;
  outline: none;
  border: 0px;
  border-bottom: 1px solid #ccc;
}

.dropdown-list {
  list-style: none;
  padding: 0;
  margin: 0;
  overflow: hidden;
  overflow-y: auto;
  max-height: 200px;

  &::-webkit-scrollbar {
    width: 5px;
  }

  &::-webkit-scrollbar-track {
    background: transparent;
  }

  &::-webkit-scrollbar-thumb {
    background: #b4b4b4;
    border-radius: 6px;
  }

  &::-webkit-scrollbar-thumb:hover {
    background: #555;
  }
}

.dropdown-list li {
  padding: 8px;
  cursor: pointer;
}

.dropdown-list li:hover {
  background-color: #f0f0f0;
}
</style>
