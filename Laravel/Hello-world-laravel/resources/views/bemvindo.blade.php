<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Página de sair</title>
</head>
<body>
    @foreach ($ingredientes as $ing)
        <p>{{$ing}} - 
            @component('components.botao') 
                @slot('cor')
                    blue
                @endslot
                Editar 
            @endcomponent
            @component('components.botao') 
                @slot('cor')
                    red
                @endslot
                Deletar 
            @endcomponent
        </p>
    @endforeach
</body>
</html>