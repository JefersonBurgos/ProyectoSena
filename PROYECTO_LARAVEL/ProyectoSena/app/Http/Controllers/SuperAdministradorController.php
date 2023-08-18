<?php

namespace App\Http\Controllers;

use App\Models\SuperAdministrador;
use Illuminate\Http\Request;

class SuperAdministradorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('superAdministrador.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('SuperAdministrador.createSuperAdmin');
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
        $datosSadmin=request()->except('_token');
        SuperAdministrador::insert($datosSadmin);
        return response()->json($datosSadmin);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\SuperAdministrador  $superAdministrador
     * @return \Illuminate\Http\Response
     */
    public function show(SuperAdministrador $superAdministrador)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\SuperAdministrador  $superAdministrador
     * @return \Illuminate\Http\Response
     */
    public function edit(SuperAdministrador $superAdministrador)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\SuperAdministrador  $superAdministrador
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, SuperAdministrador $superAdministrador)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\SuperAdministrador  $superAdministrador
     * @return \Illuminate\Http\Response
     */
    public function destroy(SuperAdministrador $superAdministrador)
    {
        //
    }
}
