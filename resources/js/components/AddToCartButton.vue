<template>
  <a href="#" @click.prevent="addToCart">add <span>to </span> cart</a>
</template>

<script>
export default {
  name: "AddToCartButton",

  methods: {
    addToCart() {

      alert('addToCart');
    },
  },
};
</script>

<style scoped>
</style>


// @click.prevent="AddToCart"