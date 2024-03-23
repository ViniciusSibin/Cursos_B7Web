<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pessoas aleatorias</title>
</head>
<body>
    <div class="container" style="display: flex;flex-wrap: wrap;justify-content: space-around;align-items: flex-start;">
        @foreach($pessoas as $pessoa)
            <x-card>
                @slot('imageSize')
                    300px
                @endslot
                @slot('name')
                    {{$pessoa['name']}}
                @endslot
                @slot('age')
                    {{$pessoa['age']}} Anos
                @endslot
                @slot('birth')
                    Nasceu em {{$pessoa['birth']}}
                @endslot

                <img style="width: 100%;height:auto;border-radius: 5px" src="{{$pessoa['image']}}" alt="{{$pessoa['name']}}">
            </x-card>
        @endforeach
    </div>
</body>
</html>