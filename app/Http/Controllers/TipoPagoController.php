<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\TipoPago;

class TipoPagoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return $tiposPago=TipoPago::all();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $tipo = new TipoPago();

        $tipo->id_pago=$request->get('id_pago');
        $tipo->tipo=$request->get('tipo');

        $tipo->save();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return $tipo=TipoPago::find($id);
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
        $tipo=TipoPago::find($id);

        $tipo->id_pago=$request->get('id_pago');
        $tipo->tipo=$request->get('tipo');

        $tipo->update();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $tipo=TipoPago::find($id);
        $tipo->destroy();
    }
}
