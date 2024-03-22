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
            <div class="card" 
                 style="flex: 0 1 400px; 
                        border: 1px solid #ccc;
                        border-radius: 5px;
                        padding: 10px;
                        margin: 10px;
                        background: #fff;">
                <img style="width: 100%;height:auto;border-radius: 5px" src="{{$pessoa['image']}}" alt="{{$pessoa['name']}}">
                <h2 style="margin: 5px 0;">{{$pessoa['name']}}</h2>
                <p style="margin: 5px 0;">{{$pessoa['age']}} Anos</p>
                <p style="margin: 5px 0;">Nasceu em {{$pessoa['birth']}}</p>
            </div>
        @endforeach
    </div>
</body>
</html>