<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar</title>
</head>
<body>
    
    <form action="{{route('Update')}}" method="post">
    @csrf
    <label for="name">Title:</label>
    <input name="name" type="text" value="{{$serie->name}}">

    <label for="cast">Cast:</label>
    <input name="cast" type="text" value="{{$serie->cast}}">

    <label for="seasson">seasson:</label>
    <input name="seasson" type="number" value="{{$serie->seasson}}">

    <label for="description">description:</label>
    <input name="description" type="text" value="{{$serie->description}}">

    <label for="opinion">Opinion:</label>
    <input name="opinion" type="text" value="{{$serie->opinion}}">

    <button type="submit">Editar</button>
    </form>
</body>
</html>