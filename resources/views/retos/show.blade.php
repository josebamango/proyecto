@extends('layouts.master')

@section('titulo')
    progreso
@endsection

@section("contenido")
    <div class="row justify-content-center espaciado">
        <canvas id="myChart" width="400" height="100"></canvas>
        <script>
/*--------LOS DATOS NUMÉRICOS SERÁN CADA APUETA ASOCIADA A ESE RETO Y LAS FECHAS EL MOMENTO EN QUE SE HAGA CADA APUESTA---------*/

            var ctx = document.getElementById('myChart').getContext('2d');
            var myChart = new Chart(ctx, {
                type: 'line',
                data: {
                    labels: ['{{$retos->created_at}}', '{{$retos->created_at}}', '{{$retos->created_at}}', '{{$retos->created_at}}', '{{$retos->created_at}}', '{{$retos->created_at}}', '{{$retos->created_at}}', '{{$retos->plazo}}'],
                    datasets: [{
                        label: 'Progreso del reto {{$retos->nombre}}',
                        fill: false,
                        lineTension: 0.1,
                        data: [{{$retos->inicio}}, 250, 450, 300, 500, 670, 900,{{$retos->objetivo}}],
                        backgroundColor: 'rgba(231, 76, 60, 0.8)',
                        borderColor: 'rgba(231, 76, 60, 0.8)',
                        borderWidth: 5,
                        borderCapStyle: 'butt',
                        borderJoinStyle: 'miter',
                        pointBorderColor: "rgba(231, 76, 60, 0.8)",
                        pointBorderWidth: 15,
                        pointHoverBorderColor: "rgba(10, 61, 98, 0.9)",
                        pointHoverBackgroundColor: "rgba(10, 61, 98, 0.9)",
                        pointHoverBorderWidth: 30,
                        pointRadius: 1,
                        pointHitRadius: 10,
                    }]
                },
            });
        </script>
    </div>
@endsection
