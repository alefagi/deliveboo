<template>
    <div class="card-style px-1" @click="redirect(restaurant.id)">
        <div class="card-img" :style="{ backgroundImage: 'url(' + restaurant.cover + ')' }"></div>
        <h3 class="mt-1 mb-0">{{restaurant.name}}</h3>
        <p class="card-p">{{restaurant.address}}</p>
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
.card-style {
    width: 30%;
}
.card-style:hover {
    padding: 0 0 !important;
}
.card-img {
    width: 100%;
    height: 180px;

    background-size: cover;
}
.card-p {
    color: gray;
    font-size: 10px;
}
</style>