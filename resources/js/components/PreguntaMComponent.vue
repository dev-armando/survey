<template>
    <div class="row">
<div class="col-md-4 offset-md-4">
  <br><br>
  <h3 class="text-white" align="center" style=" margin-left: 30%; max-width: 60%; "  > {{respuesta.name}} </h3>
 

  <div class="fondo-per" >
   
 
      <div class="text-center text-blue"  >
        <span style="font-size: 40px; color: #8481b6">T</span>  
        
     
        <span style="font-size: 40px; color: #8481b6"> <b style="padding: 0"> N </b> </span>  
      
        <span style="font-size: 40px;"> <b style="padding: 0">M</b>etasìs</span>  
      </div>
 


     <div   v-for="pregunta in preguntas"  >

        <div class="col-md-12   text-justify text-blue"  style="font-size: 10px">
          <div class="btn btn-res"> 
         
            <input type="radio" name="nck" v-on:change="changeRequest(pregunta.value)"   >
            </div> 
             {{pregunta.value}}: 
             {{pregunta.des}} 
         </div>

         <br>

      
     

    </div>
   
      
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
                  respuestaT: [] 

                 
                }
              }, 
              mounted() {

                if(!localStorage.categorias){
                     axios.get('/v/get/categories').then(response =>  {
                      localStorage.setItem('categorias', JSON.stringify(response.data));
                    })

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


                this.respuesta = JSON.parse(localStorage.getItem('respuesta')); 
                
                let texto = "(nasofaringe,orofaringe e hipofaringe)"
                this.respuesta.name = this.respuesta.name.replace(texto , "")

                this.preguntas = JSON.parse(localStorage.getItem("preguntas") )

             

                this.preguntas = this.preguntas.filter( (e ) => {
             
                    if (e.type == 'M' && e.subcategories_id== this.respuesta.id )
                      return e; 
                })

             

                
            } ,
        methods: {
                changeRequest: function (x  ) {
                  
                
                    this.respuestaT = x
                
                } , 


                  nextM: function ( ) {

                    let respuestaT =  JSON.stringify(this.respuestaT)
                  
                     localStorage.setItem('respuestaM', respuestaT ) ; 
                     window.location.href = '#/rt'
                }
        }
    }
</script>
