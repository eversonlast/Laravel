<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Upload</title>
</head>
<body>
    <form action="{{route('upload')}}" method="POST" enctype="multipart/form-data">
        @csrf
        <input type="file" name="arquivo">

        <button type="submit">Enviar Arquivo</button>
    </form>
</body>
</html>