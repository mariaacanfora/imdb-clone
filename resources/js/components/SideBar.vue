<template>
  <div>
      <!-- <select name="" id="">
          <option value=""></option>
      </select> -->
      <ul>
          <li v-for="film in movieList" :key="film.id">
              {{film.title}}
          </li>
      </ul>
  </div>
</template>

<script>
export default {
    name: "SideBar",
  props: {
    movieList: Array,

  },
  data(){
    return {
      movies: []
    }
  },
  methods: {
      CallAxios(){
          window.axios.get('api/movies', )
      }
  }
};
</script>

<style>

</style>