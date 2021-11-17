<template>
  <Load v-if="isLoading" />
  <div class="restaurants-list" v-else>
    <Jumbotron />
    <div class="search-bar">
      <h3>Ricerca avanzata</h3>
      <div>
        <input class="form-string"
          type="text"
          id="serached-string"
          v-model="searchedString"
          placeholder="Cerca per nome..."
        />
      </div>
    </div>
    <div class="container text-center">
      <div
        class="form-cuisine"
        v-for="cuisine in cuisines"
        :key="cuisine.index"
      >
        <input
          class="cuisine-checkbox"
          type="checkbox"
          :id="cuisine.name"
          :value="cuisine.id"
          v-model="checkedCuisines"
        />
        <label
          class="cuisine-img mr-2"
          :class="
            checkedCuisines.includes(cuisine.id) ? 'cuisine-img-checked' : ''
          "
          :for="cuisine.name"
          ><img :src="cuisine.cover" alt=""
        /></label>
      </div>
    </div>
    
    <div class="container-fluid">
      <h4 class="text-center">Our restaurants</h4>
      <RestaurantCarusel :restaurants="searchedRestaurants" /> 
      <h4 class="text-center">Don't know what you want? Here some of our favourite restaurants</h4>
      <RestaurantCarusel :restaurants="randomRestaurants" /> 
      <h4 class="text-center">If you crave some {{randomCuisine ? randomCuisine.name : ""}}</h4>
      <RestaurantCarusel :restaurants="randomCuisineRestaurants" /> 
    </div>
  </div>
</template>


<script>
import Load from "./Load.vue";
import Jumbotron from "./Jumbotron.vue";
import RestaurantCarusel from "./RestaurantCarusel.vue";

export default {
    name: 'RestaurantList',
    components: {
        Load,
        Jumbotron,
        RestaurantCarusel,
    },
    data() {
    return {
      isLoading: true,
      restaurants: [],
      cuisines: [],
      cuisinesIds: [],
      checkedCuisines: [],
      searchedString: "",

      randomCuisine: [],
      randomCuisineRestaurants: [],
    }
    },
    created: function(){
        axios.get('http://127.0.0.1:8000/api/users').then(res => {
            this.restaurants = res.data;
            this.isLoading = false;
        });
        axios.get('http://127.0.0.1:8000/api/cuisines').then(res => {
            this.cuisines = res.data;
            this.cuisinesIds = this.cuisines.map((cuisine) => {return cuisine.id});

            this.isLoading = false;

            this.randomCuisine = this.cuisines[Math.floor((Math.random() * this.cuisines.length))];
            
            this.restaurants.forEach((restaurant) => {
                if(restaurant.cuisines.map(i => i['id']).includes(this.randomCuisine.id)) {
                    this.randomCuisineRestaurants.push(restaurant);
                }
            })
        })
    },
    computed: {
    searchedRestaurants() {
      this.position = 0;
      if (this.checkedCuisines.length == 0 && this.searchedString == "") {
        return this.restaurants;
      }

      return this.stringRestaurants.filter((restaurant) => {
        let auxBoolean = true;
        this.checkedCuisines.forEach((cuisine) => {
          if (!restaurant.cuisines.map((i) => i["id"]).includes(cuisine)) {
            auxBoolean = false;
          }
        });
        return auxBoolean;
      });
    },
    stringRestaurants() {
    if(this.searchedString == "") {
        return this.restaurants;
    }

    return this.restaurants.filter((restaurant) => {
        return restaurant.name.toLowerCase().includes(this.searchedString.toLowerCase()) 
      });
    },
    randomRestaurants() {
        let randNumbers = [];
        let auxRestaurants = [];
        while(auxRestaurants.length < 6) {
            const randNumber = Math.floor((Math.random() * this.restaurants.length));
            if(!randNumbers.includes(randNumber)) {
                auxRestaurants.push(this.restaurants[randNumber]);
                randNumbers.push(randNumber);
            }
        }
        return auxRestaurants;
      },
  },
}
</script>

<style>
.search-bar {
  text-align: center;
  margin-top: -200px;
  margin-bottom: 100px;
}
.form-cuisine {
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
.cuisine-img-checked {
  background-color: lightblue;
  border: 1px solid blue;
}
.cuisine-img img {
  height: 55px;
  width: 55px;
}
.form-string {
  margin-bottom: 20px;
}
.carusel-btn {
  width: 5%;
}
</style>