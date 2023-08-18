<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Response;


class AuthController extends Controller
{
    public function showRegisterForm()
    {
        return view('auth.register');
    }

    public function register(Request $request)
    {
        $request->validate([
            'Nombre' => 'required|string|max:255',
            'Correo' => 'required|email|unique:users,Correo',
            'Clave' => 'required|string|min:8',
            'role' => 'required|string|max:255',
        ]);

        $user = User::create([
            'Nombre' => $request->Nombre,
            'Correo' => $request->Correo,
            'Clave' => Hash::make($request->Clave),
            'role' => $request->role,
        ]);
        $user->save();

        //return response($user,Response::HTTP_CREATED);
        return redirect("/login")->with('message', 'Registro exitoso. Por favor inicia sesión.');

    }

    public function showLoginForm()
    {
        return view('auth.login');
    }

    public function login(Request $request)
    {
        $credentials = [
            'Correo' => $request->Correo,
            'Clave' => $request->Clave,
        ];

        $user = DB::table('users')->where('Correo', $request->Correo)->first();

        if ($user && Hash::check($request->Clave, $user->Clave)) {
            if ($user->role == 'admin') {
                //return response(["message"=>"Administrador Autenticado"],Response::HTTP_OK);
                return redirect('/empleado')->with('message', 'Inicio de sesión exitoso.');
            }if ($user->role == 'superAdmin') {
                //return response(["message"=>"Super Administrador Autenticado"],Response::HTTP_OK);
                return redirect('/administrador')->with('message', 'Inicio de sesión exitoso.');
            }if ($user->role == 'user') {
                //return response(["message"=>"Empleado Autenticado"],Response::HTTP_OK);
                return redirect('/empleado/vista')->with('message', 'Inicio de sesión exitoso.');
            } else{
                return "No hay tipo de usuario";
            }
        
            //return response(["message"=>"Usuario Autenticado"],Response::HTTP_OK);
        }
        //return response(["message"=>"Credenciales Invalidas"],Response::HTTP_UNAUTHORIZED);

        return back()->with('message', 'Credenciales incorrectas. Por favor, intenta de nuevo.');   
    }


}
