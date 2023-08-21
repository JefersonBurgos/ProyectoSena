<?php

namespace App\Http\Controllers;

use App\Models\Empleados;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class EmpleadosController extends Controller
{

    public function index()
    {
        //
        $datos['empleados']=Empleados::paginate(5);
        return view('empleado.index',$datos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('empleado.create');
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
        $datosEmpleado= request()->except('_token','Correo','Clave');
        $empleadoLogin= request()->only('Identificacion','Correo','Clave');
        $request->validate([
            'Identificacion' => 'required|string|max:255',
            'Correo' => 'required|email|unique:users,Correo',
            'Clave' => 'required|string|min:8',
        ]);
        $user = User::create([
            'Identificacion' => $request->Identificacion,
            'Correo' => $request->Correo,
            'Clave' => Hash::make($request->Clave),
            'role' => 'user',
        ]);
        $user->save();
        Empleados::insert($datosEmpleado);
        return redirect('empleado');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Empleados  $empleados
     * @return \Illuminate\Http\Response
     */
    public function show(Empleados $empleados)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Empleados  $empleados
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $empleado=Empleados::findOrFail($id);
        return view('empleado.edit',compact('empleado'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Empleados  $empleados
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $datosEmpleado= request()->except('_token','_method');
        Empleados::where('id','=',$id)->update($datosEmpleado);
        $empleado=Empleados::findOrFail($id);
        
        return redirect('empleado');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Empleados  $empleados
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        Empleados::destroy($id);
        return redirect('empleado');
    }
}
