<template>
    <div class="restaurant d-flex flex-wrap my-4">
        <div @click="prev()" class="carusel-btn d-flex flex-column justify-content-center align-items-center">prev</div>
        <RestaurantCard v-for="restaurant in presentRestaurants" :key="restaurant.id" :restaurant="restaurant" />
        <div @click="next()" class="carusel-btn d-flex flex-column justify-content-center align-items-center">next</div>
    </div>
</template>

<script>
import RestaurantCard from "./RestaurantCard.vue";
export default {
    name: 'RestaurantCarusel',
    props: ['restaurants'],
    components: {
        RestaurantCard,
    },
    data() {
    return {
        position: 0,
        }
    },
    computed: {
        presentRestaurants() {
            let auxRestaurants = [];
            for(let i = this.position; (i < this.position+3 && i < this.restaurants.length) ; i++) {
                auxRestaurants.push(this.restaurants[i]);

            }
            if(auxRestaurants.length<3 && this.restaurants.length!=auxRestaurants.length) {
                for(let i = 0; (i < 4 - auxRestaurants.length && i < this.restaurants.length - auxRestaurants.length) ; i++ ) {
                    auxRestaurants.push(this.restaurants[i]);
                }
            }
            return auxRestaurants;
        }, 
    },
    watch: {
        restaurants: function() {
            this.position = 0;
        }
    },
    methods: {
        next(){
           if(this.position < this.restaurants.length-1) {
               this.position++
           } else {
               this.position = 0;
           }
        },
        prev(){
            if(this.position > 0) {
                this.position--
            } else {
                this.position = this.restaurants.length-1;
            }
        }
    },
}
</script>

<style>
</style>