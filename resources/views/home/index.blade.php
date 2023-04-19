@extends('layouts.app')

@section('title', 'Home | DeshBoard')

@section('content')

    <div class="container">
        <div class="row mt-5">
            <div class="col-4 text-center">
                <div class="row row-cols-1 shadow rounded-3 bg-light" style="width: 70%; margin: auto;">
                    <div class="text-black">
                        Quantidade de Produtos
                    </div>
                    <div class="text-black fw-bold">
                        {{ $product }}
                    </div>
                </div>
            </div>
            <div class="col-4 text-center">
                <div class="row row-cols-1 shadow rounded-3 bg-light" style="width: 70%; margin: auto;">
                    <div class="text-black">
                        Quantidade de Categorias
                    </div>
                    <div class="text-black fw-bold">
                        {{ $categoria }}
                    </div>
                </div>
            </div>
            <div class="col-4 text-center">
                <div class="row row-cols-1 shadow rounded-3 bg-light" style="width: 70%; margin: auto;">
                    <div class="text-black">
                        Quantidade de Usuários
                    </div>
                    <div class="text-black fw-bold">
                        {{ $user }}
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
