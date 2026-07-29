<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Cadastro de Oficina</title>
</head>
<body>

    <h1>Cadastro de Oficina</h1>

    @if ($errors->any())
        <div>
            <ul>
                @foreach ($errors->all() as $erro)
                    <li>{{ $erro }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="/oficinas" method="POST">
        @csrf

        <div>
            <label>Nome:</label>
            <input type="text" name="nome_oficina">
        </div>

        <br>

        <div>
            <label>Professor Responsavel:</label>
            <input type="text" name="professor_responsavel">
        </div>

        <br>

        <div>
            <label>Carga Horaria:</label>
            <input type="number" name="carga_horaria">
        </div>

        <br>

        <br>

        <div>
            <label>Turno:</label>
            <input type="text" name="turno">
        </div>

        <br>

        <button type="submit">
            Cadastrar
        </button>
    </form>

    <hr>

    <h2>Lista de oficina</h2>

    @if($oficinas->count() > 0)

        <ul>
            @foreach($oficinas as $oficina)
                <li>
                    {{ $oficina->nome_oficina }} -
                    {{ $oficina->professor_responsavel }} -
                    {{ $oficina->carga_horaria }} -
                    {{$oficina -> turno}}
                </li>
            @endforeach
        </ul>

    @else

        <p>Nenhum oficina cadastrado.</p>

    @endif

</body>
</html>