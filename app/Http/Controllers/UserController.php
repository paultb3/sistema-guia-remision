<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $users = User::all(); // Obtiene todos los usuarios
        return view('users.index', compact('users'));
    }
}
