<template>
  <div>
    <div class="card">
      <img :src="{ filmImg }" alt="img" class="card-img-top" />
      <div class="card-body">
        <h5 class="card-title">{{ filmTitle }}</h5>
        <button class="btn">+ Watchlist</button>
        <a :href="{ filmTrailer }">Trailer</a>
      </div>
    </div>
  </div>
</template>


<script>
export default {};
</script>

