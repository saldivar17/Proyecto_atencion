<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Empadronador;

class EmpadronadorController extends Controller
{

    public function __construct(){
        $this->middleware("auth");
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $empa = Empadronador::all();
        return view('empadronador.index')->with('empa', $empa);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('empadronador.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $empadronador = new Empadronador();
        $empadronador->nombre = $request->get('nombre');
        $empadronador->apellidos = $request->get('apellidos');
        $empadronador->dni = $request->get('dni');
        $empadronador->celular = $request->get('celular');
        $empadronador->estado = $request->get('estado');
        $empadronador->responsable = $request->get('responsable');
        $empadronador->save();

        return redirect('/empadronador');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $empa = Empadronador::find($id);
        return view('empadronador.edit')->with('empa', $empa);
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
        $empadronador = Empadronador::find($id);

        $empadronador->nombre = $request->get('nombre');
        $empadronador->apellidos = $request->get('apellidos');
        $empadronador->dni = $request->get('dni');
        $empadronador->celular = $request->get('celular');
        $empadronador->estado = $request->get('estado');
        $empadronador->responsable = $request->get('responsable');
        $empadronador->save();

        return redirect('/empadronador');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $empa = Empadronador::find($id);
        $empa->delete();
        
        return redirect('/empadronador');
    }
}
