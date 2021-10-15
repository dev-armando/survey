<template>
    <div class="row">
<div class="col-md-4 offset-md-4">
  <br><br>
  <h3 class="text-white" align="center" style=" margin-left: 30%; max-width: 60%; "  > {{respuesta.name}} </h3>
 

  <div class="fondo-per" >
   
 
      <div class="text-center text-blue"  >
        <h3>Resultado</h3>
      </div>

    <div class="text-left text-blue"  >
        <h4>Tipo de Estadio: </h4>
          <p class="text-justify text-center"> <span v-for="eT in respuestaT" class="text-blue">  {{eT}} </span>
          <span v-for="eN in respuestaN" class="text-blue">  {{eN}} </span>
          <span v-for="eM in respuestaM" class="text-blue">  {{eM}} </span>  , Estadio {{tabla.estadio}}  </p>
      </div>

       <div class="text-left text-blue"  >
        <h4>Tratamiento: </h4>
          <p class="text-justify text-center">
           {{tabla.tratamiento}}  </p>
      </div>

   
      
    </dir>
    <div class="text-center">

      <button v-on:click="goGraph" class="boton-per2 "> Curva de Supervivencia </button> 
    <button class="btn btn-res2"  v-on:click="nextM" > >  </button> 
</div>
</div>

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
                  respuesta: null, 
                  preguntas: null, 
                  respuestaT: [] , 
                  respuestaM: [] , 
                  respuestaN: [] , 
                  tabla: [] 
                 
                }
              }, 
              mounted() {
 
       

                this.respuesta = JSON.parse(localStorage.getItem('respuesta')); 
                
                let texto = "(nasofaringe,orofaringe e hipofaringe)"
                this.respuesta.name = this.respuesta.name.replace(texto , "")

                this.preguntas = JSON.parse(localStorage.getItem("preguntas"))              
                
                this.respuestaT = JSON.parse(localStorage.getItem("respuestaT"))              
                this.respuestaM = JSON.parse(localStorage.getItem("respuestaM"))              
                this.respuestaN = JSON.parse(localStorage.getItem("respuestaN"))              

                this.preguntas = this.preguntas.filter( (e ) => {
             
                    if (e.id == 'M' && e.subcategories_id== this.respuestaT.id )
                      return e; 
                })

                this.tabla  = JSON.parse(localStorage.getItem("tablaResultado"))[0]
               

                
             

                
            } ,
        methods: {
                goGraph: function( ) {
                  
                 
                    window.location.href = '#/graph'
                } , 


                  nextM: function ( ) {

                  
                     window.location.href = '#/exit'
                }
        }
    }
</script>
