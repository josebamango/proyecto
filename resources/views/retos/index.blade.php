@extends("layouts.master")

@section("titulo")
    Retos
@endsection

@section("contenido")
    <div class="row justify-content-center espaciado">
        @foreach( $retos as  $reto )
            <div class="col-8 mb-5">
                <div class="card text-center">
                    <div class="card-header fondoReto">
                        <ul class="nav nav-tabs card-header-tabs">
                            <li class="nav-item">
                                <a class="nav-link active" enlace href="#">{{$reto->objetivo}}€</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-white  enlace" href="#">Progreso</a>
                            </li>
                            <li class="nav-item">
                                <form action="{{route('retos.destroy', $reto->id)}}" method="post">
                                    @csrf
                                    @method("delete")
                                    <button type="submit" class="btn text-white eliminar enlace">Elminar</button>
                                </form>

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
        <a class="nav-link active" href="{{route('retos.create')}}"><i class="fas fa-plus-circle fa-5x new"></i></a>
        @endforeach
        {{ $retos->links() }}

    </div>
@endsection


