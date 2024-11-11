<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de atividades</title>
</head>
<body>
    <h1>Atividades</h1>
    @if ($atividades->count()>0)
    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Titulo</th>
                <th>Endereço</th>
                <th>Distância</th>
                <th>Tempo</th>
                <th>Data</th>
                <th>Descrição</th>

            </tr>
        </thead>
        <tbody>
            @foreach($atividades as $atividade)
            <tr>
                <td>{{$atividade->id}}</td>
                <td>{{$atividade->titulo}}</td>
                <td>{{$atividade->endereco}}</td>
                <td>{{$atividade->distancia}}</td>
                <td>{{($atividade->tempo)}}</td>
                <td>{{($atividade->data)}}</td>
                <td>{{($atividade->descricao)}}</td>
                <td><a href="{{route('edit', $atividade->id)}}" title="Editar">Editar</a></td>
                <td><a href="{{route('remove', $atividade->id)}}" title="Deletar">Deletar</a></td>
            </tr>
            @endforeach
        </tbody>
    </table>
    @else
    <p>Atividades não encontrados! </p>
    @endif
    <tr align="center">
        <td colspan="2"><a href="/atividade" style="display: inline">Registrar atividade</a></td><br></br>
        <td colspan="2"><a href="/users" style="display: inline">Usuarios</a></td><br></br>
        <td colspan="2"><a href="/bicicletas" style="display: inline">Bicicletas</a></td>
    </tr>
</body>
</html>
