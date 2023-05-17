@extends('layouts.app')

@section('title', 'Atualização de item')

@section('content')
    <div class="container-fluid">
        <form action="{{ route('item-update', ['id' => $item->id]) }}" method="post">
            @csrf
            @method('put')
            <div class="form-group">
                <form action="" method="post">
                    @csrf
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
                        <button type="submit" class="btn btn-success mb-3 mt-4">
                            Atualizar
                        </button>
                    </div>
                </form>
            </div>
        </form>
    </div>
@endsection
