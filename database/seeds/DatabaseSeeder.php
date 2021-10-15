<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
      	DB::table('users')->insert([
            [  'id' => '1', 'name' => 'ArmandoRojas' , 'email' => 'armando.develop@gmail.com' , 'password' => bcrypt('control1234') ],
        ]);

        $i = 2;

        $this->resultado();
        $this->categoria();
        $this->question1();
        $this->question2($i++);
        $this->question3($i++);
        $this->question4($i++);
        $this->question5($i++);

        $i = 2;

        $this->resultado2($i++);
        $this->resultado2($i++);
    }

  function categoria(){
     DB::table('categories')->insert([
            [  'id' => '1', 'name' => 'Cancer Labio y Cavidad Oral'],
            [  'id' => '2', 'name' => 'Cancer Orofaringe P16 Negativa'],
            [  'id' => '3', 'name' => 'Cáncer Hipofaringe'],
            [  'id' => '4', 'name' => 'Cáncer Laringe: Supraglotis'],
            [  'id' => '5', 'name' => 'Cáncer Laringe: Glotis'],
            [  'id' => '6', 'name' => 'Cáncer de tiroides'],
        ]);
  }

  function question5($i = 0){

      $k = $i;
      $i*= 20;


     DB::table('questions')->insert([

             [ 'id' => $i++,
                'subcategories_id'  => $k ,
                'value' => 'T1',
                'type' => 'T',
                'des' => ' Tumor limitado a una zona de la supraglotis con movilidad normal de la cuerda vocal',
              ],
             [ 'id' => $i++,
                'subcategories_id'  => $k ,
                'value' => 'T1a',
                'type' => 'T',
                'des' => 'Tumor limitado a una cuerda vocal',
              ],

                [ 'id' => $i++,
                'subcategories_id'  => $k ,
                'value' => 'T1b',
                'type' => 'T',
                'des' => 'Tumor afecta ambas cuerdas vocales',
              ],

               [ 'id' =>  $i++,
                'subcategories_id'  => $k ,
                'value' => 'T2',
                'type' => 'T',
                'des' => '  Tumor se extiende a supraglotis y/o subglotis, y/o afecta a la movilidad de las cuerdas vocales',
              ],


               [ 'id' =>  $i++,
                'subcategories_id'  => $k  ,
                'value' => 'T3',
                'type' => 'T',
                'des' => 'Tumor limitado a la laringe con fijación de cuerda vocal y/o invade espacio paraglótico, y/o cara interna del cartílago tiroides',
              ],

              [ 'id' =>  $i++,
                'subcategories_id'  => $k  ,
                'value' => 'T4a',
                'type' => 'T',
                'des' => 'Tumor invade la cara externa del cartílago tiroides y/o afecta tejidos más allá de la laringe',
              ],

              [ 'id' =>  $i++,
                'subcategories_id'  => $k  ,
                'value' => 'T4b',
                'type' => 'T',
                'des' => 'Tumor invade el espacio preverteral, engloba la arteria carótida o estructuras mediastínicas',
              ] ,

              [ 'id' =>  $i++,
                'subcategories_id'  => $k  ,
                'value' => 'NX',
                'type' => 'N',
                'des' => 'Ganglios regionales no puede ser evaluados',
              ],

              [ 'id' =>  $i++,
                'subcategories_id'  => $k  ,
                'value' => 'N0',
                'type' => 'N',
                'des' => 'No afectación ganglionar regional',
              ],

              ['id' =>  $i++,
                'subcategories_id'  => $k  ,
                'value' => 'N1',
                'type' => 'N',
                'des' => 'Metástasis unilateral, en uno o más ganglios linfáticos, todos de 6 cms o menos en su dimensión mayor',
              ],

              ['id' =>  $i++,
                'subcategories_id'  => $k  ,
                'value' => 'N2',
                'type' => 'N',
                'des' => 'Metástasis en ganglios linfáticos bilaterales o contralaterales, todos de 6 cms o menos en su dimensión mayor',
              ],

              ['id' =>  $i++,
                'subcategories_id'  => $k  ,
                'value' => 'N3',
                'type' => 'N',
                'des' => 'metástasis en ganglio(s) linfático(s) con dimensión mayor de 6cms',
              ]
              ,

              [ 'id' =>  $i++,
                'subcategories_id'  => $k  ,
                'value' => 'Mx',
                'type' => 'M',
                'des' => 'no evaluada la presencia de metástasis a distancia',
              ],

              [ 'id' =>  $i++,
                'subcategories_id'  => $k  ,
                'value' => 'M0',
                'type' => 'M',
                'des' => 'No metástasis a distancia',
              ],

              ['id' =>  $i++,
                'subcategories_id'  => $k  ,
                'value' => 'M1',
                'type' => 'M',
                'des' => 'Metástasis a distancia',
              ]



            ]);
  }


    function question4($i = 0){

      $k = $i;
      $i*= 20;


     DB::table('questions')->insert([

             [ 'id' => $i++,
                'subcategories_id'  => $k ,
                'value' => 'T1',
                'type' => 'T',
                'des' => ' Tumor limitado a una zona de la supraglotis con movilidad normal de la cuerda vocal',
              ],

               [ 'id' =>  $i++,
                'subcategories_id'  => $k ,
                'value' => 'T2',
                'type' => 'T',
                'des' => ' Tumor invade mucosa o más de una zona adyacente de la supraglotis o glotis o región fuera de la supraglotis sin fijación de la laringe',
              ],


               [ 'id' =>  $i++,
                'subcategories_id'  => $k  ,
                'value' => 'T3',
                'type' => 'T',
                'des' => 'Tumor limitado a la laringe con fijación de la cuerda vocal y/o invade alguna de las estructuras siguientes: área postcricoidea, espacio preepiglótico, espacio paraglótico y/o cara interna del cartílago tiroides',
              ],

              [ 'id' =>  $i++,
                'subcategories_id'  => $k  ,
                'value' => 'T4a',
                'type' => 'T',
                'des' => 'Tumor invade el cartílago tiroides y/o invade tejidos más allá de la laringe',
              ],

              [ 'id' =>  $i++,
                'subcategories_id'  => $k  ,
                'value' => 'T4b',
                'type' => 'T',
                'des' => 'Tumor invade el espacio prevertebral, engloba la arteria carótida, o estructuras mediastínicas',
              ] ,

              [ 'id' =>  $i++,
                'subcategories_id'  => $k  ,
                'value' => 'NX',
                'type' => 'N',
                'des' => 'Ganglios regionales no puede ser evaluados',
              ],

              [ 'id' =>  $i++,
                'subcategories_id'  => $k  ,
                'value' => 'N0',
                'type' => 'N',
                'des' => 'No afectación ganglionar regional',
              ],

              ['id' =>  $i++,
                'subcategories_id'  => $k  ,
                'value' => 'N1',
                'type' => 'N',
                'des' => 'Metástasis unilateral, en uno o más ganglios linfáticos, todos de 6 cms o menos en su dimensión mayor',
              ],

              ['id' =>  $i++,
                'subcategories_id'  => $k  ,
                'value' => 'N2',
                'type' => 'N',
                'des' => 'Metástasis en ganglios linfáticos bilaterales o contralaterales, todos de 6 cms o menos en su dimensión mayor',
              ],

              ['id' =>  $i++,
                'subcategories_id'  => $k  ,
                'value' => 'N3',
                'type' => 'N',
                'des' => 'metástasis en ganglio(s) linfático(s) con dimensión mayor de 6cms',
              ]
              ,

              [ 'id' =>  $i++,
                'subcategories_id'  => $k  ,
                'value' => 'Mx',
                'type' => 'M',
                'des' => 'no evaluada la presencia de metástasis a distancia',
              ],

              [ 'id' =>  $i++,
                'subcategories_id'  => $k  ,
                'value' => 'M0',
                'type' => 'M',
                'des' => 'No metástasis a distancia',
              ],

              ['id' =>  $i++,
                'subcategories_id'  => $k  ,
                'value' => 'M1',
                'type' => 'M',
                'des' => 'Metástasis a distancia',
              ]



            ]);
  }

  function question3($i = 0){

      $k = $i;
      $i*= 20;


     DB::table('questions')->insert([

             [ 'id' => $i++,
                'subcategories_id'  => $k ,
                'value' => 'T1',
                'type' => 'T',
                'des' => ' Tumor limitado a una zona de la hipofaringe y/o menor o igual a 2
cms en su dimensión mayor',
              ],

               [ 'id' =>  $i++,
                'subcategories_id'  => $k ,
                'value' => 'T2',
                'type' => 'T',
                'des' => ' Tumor invade más de una zona de la hipofaringe o un sitio
adyacente, o mide más de 2 cms pero no más de 4 cms en su
dimensión mayor, sin fijación de la hemilaringe',
              ],


               [ 'id' =>  $i++,
                'subcategories_id'  => $k  ,
                'value' => 'T3',
                'type' => 'T',
                'des' => 'Tumor mayor de 4 cms en su dimensión mayor o con fijación de la
hemilaringe o extensión a esófago',
              ],

              [ 'id' =>  $i++,
                'subcategories_id'  => $k  ,
                'value' => 'T4a',
                'type' => 'T',
                'des' => 'Tumor invade cualquiera de las estructuras siguientes: cartílago
tiroides/cricoides, hueso hioides, tiroides, esófago, compartimento
central de partes blandas',
              ],

              [ 'id' =>  $i++,
                'subcategories_id'  => $k  ,
                'value' => 'T4b',
                'type' => 'T',
                'des' => 'Tumor invade la fascia prevertebral, engloba la arteria carótida,
o invade estructuras mediastínicas',
              ] ,

              [ 'id' =>  $i++,
                'subcategories_id'  => $k  ,
                'value' => 'NX',
                'type' => 'N',
                'des' => 'Ganglios regionales no puede ser evaluados',
              ],

              [ 'id' =>  $i++,
                'subcategories_id'  => $k  ,
                'value' => 'N0',
                'type' => 'N',
                'des' => 'No afectación ganglionar regional',
              ],

              ['id' =>  $i++,
                'subcategories_id'  => $k  ,
                'value' => 'N1',
                'type' => 'N',
                'des' => 'Metástasis unilateral, en uno o más ganglios linfáticos, todos de 6 cms o menos en su dimensión mayor',
              ],

              ['id' =>  $i++,
                'subcategories_id'  => $k  ,
                'value' => 'N2',
                'type' => 'N',
                'des' => 'Metástasis en ganglios linfáticos bilaterales o contralaterales, todos de 6 cms o menos en su dimensión mayor',
              ],

              ['id' =>  $i++,
                'subcategories_id'  => $k  ,
                'value' => 'N3',
                'type' => 'N',
                'des' => 'metástasis en ganglio(s) linfático(s) con dimensión mayor de 6cms',
              ]
              ,

              [ 'id' =>  $i++,
                'subcategories_id'  => $k  ,
                'value' => 'Mx',
                'type' => 'M',
                'des' => 'no evaluada la presencia de metástasis a distancia',
              ],

              [ 'id' =>  $i++,
                'subcategories_id'  => $k  ,
                'value' => 'M0',
                'type' => 'M',
                'des' => 'No metástasis a distancia',
              ],

              ['id' =>  $i++,
                'subcategories_id'  => $k  ,
                'value' => 'M1',
                'type' => 'M',
                'des' => 'Metástasis a distancia',
              ]



            ]);
  }


    function question2($i = 0){

      $k = $i;
      $i*= 20;


     DB::table('questions')->insert([

             [ 'id' => $i++,
                'subcategories_id'  => $k ,
                'value' => 'T1',
                'type' => 'T',
                'des' => 'tumor igual o menor de 2 cms en su dimensión mayor ',
              ],

               [ 'id' =>  $i++,
                'subcategories_id'  => $k ,
                'value' => 'T2',
                'type' => 'T',
                'des' => ' Tumor mayor de 2 cms pero no mayor de 4 cms en su dimensión mayor',
              ],


               [ 'id' =>  $i++,
                'subcategories_id'  => $k  ,
                'value' => 'T3',
                'type' => 'T',
                'des' => 'Tumor mayor de 4 cms en su dimensión mayor con extensión a la
                superficie lingual de epiglotis',
              ],

              [ 'id' =>  $i++,
                'subcategories_id'  => $k  ,
                'value' => 'T4a',
                'type' => 'T',
                'des' => 'Tumor invade cualquiera de las estructuras siguientes: laringe,
músculo profundo o extrínseco, lengua, pterigoides medial, paladar
duro o mandíbula',
              ],

              [ 'id' =>  $i++,
                'subcategories_id'  => $k  ,
                'value' => 'T4b',
                'type' => 'T',
                'des' => 'Tumor invade cualquiera de las estructuras siguientes: laringe,
músculo profundo o extrínseco, lengua, pterigoides medial, paladar
duro o mandíbula',
              ] ,

              [ 'id' =>  $i++,
                'subcategories_id'  => $k  ,
                'value' => 'NX',
                'type' => 'N',
                'des' => 'Ganglios regionales no puede ser evaluados',
              ],

              [ 'id' =>  $i++,
                'subcategories_id'  => $k  ,
                'value' => 'N0',
                'type' => 'N',
                'des' => 'No afectación ganglionar regional',
              ],

              ['id' =>  $i++,
                'subcategories_id'  => $k  ,
                'value' => 'N1',
                'type' => 'N',
                'des' => 'Metástasis unilateral, en uno o más ganglios linfáticos, todos de 6 cms o menos en su dimensión mayor',
              ],

              ['id' =>  $i++,
                'subcategories_id'  => $k  ,
                'value' => 'N2',
                'type' => 'N',
                'des' => 'Metástasis en ganglios linfáticos bilaterales o contralaterales, todos de 6 cms o menos en su dimensión mayor',
              ],

              ['id' =>  $i++,
                'subcategories_id'  => $k  ,
                'value' => 'N3',
                'type' => 'N',
                'des' => 'metástasis en ganglio(s) linfático(s) con dimensión mayor de 6cms',
              ]
              ,

              [ 'id' =>  $i++,
                'subcategories_id'  => $k  ,
                'value' => 'Mx',
                'type' => 'M',
                'des' => 'no evaluada la presencia de metástasis a distancia',
              ],

              [ 'id' =>  $i++,
                'subcategories_id'  => $k  ,
                'value' => 'M0',
                'type' => 'M',
                'des' => 'No metástasis a distancia',
              ],

              ['id' =>  $i++,
                'subcategories_id'  => $k  ,
                'value' => 'M1',
                'type' => 'M',
                'des' => 'Metástasis a distancia',
              ]



            ]);
  }


  function question1(){
     DB::table('questions')->insert([

             [ 'id' => '1',
                'subcategories_id'  => '1' ,
                'value' => 'T1',
                'type' => 'T',
                'des' => 'tumor igual o menor de 2 cms en su dimensión mayor y 5 mm o menos de profundidad de invasión',
              ],

               [ 'id' => '2',
                'subcategories_id'  => '1' ,
                'value' => 'T2',
                'type' => 'T',
                'des' => ' tumor igual o menor de 2 cms en su dimensión mayor y mayor de 5 mm pero no más de 10 mm de profundidad de invasión o tumor mayor de 2 cms pero no más de 4 cms en la dimensión mayor y la profundidad de invasión no mayor de 10 mm.',
              ],


               [ 'id' => '3',
                'subcategories_id'  => '1' ,
                'value' => 'T3',
                'type' => 'T',
                'des' => 'Tumor mayor de 4 cms en la dimensión mayor o más de 10 mm en la invasión en profundidad.',
              ],

              [ 'id' => '4',
                'subcategories_id'  => '1' ,
                'value' => 'T4a',
                'type' => 'T',
                'des' => '(cavidad oral) Tumor invade la cortical ósea, nervio alveolar inferior, suelo de boca o piel',
              ],

              [ 'id' => '5',
                'subcategories_id'  => '1' ,
                'value' => 'T4a',
                'type' => 'T',
                'des' => ' (labio)  Tumor invade el espacio masticador, láminas pterigoideas, o la base del cráneo o engloba la arteria carótida interna',
              ] ,

              [ 'id' => '6',
                'subcategories_id'  => '1' ,
                'value' => 'NX',
                'type' => 'N',
                'des' => 'Ganglios regionales no puede ser evaluados',
              ],

              [ 'id' => '7',
                'subcategories_id'  => '1' ,
                'value' => 'N0',
                'type' => 'N',
                'des' => 'No afectación ganglionar regional',
              ],

              [ 'id' => '8',
                'subcategories_id'  => '1' ,
                'value' => 'N1',
                'type' => 'N',
                'des' => 'Metástasis unilateral, en uno o más ganglios linfáticos, todos de 6 cms o menos en su dimensión mayor',
              ],

              [ 'id' => '9',
                'subcategories_id'  => '1' ,
                'value' => 'N2',
                'type' => 'N',
                'des' => 'Metástasis en ganglios linfáticos bilaterales o contralaterales, todos de 6 cms o menos en su dimensión mayor',
              ],

              [ 'id' => '10',
                'subcategories_id'  => '1' ,
                'value' => 'N3',
                'type' => 'N',
                'des' => 'metástasis en ganglio(s) linfático(s) con dimensión mayor de 6cms',
              ]
              ,

              [ 'id' => '11',
                'subcategories_id'  => '1' ,
                'value' => 'Mx',
                'type' => 'M',
                'des' => 'no evaluada la presencia de metástasis a distancia',
              ],

              [ 'id' => '12',
                'subcategories_id'  => '1' ,
                'value' => 'M0',
                'type' => 'M',
                'des' => 'No metástasis a distancia',
              ],

              [ 'id' => '13',
                'subcategories_id'  => '1' ,
                'value' => 'M1',
                'type' => 'M',
                'des' => 'Metástasis a distancia',
              ]
              ,

              [ 'id' => '14',
                'subcategories_id'  => '1' ,
                'value' => 'T4b',
                'type' => 'T',
                'des' => 'Tumor invade el espacio masticador, láminas pterigoideas, o la base del cráneo o engloba la arteria carótida interna',
              ]


            ]);
  }

  function resultadoIVC($i , $k){

       DB::table('result')->insert([
              [ 'id' => $i,
                'subcategories_id'  => $k ,
                'estadio' =>  'IVC' ,
                'tratamiento' => 'Tratamiento  sistémico / Tto de soporte',
                 'm1'   => '1'  ,
                 't1'   => '1'  ,
                 't2'   => '1'  ,
                 't3'   => '1'  ,
                 't4a'   => '1'  ,
                 't4b'   => '1'  ,
                 't4'   => '1'  ,
                 'nx'   => '1'  ,
                 'n0'   => '1'  ,
                 'n1'   => '1'  ,
                 'n2'   => '1'  ,
                 'n3'   => '1'  ,
              ]] );


  }

   function resultadoIVB($i , $k){

     DB::table('result')->insert([

              [ 'id' => $i++,
                'subcategories_id'  => $k ,
                'estadio' =>  'IVB' ,
                'tratamiento' => 'RT+ tto sistémico / Quimioterapia de inducción seguido de RT+ tto sistémico',
                 'n3'   => '1'  ,
                 'm0'   => '1'  ,
                  't1'   => '1'  ,
                 't2'   => '1'  ,
                 't3'   => '1'  ,
                 't4a'   => '1'  ,
                 't4b'   => '1'
              ]  ] );

    DB::table('result')->insert([
            [ 'id' => $i++,
                'subcategories_id'  => $k ,
                'estadio' =>  'IVB' ,
                'tratamiento' => 'RT+ tto sistémico / Quimioterapia de inducción seguido de RT+ tto sistémico',
                  'nx'   => '1'  ,
                 'n0'   => '1'  ,
                 'n1'   => '1'  ,
                 'n2'   => '1'  ,
                 'n3'   => '1'  ,

                 't4b'   => '1'  ,
                 'm0'   => '1'  ,
              ]]);


  }

    function resultado2($i){

       $k = $i;
      $i*= 30;

        $this->resultadoIVC($i++ , $k);
        $this->resultadoIVB($i++ , $k);
        $i++;



DB::table('result')->insert([




                [ 'id' => $i++,
                'subcategories_id'  => $k ,
                'estadio' =>  'IVA' ,
                'tratamiento' => 'Si resecable: Cirugía seguido de:
    1) RT, si no hay factores de mal pronóstico
    2) RT+Tratamiento sistémico, si hay factores de mal pronóstico
Valorar RT+Tto sistémico o QT inducción seguido de RT+Tto sistémico en función de las características individuales del paciente
Si no resecable: RT+ tto sistémico / Quimioterapia de inducción seguido de RT+ tto sistémico',
                  't1'   => '1'  ,
                 'n2'   => '1'  ,
                 'm0'   => '1'  ,

              ]]);
DB::table('result')->insert([

                [ 'id' => $i++,
                'subcategories_id'  => $k ,
                'estadio' =>  'IVA' ,
                'tratamiento' => 'Si resecable:
Cirugía seguido de:
3) RT, si no hay factores demal pronóstico
4) RT+Tratamiento sistémico, si hay factores de mal pronóstico
Valorar RT+Tto sistémico o QT inducción seguido  de RT+Tto sistémico en función de las características individuales del
paciente Si no resecable: RT+ tto sistémico / Quimioterapia de inducción seguido de RT+ tto sistémico',
                  't2'   => '1'  ,
                 'n2'   => '1'  ,
                 'm0'   => '1'  ,

              ]]);

DB::table('result')->insert([

                [ 'id' => $i++,
                'subcategories_id'  => $k ,
                'estadio' =>  'IVA' ,
                'tratamiento' => 'Si resecable:
Cirugía seguido de:
3) RT, si no hay factores demal pronóstico
4) RT+Tratamiento sistémico, si hay factores de mal pronóstico
Valorar RT+Tto sistémico o QT inducción seguido  de RT+Tto sistémico en función de las características individuales del
paciente Si no resecable: RT+ tto sistémico / Quimioterapia de inducción seguido de RT+ tto sistémico',
                  't1'   => '1'  ,
                 'n2'   => '1'  ,
                 'm0'   => '1'  ,

              ]]);

DB::table('result')->insert([

                [ 'id' => $i++,
                'subcategories_id'  => $k ,
                'estadio' =>  'IVA' ,
                'tratamiento' => 'Si resecable:
Cirugía seguido de:
3) RT, si no hay factores demal pronóstico
4) RT+Tratamiento sistémico, si hay factores de mal pronóstico
Valorar RT+Tto sistémico o QT inducción seguido  de RT+Tto sistémico en función de las características individuales del
paciente Si no resecable: RT+ tto sistémico / Quimioterapia de inducción seguido de RT+ tto sistémico',
                  't3'   => '1'  ,
                 'n2'   => '1'  ,
                 'm0'   => '1'  ,

              ]]);


DB::table('result')->insert([

                [ 'id' => $i++,
                'subcategories_id'  => $k ,
                'estadio' =>  'IVA' ,
                'tratamiento' => 'Si resecable:
Cirugía seguido de:
3) RT, si no hay factores demal pronóstico
4) RT+Tratamiento sistémico, si hay factores de mal pronóstico
Valorar RT+Tto sistémico o QT inducción seguido  de RT+Tto sistémico en función de las características individuales del
paciente Si no resecable: RT+ tto sistémico / Quimioterapia de inducción seguido de RT+ tto sistémico',
                  't4a'   => '1'  ,
                 'n0'   => '1'  ,
                 'n1'   => '1'  ,
                 'n2'   => '1'  ,
                 'm0'   => '1'  ,

              ]]);

DB::table('result')->insert([

                [ 'id' => $i++,
                'subcategories_id'  => $k ,
                'estadio' =>  'III' ,
                'tratamiento' => 'Si resecable:
Cirugía seguido de:
3) RT, si no hay factores demal pronóstico
4) RT+Tratamiento sistémico, si hay factores de mal pronóstico
Valorar RT+Tto sistémico o QT inducción seguido  de RT+Tto sistémico en función de las características individuales del
paciente Si no resecable: RT+ tto sistémico / Quimioterapia de inducción seguido de RT+ tto sistémico',
                  't1'   => '1'  ,
                 't2'   => '1'  ,
                 'n1'   => '1'  ,
                 'm0'   => '1'  ,

              ]]);

DB::table('result')->insert([

                [ 'id' => $i++,
                'subcategories_id'  => $k ,
                'estadio' =>  'III' ,
                'tratamiento' => 'Si resecable:
Cirugía seguido de:
3) RT, si no hay factores demal pronóstico
4) RT+Tratamiento sistémico, si hay factores de mal pronóstico
Valorar RT+Tto sistémico o QT inducción seguido  de RT+Tto sistémico en función de las características individuales del
paciente Si no resecable: RT+ tto sistémico / Quimioterapia de inducción seguido de RT+ tto sistémico',
                  't3'   => '1'  ,
                 'n0'   => '1'  ,
                 'n1'   => '1'  ,
                 'm0'   => '1'  ,

              ]]);



DB::table('result')->insert([

                   [ 'id' => $i++,
                'subcategories_id'  => $k ,
                'estadio' =>  'II' ,
                'tratamiento' => 'RT / Cirugía ',
                 't2'   => '1'  ,
                 'n0'   => '1'  ,
                 'm0'   => '1'  ,

]]);


DB::table('result')->insert([

                [ 'id' => $i++,
                'subcategories_id'  => $k ,
                'estadio' =>  'I' ,
                'tratamiento' => 'RT / Cirugía',
                 't1'   => '1'  ,
                 'n0'   => '1'  ,
                 'm0'   => '1'  ,

              ],





        ]);

      DB::table('result')->insert([

                [ 'id' => $i++,
                'subcategories_id'  => $k ,
                'estadio' =>  '0' ,
                'tratamiento' => 'Cirugía',
                 'n0'   => '1'  ,
                 'm0'   => '1'  ,

              ],





        ]);

  }


  function resultado(){

         DB::table('result')->insert([
              [ 'id' => '1',
                'subcategories_id'  => '1' ,
                'estadio' =>  'IVC' ,
                'tratamiento' => 'Tratamiento  sistémico / Tto de soporte',
                 'm1'   => '1'  ,
                 't1'   => '1'  ,
                 't2'   => '1'  ,
                 't3'   => '1'  ,
                 't4a'   => '1'  ,
                 't4b'   => '1'  ,
                 't4'   => '1'  ,
                 'nx'   => '1'  ,
                 'n0'   => '1'  ,
                 'n1'   => '1'  ,
                 'n2'   => '1'  ,
                 'n3'   => '1'  ,
              ]] );

          DB::table('result')->insert([

              [ 'id' => '2',
                'subcategories_id'  => '1' ,
                'estadio' =>  'IVB' ,
                'tratamiento' => 'RT+ tto sistémico / Quimioterapia de inducción seguido de RT+ tto sistémico',
                 'n3'   => '1'  ,
                 'm0'   => '1'  ,
                  't1'   => '1'  ,
                 't2'   => '1'  ,
                 't3'   => '1'  ,
                 't4a'   => '1'  ,
                 't4b'   => '1'
              ]  ] );

            DB::table('result')->insert([
            [ 'id' => '3',
                'subcategories_id'  => '1' ,
                'estadio' =>  'IVB' ,
                'tratamiento' => 'RT+ tto sistémico / Quimioterapia de inducción seguido de RT+ tto sistémico',
                  'nx'   => '1'  ,
                 'n0'   => '1'  ,
                 'n1'   => '1'  ,
                 'n2'   => '1'  ,
                 'n3'   => '1'  ,

                 't4b'   => '1'  ,
                 'm0'   => '1'  ,
              ]]);
DB::table('result')->insert([




                [ 'id' => '4',
                'subcategories_id'  => '1' ,
                'estadio' =>  'IVA' ,
                'tratamiento' => 'Si resecable: Cirugía seguido de:
    1) RT, si no hay factores de mal pronóstico
    2) RT+Tratamiento sistémico, si hay factores de mal pronóstico
Valorar RT+Tto sistémico o QT inducción seguido de RT+Tto sistémico en función de las características individuales del paciente
Si no resecable: RT+ tto sistémico / Quimioterapia de inducción seguido de RT+ tto sistémico',
                  't1'   => '1'  ,
                 'n2'   => '1'  ,
                 'm0'   => '1'  ,

              ]]);
DB::table('result')->insert([

                [ 'id' => '5',
                'subcategories_id'  => '1' ,
                'estadio' =>  'IVA' ,
                'tratamiento' => 'Si resecable: Cirugía seguido de:
    1) RT, si no hay factores de mal pronóstico
    2) RT+Tratamiento sistémico, si hay factores de mal pronóstico
Valorar RT+Tto sistémico o QT inducción seguido de RT+Tto sistémico en función de las características individuales del paciente
Si no resecable: RT+ tto sistémico / Quimioterapia de inducción seguido de RT+ tto sistémico',
                  't2'   => '1'  ,
                 'n2'   => '1'  ,
                 'm0'   => '1'  ,

              ]]);
DB::table('result')->insert([

                [ 'id' => '6',
                'subcategories_id'  => '1' ,
                'estadio' =>  'IVA' ,
                'tratamiento' => 'Si resecable: Cirugía seguido de:
    1) RT, si no hay factores de mal pronóstico
    2) RT+Tratamiento sistémico, si hay factores de mal pronóstico
Valorar RT+Tto sistémico o QT inducción seguido de RT+Tto sistémico en función de las características individuales del paciente
Si no resecable: RT+ tto sistémico / Quimioterapia de inducción seguido de RT+ tto sistémico',
                  't3'   => '1'  ,
                 'n2'   => '1'  ,
                 'm0'   => '1'  ,

              ]]);
DB::table('result')->insert([

                [ 'id' => '7',
                'subcategories_id'  => '1' ,
                'estadio' =>  'IVA' ,
                'tratamiento' => 'Si resecable: Cirugía seguido de:
    1) RT, si no hay factores de mal pronóstico
    2) RT+Tratamiento sistémico, si hay factores de mal pronóstico
Valorar RT+Tto sistémico o QT inducción seguido de RT+Tto sistémico en función de las características individuales del paciente
Si no resecable: RT+ tto sistémico / Quimioterapia de inducción seguido de RT+ tto sistémico',
                  't4a'   => '1'  ,
                 'n1'   => '1'  ,
                 'n2'   => '1'  ,
                 'n3'   => '1'  ,
                 'm0'   => '1'  ,

              ]]);
DB::table('result')->insert([


                [ 'id' => '8',
                'subcategories_id'  => '1' ,
                'estadio' =>  'III' ,
                'tratamiento' => 'Cirugía seguido de:
    1) RT, si no hay factores de mal pronóstico
    2) RT+Tratamiento sistémico, si hay factores de mal pronóstico
Valorar RT+Tto sistémico o QT inducción seguido de RT+Tto sistémico en función de las características individuales del paciente
Si resecable: Cirugía seguido de:
    1) RT, si no hay factores de mal pronóstico
    2) RT+Tratamiento sistémico, si hay factores de mal pronóstico
Valorar RT+Tto sistémico o QT inducción seguido de RT+Tto sistémico en función de las características individuales del paciente
Si no resecable: RT+ tto sistémico / Quimioterapia de inducción seguido de RT+ tto sistémico
',
                  't1'   => '1'  ,
                 't2'   => '1'  ,
                 'n1'   => '1'  ,
                 'm0'   => '1'  ,

              ]
        ]);


DB::table('result')->insert([
              [ 'id' => '9',
                'subcategories_id'  => '1' ,
                'estadio' =>  'III' ,
                'tratamiento' => 'Cirugía seguido de:
    1) RT, si no hay factores de mal pronóstico
    2) RT+Tratamiento sistémico, si hay factores de mal pronóstico
Valorar RT+Tto sistémico o QT inducción seguido de RT+Tto sistémico en función de las características individuales del paciente
Si resecable: Cirugía seguido de:
    1) RT, si no hay factores de mal pronóstico
    2) RT+Tratamiento sistémico, si hay factores de mal pronóstico
Valorar RT+Tto sistémico o QT inducción seguido de RT+Tto sistémico en función de las características individuales del paciente
Si no resecable: RT+ tto sistémico / Quimioterapia de inducción seguido de RT+ tto sistémico
',
                 't3'   => '1'  ,
                 'n0'   => '1'  ,
                 'n1'   => '1'  ,
                 'm0'   => '1'  ,

              ]]);
DB::table('result')->insert([

                   [ 'id' => '10',
                'subcategories_id'  => '1' ,
                'estadio' =>  'II' ,
                'tratamiento' => 'Cirugía seguido de:
    1) RT, si no hay factores de mal pronóstico
    2) RT+Tratamiento sistémico, si hay factores de mal pronóstico
Valorar RT+Tto sistémico o QT inducción seguido de RT+Tto sistémico en función de las características individuales del paciente
Si resecable: Cirugía seguido de:
    1) RT, si no hay factores de mal pronóstico
    2) RT+Tratamiento sistémico, si hay factores de mal ',
                 't3'   => '1'  ,
                 'n0'   => '1'  ,
                 'n1'   => '1'  ,
                 'm0'   => '1'  ,

              ]]);
DB::table('result')->insert([

                [ 'id' => '11',
                'subcategories_id'  => '1' ,
                'estadio' =>  'I' ,
                'tratamiento' => '',
                 't3'   => '1'  ,
                 'n0'   => '1'  ,
                 'n1'   => '1'  ,
                 'm0'   => '1'  ,

              ],

        ]);
  }
}