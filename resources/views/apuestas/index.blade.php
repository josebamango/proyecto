@extends("layouts.master")

@section("titulo")
    Apuestas
@endsection

@section("contenido")
    <div class="row justify-content-center espaciado">
        @foreach( $apuestas as  $apuesta )
            <div class="col-9 mt-3">
                <div class="card fondoCard">
                    <div class="d-flex">
                        <div class="card-body anchoCard">
                            <h3 class="card-title p-2">{{$apuesta->deporte}}</h3>
                            <h5 class="card-title p-2">{{$apuesta->nombre}}</h5>
                            <h5 class="card-title p-2">{{$apuesta->usuario->name}}</h5>
                        </div>
                        <div class="card-body mr-1 ml-2 cuota">
                            <h5 class="text-muted text-center mt-4">1</h5>
                            <h4 class="card-title text-center">{{$apuesta->cuota_1}}</h4>
                        </div>
                        <div class="card-body mr-1 cuota">
                            <h5 class="text-muted text-center mt-4">X</h5>
                            <h4 class="card-title text-center">{{$apuesta->cuota_x}}</h4>
                        </div>
                        <div class="card-body cuota">
                            <h5 class="text-muted text-center mt-4">2</h5>
                            <h4 class="card-title text-center">{{$apuesta->cuota_2}}</h4>
                        </div>
                    </div>
                    <div class="card-footer fondoFecha">
                        <small class="text-white">{{$apuesta->fecha}}H</small>
                    </div>
                </div>
            </div>
        @endforeach

    </div>
@endsection


