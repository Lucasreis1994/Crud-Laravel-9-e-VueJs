<template>
  <div class="container mt-4">
    <a href="cadastro" class="btn btn-info">Cadastro</a>
    <table class="table table-responsive table-striped">
        <thead>
            <tr>
                <th>Nome</th>
                <th>Descrição</th>
                <th>Voltagem</th>
                <th>Marca</th>
            </tr>
        </thead>
        <tbody>
            <tr v-for="(dado, index) in dados" :key="index">
                <td>{{dado.nome}}</td>
                <td>{{dado.descricao}}</td>
                <td>{{dado.tensao}}</td>
                <td>{{dado.marca}}</td>
                <td><button class="btn btn-danger" v-on:click="deletar(dado.id,index)">Deletar</button></td>
            </tr>
        </tbody>
    </table>
  </div>
</template>

<script>
export default {
    data: function() {
        return {
            dados: [],
        }
    },
    methods:{
        deletar:function (id, index){
            axios
            .delete('api/eletros/'+id)
            .then( response => this.dados.splice(index,1) )
            .catch(function (error) {
                console.log(error);
            })
        }
    },
    mounted: function() {
        axios
        .get('api/eletros')
        .then(response => {
            this.dados = response.data.data
        })
        .catch(function (error) {
            console.log(error);
        })
    },
    
}
</script>