<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Beca;

class BecaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return $becas=Beca::all();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $beca= new Beca();

        $beca->id_beca=$request->get('id_beca');
        $beca->beca=$request->get('beca');
        $beca->porcentaje=$request->get('porcentaje');
        $beca->save();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return $beca=Beca::find($id);
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
         $beca= Beca::find($id);

        $beca->id_beca=$request->get('id_beca');
        $beca->beca=$request->get('beca');
        $beca->porcentaje=$request->get('porcentaje');
        $beca->update();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $beca=Beca::find($id);
        $beca->destroy();
    }
}
