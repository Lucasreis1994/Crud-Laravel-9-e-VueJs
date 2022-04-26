<template>
  <div class="container">
    <a href="/" class="btn btn-info">Voltar a Lista</a>
    <form method="post" @submit="checkForm">
      
      <div v-if="errors">
        <ul class="alert alert-danger">
            <li v-for="(value, key, index) in errors">{{ value }}</li>
        </ul>
      </div>

      <label for="">Nome</label>
      <input type="text" name="nome" v-model="nome" class="form-control">

      <label for="">Descrição</label>
      <textarea name="descricao" v-model="descricao" cols="30" rows="10" class="form-control"></textarea>

      <label for="">Tensão</label>
      <input type="number" name="tensao" v-model="tensao" class="form-control">

      <label for="">Marca</label>
      <input type="text" name="marca" v-model="marca" class="form-control">

      <button type="button" class="btn btn-info mt-3 float-end" v-on:click="add">
        Salvar
      </button>
    </form>
  </div>
</template>

<script>
export default {
  methods: {
    add: function() {

      const eletro = { nome: this.nome, descricao: this.descricao, tensao: this.tensao, marca: this.marca };
      axios.post("api/eletros", eletro)
      .then(response => {
        alert('cadastro efetuado com sucesso')
        this.errors = null
      }
      )
      .catch(error => {
        if (error.response.status == 422){
          this.errors = error.response.data.errors;
        }
      });

    }
  },
  data: function() {
    return {
      errors: null,
      nome: null,
      descricao: null,
      tensao: null,
      marca: null,
    }
  }
}
</script>