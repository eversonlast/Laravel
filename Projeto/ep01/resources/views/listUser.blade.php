<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Detalhes Usuario</title>
</head>
<body>
    <h1>{{$user->name}}</h1>
    <p>{{$user->email}}</p>
    <p>{{date('d/m/Y', strtotime($user->created_at))}}</p>
</body>
</html>