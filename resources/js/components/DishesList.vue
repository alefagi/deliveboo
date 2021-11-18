<template>
  <Load v-if="isLoading" />
  <div v-else>
    <div class="dishes-list">
      <RestaurantHeader :user="user" />
      <div class="choice-options">
        <div class="d-flex justify-content-center">
          <div
            class="form-tag d-inline-block"
            v-for="tag in tags"
            :key="tag.index"
          >
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
              :class="
                checkedTags.includes(tag.id) ? 'checkbox-lable-checked' : ''
              "
              :for="tag.name"
            >
              <span v-html="tag.icon"></span> {{ tag.name }}
            </label>
          </div>
        </div>
      </div>

      <div class="menu container">
        <h2 class="text-center">Our dishes</h2>
        <ErrorMessage v-if="showError" :user="cart[0].dish.user" />
        <div class="d-flex">

          <div class="d-flex flex-wrap mt-4 mb-4" :class="displayCart ? 'col-8' : 'col-12'">
              <div v-for="dish in dishTags" :key="dish.id" class="col">
                <div class="my-3">
                  <div class="d-flex">
                    <div class="col-3">
                      <div
                        class="dish_img"
                        :style="{ backgroundImage: 'url(' + dish.cover + ')' }"
                      >
                      </div>
                    </div>
                    <div class="col-6 d-flex flex-column justify-content-center">
                      <h3 class="dish-name">{{ dish.name }}</h3>
                      <div class="dish-description">{{ dish.description }}</div>
                      <div class="dish-price">{{ dish.price }}€</div>
                    </div>
                    <div class="col-3 dish-btn d-flex align-items-center">
                      <span @click="addToCart(dish)">
                        <div
                          class="d-inline-block text-center cart-button mx-1"
                          :style="
                            displayCartButton
                              ? { backgroundColor: 'rgb(58, 146, 218)' }
                              : { backgroundColor: 'lightgray' }
                          "
                        >
                          <i class="fas fa-plus"></i>
                        </div>
                      </span>
                      <div class="cart-count d-inline-block">
                        {{ isIncluded(dish) }}
                      </div>
                      <span @click="removeFronmCart(dish)">
                        <div
                          class="d-inline-block text-center cart-button mx-1"
                          :style="
                            displayCartButton
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
          <div class="cart mt-4 rounded-lg" :class="displayCart ? 'col-4' : 'd-none'">
            <div class="container">
              <h3 class="font-weight-bold"> Cart <span v-if="!displayCartButton" class="cart-restaurant">(from: {{cart[0].dish.user.name}})</span> </h3>
              <span class="erease" @click="eraseCart()"
                >Deselect all items
              </span>

              <hr>
              <div v-for="item in cart" :key="item.index">
                <div class="d-flex justify-content-between">

                  <div>{{ item.dish.name }}</div> 
                  <div>{{ item.quantity }} x <span class="font-weight-bold">{{item.dish.price}}€</span></div>

                </div>
                <hr>
              </div>
              <div class="text-right">
                Partial total ({{totalCart.quantity}} items): <span class="font-weight-bold ml-2">{{totalCart.price}}€</span> 
              </div>

              <div class="text-right">
                <span
                  type="button"
                  class="pointer btn btn-primary mt-3"
                  @click="redirect()"
                  >Procedi con l'acquisto</span
                >
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
import RestaurantHeader from "./RestaurantHeader";
import ErrorMessage from "./ErrorMessage.vue";
import Load from "./Load.vue";
import Jumbotron from "./Jumbotron.vue";

export default {
  components: {
    RestaurantHeader,
    ErrorMessage,
    Load,
    Jumbotron,
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
    displayCartButton() {
      if (!this.cart.length > 0) {
        return true;
      }
      if (this.cart[0].dish.user_id == this.id) { 
        return true;
      }
      return false;
    },
    displayCart() {
      if(this.cart.length > 0) {
        return true
      }
      return false
    },
    totalCart() {
      let totalPrice = 0;
      let totalItems = 0;
      this.cart.forEach(item => {
        totalPrice += parseFloat(item.dish.price)*item.quantity;
        totalItems += item.quantity;
      })
      return {price: totalPrice.toFixed(2), quantity: totalItems}
    }
  },
  methods: {
    addToCart(object) {
      let cartIncludesDish = false;
      if (this.displayCartButton) {
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
      if (this.displayCartButton) {
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
    isIncluded(dish) {
      let quantity = 0;
      this.cart.forEach(item => {
        if(item['dish']['id'] == dish.id) {
          quantity = item['quantity'];
        }
      })
      return quantity
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

<style lang="scss" scoped>
.dish_img {
  width: 100px;
  height: 100px;
  border-radius: 50%;
  background-position: center;
  background-size: cover;
}
.choice-options {
  margin: -40px 0px;
}
.menu {
  margin: 65px auto;
  h2 {
    font-weight: 900;
    font-size: 2.5rem;
    margin: 20px 0px;
  }
  .dish-description {
    color: gray;
    font-size: 0.7rem;
    line-height: 0.7rem;
  }
  .dish-name {
    line-height: 1.5rem;
  }
  .dish-price {
    line-height: 2rem;
  }
}
.cart-button {
  height: 20px;
  width: 20px;
  color: white;
  border-radius: 50%;

  position: relative;
  top: -15px;

  i {
    position: relative;
    top: -2px;
  }
}
.cart-count {
  position: relative;
  top: -17px;

  width: 30px;
  text-align: center;
}
.checkbox-tag {
  display: none;
}
.checkbox-label {
  width: 150px;
  padding: 10px 10px;
  text-align: center;
  margin: 0 10px;
  color: white;

  font-weight: bold;
}
.checkbox-lable-checked {
  border: 1px solid black;
}
.cart {
  .container {
    padding: 0;
    position: sticky;
    top: 20px;
  }
  .erease {
    position: relative;
    top: -10px;

    font-size: 15px;
    color: rgb(20, 123, 243);
  }
  .cart-restaurant {
    font-size: 15px;
    color: gray;
  }


}
</style>
