<template>
  <header>
    <div class="card" :style="[user.cover.startsWith('http') ? { backgroundImage: 'url(' + user.cover + ')'} : { backgroundImage: 'url(' + 'storage/' + user.cover + ')'}]">
      <div class="overlay"></div>
      <div class="card-text">
        <h1>{{ user.name }}</h1>
        <p>You can find us at:</p>
        <p class="p-special">{{ user.address }}</p>
      </div>
    </div>
  </header>
</template>

<script>
export default {
  name: "RestaurantHeader",
  props: ["user"],
};
</script>

<style scoped>
.card {
  position: relative;
  z-index: -1;
  top: -60px;

  background-image: url(https://images.pexels.com/photos/349609/pexels-photo-349609.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260);
  background-size: cover;
  background-position: center;
  height: 400px;
  width: 100%;

  position: relative;

  font-size: 30px;
  line-height: 10px;
}
.overlay {
  width: 100%;
  height: 100%;
  background-color: rgba(255, 255, 255, 0.6);
}

.card-text {
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);

  text-align: center;
}
h1 {
  font-family: "Cedarville Cursive", cursive;
  font-style: italic;
  font-size: 100px;
}
p {
  font-size: 30px;
  margin-top: revert;
}
.p-special {
  font-style: italic;
  font-size: 15px;
}
</style>