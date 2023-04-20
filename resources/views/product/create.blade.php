@extends('layouts.app')
@section('title', 'Criação | Produto')


@section('content')
    <div class="container mt-5 ">
        <h1 class="text-black text-center">Registrar informação de um Produto</h1>
        <div class="border-top my-3"></div>
        <form action="{{ route('product-store') }}" method="POST">
            @csrf
            {{-- @method('POST') --}}
            <div class="form-group">
                <div class="form-group">
                    <label for="nome" class="text-black">Nome Produto</label>
                    <input type="text" class="form-control" name="nome" id="nome" placeholder="Digite um nome ..."
                        required>
                </div>
                <br>

                <div class="form-group">
                    <label for="nome" class="text-black">Categoria</label>
                    <select class="form-select" name="categoria" aria-label="Default select example" required>
                        <option value="" selected>Selecione uma categoria</option>
                        @foreach ($listaCategorias as $categoria)
                            <option value="{{ $categoria->id }}">{{ $categoria->name }}</option>
                        @endforeach
                    </select>
                </div>
                <br>
                <div class="form-group">
                    <label for="valor" class="text-black">Valor do Produto</label>
                    <input type="number" class="form-control" name="valor" id="valor"
                        placeholder="Digite um valor ..." required>
                </div>
                <br>
                <div class="form-group">
                    <input type="submit" name="submit" class="btn btn-primary">
                </div>
            </div>
        </form>
    </div>
@endsection
