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

<body class="bg-secondary d-flex" style="height: 100vh">
    <div class="container-fluid d-flex">

        <div class="bg-dark m-auto w-50 p-5">
            @if (!empty($msg))
                <div class="text-light bg-danger mb-3 p-2 rounded-2">{{ $msg }}</div>
            @endif
            <h1 class="text-white text-center">Controle de contas</h1>
            <form action="{{ route('login-store') }}" method="POST">
                @csrf

                <div class="form-group">
                    <div class="form-group">
                        <label for="email" class="text-white">E-mail</label>
                        <input type="text" class="form-control" name="email" id="email">
                    </div>
                    <div class="form-group">
                        <label for="password" class="text-white">Senha</label>
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
