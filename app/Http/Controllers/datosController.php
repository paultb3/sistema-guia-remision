<?php

namespace App\Http\Controllers;

use App\Models\datos;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class datosController extends Controller
{
    public function create()
    {
        return view('datos.datos_llenar');
    }

    public function store(Request $request)
    {

        $articulos = new datos();
        $articulos->name = $request->get('name');
        $articulos->lastname = $request->get('lastname');
        $articulos->telefono = $request->get('telefono');
        $articulos->$articulos->save();

        return Redirect::to('/dashboard');
    }
}
