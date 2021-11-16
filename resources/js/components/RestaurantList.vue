<template>
    <div class="restaurants-list">
        <div>
            <h3>Ricerca avanzata</h3>
            <div><input class="form-string" type="text" id="serached-string" v-model="searchedString" placeholder="Cerca per nome..."></div>
            <div class="form-cuisine" v-for="cuisine in cuisines" :key="cuisine.index">
                <input class="cuisine-checkbox" type="checkbox" :id="cuisine.name" :value="cuisine.id" v-model="checkedCuisines">
                <label class="cuisine-img mr-2" 
                :style="checkedCuisines.includes(cuisine.id) ? {'backgroundColor': 'lightblue'} : {'backgroundColor': 'lightgray'}" :for="cuisine.name"><img :src="cuisine.cover" alt=""></label>
            </div>
            <div class="restaurant">
                <RestaurantCard v-for="restaurant in searchedRestaurants" :key="restaurant.id" :restaurant="restaurant" />
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
        });
        axios.get('http://127.0.0.1:8000/api/cuisines').then(res => {
            this.cuisines = res.data;
            this.cuisinesIds = this.cuisines.map((cuisine) => {return cuisine.id});
        });
    },
    computed: {
        searchedRestaurants() {
            if(this.checkedCuisines.length == 0 && this.searchedString == "") {
                return this.restaurants;
            }

            return this.stringRestaurants.filter((restaurant) => {
                let auxBoolean = true;
                this.checkedCuisines.forEach(cuisine => {
                    if(!restaurant.cuisines.map(i => i['id']).includes(cuisine)){
                        auxBoolean = false;
                    }
                })
                return auxBoolean
            });
        },
        stringRestaurants() {
            if(this.searchedString == "") {
                return this.restaurants;
            }

            return this.restaurants.filter((restaurant) => {
                return restaurant.name.toLowerCase().includes(this.searchedString.toLowerCase()) 
            });
        }
    },
}
</script>

<style>
.form-cuisine{
    display: inline-block;
    margin-bottom: 20px;
}
.cuisine-checkbox {
    display: none;
}
.cuisine-img {
    text-align: center;
    padding: 10px;
    background-color: lightgray;
    border-radius: 50%;
}
.cuisine-img img {
    height: 55px;
    width: 55px;
}
.restaurants-list{
    width: 70%;
    margin: 0 auto;
}
.form-string{
    margin-bottom: 20px;
}
</style>