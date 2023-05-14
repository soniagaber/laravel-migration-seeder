<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    @vite('resources/js/app.js')

</head>

<body>

    <h1>Treni che sono in partenza a partire da oggi:</h1>

    <table class="table table-dark">
        <thead>
          <tr>
            <th scope="col">AZIENDA</th>
            <th scope="col">STAZIONE DI PARTENZA</th>
            <th scope="col">STAZIONE DI ARRIVO</th>
            <th scope="col">ORARIO DI PARTENZA</th>
            <th scope="col">ORARIO DI ARRIVO</th>
            <th scope="col">CODICE TRENO</th>
            <th scope="col">NUMERO CARROZZE</th>
            <th scope="col">IN ORARIO</th>
            <th scope="col">CANCELLATO</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($trains as $train)
            <tr>
                <td>{{$train->azienda}}</td>
                <td>{{$train->stazione_di_partenza}}</td>
                <td>{{$train->stazione_di_arrivo}}</td>
                <td>{{$train->orario_di_partenza}}</td>
                <td>{{$train->orario_di_arrivo}}</td>
                <td>{{$train->codice_treno}}</td>
                <td>{{$train->numero_carrozze}}</td>
                <td>{{$train->in_orario}}</td>
                <td>{{$train->cancellato}}</td>
            </tr>
                
            @endforeach
        </tbody>
      </table>
</body>

</html>