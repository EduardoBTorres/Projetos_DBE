<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Usuarios</title>
</head>
<body>
    <h1>Usuarios</h1>
    @if ($users->count()>0)
    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Nome</th>
                <th>Email</th>
                <th>Senha</th>
                <th>CPF</th>
            </tr>
        </thead>
        <tbody>
            @foreach($users as $user)
            <tr>
                <td>{{$user->id}}</td>
                <td>{{$user->name}}</td>
                <td>{{$user->email}}</td>
                <td>{{$user->senha}}</td>
                <td>{{($user->cpf)}}</td>
                <td><a href="{{route('edit', $user->id)}}" title="Editar">Editar</a></td>
                <td><a href="{{route('remove', $user->id)}}" title="Deletar">Deletar</a></td>
            </tr>
            @endforeach
        </tbody>
    </table>
    @else
    <p>Usuarios não encontrados! </p>
    @endif
    <tr align="center">
        <td colspan="2"><a href="/user" style="display: inline">Registrar usuario</a></td><br></br>
        <td colspan="2"><a href="/bicicletas" style="display: inline">Bicicletas</a></td><br></br>
        <td colspan="2"><a href="/atividades" style="display: inline">Atividades</a></td>
    </tr>
</body>
</html>
