<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Celular;

class CelularController extends Controller
{
    public function index()
    {
        $celulares = Celular::all();
        return response()->json($celulares);
    }
}
