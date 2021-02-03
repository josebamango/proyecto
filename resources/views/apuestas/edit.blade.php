@extends('layouts.master')
@section('titulo')
    Editar
@endsection

@section("contenido")
    <div class="row">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-6">
                    <form class="formulario" action="{{route('apuestas.update', $apuesta)}}" method="post" role="form" enctype="multipart/form-data">
                        <legend class="text-light bg-dark text-center h2">Introduce los datos del apuesta</legend>

                        @csrf

                        @method("put")

                        <label for="especie">Especie:</label>
                        <div class="form-group">
                            <input class="form-control mb-3" type="text" name="especie" value="{{$apuesta->especie}}">
                        </div>
                        <label for="peso">Peso:</label>
                        <div class="form-group">
                            <input class="form-control mb-3" type="number" name="peso" value="{{$apuesta->peso}}">
                        </div>
                        <label for="altura">Altura:</label>
                        <div class="form-group">
                            <input class="form-control mb-3" type="number" name="altura" value="{{$apuesta->altura}}">
                        </div>
                        <label for="fecha">Fecha de nacimiento:</label>
                        <div class="form-group">
                            <input class="form-control d-inline mb-3" type="date" name="fechaNacimiento" value="{{$apuesta->fechaNacimiento}}">
                        </div>
                        <label for="alimentacion">Alimentación:</label>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="alimentacion" value="carnivoro">
                            <label class="form-check-label" for="carnivoro">Carnivoro</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="alimentacion" value="omnivoro">
                            <label class="form-check-label" for="omnivoro">Omnivoro</label>
                        </div>
                        <div class="form-check disabled">
                            <input class="form-check-input" type="radio" name="alimentacion" value="herbivoro">
                            <label class="form-check-label mb-3" for="herbivoro">Herbivoro</label>
                        </div>
                        <div class="form-group">
                            <label for="descripcion">Descripción:</label>
                            <textarea name="descripcion" class="form-control mb-3" cols="30" rows="10">{{$apuesta->descripcion}}</textarea>
                        </div>
                        <div class="form-group">
                            <label for="imagen">Imagen</label>
                            <input type="file" class="form-control-file mt-3" name="imagen">
                        </div>
                        <input type="submit" name="actualizar" class="btn btn-dark mt-3" value="Actualizar apuesta">
                    </form>
                </div>


            </div>
        </div>

    </div>
@endsection

