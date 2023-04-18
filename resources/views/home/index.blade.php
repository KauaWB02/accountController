@extends('layouts.app')

@section('title', 'Home | DeshBoard')

@section('content')

    <div class="container">
        <div class="row mt-5">
            <div class="col-6 text-center">
                <div class="row row-cols-1 rounded-3 bg-warning" style="width: 70%; margin: auto;">
                    <div class="text-black">
                        Quantidade de produtos
                    </div>
                    <div class="text-light fw-bold">
                        500
                    </div>
                </div>
            </div>

            <div class="col-6 text-center">
                <div class="row row-cols-1 rounded-3 bg-primary" style="width: 70%; margin: auto;">
                    <div class="text-black">
                        Usuários
                    </div>
                    <div class="text-light fw-bold">
                        500
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
