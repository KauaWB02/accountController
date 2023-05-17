@extends('layouts.app')

@section('title', 'Atualização de item')

@section('content')
    <div class="container-fluid">
        @if ($errors->any())
            <div class="alert alert-danger mt-3 text-white">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <form action="{{ route('item-update', ['id' => $item->id]) }}" method="post">
            @csrf
            @method('put')
            <div class="form-group">
                <form action="" method="post">
                    @csrf
                    <div class="form-group">
                        <label for="nome" class="text-white mb-2 mt-2" style="text-align: start !important">Nome</label>
                        <input type="text" class="form-control  bg-white text-black" name="nome"
                            value="{{ $item->nome }}" id="nome">
                    </div>
                    <div class="form-group">
                        <label for="item" class="text-white mb-2 mt-2" style="text-align: start !important">Item</label>
                        <input type="text" class="form-control  bg-white text-black" name="item"
                            value="{{ $item->item }}" id="item">
                    </div>
                    <div class="form-group">
                        <label for="qtd" class="text-white mb-2 mt-2"
                            style="text-align: start !important">Quantidade</label>
                        <input type="text" class="form-control  bg-white text-black" name="qtd"
                            value="{{ $item->qtd }}" id="qtd">
                    </div>
                    <div class="form-group">
                        <label for="dinheiro" class="text-white mb-2 mt-2"
                            style="text-align: start !important">Dinheiro</label>
                        <input type="text" class="form-control  bg-white text-black" name="dinheiro"
                            value="{{ $item->dinheiro }}" id="dinheiro">
                    </div>
                    <div class="form-group">
                        <label for="diamante" class="text-white mb-2 mt-2"
                            style="text-align: start !important">Diamante</label>
                        <input type="text" class="form-control  bg-white text-black" name="diamante"
                            value="{{ $item->diamante }}" id="diamante">
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-success mb-3 mt-4">
                            Atualizar
                        </button>
                    </div>
                </form>
            </div>
        </form>
    </div>
@endsection
