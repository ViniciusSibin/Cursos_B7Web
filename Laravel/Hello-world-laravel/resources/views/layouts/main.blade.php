<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Layout</title>
</head>
<body>
    @section('header') 
    @show

    <div class="container" style="padding: 20px; height: 54vh">
        @yield('content')
    </div>

    @section('footer')
    @show


</body>
</html>