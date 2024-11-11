
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de atividadess</title>
</head>
<body>
    @if ($atividades)
        <h1>{{ $atividades->titulo }}</h1>
        <ul>
            <li>Descricao: {{ $atividades->descricao }}</li>
            <li>Endereço: {{ $atividades->endereco }}</li>
            <li>Data: {{ $atividades->data }}</li>
        </ul>
        <table>
            <tr>
                <td>
                    <form action="{{ route('remove',$atividades->id) }}" method='post'>
                        @csrf
                        <input type="submit" name='confirmar' value="Deletar" />
                    </form>
                </td>
                <td>
                    <a href="/atividades"><button>Cancelar</button></a>
                </td>
            </tr>
        </table>
    @else
        <p>atividadess não encontrados! </p>
    @endif
    <a href="/atividadess">&#9664;Voltar</a>
</body>
</html>
