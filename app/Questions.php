<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Questions extends Model
{
    protected $table = 'questions';

    protected $fillable = [
        'id',
        'value',
        'des',
        'type',
        'subcategories_id',
        'status',
    ];

    protected $dates = [
        'created_at',
        'updated_at'
    ];
}
 