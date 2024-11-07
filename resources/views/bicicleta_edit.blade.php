
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Página de update</title>
</head>

<body>
    <h1>Insert new bicicleta</h1>
    <form action="{{route('update',$bicicleta->id)}}" method="POST">
        @csrf
        <table>
            <tr>
                <td>Marca:</td>
                <td><input type="text" name="marca" value="{{$bicicleta->marca}}"/></td>
            </tr>
            <tr>
                <td>Modelo:</td>
                <td><input type="text" name="marca" value="{{$bicicleta->modelo}}"/></td>
            </tr>
            <tr>
                <td>Aro:</td>
                <td><input type="number" name="aro" value="{{$bicicleta->aro}}"/></td>
            </tr>
            <tr>
                <td>Cor:</td>
                <td><input type="text" name="cor" value="{{$bicicleta->cor}}"/></td>
            </tr>

            <tr align="center">
                <td colspan="2">
                    <input type="submit" value="Salvar"/>
                    <a href="/bicicletas"><button form=cancel >Cancelar</button></a>
                </td>
            </tr>
        </table>
    </form>
</body>
</html>
