<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Formulario de bicicletas</title>
</head>

<body>
    <h1>Insert new bicicleta</h1>
    <form action="/bicicleta" method="POST">
        @csrf
        {{-- <input type="hidden" name="_token" value="{{csrf_token()}}"/> --}}
        <table>
            <tr>
                <td>Marca:</td>
                <td><input type="text" name="marca"/></td>
            </tr>
            <tr>
                <td>Modelo:</td>
                <td><input type="text" name="modelo" /></td>
            </tr>
            <tr>
                <td>Aro:</td>
                <td><input type="number" name="aro"/></td>
            </tr>
            <tr>
                <td>Cor:</td>
                <td><input type="text" name="cor"/></td>
            </tr>

            <tr align="center">
                <td colspan="2"><input type="submit" value="Criar"/></td>
            </tr>
            <tr align="center">
                <td colspan="2"><a href="/bicicletas" style="display: inline">&#9664;&nbsp;Voltar</a></td>
            </tr>
        </table>
    </form>
</body>

</html>
