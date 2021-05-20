<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="{{asset('/css/style.css')}}">
    <title>Editar de Usuário</title>
</head>
<body>
    <div class="formulario">
        <form action="{{route('user.update', ['user'=>$user->id])}}" method="post" class="teste">
         @csrf
         @method('PUT')
             <label for="">Nome do Usuário: </label>   
             <input type="text" name="name" value="{{$user->name}}">
     
             <label for="">Email do usuário</label>
             <input type="email" name="email" value="{{$user->email}}">
     
             <label for="">Senha o usuário</label>
             <input type="password" name="password">
     
             <input type="submit" value="Editar usuário">
         </form>    
         <div>teste</div> 
    </div>
</body>
</html>