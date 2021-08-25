<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Nivel extends Model
{
    protected $table='niveles';
    protected $primaryKey='id_nivel';

    public $incrementing=true;
    public $timestamps=false;

    protected $fillable=[
    'id_nivel',
    'nivel'
    ];
}
