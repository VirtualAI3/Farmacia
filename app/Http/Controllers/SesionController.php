<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Usuarios;
use Illuminate\Support\Facades\Auth;

class SesionController extends Controller
{
    public function create()
    {
        return view('auth.login');
    }
    public function store()
    {
        if (auth()->attempt(request(['email','password']))==false) {
            return back()->withErrors([
                'message' => 'Correo o contrase incorrecta, por favor intente de nuevo.'
            ]);
        }
        return redirect()->to('/');
    }

    public function destroy(){
        auth()->logout();
        return redirect()->to('/login');
    } 
}
