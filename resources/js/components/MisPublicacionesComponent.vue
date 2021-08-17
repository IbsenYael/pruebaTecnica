<template>
     <div id="app">
            <navbar-component></navbar-component>
            <home-component @new="addPublicacion"></home-component>
            <publicacion-component v-for="publicacion in publicaciones" :key="publicacion.id"
            :publicacion="publicacion"></publicacion-component>
        </div>
</template>
<script>
export default {
    data(){
        return {
            publicaciones: []
        }
    },
  mounted() {
    this.$axios.get('/publicaciones').then((response)=>{
        this.publicaciones = response.data;
    })
  },
  methods: {
      addPublicacion(publicacion){
          this.publicaciones.push(publicacion);
      }
  }
};
</script>
