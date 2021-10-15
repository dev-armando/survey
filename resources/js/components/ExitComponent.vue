<template>
    
<div class="col-md-4 offset-md-4">
  
  <h3 class="text-white" align="center" style=" margin-left: 30%; max-width: 60%; "  > {{respuesta.name}} </h3>
<div   >
  
    <button v-on:click="goHome( )" class="boton-per2 btn-block"> Realizar Nuevo Diagnostico </button> 
    <br><br><br><br><br><br>
  <button class="btn btn-res2"  style="float: none; width: 40%"  v-on:click="logout" > Cerrar Sessíon  </button> 

</div>
</div>

</template>

<script> 
    export default {
        mounted() {
            console.log('Component mounted.');
           

        }, 
        data () {
                return {
                     respuesta: null
                }
              }, 
              mounted() {

                 this.respuesta = JSON.parse(localStorage.getItem('respuesta')); 
               
                
                 console.log(this.respuesta)

            } ,
        methods: {
                goHome: function () {

                    window.location.href = '#/'
                },

                 logout: function () {

                   document.getElementById('logout-form').submit();
                }
        }
    }
</script>
