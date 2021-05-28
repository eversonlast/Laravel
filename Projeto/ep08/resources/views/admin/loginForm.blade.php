<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>

    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet">

<style>
    html, body{
        height:100%
    }

    body{
        display: -ms-flexbox;
        display: flex;
        -ms-flex-align: center;
        align-items: center;
        padding-top: 40px;
        padding-bottom: 40px;
        background-color: #f5f5f5;
    }

    .form-signin{
        width: 100%;
        max-width: 330px;
        padding: 15px;
        margin: auto;
    }

    .form-signin .checkbox{
        font-weight: 400;
    }

    .form-signin .form-control{
        position: relative;
        box-sizing: border-box;
        height: auto;
        padding: 10px;
        font-size: 10px;
    }

    .form-signin .form-control:focus{
        z-index: 2;
    }

    .form-signin input[type="email"]{
        margin-bottom: -1px;
        border-bottom-right-radius: 0;
        border-bottom-left-radius: 0;
    }

    .form-signin input[type="password"]{
        margin-bottom: 10px;
        border-top-left-radius: 0;
        border-top-right-radius: 0;
    }

    img{
        max-width: 100%;
        margin-bottom: 30px;
    }
</style>
</head>
<body>
    <form  class="form-signin" method="POST" action="{{ route('admin.login.do') }}">
        @csrf

        <img src="" alt="">

        @if($errors->all())
            @foreach($errors->all() as $error)
                <div class="alert alert-danger" role="alert">
                    {{$error}}
                </div>
            @endforeach
        @endif

        <label for="email" class="sr-only">Endereço de email</label>
        <input type="text" name="email" class="form-control" id="email" placeholder="Seu email"
        required>


        <label for="password" class="sr-only">Senha:</label>
        <input type="password" name="password" class="form-control" placeholder="Senha"
        required>

        <button class="btn btn-lg btn-primary btn-block" type="submit">Login</button>

    </form>

    <!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"></script>
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</body>
</html>