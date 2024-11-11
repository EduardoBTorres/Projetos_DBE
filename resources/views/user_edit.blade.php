
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Página de update</title>
</head>

<body>
    <h1>Insert new user</h1>
    <form action="{{route('update',$user->id)}}" method="POST">
        @csrf
        <table>
            <tr>
                <td>Usuario:</td>
                <td><input type="text" name="name" value="{{$user->name}}"/></td>
            </tr>
            <tr>
                <td>Email:</td>
                <td><input type="text" name="email" value="{{$user->email}}"/></td>
            </tr>
            <tr>
                <td>Senha:</td>
                <td><input type="pasword" name="password" value="{{$user->password}}"/></td>
            </tr>
            <tr>
                <td>CPF:</td>
                <td><input type="text" name="cpf" value="{{$user->cpf}}"/></td>
            </tr>

            <tr align="center">
                <td colspan="2">
                    <input type="submit" value="Salvar"/>
                    <a href="/users"><button form=cancel >Cancelar</button></a>
                </td>
            </tr>
        </table>
    </form>
</body>
</html>
