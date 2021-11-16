<template>
    <div class="card" style="width: 18rem;">
        <img class="card-img-top" :src="restaurant.cover" alt="Card image cap">
        <div class="card-body">
            <h5 class="card-title">{{restaurant.name}}</h5>
            <p class="card-text">{{restaurant.address}}</p>
            <div class="btn btn-primary" @click="redirect(restaurant.id)">Vedi ristorante</div>
        </div>
    </div>
</template>

<script>
export default {
    name: "RestaurantCard",
    props: ['restaurant'],
    methods: {
        redirect(id){
            window.location.href = "/restaurant/" + id;
        },
    },
}
</script>

<style>
.card {
    display: inline-block;
}
</style>