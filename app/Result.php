<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Result extends Model
{
	 protected $table = 'result';

    protected $fillable = [
        'id',
       
        'estadio',
        'tratamiento',
        'subcategories_id',
        'status',
         't1',
         't1a',
         't1b',
		't2',
            't3',
            't4a',
            't4',
            't4b',
            't_x',
            'nx',
            'n0',
            'n1',
            'n2a',
            'n2',
            'n2b',
            'n2c',
            'n3a',
            'n3b',
            'n3',
            'n_x',
            'mx',
            'm0',
            'm1',
            'm_x'

    ];

    protected $dates = [
        'created_at',
        'updated_at'
    ];


    	
            
           
}
 