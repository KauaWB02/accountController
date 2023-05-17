@extends('layouts.app')

@section('title', 'Criação de conta')

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
        <form action="{{ route('account-store') }}" method="post">
            @csrf
            @method('POST')
            <div class="form-group">
                <form action="" method="post">
                    @csrf
                    <div class="form-group">
                        <label for="nome" class="text-white mb-2 mt-2" style="text-align: start !important">Nome</label>
                        <input type="text" class="form-control  bg-white text-black" name="nome" id="nome">
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-success mb-3 mt-4">
                            Criar
                        </button>
                    </div>
                </form>
            </div>
        </form>
    </div>
@endsection
