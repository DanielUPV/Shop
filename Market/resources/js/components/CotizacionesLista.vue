<template >
      <div class="cotizaciones">
        
        <div class="half">
          
          <h1>Create cotizacione</h1>
          
          <form @submit.prevent="createCotizacione">
            
            <div class="form-group">
   
                  <input type="hidden" v-model="form.id">
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
          
          <h1>List cotizaciones</h1>
          
          <ul v-if="cotizaciones.length > 0">
            <li v-for="(cotizacione,index) in cotizaciones" :key="cotizacione.id">
              
            <router-link :to="'/cotizacione/'+cotizacione.id">
              
              cotizacione {{ index }}

              <button @click.prevent="deleteCotizacione(cotizacione,index)" type="button" :disabled="form.busy" name="button">{{ (form.busy) ? 'Please wait...' : 'Delete'}}</button>
              
            </router-link>
              
            </li>
          </ul>
          
          <span v-else-if="!cotizaciones">Loading...</span>
          <span v-else>No cotizaciones exist</span>
          
        </div><!-- End 2nd half -->
        
      </div>
</template>

<script>
import { Form, HasError, AlertError } from 'vform'
export default {
  name: 'Cotizacione',
  components: {HasError},
  data: function(){
    return {
      cotizaciones : false,
      form: new Form({
          "id" : "",
          "id_sitio" : "",
          "created_at" : "",
          "updated_at" : "",
      })
    }
  },
  created: function(){
    this.listCotizaciones();
  },
  methods: {
    listCotizaciones: function(){
      
      var that = this;
      this.form.get('/1730142-TAW-42/Market/public/api/cotizaciones').then(function(response){
        that.cotizaciones = response.data;
      })
      
    },
    createCotizacione: function(){
      
      var that = this;
      this.form.post('/1730142-TAW-42/Market/public/api/cotizaciones').then(function(response){
        that.cotizaciones.push(response.data);
      })
      
    },
    deleteCotizacione: function(cotizacione, index){
      
      var that = this;
      this.form.delete('/1730142-TAW-42/Market/public/api/cotizaciones/'+cotizacione.id).then(function(response){
        that.cotizaciones.splice(index,1);
      })
      
    }
  }
}
</script>

<style lang="less">
.cotizaciones{
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