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
        @for ($i = 0; $i < 50; $i++)
            @component('components.card')
                @slot('imageSize')
                    200px
                @endslot
                @slot('name')
                    
                @endslot
                @slot('age')
                    
                @endslot
                @slot('birth')
                    
                @endslot
                <img style="width: 100%;height:auto;border-radius: 5px" src="{{$url . $i}}" alt="{{$url . $i}}">
            @endcomponent    
        @endfor
    </div>
</body>
</html>