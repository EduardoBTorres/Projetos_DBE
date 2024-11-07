<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Bicicletas</title>
</head>
<body>
    <h1>Bicicletas</h1>
    @if ($bicicletas->count()>0)
    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Marca</th>
                <th>Modelo</th>
                <th>Aro</th>
                <th>Cor</th>
            </tr>
        </thead>
        <tbody>
            @foreach($bicicletas as $bicicleta)
            <tr>
                <td>{{$bicicleta->id}}</td>
                <td>{{$bicicleta->marca}}</td>
                <td>{{$bicicleta->modelo}}</td>
                <td>{{$bicicleta->aro}}</td>
                <td>{{($bicicleta->cor)}}</td>
            </tr>
            @endforeach
        </tbody>
        <tr align="center">
            <td colspan="2"><a href="/bicicleta" style="display: inline">Registrar bike</a></td>
        </tr>
    </table>
    @else
    <p>Bicicletas não encontrados! </p>
    @endif
</body>
</html>
