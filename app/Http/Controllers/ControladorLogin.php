<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Login;

class ControladorLogin extends Controller
{
    public function login(){

        return view('login')
        ->with(['login' => Login::all()]);
    }

    public function login_alta(){
        return view("login_alta");
    }

    public function login_registrar(Request $request){
        $this->validate($request, [
            'nombre' => 'required',
            'email' => 'required|email',
            'password' => 'required|min:6', // Asegúrate de que el campo coincide
            'rpassword' => 'required|same:password', // Verifica que coincidan
        ]);

        Login::create(array(
            'nombre' => $request->input('nombre'),
            'apellido' => $request->input('apellido'),
            'email' => $request->input('email'),
            'password' => $request->input('password'),
            'blocked' => $request->input('blocked')
        ));

        return redirect()->route('login');
    }
}
