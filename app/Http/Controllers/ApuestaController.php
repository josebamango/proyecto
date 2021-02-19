<?php

namespace App\Http\Controllers;

use App\Models\Apuesta;
use App\Models\User;
use Illuminate\Http\Request;

class ApuestaController extends Controller
{

    public function index()
    {
        $apuestas = Apuesta::orderBy('fecha', 'desc')->get();
        return $apuestas;
        /*dd(User::query()->first()->apuestas);*/
        return view("apuestas.index", compact("apuestas"));
    }

    public function futbol()
    {
        $apuestas = Apuesta::query()->where('deporte', '=', 'futbol')->orderBy('fecha', 'desc')->get();
        return view("apuestas.index", compact("apuestas"));
    }

    public function baloncesto()
    {
        $apuestas = Apuesta::query()->where('deporte', '=', 'baloncesto')->orderBy('fecha', 'desc')->get();
        return view("apuestas.index", compact("apuestas"));
    }

    public function create()
    {
        return view("apuestas.create");
    }

    public function show(int $id)
    {
        $apuesta = Apuesta::find($id);
        return view("apuestas.show", compact("apuesta"));
    }

   /* public function edit(int $id)
    {
        $apuesta = Apuesta::find($id);
        return view("apuestas.edit", compact("apuesta"));
    }

    public function store(Request $a)
    {

        $apuesta = new Apuesta();
        $apuesta->especie = $a->especie;
        $apuesta->peso = $a->peso;
        $apuesta->altura = $a->altura;
        $apuesta->fechaNacimiento = $a->fechaNacimiento;
        $apuesta->alimentacion = $a->alimentacion;
        $apuesta->descripcion = $a->descripcion;
        $apuesta->imagen = $a->imagen;
        $apuesta->save();

        return redirect()->route('apuestas.show', $apuesta);
    }

    public function update(Request $a, int $id)
    {
        $apuesta = Apuesta::find($id);
        $apuesta->especie = $a->especie;
        $apuesta->peso = $a->peso;
        $apuesta->altura = $a->altura;
        $apuesta->fechaNacimiento = $a->fechaNacimiento;
        $apuesta->alimentacion = $a->alimentacion;
        $apuesta->descripcion = $a->descripcion;
        if ($a->imagen !== null) {
            $apuesta->imagen = $a->imagen->storeAs("", $a->imagen->getClientOriginalName());
        }
        $apuesta->save();

        return redirect()->route('apuestas.index');
    }*/


}
