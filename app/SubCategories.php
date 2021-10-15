<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SubCategories extends Model
{
    protected $table = 'subcategories';

    protected $fillable = [
        'id',
        'name',
        'categories_id',
        'status',
    ];

    protected $dates = [
        'created_at',
        'updated_at'
    ];
}
