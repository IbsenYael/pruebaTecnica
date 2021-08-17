<template>
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-8 mb-3">
        <div class="card">
          <form enctype="multipart/form-data" v-on:submit.prevent="newPublicacion">
            <div class="card-header">
              <input
                v-model="description"
                class="center col-md-8"
                type="text"
                placeholder="¿En que estas pensando?"
                style="
                  border-radius: 5px;
                  border: 1px solid #39c;
                  outline: none;
                "
              />
            </div>

            <div class="card-body">
              <div class="form-group">
                  <label for="imagen">Agregar Imagen</label>
                  <input type="file" @change="obtenerImagen" class="form-control-file">
              </div>
              <figure>
                  <img whith="200" height="200" :src="imagen" alt="Foto de la publicacion">
              </figure>
              <b-button type="submit" variant="primary">Publicar</b-button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
export default {
    data(){
        return{
            description: '',
            imagenMiniatura:''
        }
    },
  mounted() {
    console.log("Component mounted.");
  },
  methods:{

      newPublicacion(){
          const params = {
              image: 'https://placekitten.com/480/210',
              description: this.description
          };
          this.$axios.post('/publicaciones', params).then((response)=>{
              const publicacion=response;
                this.$emit('new',publicacion);
                this.description='';
          })


      },
      obtenerImagen(e){
          let file = e.target.files[0];
          this.cargarImagen(file);
      },
      cargarImagen(file){
          let reader = new FileReader();
          reader.onload = (e) =>{
           this.imagenMiniatura = e.target.result;
          }
          reader.readAsDataURL(file);

      }

  },
  computed:{
          imagen(){
              return this.imagenMiniatura
          }
      }
};
</script>
