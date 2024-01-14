<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class RegistroController extends Controller
{
    public function create()
    {
        return view('auth.register');
    }

    public function store(Request $request)
    {
        $this->validate(request(),[
            'nombres'=>'required',
            'apellidos'=>'required',
            'email'=>'required|email',
            'password'=>'required|confirmed'
        ]);
        $usuario = new User();
        $usuario->nombres = $request->input('nombres');
        $usuario->apellidos = $request->input('apellidos');
        $usuario->email = $request->input('email');
        $usuario->password = $request->input('password');
        $usuario->rol_id = 3;
        $usuario->activo = 1;
        $usuario->save();

        return redirect()->to('/login');
    }
}
