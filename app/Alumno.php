<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Alumno extends Model
{
    protected $table='alumnos';
    protected $primaryKey="matricula";
    protected $with=['beca','nivel'];

    public $incrementing=false;
    public $timestamps=false;

    protected $fillable=[
    'matricula',
    'nombre',
    'primer_apellido',
    'segundo_apellido',
    'genero',
    'correo',
    'celular',
    'foto',
    'grupo',
    'fecha_ingreso',
    'fecha_vigencia',
    'id_beca',
    'id_nivel'
    ];

    public function beca(){
        return $this->belongsTo(Beca::class,'id_beca','id_beca');
    }

    public function nivel(){
           return $this->belongsTo(Nivel::class,'id_nivel','id_nivel');  
    }

}
