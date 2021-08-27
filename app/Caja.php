<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Caja extends Model
{
    protected $table='cajas';
    protected $primaryKey='id_caja';

    public $incrementing=false;
    public $timestamps=true;

    protected $fillable=[
    'id_caja',
    'fondo_fijo',
    'total',
    'fecha_apertura',
    'fecha_cierre',
    'login' 

    ];
}
