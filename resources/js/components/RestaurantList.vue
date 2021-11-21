<template>
  <Load v-if="isLoading" />
  <div class="restaurants-list" v-else>
    <Jumbotron />
    <div class="search-bar">
      <h3>Advanced Search</h3>
      <div>
        <input
          class="form-string rounded-pill text-center"
          type="text"
          id="serached-string"
          v-model="searchedString"
          placeholder="Search by name..."
        />
      </div>
    </div>
    <div
      class="container text-center"
      :style="windowWidth < 990 ? { width: '550px' } : {}"
    >
      <div
        class="form-cuisine mr-3"
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
          class="cuisine-img img-animation"
          :class="
            checkedCuisines.includes(cuisine.id) ? 'cuisine-img-checked' : ''
          "
          :for="cuisine.name"
          ><img :src="cuisine.cover" alt=""
        /></label>
        <div>{{ cuisine.name }}</div>
      </div>
    </div>

    <div class="container text-center">
      <h4 class="text-center">Our restaurants</h4>
      <RestaurantCarusel :restaurants="searchedRestaurants" />
      <h4 class="text-center">
        Don't know what you want? Here some of our favourite restaurants
      </h4>
      <RestaurantCarusel :restaurants="randomRestaurants" />
      <h4 class="text-center">
        If you crave some {{ randomCuisine ? randomCuisine.name : "" }}
      </h4>
      <RestaurantCarusel :restaurants="randomCuisineRestaurants" />
    </div>

    <Footer />
  </div>
</template>


<script>
import Load from "./Load.vue";
import Jumbotron from "./Jumbotron.vue";
import RestaurantCarusel from "./RestaurantCarusel.vue";
import Footer from "./Footer.vue";

export default {
  name: "RestaurantList",
  components: {
    Load,
    Jumbotron,
    RestaurantCarusel,
    Footer,
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

      windowWidth: window.innerWidth,
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

      this.randomCuisine =
        this.cuisines[Math.floor(Math.random() * this.cuisines.length)];

      this.restaurants.forEach((restaurant) => {
        if (
          restaurant.cuisines
            .map((i) => i["id"])
            .includes(this.randomCuisine.id)
        ) {
          this.randomCuisineRestaurants.push(restaurant);
        }
      });
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
    randomRestaurants() {
      let randNumbers = [];
      let auxRestaurants = [];
      while (auxRestaurants.length < 6) {
        const randNumber = Math.floor(Math.random() * this.restaurants.length);
        if (!randNumbers.includes(randNumber)) {
          auxRestaurants.push(this.restaurants[randNumber]);
          randNumbers.push(randNumber);
        }
      }
      return auxRestaurants;
    },
  },
  mounted() {
    window.addEventListener("resize", () => {
      console.log(window.innerWidth);
      this.windowWidth = window.innerWidth;
    });
  },
};
</script>

<style scoped lang="scss">
.search-bar {
  text-align: center;
  margin-top: -200px;
  margin-bottom: 100px;
}
.form-cuisine {
  display: inline-block;
  margin-bottom: 20px;
  div {
    font-size: 13px;
  }
}

.form-cuisine label:hover {
  cursor: pointer;
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
  background-color: white;
  border: 1px solid black;
}
.cuisine-img img {
  height: 55px;
  width: 55px;
}
.form-string {
  margin-bottom: 20px;
  width: 40%;
}
.img-animation:hover {
  box-shadow: 0px 45px 20px -30px rgba(0, 0, 0, 0.2);
  animation: up 0.5s infinite 0.4s;
}
@keyframes up {
  0%,
  100% {
    transform: translatey(0px);
  }
  50% {
    transform: translatey(-10px);
  }
}

h4 {
  font-weight: bolder;
  margin: 30px 0px;
}
</style>