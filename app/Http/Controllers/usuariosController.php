<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class usuariosController extends Controller
{

    public function mostrarUsuarios(){
        return User::select(['id', 'name', 'email', 'created_at'])->get()->map(function ($user){
            $user->registered = $user->created_at->diffForHumans();
            return $user;
        });
    }
}
