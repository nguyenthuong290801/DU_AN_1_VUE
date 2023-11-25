<template>
  <div class="d-flex">
    <ul>
      <li v-for="category in categories" :key="category.id"
          @click="moreCategory(category.id, 'dataCategory', null, category.parent_category_id)"
          :class="getClass(category.id, category.parent_category_id)">
        <span>{{ category.category_name }}</span>
        <i :class="iconClass(category.id)"></i>
        <CategoryTree v-if="categoryHasSubCategories(category.id)" :categories="subCategories[category.id]"/>
      </li>
    </ul>
    <ul>
      <li v-for="category in dataCategory" :key="category.id"
          @click="moreCategory(category.id, 'dataCategoryTwo', 'null', category.parent_category_id)"
          :class="getClass(category.id, category.parent_category_id)">
        <span>{{ category.category_name }} <i
            :class="iconClass(category.id)"></i></span>
        <CategoryTree v-if="categoryHasSubCategories(category.id)" :categories="subCategories[category.id]"/>
      </li>
    </ul>
    <ul>
      <li v-for="category in dataCategoryTwo" :key="category.id"
          @click="moreCategory(category.id, 'dataCategoryThree', null, category.parent_category_id)"
          :class="getClass(category.id, category.parent_category_id)">
        <span>{{ category.category_name }} <i
            :class="iconClass(category.id)"></i></span>
        <CategoryTree v-if="categoryHasSubCategories(category.id)" :categories="subCategories[category.id]"/>
      </li>
    </ul>
    <ul>
      <li v-for="category in dataCategoryThree" :key="category.id"
          @click="moreCategory(category.id, 'dataCategoryFour', category.parent_category_id)"
          :class="getClass(category.id, category.parent_category_id)">
        <span>{{ category.category_name }} <i
            :class="iconClass(category.id)"></i></span>
        <CategoryTree v-if="categoryHasSubCategories(category.id)" :categories="subCategories[category.id]"/>
      </li>
    </ul>
    <input type="hidden" v-model="lastClickedCategoryId"/>
  </div>
  <div class="d-flex justify-content-end align-items-center">
    <button type="button" :class="{ 'mt-3 bt-primary': true, 'bt-primary-ac': !isButtonDisabled } "
            :disabled="isButtonDisabled" @click="handleConfirmationClick">
      Xác nhận
    </button>
  </div>


</template>

<script>
export default {
  name: 'CategoryTree',
  props: {
    categories: Array,
    dataCategories: Array,
  },
  emits: [
    'id',
    'list_id'
  ],
  data() {
    return {
      subCategories: {},
      dataCategory: [],
      dataCategoryTwo: [],
      dataCategoryThree: [],
      dataCategoryFour: [],
      lastClickedCategoryId: null,
      activeIndex: [],
      activeIndexFirst: null,
      activeArray: [],
      activeArrayId: [],
      isButtonDisabled: true,
      subCategoryCount: {},
      shouldEmitId: false,
      lastClickedId: null,
      lastClickedArr: null,
    };
  },
  methods: {
    moreCategory(id, targetArray, parent_id_two, parent_id) {
      this[targetArray] = this.dataCategories.filter(category => category.parent_category_id === id)
      if (targetArray == 'dataCategory') {
        this.dataCategoryTwo = []
        this.dataCategoryThree = []
      } else if (targetArray == 'dataCategoryTwo') {
        this.dataCategoryThree = []
      }

      if (parent_id === null) {
        this.activeIndexFirst = id
        this.activeArray = []
      }

      if (typeof parent_id == 'number') {
        this.activeArray[0] = this.activeIndexFirst

        if (!this.activeArray.includes(parent_id)) {
          this.activeArray[1] = parent_id;
          this.activeArray = this.activeArray.slice(0, 2)
        }
      } else {
        this.activeArray[2] = parent_id_two;
      }

      if (this.activeArray['lastIndex'] && this.activeArray[2]) {
        if (this.activeArray[2] == 'index' && typeof this.activeArray[1] != 'number') {
          this.activeArray[1] = 'index'
        }

        if (parent_id != null) {
          this.activeArray[2] = 'index'
        }
      }

      if (parent_id_two == 'null') {
        this.activeArray[1] = 'index'
      }

      this.activeArray['lastIndex'] = id


      this.activeArrayId = [
        this.activeIndexFirst,
        this.activeArray[1],
        this.activeArray[2],
        this.activeArray['lastIndex'],
      ]

      this.activeIndex = this.activeArrayId

      if (this.countChildren(id, this.dataCategories) == 0) {
        this.isButtonDisabled = false;
      } else {
        this.isButtonDisabled = true;
      }

      this.lastClickedId = id;
      this.lastClickedArr = this.activeArrayId;

      this.lastClickedCategoryId = id;
    },
    emitConfirmation() {
      if (this.lastClickedId) {
        this.$emit('id', this.lastClickedId);
        this.$emit('list_id', this.lastClickedArr);
        this.lastClickedId = null;
        this.lastClickedArr = null;
      }
    },
    handleConfirmationClick() {
      this.emitConfirmation();
    },
    getSubCategories(parentId) {
      return this.categories.filter(category => category.parent_category_id === parentId)
    },
    categoryHasSubCategories(categoryId) {
      return this.categories.some(category => category.parent_category_id === categoryId)
    },
    getClass(categoryId, categoryName) {
      return {'active': this.isActive(categoryId)};
    },
    isActive(categoryId) {
      return this.activeIndex.includes(categoryId)
    },
    iconClass(categoryId) {
      const defaultIcon = 'bi bi-circle-fill';
      const activeIcon = 'bi bi-check-circle-fill';

      return `${this.isActive(categoryId) ? activeIcon : defaultIcon} float-end ${this.isActive(categoryId) ? 'active' : ''}`;
    },

    countChildren(categoryId, categories) {
      const children = categories.filter(cat => cat.parent_category_id === categoryId);
      if (children.length === 0) {
        return 0;
      }
      let count = 0;
      children.forEach(child => {
        count += this.countChildren(child.id, categories) + 1;
      });
      return count;
    }
  },
}
;
</script>

<style lang="scss" scoped>
@import "@/assets/style/var";

ul {
  list-style: none;
  text-align: left;
  border: 0.5px solid #d2d2d2;
  border-right: 0;
  padding: 0;
  flex: 1;
  position: relative;
  overflow-y: scroll;
  height: 450px;
  margin: 0;

  &:last-of-type {
    border-right: 0.5px solid #d2d2d2;
  }

  li {
    padding: 5px;
    cursor: pointer;

    &:hover {
      background: rgba(210, 210, 210, 0.2);
    }

    &.active {
      color: $color-danger;
      font-weight: 500;
    }
  }
}

i {
  color: rgba(185, 183, 183, 0.3);

  &.active {
    color: $color-danger;
  }

  &.hide-icon {
    display: none;
  }
}


ul::-webkit-scrollbar {
  width: 5px;
}

ul::-webkit-scrollbar-track {
  background: transparent;
}

ul::-webkit-scrollbar-thumb {
  background: #b4b4b4;
  border-radius: 6px;
}

ul::-webkit-scrollbar-thumb:hover {
  background: #555;
}

.bt-primary {
  border-radius: 10px;
  background: rgba(198, 48, 62, 0.5);
  color: #fff;
  border: 1px solid #fff;
  padding: 5px 10px;
}

.bt-primary-ac {
  border-radius: 10px;
  background: $color-danger;
  color: #fff;
  border: 1px solid #fff;
  padding: 5px 10px;
  cursor: pointer !important;
}
</style>
