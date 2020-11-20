<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class usuariosController extends Controller
{

    public function mostrarUsuarios(){
        return User::select(['id', 'nombre', 'email', 'created_at'])->get();
    }
}
