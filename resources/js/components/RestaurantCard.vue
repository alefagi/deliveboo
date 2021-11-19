<template>
    <div class="card-style px-1" @click="redirect(restaurant.id)">

        <div class="card-img" :style="[restaurant.cover.startsWith('http') ? { backgroundImage: 'url(' + restaurant.cover + ')'} : { backgroundImage: 'url(' + 'storage/' + restaurant.cover + ')'}]"></div>
        <h3 class="mt-1 mb-0">{{restaurant.name}}</h3>
        <p class="card-p ">{{restaurant.address}}</p>
        
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

<style scoped>
.card-style {
    width: calc(100% / 3);
    display: inline-block;
}
.card-style:hover .card-img {
    transform: scale(105%);
}
.card-img {
    width: 100%;
    height: 180px;

    background-size: cover;
    background-position: center;
}
.card-p {
    color: gray;
    font-size: 10px;
    padding-right: 15px;

}
h3 {
    padding-right: 15px;

    white-space: nowrap;
    overflow: hidden;
    text-overflow: ellipsis;
}
</style>