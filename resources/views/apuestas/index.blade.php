@extends("layouts.master")

@section("titulo")
    Inicio
@endsection

@section("contenido")
    <div class="row">
        @foreach( $apuestas as  $apuesta )
            <div class="col-xs-12 col-sm-6 col-md-4 mb-4">
                <div class="card text-white bg-info" style="width: auto;">
                    <a href="{{ route('apuestas.show' , $apuesta->id) }}">
{{--                        <img class="card-img-top" src="{{asset('storage/img')}}/{{$apuesta->imagen}}"--}}
{{--                             style="height:400px"/>--}}
                        vaina
                    </a>
                    <div class="card-body">
                        <h4 class="card-title text-center">{{$apuesta->nombre}}</h4>
                    </div>
                    <ul class="list-group list-group-flush text-dark">
                        <li class="list-group-item">1 {{$apuesta->cuota_1}}</li>
                        <li class="list-group-item">X {{$apuesta->cuota_x}}</li>
                        <li class="list-group-item">2 {{$apuesta->cuota_2}}</li>
                    </ul>
                </div>
            </div>
        @endforeach
    </div>
@endsection


