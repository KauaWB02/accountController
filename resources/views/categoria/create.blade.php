@extends('layouts.app')
@section('title', 'Criação | Categoria')


@section('content')
    <div class="container mt-5 ">
        <h1 class="text-black text-center">Registrar Categoria</h1>
        <div class="border-top my-3"></div>
        <form action="" method="POST">
            @csrf
            <div class="form-group">
                <div class="form-group">
                    <label for="nome" class="text-black">Nome Categoria</label>
                    <input type="text" class="form-control" name="nome" id="nome"
                        placeholder="Digite um nome ...">
                </div>
                <br>
                <div class="form-group">
                    <input type="submit" name="submit" class="btn btn-primary">
                </div>
            </div>
        </form>
    </div>
@endsection
