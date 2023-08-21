<?php

namespace App\Http\Controllers;

use App\Models\SuperAdministrador;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class SuperAdministradorController extends Controller
{

    public function index()
    {
        //
        return view('SuperAdministrador.createSuperAdmin');
    }

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
        $datosSadmin=request()->except('_token','Correo','Clave');
        $SadminLogin=request()->only('Id_Sadmin','Correo','Clave');
        $request->validate([
            'Id_Sadmin' => 'required|string|max:255',
            'Correo' => 'required|email|unique:users,Correo',
            'Clave' => 'required|string|min:8',
        ]);

        $user = User::create([
            'Identificacion' => $request->input('Id_Sadmin'),
            'Correo' => $request->Correo,
            'Clave' => Hash::make($request->Clave),
            'role' => 'superAdmin',
        ]);
        $user->save();



        SuperAdministrador::insert($datosSadmin);
        return redirect('administrador');
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
    public function destroy($id)
    {
        SuperAdministrador::destroy($id);
        return redirect('administrador');
    }
}
