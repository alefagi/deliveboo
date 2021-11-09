<template>
    <div class="restaurants-list">
        <div>
            <h3>Cerca per nome</h3>
            <div><input class="form-string" type="text" id="serached-string" v-model="searchedString"></div>
            <div class="restaurant" v-for="restaurant in stringRestaurants" :key="restaurant.id">
                <RestaurantCard :restaurant="restaurant" />
            </div>
        </div>
        <div>
            <h3>Cerca in base a ciò che vuoi mangiare</h3>
            <div class="form-cuisine" v-for="cuisine in cuisines" :key="cuisine.index">
                <input type="checkbox" :id="cuisine.name" :value="cuisine.id" v-model="checkedCuisines">
                <label class="mr-2" :for="cuisine.name">{{cuisine.name}}</label>
            </div>
            <div class="restaurant" v-for="restaurant in cuisineRestaurants" :key="restaurant.id">
                <RestaurantCard :restaurant="restaurant" />
            </div>
        </div>
    </div>
</template>

<script>
import RestaurantCard from "./RestaurantCard.vue";
export default {
    name: 'RestaurantList',
    components: {
        RestaurantCard,
    },
    data() {
    return {
        restaurants: [],
        cuisines: [],
        cuisinesIds: [],
        checkedCuisines: [],
        searchedString: "",
    }
    },
    created: function(){
        axios.get('http://127.0.0.1:8000/api/users').then(res => {
            this.restaurants = res.data;
            console.log(this.restaurants);
        });
        axios.get('http://127.0.0.1:8000/api/cuisines').then(res => {
            this.cuisines = res.data;
            this.cuisinesIds = this.cuisines.map((cuisine) => {return cuisine.id});
        });
    },
    computed: {
        cuisineRestaurants() {
            if(this.checkedCuisines.length == 0) {
                return this.restaurants;
            }

            return this.restaurants.filter((restaurant) => {
                let auxBoolean = false;
                restaurant.cuisines.forEach(cuisine => {
                    if (this.checkedCuisines.includes(cuisine.id))
                        auxBoolean = true;
                });
                return auxBoolean
            });
        },
        stringRestaurants() {
            if(this.searchedString == "") {
                return [];
            }

            return this.restaurants.filter((restaurant) => {
                return restaurant.name.toLowerCase().includes(this.searchedString.toLowerCase()) 
            });
        }
    },
}
</script>

<style>
.restaurants-list{
    width: 70%;
    margin: 0 auto;
}
.form-cuisine{
    display: inline-block;
    margin-bottom: 20px;
}
.form-string{
    margin-bottom: 20px;
}
.restaurant {
    display: inline-block;
}
</style>