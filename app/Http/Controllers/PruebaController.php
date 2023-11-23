<?php

namespace App\Http\Controllers;
use App\Models\Rol;
use Illuminate\Http\Request;

class PruebaController extends Controller
{
    public function store(User $user){
        dd($user);
        return view('prueba');
    }
}
