<?php

namespace App\Http\Controllers;

use App\Models\ControlarAdministrador;
use Illuminate\Http\Request;

class ControlarAdministradorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('calificarAdmin.calificar');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $superAdmin=request()->except('_token');
        ControlarAdministrador::insert($superAdmin);
        return redirect('/administrador');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ControlarAdministrador  $controlarAdministrador
     * @return \Illuminate\Http\Response
     */
    public function show(ControlarAdministrador $controlarAdministrador)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ControlarAdministrador  $controlarAdministrador
     * @return \Illuminate\Http\Response
     */
    public function edit(ControlarAdministrador $controlarAdministrador)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ControlarAdministrador  $controlarAdministrador
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ControlarAdministrador $controlarAdministrador)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ControlarAdministrador  $controlarAdministrador
     * @return \Illuminate\Http\Response
     */
    public function destroy(ControlarAdministrador $controlarAdministrador)
    {
        //
    }
}
