<template>
  <div>
    <div
      id="carouselExampleControls"
      class="carousel slide"
      data-bs-ride="carousel"
    >
      <div class="carousel-inner">
        <div :class="{active: i === 0}"  v-for="(movie, i) in carouselList" :key="movie.id" class="carousel-item active">
          <img :src="movie.coverImg" class="d-block w-100" alt="movie's cover" />

        </div>
      </div>
      <button
        class="carousel-control-prev"
        type="button"
        data-bs-target="#carouselExampleControls"
        data-bs-slide="prev"
      >
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button
        class="carousel-control-next"
        type="button"
        data-bs-target="#carouselExampleControls"
        data-bs-slide="next"
      >
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>
  </div>
</template>

<script>
export default {
  name: "MovieSlider",
  props: {
    carouselList: Array,
  },
  data(){
    return {
      
    }
  }
};
</script>

<style>
</style>