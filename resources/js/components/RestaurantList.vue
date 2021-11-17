<template>
  <Load v-if="isLoading" />
  <div class="restaurants-list" v-else>
    <Jumbotron />
    <div class="search-bar">
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
      <div class="restaurant row mb-5">
        <div
          @click="prev()"
          class="
            carusel-btn
            col
            d-flex
            align-items-center
            justify-content-center
          "
        >
          <i class="fas fa-angle-left fa-4x clickable"></i>
        </div>
        <RestaurantCard
          v-for="restaurant in presentRestaurants"
          :key="restaurant.id"
          :restaurant="restaurant"
          class="col"
        />
        <div
          @click="next()"
          class="
            carusel-bt
            col
            d-flex
            align-items-center
            justify-content-center
          "
        >
          <i class="fas fa-angle-right fa-4x clickable"></i>
        </div>
      </div>
    </div>
  </div>
</template>


<script>
import RestaurantCard from "./RestaurantCard.vue";
import Load from "./Load.vue";
import Jumbotron from "./Jumbotron.vue";

export default {
  name: "RestaurantList",
  components: {
    RestaurantCard,
    Load,
    Jumbotron,
  },
  data() {
    return {
      isLoading: true,
      restaurants: [],
      cuisines: [],
      cuisinesIds: [],
      checkedCuisines: [],
      searchedString: "",

      position: 0,
    };
  },
  created: function () {
    axios.get("http://127.0.0.1:8000/api/users").then((res) => {
      this.restaurants = res.data;
      this.isLoading = false;
    });
    axios.get("http://127.0.0.1:8000/api/cuisines").then((res) => {
      this.cuisines = res.data;
      this.cuisinesIds = this.cuisines.map((cuisine) => {
        return cuisine.id;
      });
      this.isLoading = false;
    });
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
      if (this.searchedString == "") {
        return this.restaurants;
      }

      return this.restaurants.filter((restaurant) => {
        return restaurant.name
          .toLowerCase()
          .includes(this.searchedString.toLowerCase());
      });
    },
    presentRestaurants() {
      let auxRestaurants = [];
      for (
        let i = this.position;
        i < this.position + 3 && i < this.searchedRestaurants.length;
        i++
      ) {
        auxRestaurants.push(this.searchedRestaurants[i]);
      }

      if (
        auxRestaurants.length < 3 &&
        this.searchedRestaurants.length != auxRestaurants.length
      ) {
        for (
          let i = 0;
          i < 4 - auxRestaurants.length &&
          i < this.searchedRestaurants.length - auxRestaurants.length;
          i++
        ) {
          auxRestaurants.push(this.searchedRestaurants[i]);
        }
      }
      return auxRestaurants;
    },
  },
  methods: {
    next() {
      if (this.position < this.searchedRestaurants.length - 1) {
        this.position++;
      } else {
        this.position = 0;
      }
    },
    prev() {
      if (this.position > 0) {
        this.position--;
      } else {
        this.position = this.searchedRestaurants.length - 1;
      }
    },
  },
};
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