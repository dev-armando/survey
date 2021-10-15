<template>
    <div class="row">
<div class="col-md-4 offset-md-4">
  <br><br>
  <h3 class="text-white" align="center" style=" margin-left: 30%; max-width: 60%; "  > {{respuesta.name}} </h3>
 

  <div class="fondo-per" >
   
 
      <div class="text-center text-blue"  >
        <span style="font-size: 40px;">T</span>abla de Combinaciónes:
      </div>

      <table class="table" >
        <tr class="text-blue">
          <td>T</td>
          <td>N</td>
          <td>M</td>
          <td>Estadio</td>
        </tr>

        <tr >
          <td><span v-for="eT in respuestaT" class="text-blue">  {{eT}} </span></td>
          <td><span v-for="eN in respuestaN" class="text-blue">  {{eN}} </span></td>
          <td><span v-for="eM in respuestaM" class="text-blue">  {{eM}} </span></td>
          
          <td class="text-blue" >  {{tabla.estadio}} </td>
        </tr>

        
      </table>
 
   
      
    </dir>
    <div class="text-center">
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


                 let params = { 
                  respuestaT : this.respuestaT ,  
                  respuestaN : this.respuestaN ,  
                  respuestaM : this.respuestaM ,
                  subcategories_id : this.respuesta.id 
                  }; 

                 axios.post('/v/get/result' , params ).then(response =>  {
                    localStorage.setItem('tablaResultado', JSON.stringify(response.data))
                    this.tabla = response.data[0]; 

                    console.log(this.tabla)

                  
                  });

                
             

                
            } ,
        methods: {
                changeRequest: function (x , event ) {
                  
                  let validar = true 
                    
                  for (var i = this.respuestaT.length - 1; i >= 0; i--) {
                   
                     if(this.respuestaT[i] == x ) 
                        validar = false 
                  }

                  if(validar)
                    this.respuestaT.push(x)
                    else
                    this.respuestaT.pop(x)  

                
                } , 


                  nextM: function ( ) {

                  
                     window.location.href = '#/res'
                }
        }
    }
</script>
