<template>
    <div class="restaurants-list">
        <div class="form-cuisine" v-for="cuisine in cuisines" :key="cuisine.index">
            <input type="checkbox" :id="cuisine.name" :value="cuisine.id" v-model="checkedCuisines">
            <label :for="cuisine.name">{{cuisine.name}}</label>
        </div>
        <div v-for="restaurant in displayedRestaurants" :key="restaurant.id" @click="redirect(restaurant.id)">
            {{restaurant.name}}
        </div>
    </div>
</template>

<script>
    export default {
        name: 'RestaurantList',
        data() {
        return {
            restaurants: [],
            cuisines: [],
            cuisinesIds: [],
            checkedCuisines: [],
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
        methods: {
            redirect(id){
                window.location.href = "/restaurant/" + id;
            },
        },
        computed: {
            displayedRestaurants() {
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
            }
        },
    }
</script>

<style>
.form-cuisine{
    display: inline-block;
}
</style>