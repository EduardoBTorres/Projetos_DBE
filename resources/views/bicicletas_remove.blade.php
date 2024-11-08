
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de bicicletas</title>
</head>
<body>
    @if ($bicicleta)
        <h1>{{ $bicicleta->marca }}</h1>
        <ul>
            <li>Modelo: {{ $bicicleta->modelo }}</li>
            <li>Aro: {{ $bicicleta->aro }}</li>
            <li>Cor: {{ $bicicleta->cor }}</li>
        </ul>
        <table>
            <tr>
                <td>
                    <form action="{{ route('remove',$bicicleta->id) }}" method='post'>
                        @csrf
                        <input type="submit" name='confirmar' value="Remover" />
                    </form>
                </td>
                <td>
                    <a href="/bicicletas"><button>Cancelar</button></a>
                </td>
            </tr>
        </table>
    @else
        <p>bicicletas não encontrados! </p>
    @endif
    <a href="/bicicletas">&#9664;Voltar</a>
</body>
</html>
