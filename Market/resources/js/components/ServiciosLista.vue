<template>
      <div class="servicios">
        
        <div class="half">
          
          <h1>Create servicio</h1>
          
          <form @submit.prevent="createServicio">
            
            <div class="form-group">
   
                  <input type="hidden" v-model="form.id">
            </div>
            <div class="form-group">
                  <label>nombre</label>
                  <input type="text" v-model="form.nombre"  maxlength="191" >
                  <has-error :form="form" field="nombre"></has-error>
            </div>
            <div class="form-group">
                  <label>descripcion</label>
                  <input type="text" v-model="form.descripcion"  maxlength="191" >
                  <has-error :form="form" field="descripcion"></has-error>
            </div>
            <div class="form-group">
                  <label>precio</label>
                  <input type="number" v-model="form.precio">
                  <has-error :form="form" field="precio"></has-error>
            </div>
            <div class="form-group">
                  <label>estado</label>
                  <input type="text" v-model="form.estado"  maxlength="191" >
                  <has-error :form="form" field="estado"></has-error>
            </div>
            <div class="form-group">
                  <label>id_sitio</label>
                  <input type="number" v-model="form.id_sitio">
                  <has-error :form="form" field="id_sitio"></has-error>
            </div>
            <div class="form-group">
                  <label>id_categoria</label>
                  <input type="number" v-model="form.id_categoria">
                  <has-error :form="form" field="id_categoria"></has-error>
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
          
          <h1>List servicios</h1>
          
          <ul v-if="servicios.length > 0">
            <li v-for="(servicio,index) in servicios" :key="servicio.id">
              
            <router-link :to="'/servicio/'+servicio.id">
              
              servicio {{ index }}

              <button @click.prevent="deleteServicio(servicio,index)" type="button" :disabled="form.busy" name="button">{{ (form.busy) ? 'Please wait...' : 'Delete'}}</button>
              
            </router-link>
              
            </li>
          </ul>
          
          <span v-else-if="!servicios">Loading...</span>
          <span v-else>No servicios exist</span>
          
        </div><!-- End 2nd half -->
        
      </div>
</template>

<script>
import { Form, HasError, AlertError } from 'vform'
export default {
  name: 'Servicio',
  components: {HasError},
  data: function(){
    return {
      servicios : false,
      form: new Form({
          "id" : "",
          "nombre" : "",
          "descripcion" : "",
          "precio" : "",
          "estado" : "",
          "id_sitio" : "",
          "id_categoria" : "",
          "created_at" : "",
          "updated_at" : "",
      })
    }
  },
  created: function(){
    this.listServicios();
  },
  methods: {
    listServicios: function(){
      
      var that = this;
      this.form.get('/1730142-TAW-42/Market/public/api/servicios').then(function(response){
        that.servicios = response.data;
      })
      
    },
    createServicio: function(){
      
      var that = this;
      this.form.post('/1730142-TAW-42/Market/public/api/servicios').then(function(response){
        that.servicios.push(response.data);
      })
      
    },
    deleteServicio: function(servicio, index){
      
      var that = this;
      this.form.delete('/1730142-TAW-42/Market/public/api/servicios/'+servicio.id).then(function(response){
        that.servicios.splice(index,1);
      })
      
    }
  }
}
</script>

<style lang="less">
.servicios{
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