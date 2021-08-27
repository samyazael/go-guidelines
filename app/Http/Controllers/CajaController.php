<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Caja;

class CajaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return $cajas=Caja::all();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $r)
    {
        $caja= new Caja();

        $caja->id_caja=$r->get('id_caja');
        $caja->fondo_fijo=$r->get('fondo_fijo');
        $caja->total=$r->get('total');
        $caja->fecha_apertura=$r->get('fecha_apertura');
        $caja->fecha_cierre=$r->get('fecha_cierre');
        $caja->login=$r->get('login');  //Identificará a la persona que abrió la caja

        $caja->save();

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return $caja=Caja::find($id);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $caja=Caja::find($id);

        $caja->id_caja=$r->get('id_caja');
        $caja->fondo_fijo=$r->get('fondo_fijo');
        
        $caja->fecha_apertura=$r->get('fecha_apertura');
        $caja->fecha_cierre=$r->get('fecha_cierre');
        
        $caja->update();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
