<!DOCTYPE html>
<html lang="pt-br" data-bs-theme="dark">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon">
    <script src="https://kit.fontawesome.com/39f9864021.js" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>

<body style="min-height: 100vh; background-color: gray;" id="body">
    <div class="flex-shrink-0 p-3" style="width: 280px; background-color: #212529; position: fixed; height: 100%; float: left; ">
        <a href="{{ route('home-index') }}"
            class="d-flex pb-3 mb-3 link-body-emphasis text-decoration-none border-bottom">

            <span class="fs-5 fw-semibold">Mago</span>
        </a>
        <ul class="list-unstyled ps-0">
            <li class="mb-1">
                <button class="btn btn-toggle d-inline-flex  align-items-center rounded border-0 collapsed"
                    data-bs-toggle="collapse" data-bs-target="#conta-collapse" aria-expanded="true">
                    Conta
                </button>
                <div class="collapse" id="conta-collapse" style="">
                    <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 ps-4 small">
                        <li><a href="{{ route('account-create') }}"
                                class="link-body-emphasis d-inline-flex text-decoration-none rounded">Criar</a></li>
                    </ul>
                </div>
            </li>
            @if ($isAdmin == true)
                <li class="mb-1">
                    <button class="btn btn-toggle d-inline-flex  align-items-center rounded border-0 collapsed"
                        data-bs-toggle="collapse" data-bs-target="#usuario-collapse" aria-expanded="true">
                        Usuário
                    </button>
                    <div class="collapse" id="usuario-collapse" style="">
                        <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 ps-4 small">
                            <li><a href="{{ route('user-create') }}"
                                    class="link-body-emphasis d-inline-flex text-decoration-none rounded">Criar</a></li>
                            <li><a href="{{ route('user-index') }}"
                                    class="link-body-emphasis d-inline-flex text-decoration-none rounded">Listar</a>
                            </li>
                        </ul>
                    </div>
                </li>
            @endif
            <li class="mb-1">
                <button class="btn btn-toggle d-inline-flex  align-items-center rounded border-0 collapsed  fw-bolder"
                    data-bs-toggle="collapse" data-bs-target="#functions-collapse" aria-expanded="true">
                    Funções
                </button>
                <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 ps-4 small">
                    <li>
                        <a id="scrollButton" class="link-body-emphasis d-inline-flex text-decoration-none rounded"
                            style="cursor: pointer;">Descer</a>
                    </li>
                    <li>
                        <a id="modalId"  data-toggle="modal" data-target="#myModal" class="mt-2 link-body-emphasis d-inline-flex text-decoration-none rounded"
                            style="cursor: pointer;">Abrir Itens</a>
                    </li>
                </ul>
            </li>
            <li class="border-top my-3"></li>
            <li class="mb-1" <li class="btn-toggle-nav list-unstyled fw-normal ps-4 pb-1 small">
                <form action="{{ route('login-loggout') }}" method="post">
                    @csrf
                    @method('POST')

                    <button type="submit" style="background-color: #212529 !important; border: none;">Deslogar</button>

                </form>

            </li>

        </ul>
    </div>

    <div class="container-fluir" style="float: right; width: 81%;">
        @yield('content')
    </div>
    <div class="clear" style="clear: both;"></div>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous">
    </script>
    <script>
        document.getElementById("scrollButton").addEventListener("click", function() {
            let body = document.getElementById('body');
            body.scrollIntoView({
                behavior: "smooth",
                block: "end"
            });
        });
    </script>

    <script>
        $(document).ready(function() {
            $("#modalId").on("click", function() {
                $("[id^='collapseModelAccount']").collapse("show");
            });
        });
    </script>
</body>

</html>
