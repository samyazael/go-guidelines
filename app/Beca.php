<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Beca extends Model
{
    protected $table='becas';
    protected $primaryKey='id_beca';

    public $incrementing=false;
    public $timestamps=false;

    protected $fillable=[
    'id_beca',
    'beca',
    'descuento'
    ];
}
