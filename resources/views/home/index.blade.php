@extends('layouts.app')

@section('title', 'Home')

@section('content')
    <div class="d-flex flex-column justify-content-center p-5">
        @foreach ($accountsItens as $acount)
            <div class="box mb-5 bg-dark-subtle rounded-3">
                <div class="row p-2">
                    <div class="col text-white text-center">
                        <p class="m-2">{{ $acount->email }}</p>
                    </div>
                    <div class="col text-white text-center"">
                        <p class="m-2">{{ $acount->nome }}</p>
                    </div>
                    <div class="col text-white text-center data d-flex flex-row justify-content-between">
                        <div class="m-2">
                            <i class="fa-solid fa-money-bill" style="color: green;"></i> {{ $acount->dinheiro }}
                        </div>
                        <div class="m-2">
                            <i class="fa-solid fa-diamond" style="color: #0dcaf0;"></i> {{ $acount->diamante }}
                        </div>
                    </div>
                    <div class="col button d-flex">
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                            data-bs-target="#modalItem{{ $contador }}"
                            style="height: 45px;
                                width: 140px;
                                margin-right: 2px;">
                            Adicionar item
                        </button>
                        <div class="modal fade" id="modalItem{{ $contador }}" tabindex="-1"
                            aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h1 class="modal-title fs-5 text-white" id="exampleModalLabel">Adicionar itens
                                        </h1>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <form action="{{ route('item-store', ['id' => $acount->id]) }}" method="post">
                                            @csrf
                                            <div class="form-group">
                                                <label for="item" class="text-white mb-2  mt-2"
                                                    style="text-align: start !important">Item</label>
                                                <input type="text" class="form-control bg-white text-black"
                                                    name="item" id="item" required>
                                            </div>
                                            <div class="form-group">
                                                <label for="qtd" class="text-white mb-2  mt-2"
                                                    style="text-align: start !important">Quantidade</label>
                                                <input type="text" class="form-control  bg-white text-black"
                                                    name="qtd" id="qtd" required>
                                            </div>
                                            <div class="form-group">
                                                <button type="submit" class="btn btn-success mb-3 mt-4">
                                                    Criar
                                                </button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <button class="btn btn-info" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseModelAccount{{ $contador }}" aria-expanded="false"
                            aria-controls="collapseWidthExample" style="height: 45px;">
                            Itens
                        </button>
                    </div>
                    <div class="col d-flex flex-row justify-content-center">
                        <form class="me-2" action="{{ route('account-destroy', ['id' => $acount->id]) }}" method="post">
                            @csrf
                            @method('delete')
                            <button class="btn btn-danger" type="submit" style="height: 45px;">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                    class="bi bi-trash" viewBox="0 0 16 16">
                                    <path
                                        d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5Zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5Zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6Z" />
                                    <path
                                        d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1ZM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118ZM2.5 3h11V2h-11v1Z" />
                                </svg>
                            </button>
                        </form>
                        <a href="{{ route('account-edit', ['id' => $acount->id]) }}" class="btn btn-primary"
                            style="height: 45px;">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="15" fill="currentColor"
                                class="bi bi-pencil" viewBox="0 0 16 16">
                                <path
                                    d="M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168l10-10zM11.207 2.5 13.5 4.793 14.793 3.5 12.5 1.207 11.207 2.5zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293l6.5-6.5zm-9.761 5.175-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325z" />
                            </svg>
                        </a>
                    </div>
                </div>
                <div class="collapse collapse-horizontal" id="collapseModelAccount{{ $contador }}">
                    <div class="card card-body w-100 bg-body-secondary">
                        <table class="table table-dark table-hover">
                            <thead>
                                <tr>
                                    <th scope="col">Item</th>
                                    <th scope="col">Quantidade</th>
                                    <th scope="col">Editar</th>
                                    <th scope="col">Exlcuir</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($acount->itens as $itens)
                                    <tr>
                                        <td>{{ $itens->item }}</td>
                                        <td>{{ $itens->qtd }}</td>
                                        <td>
                                            <a href="{{ route('item-edit', ['id' => $itens->id]) }}"
                                                class="btn btn-primary me-2">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                    fill="currentColor" class="bi bi-pencil" viewBox="0 0 16 16">
                                                    <path
                                                        d="M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168l10-10zM11.207 2.5 13.5 4.793 14.793 3.5 12.5 1.207 11.207 2.5zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293l6.5-6.5zm-9.761 5.175-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325z" />
                                                </svg>
                                            </a>
                                        </td>
                                        <td>
                                            <form action="{{ route('item-destroy', ['id' => $itens->id]) }}"
                                                method="post">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger"><svg
                                                        xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                        fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
                                                        <path
                                                            d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5Zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5Zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6Z" />
                                                        <path
                                                            d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1ZM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118ZM2.5 3h11V2h-11v1Z" />
                                                    </svg></button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            @php
                
                $contador++;
            @endphp
        @endforeach
    </div>

@endsection
