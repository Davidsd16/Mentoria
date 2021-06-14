<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Serie</title>
</head>
<body>
    
    <form action="{{route('Store')}}" method="post">
    @csrf
    <label for="name">Title:</label>
    <input name="name" type="text">

    <label for="cast">Cast:</label>
    <input name="cast" type="text">

    <label for="seasson">seasson:</label>
    <input name="seasson" type="number">

    <label for="description">description:</label>
    <input name="description" type="text">

    <label for="opinion">Opinion:</label>
    <input name="opinion" type="text">

    <button type="submit">Create New Serie</button>
    </form>
</body>
</html>