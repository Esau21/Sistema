<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cajon extends Model
{
    protected $table = 'cajones';
    
    protected $fillable = ['descripcion','tipo_id','estatus'];

}


