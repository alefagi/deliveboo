<template>
  <div class="dishes-list">
      <div v-for="dish in dishes" :key="dish.id">
          {{dish.name}}
      </div>
  </div>
</template>

<script>
export default {
    name: 'RestaurantList',
    data() {
    return {
        dishes: [],
    }
    },
    props: ['id'],
    created: function(){
        axios.get('http://127.0.0.1:8000/api/users/' + this.id).then(res => {
            this.dishes = res.data;
        })
    },
}
</script>

<style>

</style>