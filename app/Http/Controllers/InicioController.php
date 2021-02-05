<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InicioController extends Controller
{
    public function home()
    {
        return redirect()->action([ApuestaController::class, "index"]);
        return redirect()->action([RetoControllerController::class, "index"]);
    }
}
