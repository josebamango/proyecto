@extends('layouts.master')
@section('titulo')
    Retos
@endsection

@section("contenido")
    <div class="page-wrapper fondoCard p-t-100 p-b-50">
        <div class="wrapper wrapper--w900">
            <div class="card card-6">
                <div class="card-heading">
                    <h2 class="title">Nuevo reto</h2>
                </div>
                <div class="card-body">
                    <form action="{{route('retos.store')}}" method="post" role="form">
                        @csrf
                        <div class="form-row">
                            <div class="name">Nombre</div>
                            <div class="value">
                                <input class="input--style-6" type="text" name="nombre">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">Plazo</div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-6" type="date" name="plazo">
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">Descripción</div>
                            <div class="value">
                                <div class="input-group">
                                    <textarea class="textarea--style-6" name="descripcion"
                                              placeholder="Marca tu meta"></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">Inicio</div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-6" type="number" name="inicio">
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">Objetivo</div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-6" type="number" name="objetivo">
                                </div>
                            </div>
                        </div>
                        <div class="card-footer">
                            <button class="btn editar offset-5" type="submit" name="crear">Crear reto</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

