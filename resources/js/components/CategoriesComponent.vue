<template>
    
<div class="col-md-4 offset-md-4">
  
  <h3 class="text-white"> SELECCIONE </h3>

   <h3 class="text-white" > EL TIPO DE CÁNCER </h3>
<div   v-for="categoria in categorias" >
  
    <button v-on:click="nextPregunta( JSON.stringify(categoria) )" class="boton-per2 btn-block">{{categoria.name}} </button> 
 

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
                  categorias: null
                }
              }, 
              mounted() {

                localStorage.clear()

                if(!localStorage.categorias){
                     
                     axios.get('/v/get/categories').then(response =>  {
                      
                      localStorage.setItem('categorias', JSON.stringify(response.data));

                      this.categorias = response.data; 
                    })

                }else{

                   this.categorias =  JSON.parse(localStorage.getItem('categorias') ) ;

                }

                 if(!localStorage.subcategorias){
                     
                     axios.get('/v/get/subcategories').then(response =>  {
                      localStorage.setItem('subcategorias', JSON.stringify(response.data));
                    })

                }

                 if(!localStorage.questions){
                     
                     axios.get('/v/get/questions').then(response =>  {
                    localStorage.setItem('preguntas', JSON.stringify(response.data));
                  })

                }
                


            } ,
        methods: {
                nextPregunta: function (categoria) {

                    localStorage.setItem('respuesta', categoria ) ; 
                    window.location.href = '#/pt'
                }
        }
    }
</script>
