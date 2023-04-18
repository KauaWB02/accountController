@extends('layouts.app')
@section('title', 'Editar | Produto')


@section('content')
    <div class="container mt-5 ">
        <h1 class="text-black text-center">Atualizar informação do Produto</h1>
        <div class="border-top my-3"></div>
        <form action="" method="POST">
            @csrf
            <div class="form-group">
                <div class="form-group">
                    <label for="nome" class="text-black">Nome Produto</label>
                    <input type="text" class="form-control" name="nome" id="nome"
                        placeholder="Digite um nome ...">
                </div>
                <br>

                <div class="form-group">
                    <label for="nome" class="text-black">Categorias</label>
                    <select class="form-select" aria-label="Default select example">
                        <option selected>Eletronico</option>
                        <option value="1">One</option>
                        <option value="2">Two</option>
                        <option value="3">Three</option>
                    </select>
                </div>
                <br>
                <div class="form-group">
                    <label for="valor" class="text-black">Valor do Produto</label>
                    <input type="number" class="form-control" name="valor" id="valor"
                        placeholder="Digite um valor ...">
                </div>
                <br>
                <div class="form-group">
                    <input type="submit" name="submit" class="btn btn-primary">
                </div>
            </div>
        </form>
    </div>
@endsection
