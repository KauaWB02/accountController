@extends('layouts.app')
@section('title', 'Editar | Categoria')


@section('content')
    <div class="container mt-5 ">
        <h1 class="text-black text-center">Atualizar Categoria</h1>
        <div class="border-top my-3"></div>
        <form action="{{ route('categoria-update', ['id' => $categoria->id]) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <div class="form-group">
                    <label for="nome" class="text-black">Nome Categoria</label>
                    <input type="text" class="form-control" value="{{ $categoria->name }}" name="nome" id="nome"
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
