@extends('layouts.app')

@section('title', 'Edição de conta')

@section('content')
    <div class="container-fluid">
        <form action="{{ route('account-update', ['id' => $account->id]) }}" method="post">
            @csrf
            @method('put')
            <div class="form-group">
                <form action="" method="post">
                    @csrf
                    <div class="form-group">
                        <label for="email" class="text-white mb-2 mt-2" style="text-align: start !important">E-mail</label>
                        <input type="text" class="form-control  bg-white text-black" name="email" id="email"
                            value="{{ $account->email }}">
                    </div>
                    <div class="form-group">
                        <label for="nome" class="text-white mb-2 mt-2" style="text-align: start !important">Nome</label>
                        <input type="text" class="form-control bg-white text-black" name="nome" id="nome"
                            value="{{ $account->nome }}">
                    </div>
                    <div class="form-group">
                        <label for="dinheiro" class="text-white mb-2 mt-2"
                            style="text-align: start !important">Dinheiro</label>
                        <input type="number" class="form-control bg-white text-black" name="dinheiro" id="dinheiro"
                            value="{{ $account->dinheiro }}">
                    </div>
                    <div class="form-group">
                        <label for="diamante" class="text-white mb-2 mt-2"
                            style="text-align: start !important">Diamante</label>
                        <input type="number" class="form-control bg-white text-black" name="diamante" id="diamante"
                            value="{{ $account->diamante }}">
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
