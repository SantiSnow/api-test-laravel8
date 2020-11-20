<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class usuariosController extends Controller
{

    public function mostrarUsuarios(){
        return User::select(['id', 'name', 'email', 'created_at'])->get();
    }

    public function show($id){
        return User::select(['id', 'name', 'email', 'created_at'])
            ->where('id', $id)
            ->get();
    }

}
