<template>
  <section id="loader">
    <h1>Loading...</h1>
  </section>
</template>

<script>
export default {
  name: "Load",
};
</script>

<style>
#loader {
  position: fixed;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  color: rgb(250, 7, 7);
  display: flex;
  align-items: center;
  justify-content: center;
  background-image: url();
}
img {
  height: 500px;
  width: 500px;
}
</style>