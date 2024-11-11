
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Página de update</title>
</head>

<body>
    <h1>Insert new atividade</h1>
    <form action="{{route('update',$atividades->id)}}" method="POST">
        @csrf
        <table>
            <tr>
                <td>Titulo:</td>
                <td><input type="text" name="titulo" value="{{$atividades->titulo}}"/></td>
            </tr>
            <tr>
                <td>Endereco:</td>
                <td><input type="text" name="endereco" value="{{$atividades->endereco}}"/></td>
            </tr>
            <tr>
                <td>Distância:</td>
                <td><input type="number" name="distancia" value="{{$atividades->distancia}}"/></td>
            </tr>
            <tr>
                <td>Tempo:</td>
                <td><input type="number" name="tempo" value="{{$atividades->tempo}}"/></td>
            </tr>
            <tr>
                <td>Data:</td>
                <td><input type="date" name="data" value="{{$atividades->data}}"/></td>
            </tr>
            <tr>
                <td>Descrição:</td>
                <td><input type="text" name="text" value="{{$atividades->descricao}}"/></td>
            </tr>

            <tr align="center">
                <td colspan="2">
                    <input type="submit" value="Salvar"/>
                    <a href="/atividades"><button form=cancel >Cancelar</button></a>
                </td>
            </tr>
        </table>
    </form>
</body>
</html>
