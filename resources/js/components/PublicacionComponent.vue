<template>
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-4">
        <div>
          <b-card class="mb-5">
            <b-card-body>
              <b-card-title>{{ publicacion.descripcion }}</b-card-title>
            </b-card-body>
            <b-card-img
              class="mb-4"
              :src="publicacion.imagen"
              bottom
            ></b-card-img>
            <b-card-sub-title class="mb-4">
              {{ incrementa }} Comentarios</b-card-sub-title
            >

            <b-list-group
              flush
              v-for="comentario in comentarios"
              :key="comentario.id"
            >
              <b-list-group-item
                v-if="publicacion.id == comentario.idPublicacion"
                >{{ comentario.comentario }}</b-list-group-item
              >
            </b-list-group>

            <b-card-footer>
              <form v-on:submit.prevent="newComentario">
                <input
                  v-model="comentar"
                  class="mb-3"
                  type="text"
                  placeholder="Comentar"
                  style="
                    border-radius: 5px;
                    border: 1px solid #39c;
                    outline: none;
                  "
                />
                <b-button type="submit" variant="primary">Comentar</b-button>
              </form>
            </b-card-footer>
          </b-card>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  props: ["publicacion"],
  data() {
    return {
      comentarios: [],

      comentar: "",
      contador: 0,
    };
  },
  mounted() {
    this.load();
  },
  methods: {
    newComentario() {
      const params = {
        idPublicacion: this.publicacion.id,
        comentario: this.comentar,
      };
      this.$axios.post("/comentarios", params).then((response) => {
        load;
        this.comentar = "";
        this.incrementa;
      });
    },
    load() {
      this.$axios.get("/comentarios").then((response) => {
        this.comentarios = response.data;
      });
    },
  },
  computed: {
    incrementa: function () {
      this.contador = 0;
      for (let comentario of this.comentarios) {
        if (this.publicacion.id == comentario.idPublicacion) {
          this.contador = this.contador + 1;
        }
      }
      return this.contador;
    },
  },
};
</script>
