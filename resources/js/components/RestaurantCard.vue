<template>
    <div class="card-style px-1" :style="{ width: numberOfCards}" @click="redirect(restaurant.id)">

        <div class="card-img" :style="[restaurant.cover.startsWith('http') ? { backgroundImage: 'url(' + restaurant.cover + ')'} : { backgroundImage: 'url(' + 'storage/' + restaurant.cover + ')'}]"></div>
        <h3 class="mt-1 mb-0">{{restaurant.name}}</h3>
        <p class="card-p ">{{restaurant.address}}</p>
        
    </div>
</template>

<script>
export default {
    name: "RestaurantCard",
    props: ['restaurant', 'windowWidth'],
    methods: {
        redirect(id){
            window.location.href = "/restaurant/" + id;
        },
    },
    computed: {
        numberOfCards() {
            if (this.windowWidth > 990) {
                return "calc(100% / 3)"
            } else if (this.windowWidth > 576) {
                return "calc(100% / 2)"
            }
            return "100%"
        }
    }
}
</script>

<style scoped>
.card-style {
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

    white-space: nowrap;
    overflow: hidden;
    text-overflow: ellipsis;

}
h3 {
    padding-right: 15px;

    white-space: nowrap;
    overflow: hidden;
    text-overflow: ellipsis;
}
</style>