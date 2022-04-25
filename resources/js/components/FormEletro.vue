<template>
  <div class="container">
    <form action="" method="post">
      <label for="">Nome</label>
      <input type="text" name="nome" class="form-control">

      <label for="">Descrição</label>
      <textarea name="descricao" cols="30" rows="10" class="form-control"></textarea>

      <label for="">Tensão</label>
      <input type="number" name="tensao" class="form-control">

      <label for="">Marca</label>
      <input type="number" name="marca" class="form-control">

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
        alert('dsada')
      }
  }
}
</script>