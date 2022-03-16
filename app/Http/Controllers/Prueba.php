<?php


namespace App\Http\Controllers;


class Prueba extends Controller
{
    public function __invoke()
    {
        return response()->json('Exito');
    }
}
