@extends('layouts.app')
@section('title', 'Cria | Usuários')


@section('content')
    <div class="container mt-5 mb-5 rounded  w-50 bg-light">
        <form action="{{ route('user-store') }}" method="POST">
          @csrf
            <div class="form-group d-flex flex-column justify-content-between mt-15">
                <div class="form-group w-50 mx-auto">
                    <label for="nome">Nome</label>
                    <input type="text" class="form-control" name="nome" id="nome" placeholder="Nome usuário">
                </div>
                <br>
                <div class="form-group w-50 mx-auto">
                    <label for="Email">Email</label>
                    <input type="email" class="form-control bg" name="email"  id="Email" placeholder="E-mail de usuário">
                </div>
                <br>
                <div class="form-check form-switch mx-auto">
                    <input class="form-check-input" name="isAdmin" type="checkbox" id="isAdmin">
                    <label class="form-check-label" for="isAdmin">Ativar Admin</label>
                </div>
                <br>
                <div class="form-group w-50 mx-auto">
                    <label for="password">Password</label>
                    <input type="password" class="form-control" name="password" id="password" placeholder="Senha de usuário">
                </div>
                <br>
                <button type="submit" class="btn btn-primary w-25 ml-5" style="margin-left: 25% ;">Criar</button>
            </div>
        </form>
    </div>
@endsection
