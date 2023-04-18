<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login | DeshBoard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>

<body class="bg-secondary">
    <div class="container-fluid">
        <div class="position-absolute top-50 start-50 translate-middle bg-white rounded-1 p-5 shadow-lg p-3 mb-5 rounded">
          <h1>DeshBoard</h1>
            <form action="" method="POST">
                @csrf
                <div class="form-group">
                    <div class="form-group">
                        <label for="name" class="text-black">E-mail</label>
                        <input type="text" class="form-control" name="name" id="name">
                    </div>
                    <div class="form-group">
                        <label for="password" class="text-black">Senha</label>
                        <input type="password" class="form-control" name="password" id="password">
                    </div>
                    <div class="form-group mt-3">
                        <button type="submit" class="btn btn-success">Entrar</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous">
    </script>
</body>

</html>
