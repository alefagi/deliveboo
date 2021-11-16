<template>
    <header>
        <div class="card">
            <div class="img-card" :style="{ backgroundImage: 'url(' + user.cover + ')' }"></div>
            <h1 class="name-card">{{user.name}}</h1>
        </div>
    </header>
</template>

<script>
export default {
    name: 'RestaurantHeader',
    props: ['user'],
}
</script>

<style>
.img-card {
    position: relative;
    height: 200px;
    width: 100%;

    background-size: cover;
    background-position: center;
    opacity: 0.5;
}
.name-card {
    position: absolute;
    transform: translate(-50%, -50%);
    top: 50%;
    left: 50%;

    color: black;
    font-weight: 900;
    text-transform: uppercase;

    font-family: 'Roboto', sans-serif;
}
</style>