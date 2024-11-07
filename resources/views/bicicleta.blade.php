<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>bicicleta</title>
</head>
<body>
    @if ($bicicleta)
        <h1>{{ $bicicleta->modelo }}</h1>
        <p>{{ $bicicleta->marca }}</p>
        <ul>
            <li>Aro: {{ $bicicleta->aro }}</li>
            <li>Cor: {{ $bicicleta->cor }}</li>
        </ul>
    @else
        <p>bicicleta não encontrada! </p>
    @endif
    <a href="/bicicletas">&#9664;Voltar</a>
</body>
</html>
