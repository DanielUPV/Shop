<template>
      <div class="SitioSingle">
        <h1>Update Sitio</h1>
        
        <form @submit.prevent="updateSitio" v-if="loaded">
          
          <router-link to="/sitios">Back to sitios</router-link>
          
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
                  <label>direccion</label>
                  <input type="text" v-model="form.direccion"  maxlength="191" >
                  <has-error :form="form" field="direccion"></has-error>
            </div>
            <div class="form-group">
                  <label>url</label>
                  <input type="text" v-model="form.url"  maxlength="191" >
                  <has-error :form="form" field="url"></has-error>
            </div>
            <div class="form-group">
                  <label>img</label>
                  <input type="number" v-model="form.img">
                  <has-error :form="form" field="img"></has-error>
            </div>
            <div class="form-group">
                  <label>latitud</label>
                  <input type="text" v-model="form.latitud"  maxlength="191" >
                  <has-error :form="form" field="latitud"></has-error>
            </div>
            <div class="form-group">
                  <label>longitud</label>
                  <input type="text" v-model="form.longitud"  maxlength="191" >
                  <has-error :form="form" field="longitud"></has-error>
            </div>
            <div class="form-group">
   
                  <input type="hidden" v-model="form.created_at">
            </div>
            <div class="form-group">
   
                  <input type="hidden" v-model="form.updated_at">
            </div>
      
          <div class="form-group">
              <button class="button" type="submit" :disabled="form.busy" name="button">{{ (form.busy) ? 'Please wait...' : 'Update'}}</button>
              <button @click.prevent="deleteSitio">{{ (form.busy) ? 'Please wait...' : 'Delete'}}</button>
          </div>
        </form>
        
        <span v-else>Loading sitio...</span>
      </div>
</template>

<script>
import { Form, HasError, AlertError } from 'vform'
export default {
  name: 'Sitio',
  components: {HasError},
  data: function(){
    return {
      loaded: false,
      form: new Form({
          "id" : "",
          "nombre" : "",
          "descripcion" : "",
          "direccion" : "",
          "url" : "",
          "img" : "",
          "latitud" : "",
          "longitud" : "",
          "created_at" : "",
          "updated_at" : "",
        
      })
    }
  },
  created: function(){
    this.getSitio();
  },
  methods: {
    getSitio: function(Sitio){
      
      var that = this;
      this.form.get('/1730142-TAW-42/Market/public/api/sitios/'+this.$route.params.id).then(function(response){
        that.form.fill(response.data);
        that.loaded = true;
      }).catch(function(e){
          if (e.response && e.response.status == 404) {
              that.$router.push('/404');
          }
      });
      
    },
    updateSitio: function(){
      
      var that = this;
      this.form.put('/1730142-TAW-42/Market/public/api/sitios/'+this.$route.params.id).then(function(response){
        that.form.fill(response.data);
      })
      
    },
    deleteSitio: function(){
      
      var that = this;
      this.form.delete('/1730142-TAW-42/Market/public/api/sitios/'+this.$route.params.id).then(function(response){
        that.form.fill(response.data);
        that.$router.push('/sitios');
      })
      
    }
  }
}
</script>

<style lang="less">
.SitioSingle{
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