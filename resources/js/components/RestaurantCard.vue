<template>
    <div class="card-style">
        <div class="card-img" :style="{ backgroundImage: 'url(' + restaurant.cover + ')' }"></div>
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
.card-img {
    width: 100%;
    height: 200px;

    background-size: cover;
}
</style>