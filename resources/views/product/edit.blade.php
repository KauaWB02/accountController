@extends('layouts.app')
@section('title', 'Editar | Produto')


@section('content')
    <div class="container mt-5 ">
        <h1 class="text-black text-center">Atualizar informação do Produto</h1>
        <div class="border-top my-3"></div>
        <form action="{{ route('product-update', ['id' => $product->id]) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <div class="form-group">
                    <label for="nome" class="text-black">Nome Produto</label>
                    <input type="text" class="form-control" value="{{ $product->product_name }}" name="nome"
                        id="nome" placeholder="Digite um nome ...">
                </div>
                <br>

                <div class="form-group">
                    <label for="nome" class="text-black">Categorias</label>
                    <select class="form-select" name="categoria" aria-label="Default select example">
                        <option value="{{ $product->id_categoria }}" selected>{{ $product->name_categoria }}</option>
                        @foreach ($listaCategorias as $categoria)
                            <option value="{{ $categoria->id }}">{{ $categoria->name }}</option>
                        @endforeach
                    </select>
                </div>
                <br>
                <div class="form-group">
                    <label for="valor" class="text-black">Valor do Produto</label>
                    <input type="number" class="form-control" value="{{ $product->unitary_value }}" name="valor"
                        id="valor" placeholder="Digite um valor ...">
                </div>
                <br>
                <div class="form-group">
                    <input type="submit" name="submit" class="btn btn-primary">
                </div>
            </div>
        </form>
    </div>
@endsection
