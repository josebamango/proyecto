@extends("layouts.master")

@section("titulo")
    Retos
@endsection

@section("contenido")
    <div class="row justify-content-center espaciado">
        <a class="nav-link active" href="{{route('retos.create')}}"><i class="fas fa-plus-circle fa-5x new"></i></a>
        @foreach( $retos as  $reto )
            <div class="col-8 mb-5">
                <div class="card text-center">
                    <div class="card-header fondoReto">
                        <ul class="nav nav-tabs card-header-tabs">
                            <li class="nav-item">
                                <a class="nav-link active" href="#">{{$reto->objetivo}}€</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-white" href="#">Progreso</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-white" href="#">Eliminar</a>
                            </li>

                        </ul>
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">{{$reto->nombre}}</h5>
                        <p class="card-text">{{$reto->descripcion}}</p>
                        <a href="{{route('retos.edit', $reto->id)}}" class="editar btn">Editar el reto</a>
                    </div>
                </div>
            </div>
        @endforeach

        {{ $retos->links() }}

    </div>
@endsection


