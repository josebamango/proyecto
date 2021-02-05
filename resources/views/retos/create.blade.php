@extends('layouts.master')
@section('titulo')
    Retos
@endsection

@section("contenido")
            <div class="row justify-content-center espaciado">
                <div class="col-6">
                    <form class="formulario" action="{{route('retos.store')}}" method="post" role="form">
                        <legend class="text-center text-light titulo h2">Introduce los datos del reto</legend>
                        @csrf
                        <label for="nombre">Nombre:</label>
                        <div class="form-group">
                            <input class="form-control mb-3" type="text" name="nombre" placeholder="Nombre del reto">
                        </div>
                        <label for="plazo">Plazo:</label>
                        <div class="form-group">
                            <input class="form-control d-inline mb-3" type="date" name="plazo">
                        </div>
                        <div class="form-group">
                            <label for="descripcion">Descripción:</label>
                            <textarea name="descripcion" class="form-control mb-3" cols="30" rows="5"></textarea>
                        </div>
                        <label for="inicio">Inicio:</label>
                        <div class="form-group">
                            <input class="form-control mb-3" type="number" name="inicio" placeholder="Cantidad inicial">
                        </div>
                        <label for="objetivo">Objetivo:</label>
                        <div class="form-group">
                            <input class="form-control mb-3" type="number" name="objetivo" placeholder="Objetivo a conseguir">
                        </div>
                        <input type="submit" name="crear" class="btn mt-3 text-light crear offset-5" value="Crear reto">
                    </form>
                </div>


            </div>

@endsection

