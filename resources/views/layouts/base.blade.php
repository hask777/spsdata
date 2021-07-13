<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{ secure_asset('css/app.css') }}" rel="stylesheet">
    <title>Document</title>
</head>
<body class="bg-gray-200">
    <header class="bg-gray-400 text-white p-4">
        <a href="{{route('main')}}">Main</a>
        <a href="{{route('teams')}}">Teams</a>

    </header>
        
        @yield('content') 
          
    <footer>

    </footer>
</body>
</html>