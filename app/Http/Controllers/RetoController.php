<?php

namespace App\Http\Controllers;

use App\Models\Reto;
use Illuminate\Http\Request;

class RetoController extends Controller
{

    public function index()
    {
        $retos = Reto::orderBy('nombre', 'asc')->paginate(5);
        return view("retos.index", compact("retos"));
    }

    public function create()
    {
        return view("retos.create");
    }

    public function show(int $id)
    {
        $reto = Reto::find($id);
        return view("retos.show", compact("retos"));
    }

    public function edit(int $id)
    {
        $reto = Reto::find($id);
        return view("retos.edit", compact("retos"));
    }

    public function store(Request $r)
    {

        $reto = new Apuesta();
        $reto->nombre = $r->nombre;
        $reto->plazo = $r->plazo;
        $reto->descripcion = $r->descripcion;
        $reto->inicio = $r->inicio;
        $reto->objetivo = $r->objetivo;
        $reto->save();

        return redirect()->route('retos.show', $reto);
    }

    public function update(Request $r, int $id)
    {
        $reto=Reto::find($id);
        $reto->nombre = $r->nombre;
        $reto->plazo = $r->plazo;
        $reto->descripcion = $r->descripcion;
        $reto->inicio = $r->inicio;
        $reto->objetivo = $r->objetivo;
        $reto->save();

        return redirect()->route('retos.index');
    }
}
