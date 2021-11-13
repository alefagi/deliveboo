<template>
  <div class="dishes-list">
      <h3>Cerca in base al tipo di piatto</h3>
            <div class="form-tag" v-for="tag in tags" :key="tag.index">
                <input type="checkbox" :id="tag.name" :value="tag.id" v-model="checkedTags">
                <label class="mr-2" :for="tag.name">{{tag.name}}</label>
            </div>
      <div v-for="dish in dishTags" :key="dish.id">
            {{dish.name}}
            <span v-if="displayCart" @click="addToCart(dish)">Aggiungi al carrello</span>
            <span v-if="displayCart" @click="removeFronmCart(dish)">Rimuovi dal carrello</span>
      </div>
      <!-- Prova -->
      <div>
          <h3>Carrello</h3> <span @click="eraseCart()">Azzera carrello</span>
          <div v-for="item in cart" :key="item.index">
              {{item.dish.name}} {{item.quantity}}
          </div>

          <div class="pointer" @click="redirect()">
                Procedi con l'acquisto
            </div>
      </div>
  </div>
</template>

<script>
export default {
    name: "RestaurantList",
    data() {
        return {
            dishes: [],
            tags: [],
            checkedTags: [],
            cart: [],
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
                    if (this.checkedTag.includes(tag.id)) auxBoolean = true;
                });
                return auxBoolean;
            });
        },
        displayCart() {
            if (!this.cart.length > 0) {
                return true
            }
            if(this.cart[0].dish.user_id == this.id) {
                return true
            }
            return false
        },
    },
    methods: {
        addToCart(object) {
            let auxLocal = JSON.parse(localStorage.getItem(object.name));
            if (auxLocal) {
                localStorage.setItem(
                    object.name,
                    JSON.stringify({
                        dish: object,
                        quantity: auxLocal.quantity + 1,
                    })
                );
            } else {
                localStorage.setItem(
                    object.name,
                    JSON.stringify({ dish: object, quantity: 1 })
                );
            }
            this.updateCart();
        },
        removeFronmCart(object) {
            let auxLocal = JSON.parse(localStorage.getItem(object.name));
            if (auxLocal) {
                if (auxLocal.quantity == 1) {
                    localStorage.removeItem(object.name);
                } else {
                    localStorage.setItem(
                        object.name,
                        JSON.stringify({
                            dish: object,
                            quantity: auxLocal.quantity - 1,
                        })
                    );
                }
            }
            this.updateCart();
        },
        eraseCart() {
            localStorage.clear();
            this.cart = [];
        },
        updateCart() {
            let auxKeys = Object.keys(localStorage);
            let auxCart = [];
            auxKeys.forEach((key) => {
                auxCart.push(JSON.parse(localStorage.getItem(key)));
            });
            this.cart = auxCart;
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
        });
        axios.get("http://127.0.0.1:8000/api/tags").then((res) => {
            this.tags = res.data;
        });
        this.updateCart();
    },
};
</script>

<style></style>
