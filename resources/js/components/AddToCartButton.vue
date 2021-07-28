<template>
  <a href="#">add <span>to </span> cart</a>
</template>

<script>
export default {
  name: "AddToCartButton",

  methods: {
    AddToCart() {
      alert("addToCart");
    },
  },
};
</script>

<style scoped>
</style>


// @click.prevent="AddToCart"