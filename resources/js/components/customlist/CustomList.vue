<template>
  <ul class="list-container" :class="[column ? 'column-'+column : '']">
    <li v-for="(item, index) in items" :key="'item-key-' + index">
      <span :class="[!withIcon ? 'no-icon' : '']">
        <i class="fas fa-check-circle"></i>
      </span>
      <p class="five-star" v-if="item==='*****'">
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
      </p>
      <p v-else class="item" v-html="item"></p>
    </li>
  </ul>
</template>

<script>
export default {
  name: "CustomList",
  props: {
    items: Array,
    withIcon: Boolean,
    column: Number
  }
};
</script>

<style lang="scss" scoped>
li {
  font-family: $roboto;
  list-style-type: none;
  margin: 0 0 1em 0;
  display: flex;
}

.item {
  margin: 0;
}

.list-container {
  padding: 0;
  margin-bottom: 0;
}

span i {
  color: $green;
  font-size: 1.2em;
  margin-right: 0.5em;
}

.no-icon {
  display: none;
}

.column-2 {
  columns: 2;
}

.column-3 {
  columns: 3;
}

.column-4 {
  columns: 4;
}

.five-star {
  margin-bottom: 0;
  margin-top: 0;

  i {
    color: $light-blue;
  }
}
</style>
