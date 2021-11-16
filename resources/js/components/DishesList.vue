<template>
    <div class="dishes-list">
        <RestaurantHeader :user="user"/>
        <h3 class="text-center">Cerca in base al tipo di piatto</h3>
        <div class="d-flex justify-content-center">
            <div class="form-tag d-inline-block" v-for="tag in tags" :key="tag.index">
                <input type="checkbox" :id="tag.name" :value="tag.id" v-model="checkedTags">
                <label class="mr-2" :for="tag.name">{{tag.name}}</label>
            </div>
        </div>
        <h3 class="text-center">I nostri piatti</h3>
        <div class="d-flex flex-wrap">
            <div v-for="dish in dishTags" :key="dish.id" class="col-6">
                <div class="my-3">
                    <div class="d-flex">
                        <div class="col-3">
                            <div class="dish_img" :style="{ backgroundImage: 'url(' + dish.cover + ')' }"></div>
                        </div>
                        <div class="col-6">
                            <h3>{{dish.name}}</h3>
                            <div>{{dish.description}}</div>
                            <div>{{dish.price}}€ </div>
                        </div>
                        <div class="col-3">
                            <span @click="addToCart(dish)">
                                <div class="d-inline-block text-center cart-button" 
                                :style="displayCart ? {'backgroundColor': 'rgb(58, 146, 218)'} : {'backgroundColor': 'lightgray'}"><i class="fas fa-plus"></i></div>
                            </span>
                            <span @click="removeFronmCart(dish)">
                                <div class="d-inline-block text-center cart-button"
                                :style="displayCart ? {'backgroundColor': 'rgb(58, 146, 218)'} : {'backgroundColor': 'lightgray'}"><i class="fas fa-minus"></i></div>
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
                    {{item.dish.name}} {{item.quantity}}
                </div>
                <div class="pointer" @click="redirect()">
                    Procedi con l'acquisto
                </div>
            </div>
        </div>
    </div>
</template>

<script>
import RestaurantHeader from './RestaurantHeader';
export default {
    components: {
        RestaurantHeader,
    },
    data() {
        return {
            dishes: [],
            user: [],
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
            let cartIncludesDish = false;
            this.cart.forEach(item => {
                if(item.dish == object) {
                    item.quantity++;
                    cartIncludesDish = true;
                }
            });
            if(!cartIncludesDish) {
                this.cart.push({dish: object, quantity: 1});
            }
            localStorage.setItem('cart', JSON.stringify(this.cart));
        },
        removeFronmCart(object) {
            this.cart.forEach((item, index) => {
                if(item.dish.id == object.id) {
                    if(item.quantity != 1) { 
                        item.quantity--;
                    } else {
                        this.cart.splice(index, 1);
                    }
                } 
            });
            localStorage.setItem('cart', JSON.stringify(this.cart));
        },
        eraseCart() {
            localStorage.clear();
            this.cart = [];
        },
        getCart() {
            if(localStorage.getItem("cart") != null) {
                this.cart = JSON.parse(localStorage.getItem('cart'));
            }
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
            this.user = res.data[0].user;
        });
        axios.get("http://127.0.0.1:8000/api/tags").then((res) => {
            this.tags = res.data;
        });
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
</style>
