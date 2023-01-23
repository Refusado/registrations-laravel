<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Usuário cadastrado</title>
</head>
<body>
    <h1>Olá, {{ $name }}</h1>
    <p>O cadastro foi realizado com sucesso!</p>

    <div class="back">
        <a href="{{ route('home') }}">Voltar para home</a>
    </div>
</body>
</html>
