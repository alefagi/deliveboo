<template>
  <div class="jumbotron">
    <div class="jumbotron-text">
      <h1>DeliveBoo</h1>
      <p>We deliver happiness at your doorstep.</p>
      <p class="p-special">The food you love one click away.</p>
    </div>
  </div>
</template>

<script>
export default {};
</script>

<style>
.jumbotron {
  position: relative;
  z-index: -1;
  top: -60px;

  background-image: url(https://images.pexels.com/photos/349609/pexels-photo-349609.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260);
  background-size: cover;
  background-position: top;
  height: 550px;
  width: 100%;

  position: relative;

  font-size: 30px;
  line-height: 10px;
}
.jumbotron-text {
  position: absolute;
  top: 40%;
  left: 50%;
  transform: translate(-50%, -50%);

  text-align: center;
}
h1 {
  font-family: "Cedarville Cursive", cursive;
  font-style: italic;
  font-size: 120px;
}
.p-special {
  font-style: italic;
  font-size: 20px;
}
</style>