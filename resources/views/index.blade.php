<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mis Series</title>
</head>
<body>
    <h1>SERIES</h1>
    <ul>
    @foreach ($series as $serie )
        
        <li>{{$serie->name}}</li>
        <a href="{{route('SeeMore',$serie->id)}}">
    <button>Ver Más</button></a>
    @endforeach
    </ul>
</body>
</html>