@extends("layouts.master")

@section("titulo")
    Retos
@endsection

@section("contenido")
    {{--  <script>
          function hashChange() {
              var myURL = {{route('retos.index')}};
              if (window.location.hash) {
                  switch (window.location.hash) {
                      case {{route('retos.show', $reto->id)}}:
                          myURL = {{route('retos.show', $reto->id)}};
                          break;
                      default:
                          myURL = {{route('retos.index')}};
                          break;
                  }
              }
              $.ajax({
                  url: myURL,
                  dataType: "text",
                  success: function(data) {
                      $("#progreso").html(data);
                  },
              });
          }
          $(document).ready(function() {
              hashChange();
              $(window).on("hashchange", function() {
                  hashChange();
              });
          });
      </script>--}}

    <div class="row justify-content-center espaciado">
        <a class="nav-link active" href="{{route('retos.create')}}"><i
                class="fas fa-plus-circle fa-5x new mt-3"></i></a>
        @foreach( $retos as  $reto )
            <div class="col-8 mb-5">
                <div class="card text-center">
                    <div class="card-header fondoReto">
                        <ul class="nav nav-tabs card-header-tabs">
                            <li class="nav-item">
                                <a class="nav-link active" enlace href="#">{{$reto->objetivo}}€</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-white  enlace" href="{{route('retos.show', $reto->id)}}">Progreso</a>
                            </li>
                            <li class="nav-item">
                                <form action="{{route('retos.destroy', $reto->id)}}" method="post">
                                    @csrf
                                    @method("delete")
                                    <button type="submit" class="btn text-white eliminar enlace">Elminar <i
                                            class="fas fa-trash-alt ml-2"></i></button>
                                </form>

                            </li>

                        </ul>
                    </div>
                    <div class="card-body" id="progreso">
                        <h5 class="card-title">{{$reto->nombre}}{{--{{$reto->usuario->name}}--}}</h5>
                        <p class="card-text">{{$reto->descripcion}}</p>
                        <p class="card-text">{{--{{$reto->apuesta->nombre}}--}}</p>
                        <a href="{{route('retos.edit', $reto->id)}}" class="editar btn">Editar el reto<i
                                class="fas fa-edit ml-2"></i></a>
                    </div>
                </div>
            </div>
        @endforeach
       {{-- @foreach( $retos->usuario as  $usuario )
            <p>{{$usuario->name}}</p>
        @endforeach--}}

    </div>
@endsection


