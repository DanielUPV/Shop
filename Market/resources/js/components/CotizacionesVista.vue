<template>
      <div class="CotizacioneSingle">
        <h1>Update Cotizacione</h1>
        
        <form @submit.prevent="updateCotizacione" v-if="loaded">
          
          <router-link to="/cotizaciones">Back to cotizaciones</router-link>
          
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
              <button class="button" type="submit" :disabled="form.busy" name="button">{{ (form.busy) ? 'Please wait...' : 'Update'}}</button>
              <button @click.prevent="deleteCotizacione">{{ (form.busy) ? 'Please wait...' : 'Delete'}}</button>
          </div>
        </form>
        
        <span v-else>Loading cotizacione...</span>
      </div>
</template>

<script>
import { Form, HasError, AlertError } from 'vform'
export default {
  name: 'Cotizacione',
  components: {HasError},
  data: function(){
    return {
      loaded: false,
      form: new Form({
          "id" : "",
          "id_sitio" : "",
          "created_at" : "",
          "updated_at" : "",
        
      })
    }
  },
  created: function(){
    this.getCotizacione();
  },
  methods: {
    getCotizacione: function(Cotizacione){
      
      var that = this;
      this.form.get('/1730142-TAW-42/Market/public/api/cotizaciones/'+this.$route.params.id).then(function(response){
        that.form.fill(response.data);
        that.loaded = true;
      }).catch(function(e){
          if (e.response && e.response.status == 404) {
              that.$router.push('/404');
          }
      });
      
    },
    updateCotizacione: function(){
      
      var that = this;
      this.form.put('/1730142-TAW-42/Market/public/api/cotizaciones/'+this.$route.params.id).then(function(response){
        that.form.fill(response.data);
      })
      
    },
    deleteCotizacione: function(){
      
      var that = this;
      this.form.delete('/1730142-TAW-42/Market/public/api/cotizaciones/'+this.$route.params.id).then(function(response){
        that.form.fill(response.data);
        that.$router.push('/cotizaciones');
      })
      
    }
  }
}
</script>

<style lang="less">
.CotizacioneSingle{
  margin:0 auto;
  width:700px;
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
      .invalid-feedback{
        color:red;
        &::first-letter{
          text-transform:capitalize;
        }
      }
    }
  }
}
</style>