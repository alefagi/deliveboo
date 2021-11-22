<template>
  <div class="restaurant row mb-5">
    <div
      @click="prev()"
      class="carusel-btn d-flex align-items-center justify-content-center"
    >
      <i class="fas fa-angle-left clickable"></i>
    </div>

    <div class="carusel-container" v-if="presentRestaurants.length > 0">
      <RestaurantCard
        v-for="restaurant in presentRestaurants"
        :key="restaurant.id"
        :restaurant="restaurant"
        :windowWidth="windowWidth"
      />
    </div>
    <div class="carusel-container text-center" v-else>
      Unfortunately there are no restaurants that match your needs :(
    </div>

    <div
      @click="next()"
      class="carusel-btn d-flex align-items-center justify-content-center"
    >
      <i class="fas fa-angle-right clickable"></i>
    </div>
  </div>
</template>

<script>
import RestaurantCard from "./RestaurantCard.vue";
export default {
  name: "RestaurantCarusel",
  props: ["restaurants"],
  components: {
    RestaurantCard,
  },
  data() {
    return {
      position: 0,
      windowWidth: window.innerWidth,
    };
  },
  computed: {
    presentRestaurants() {
      let auxRestaurants = [];
      for (
        let i = this.position;
        i < this.position + this.numberOfCards && i < this.restaurants.length;
        i++
      ) {
        auxRestaurants.push(this.restaurants[i]);
      }
      if (
        auxRestaurants.length < this.numberOfCards &&
        this.restaurants.length != auxRestaurants.length
      ) {
        for (
          let i = 0;
          i < this.numberOfCards + 1 - auxRestaurants.length &&
          i < this.restaurants.length - auxRestaurants.length;
          i++
        ) {
          auxRestaurants.push(this.restaurants[i]);
        }
      }
      return auxRestaurants;
    },
    numberOfCards() {
      if (this.windowWidth > 990) {
        return 3;
      } else if (this.windowWidth > 576) {
        return 2;
      }
      return 1;
    },
  },
  watch: {
    restaurants: function () {
      this.position = 0;
    },
  },
  methods: {
    next() {
      if (this.position < this.restaurants.length - 1) {
        this.position++;
      } else {
        this.position = 0;
      }
    },
    prev() {
      if (this.position > 0) {
        this.position--;
      } else {
        this.position = this.restaurants.length - 1;
      }
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

<style scoped>
.carusel-container {
  width: 90%;
}
.carusel-btn {
  width: 5%;
}

i {
  font-size: 30px;
}

i:hover {
  transform: scale(250%);
  cursor: pointer;
}
</style>
