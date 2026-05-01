<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Movement extends Model
{
    protected $table = 'movement';

    protected $casts = [
      'date_movement' => 'datetime'  
    ];

    protected $fillable = [
        'name',
        'description',
        'value',
        'date_movement',
        'user_id',
        'id_category'
    ];
}
