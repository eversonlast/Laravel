<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Create Product</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css">
    <!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" ></script>
</head>
<body class="bg-light">
    <div class="container mt-5">
        <form action="{{route('products.store')}}" method="POST" class="p-5 bg-white" enctype="multipart/form-data">
            @csrf

            <div class="form-group">
                <label for="title">Título do Produto:</label>
                <input type="text" class="form-control mb-3" id="title" name="title">
            </div>

            <div class="custom-file mb-3">
                <input type="file" class="custom-file-input" id="customFileLangHTML" name="images[]" multiple>
                <label class="custom-file-label" for="customFileLangHTML" data-browse="Enviar Imagens"></label>
            </div>

            <button type="submit" class="btn btn-primary">Cadastrar Produto</button>
        </form>
    </div>

    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
    
</body>
</html>