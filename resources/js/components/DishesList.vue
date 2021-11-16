<template>
  <Load v-if="isLoading" />
  <div class="dishes-list" v-else>
    <RestaurantHeader :user="user" />
    <h3 class="text-center">Cerca in base al tipo di piatto</h3>
    <div class="d-flex justify-content-center">
      <div class="form-tag d-inline-block" v-for="tag in tags" :key="tag.index">
        <input
          class="checkbox-tag"
          type="checkbox"
          :id="tag.name"
          :value="tag.id"
          v-model="checkedTags"
        />
        <label
          class="checkbox-label rounded-pill"
          :style="{ backgroundColor: tag.color }"
          :class="checkedTags.includes(tag.id) ? 'checkbox-lable-checked' : ''"
          :for="tag.name"
        >
          <span v-html="tag.icon"></span> {{ tag.name }}
        </label>
      </div>
    </div>
    <h3 class="text-center">I nostri piatti</h3>
    <ErrorMessage v-if="showError" :user="cart[0].dish.user" />
    <div class="d-flex flex-wrap">
      <div v-for="dish in dishTags" :key="dish.id" class="col-6">
        <div class="my-3">
          <div class="d-flex">
            <div class="col-3">
              <div
                class="dish_img"
                :style="{ backgroundImage: 'url(' + dish.cover + ')' }"
              ></div>
            </div>
            <div class="col-6">
              <h3>{{ dish.name }}</h3>
              <div>{{ dish.description }}</div>
              <div>{{ dish.price }}€</div>
            </div>
            <div class="col-3">
              <span @click="addToCart(dish)">
                <div
                  class="d-inline-block text-center cart-button"
                  :style="
                    displayCart
                      ? { backgroundColor: 'rgb(58, 146, 218)' }
                      : { backgroundColor: 'lightgray' }
                  "
                >
                  <i class="fas fa-plus"></i>
                </div>
              </span>
              <span @click="removeFronmCart(dish)">
                <div
                  class="d-inline-block text-center cart-button"
                  :style="
                    displayCart
                      ? { backgroundColor: 'rgb(58, 146, 218)' }
                      : { backgroundColor: 'lightgray' }
                  "
                >
                  <i class="fas fa-minus"></i>
                </div>
              </span>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Cart -->
    <div>
      <div class="d-flex flex-column text-center pb-5">
        <h3>Carrello</h3>

        <span @click="eraseCart()">Azzera carrello</span>

        <div v-for="item in cart" :key="item.index">
          {{ item.dish.name }} {{ item.quantity }}
        </div>
        <div class="pointer" @click="redirect()">Procedi con l'acquisto</div>
      </div>
    </div>
  </div>
</template>

<script>
import RestaurantHeader from "./RestaurantHeader";
import ErrorMessage from "./ErrorMessage.vue";
import Load from "./Load.vue";
export default {
  components: {
    RestaurantHeader,
    ErrorMessage,
    Load,
  },
  data() {
    return {
      isLoading: true,
      dishes: [],
      user: [],
      tags: [],
      checkedTags: [],
      cart: [],
      showError: false,
    };
  },
  props: ["id"],
  computed: {
    dishTags() {
      if (this.checkedTags.length == 0) {
        return this.dishes;
      }

      return this.dishes.filter((dish) => {
        let auxBoolean = false;
        dish.tags.forEach((tag) => {
          if (this.checkedTags.includes(tag.id)) auxBoolean = true;
        });
        return auxBoolean;
      });
    },
    displayCart() {
      if (!this.cart.length > 0) {
        return true;
      }
      if (this.cart[0].dish.user_id == this.id) {
        return true;
      }
      return false;
    },
  },
  methods: {
    addToCart(object) {
      let cartIncludesDish = false;
      if (this.displayCart) {
        this.cart.forEach((item) => {
          if (item.dish.id == object.id) {
            item.quantity++;
            cartIncludesDish = true;
          }
        });
        if (!cartIncludesDish) {
          this.cart.push({ dish: object, quantity: 1 });
        }
        localStorage.setItem("cart", JSON.stringify(this.cart));
      } else {
        this.showError = true;
        this.scrollToTop();
      }
    },
    removeFronmCart(object) {
      if (this.displayCart) {
        this.cart.forEach((item, index) => {
          if (item.dish.id == object.id) {
            if (item.quantity != 1) {
              item.quantity--;
            } else {
              this.cart.splice(index, 1);
            }
          }
        });
        localStorage.setItem("cart", JSON.stringify(this.cart));
      } else {
        this.showError = true;
        this.scrollTo({
          top: 0,
          left: 0,
          behavior: "smooth",
        });
      }
    },
    eraseCart() {
      localStorage.clear();
      this.cart = [];
    },
    getCart() {
      if (localStorage.getItem("cart") != null) {
        this.cart = JSON.parse(localStorage.getItem("cart"));
      }
    },
    scrollToTop() {
      window.scrollTo(0, 0);
    },
    redirect() {
      window.location.href =
        "/buy/" +
        JSON.stringify(
          this.cart.map((i) => ({
            dishId: i.dish.id,
            quantity: i.quantity,
          }))
        );
    },
  },
  created: function () {
    axios.get("http://127.0.0.1:8000/api/users/" + this.id).then((res) => {
      this.dishes = res.data;
      this.isLoading = false;
      this.user = res.data[0].user;
    });
    axios.get("http://127.0.0.1:8000/api/tags").then((res) => {
      this.tags = res.data;
      this.isLoading = false;
    });
    this.errorElement = document.getElementById("#error-message");
    console.log(this.$refs.errorElement);
    this.getCart();
  },
};
</script>

<style>
.dish_img {
  width: 100px;
  height: 100px;
  border-radius: 50%;
  background-position: center;
  background-size: cover;
}
.cart-button {
  height: 20px;
  width: 20px;
  color: white;
  border-radius: 50%;
}
.checkbox-tag {
  display: none;
}
.checkbox-label {
  width: 120px;
  padding: 10px 10px;
  text-align: center;
  margin: 0 10px;
  color: white;

  font-weight: bold;
}
.checkbox-lable-checked {
  border: 1px solid black;
}
</style>
