<template>
  <a href="" @click.prevent="addToCart">add <span>to </span> cart</a>
</template>

<script>
export default {
  name: "AddToCartButton",
  props: {
    product: {
      required: true,
      type: Object,
    },
  },

  methods: {
    async addToCart() {
      let response = await axios.post("/cart", { product_id: this.product.id });
      
      console.log(response.data);
    },
  },
};
</script>

<style scoped>
</style>


// @click.prevent="AddToCart"