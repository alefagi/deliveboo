<template>
  <Load v-if="isLoading" />
  <div class="restaurants-list" v-else>
    <div>
      <h3>Ricerca avanzata</h3>
      <div>
        <input
          class="form-string"
          type="text"
          id="serached-string"
          v-model="searchedString"
          placeholder="Cerca per nome..."
        />
      </div>
      <div
        class="form-cuisine"
        v-for="cuisine in cuisines"
        :key="cuisine.index"
      >
        <input
          type="checkbox"
          :id="cuisine.name"
          :value="cuisine.id"
          v-model="checkedCuisines"
        />
        <label class="mr-2" :for="cuisine.name">{{ cuisine.name }}</label>
      </div>
      <div
        class="restaurant"
        v-for="restaurant in searchedRestaurants"
        :key="restaurant.id"
      >
        <RestaurantCard :restaurant="restaurant" />
      </div>
    </div>
  </div>
</template>


<script>
import RestaurantCard from "./RestaurantCard.vue";
import Load from "./Load.vue";

export default {
  name: "RestaurantList",
  components: {
    RestaurantCard,
    Load,
  },
  data() {
    return {
      isLoading: true,
      restaurants: [],
      cuisines: [],
      cuisinesIds: [],
      checkedCuisines: [],
      searchedString: "",
    };
  },
  created: function () {
    axios.get("http://127.0.0.1:8000/api/users").then((res) => {
      this.restaurants = res.data;
      this.isLoading = false;
    });
    axios.get("http://127.0.0.1:8000/api/cuisines").then((res) => {
      this.cuisines = res.data;
      this.isLoading = false;
      this.cuisinesIds = this.cuisines.map((cuisine) => {
        return cuisine.id;
      });
    });
  },
  computed: {
    searchedRestaurants() {
      if (this.checkedCuisines.length == 0 && this.searchedString == "") {
        console.log("hey");
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
        return restaurant.name
          .toLowerCase()
          .includes(this.searchedString.toLowerCase());
      });
    },
  },
}
</script>

<style>
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
.restaurants-list {
  width: 70%;
  margin: 0 auto;
}
.form-string {
  margin-bottom: 20px;
}
</style>