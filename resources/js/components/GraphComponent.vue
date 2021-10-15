<template>
    <div class="row">
<div class="col-md-4 offset-md-4">
  <br><br>
 <button v-on:click="goGraph" class="boton-per2 "  style="width: 100% "> Curva de Supervivencia </button> 
 

  <div class="fondo-per" >
   
    <graph-line
            :width="360"
            :height="400"
            :shape="'normal'"
            :axis-min="0"
            :axis-max="100"
            :axis-full-mode="true"
            :labels="[ '1', '2', '3', '4' , '5' ]"
            :colors="[ 'green', 'red', 'blue', 'yellow' , 'pink' ]"
           
            :values="values">
        <note :text="'Porcentaje de Vida'"></note>
         <tooltip :names="names" :position="'right'"></tooltip>
        <legends :names="names"></legends>
        <guideline :tooltip-y="true"></guideline>
     
       
    </graph-line>

   
      

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
                  tabla: [] , 
                        names: [ 'Estadio 1', 'Estadio 2', 'Estadio 3' , 'Estadio 4' ],
        values: []
        
                 
                }
              }, 
              mounted() {
 
       

                this.respuesta = JSON.parse(localStorage.getItem('respuesta')); 
              

                if(this.respuesta.id == '1')
                  this.values = [
                    [ 100, 98.3, 95.7, 91.6, 89.6  ],
                    [ 99.4, 94.2, 89.9, 83.5, 83.5  ],
                    [ 85.5, 72.3, 63.3, 61.2, 64.6  ],
                    [ 74.6, 61.3, 55.8, 57.6, 47.2  ]
                 ];
                 else if(this.respuesta.id == '2')
                  this.values = [
                    [ 98.3, 93.5, 90.4, 87.6, 87.6 ],
                    [ 91.3, 92.2, 75.8, 70.8, 66.0  ],
                    [ 84.1, 71.0, 62.6, 57.2, 52.1  ],
                    [ 73.1, 53.8, 45.9, 39.5, 35.5  ]
                 ];
                  else if(this.respuesta.id == '3')
                  this.values = [
                    [ 98.3, 93.5, 90.4, 87.6, 87.6 ],
                    [ 91.3, 92.2, 75.8, 70.8, 66.0  ],
                    [ 84.1, 71.0, 62.6, 57.2, 52.1  ],
                    [ 73.1, 53.8, 45.9, 39.5, 35.5  ]
                 ];
                  else if(this.respuesta.id == '4')
                  this.values = [
                    [ 99.7, 96.6, 94.4, 92.6, 89.8 ],
                    [ 93.1, 86.7, 81.6, 76.8, 74.0  ],
                    [ 85.1, 73.0, 64.0, 59.7, 55.7  ],
                    [ 75.2, 57.9, 50.2, 47.1, 44.4  ]
                 ];
      
                
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
