<template>
      <div class="categorias">
        
        <div class="half">
          
          <h1>Create categoria</h1>
          
          <form @submit.prevent="createCategoria">
            
            <div class="form-group">
   
                  <input type="hidden" v-model="form.id">
            </div>
            <div class="form-group">
                  <label>nombre</label>
                  <input type="text" v-model="form.nombre"  maxlength="191">
                  <has-error :form="form" field="nombre"></has-error>
            </div>
            <div class="form-group">
                  <label>id_sitio</label>
                  <input type="number" v-model="form.id_sitio">
                  <has-error :form="form" field="id_sitio"></has-error>
            </div>
            <div class="form-group">
   
                  <input type="hidden" v-model="form.created_at">
            </div>
            <div class="form-group">
   
                  <input type="hidden" v-model="form.updated_at">
            </div>
        
            <div class="form-group">
                <button class="button" type="submit" :disabled="form.busy" name="button">{{ (form.busy) ? 'Please wait...' : 'Submit'}}</button>
            </div>
          </form>
          
        </div><!-- End first half -->
        
        <div class="half">
          
          <h1>List categorias</h1>
          
          <ul v-if="categorias.length > 0">
            <li v-for="(categoria,index) in categorias" :key="categoria.id">
              
            <router-link :to="'/categoria/'+categoria.id">
              
              categoria {{ index }}

              <button @click.prevent="deleteCategoria(categoria,index)" type="button" :disabled="form.busy" name="button">{{ (form.busy) ? 'Please wait...' : 'Delete'}}</button>
              
            </router-link>
              
            </li>
          </ul>
          
          <span v-else-if="!categorias">Loading...</span>
          <span v-else>No categorias exist</span>
          
        </div><!-- End 2nd half -->
        
      </div>
</template>

<script>
import { Form, HasError, AlertError } from 'vform'
export default {
  name: 'Categoria',
  components: {HasError},
  data: function(){
    return {
      categorias : false,
      form: new Form({
          "id" : "",
          "nombre" : "",
          "id_sitio" : "",
          "created_at" : "",
          "updated_at" : "",
      })
    }
  },
  created: function(){
    this.listCategorias();
  },
  methods: {
    listCategorias: function(){
      
      var that = this;
      this.form.get('/1730142-TAW-42/Market/public/api/categorias').then(function(response){
        that.categorias = response.data;
      })
      
    },
    createCategoria: function(){
      
      var that = this;
      this.form.post('/1730142-TAW-42/Market/public/api/categorias').then(function(response){
        that.categorias.push(response.data);
      })
      
    },
    deleteCategoria: function(categoria, index){
      
      var that = this;
      this.form.delete('/1730142-TAW-42/Market/public/api/categorias/'+categoria.id).then(function(response){
        that.categorias.splice(index,1);
      })
      
    }
  }
}
</script>

<style lang="less">
.categorias{
    margin:0 auto;
    width:700px;
    display:flex;
    .half{
      flex:1;
      &:first-of-type{
        margin-right:20px;
      }
    }
    form{
      .form-group{
        margin-bottom:20px;
        label{
          display:block;
          margin-bottom:5px;
          text-transform: capitalize;
        }
        input[type="text"],input[type="number"],textarea{
          width:100%;
          max-width:100%;
          min-width:100%;
          padding:10px;
          border-radius:3px;
          border:1px solid silver;
          font-size:1rem;
          &:focus{
            outline:0;
            border-color:blue;
          }
        }
        .invalid-feedback{
          color:red;
          &::first-letter{
            text-transform:capitalize;
          }
        }
      }
      .button{
        appearance: none;
        background: #3bdfd9;
        font-size: 1rem;
        border: 0px;
        padding: 10px 20px;
        border-radius: 3px;
        font-weight: bold;
        &:hover{
          cursor:pointer;
          background: darken(#3bdfd9,10);
        }
      }
    }
}
</style>