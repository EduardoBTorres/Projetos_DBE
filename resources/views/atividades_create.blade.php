<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Formulario de atividades</title>
</head>

<body>
    <h1>Insert new atividade</h1>
    <form action="/atividade" method="POST">
        @csrf
        {{-- <input type="hidden" name="_token" value="{{csrf_token()}}"/> --}}
        <table>
            <tr>
                <td>Titulo:</td>
                <td><input type="text" name="titulo" /></td>
            </tr>
            <tr>
                <td>Endereço:</td>
                <td><input type="text" name="endereco" /></td>
            </tr>
            <tr>
                <td>Distância(km):</td>
                <td><input type="number" name="distancia" /></td>
            </tr>
            <tr>
            <tr>
                <td>Tempo(min):</td>
                <td><input type="number" name="tempo" /></td>
            </tr>
            <tr>
                <td>Data:</td>
                <td><input type="date" name="data" /></td>
            </tr>
            <tr>
                <td>Descrição:</td>
                <td><input type="text" name="descricao" /></td>
            </tr>

            <tr align="center">
                <td colspan="2"><input type="submit" value="Criar" /></td>
            </tr>
            <tr align="center">
                <td colspan="2"><a href="/atividades" style="display: inline">&#9664;&nbsp;Voltar</a></td>
            </tr>
        </table>
    </form>
</body>

</html>
