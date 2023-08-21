<?php

namespace App\Http\Controllers;

use App\Models\Administrador;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AdministradorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $info['administradores']=Administrador::paginate(5);
        return view('administrador.index',$info);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('administrador.createAdmin');
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
        $datosAdmin=request()->except('_token','Correo','Clave');
        $adminLogin=request()->only('Id_admin','Correo','Clave');
        $request->validate([
            'Id_admin' => 'required|string|max:255',
            'Correo' => 'required|email|unique:users,Correo',
            'Clave' => 'required|string|min:8',
        ]);
        $user = User::create([
            'Identificacion' => $request->input('Id_admin'),
            'Correo' => $request->Correo,
            'Clave' => Hash::make($request->Clave),
            'role' => 'admin',
        ]);
        $user->save();
        
        Administrador::insert($datosAdmin);
        return redirect('administrador');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Administrador  $administrador
     * @return \Illuminate\Http\Response
     */
    public function show(Administrador $administrador)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Administrador  $administrador
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $administrador=Administrador::findOrFail($id);
        return view('administrador.editAdmin',compact('administrador'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Administrador  $administrador
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $datosAdmin= request()->except('_token','_method');
        Administrador::where('id','=',$id)->update($datosAdmin);
        $administrador=Administrador::findOrFail($id);
        return redirect('administrador');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Administrador  $administrador
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        Administrador::destroy($id);
        return redirect('administrador');
    }
}
