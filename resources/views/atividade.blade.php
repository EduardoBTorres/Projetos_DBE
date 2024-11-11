<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>atividade</title>
</head>
<body>
    @if ($atividade)
        <h1>{{ $atividade->Titulo }}</h1>
        <p>{{ $atividade->descricao }}</p>
        <ul>
            <li>Endereço: {{ $atividade->endereco }}</li>
            <li>Distância: {{ $atividade->distancia }}</li>
            <li>Tempo: {{ $atividade->tempo }}</li>
            <li>Data: {{ $atividade->data }}</li>
        </ul>
    @else
        <p>atividade não encontrada! </p>
    @endif
    <a href="/atividades">&#9664;Voltar</a>
</body>
</html>
