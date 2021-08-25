<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TipoPago extends Model
{
    protected $table='tipos_pago';
    protected $primaryKey='id_tipo';

    public $incrementing=true;
    public $timestamps=false;

    protected $fillable=[
    'id_tipo',
    'tipo'
    ];
}
