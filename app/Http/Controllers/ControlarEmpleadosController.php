<?php

namespace App\Http\Controllers;

use App\Models\ControlarEmpleados;
use Illuminate\Http\Request;

class ControlarEmpleadosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return "Hola guapeton";
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('calificarEmp.calificar');
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
        $AdminEmpleados=request()->except('_token');
        ControlarEmpleados::insert($AdminEmpleados);
        return redirect("/empleado");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ControlarEmpleados  $controlarEmpleados
     * @return \Illuminate\Http\Response
     */
    public function show(ControlarEmpleados $controlarEmpleados)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ControlarEmpleados  $controlarEmpleados
     * @return \Illuminate\Http\Response
     */
    public function edit(ControlarEmpleados $controlarEmpleados)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ControlarEmpleados  $controlarEmpleados
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ControlarEmpleados $controlarEmpleados)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ControlarEmpleados  $controlarEmpleados
     * @return \Illuminate\Http\Response
     */
    public function destroy(ControlarEmpleados $controlarEmpleados)
    {
        //
    }
}
