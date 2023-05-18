@extends('layouts.app')
@section('title', 'Cria | Usuários')


@section('content')
        <form action="{{ route('user-update', ['id' => $user->id]) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group d-flex flex-column justify-content-between mt-15">
                <div class="form-group w-50 mx-auto">
                    <label for="nome">Nome</label>
                    <input type="text" class="form-control" name="nome" value="{{ $user->name }}" id="nome"
                        placeholder="Nome usuário">
                </div>
                <br>
                <div class="form-group w-50 mx-auto">
                    <label for="Email">Email</label>
                    <input type="email" class="form-control bg" name="email" value="{{ $user->email }}" id="Email"
                        placeholder="E-mail de usuário">
                </div>
                <br>
                @if ($user->isAdmin == true)
                    <div class="form-check form-switch mx-auto">
                        <input class="form-check-input" name="isAdmin" type="checkbox" id="isAdmin" checked>
                        <label class="form-check-label" for="isAdmin">Desativar Admin</label>
                    </div>
                @else
                    <div class="form-check form-switch mx-auto">
                        <input class="form-check-input" name="isAdmin" type="checkbox" id="isAdmin">
                        <label class="form-check-label" for="isAdmin">Ativar Admin</label>
                    </div>
                @endif
                <br>
                <div class="form-group w-50 mx-auto">
                    <label for="password">Password</label>
                    <input type="password" class="form-control" name="password" value="{{ $user->password }}" id="password"
                        placeholder="Senha de usuário">
                </div>
                <br>
                <button type="submit" class="btn btn-primary w-25 ml-5" style="margin-left: 25% ;">Criar</button>
            </div>
        </form>
@endsection
