@extends('layouts.app')

@section('title', 'Home')

@section('content')

    <div class="container-fluir w-100 bg-white">
        <div class="d-flex flex-column p-5">
            @foreach ($accountsItens as $acount)
                <div class="box mb-5 bg-dark-subtle rounded-3">
                    <div class="d-flex flex-row justify-content-between  p-2">
                        <div class="text-white text-center" style="width: 25%">
                            <p class="m-2">{{ $acount->nome }}</p>
                        </div>
                        <div class="text-white text-center data " style="width: 25%">
                            <p class="m-2">{{ $acount->created_at }}</p>
                        </div>
                        <div class="button" style="width: 25%">
                            <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                data-bs-target="#modalItem{{$contador}}">
                                Adicionar item
                            </button>
                            <div class="modal fade" id="modalItem{{$contador}}" tabindex="-1" aria-labelledby="exampleModalLabel"
                                aria-hidden="true">
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
                                                    <label for="nome" class="text-white mb-2 mt-2"
                                                        style="text-align: start !important">Nome</label>
                                                    <input type="text" class="form-control  bg-white text-black"
                                                        name="nome" id="nome" required>
                                                </div>
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
                                                    <label for="dinheiro" class="text-white mb-2 mt-2"
                                                        style="text-align: start !important">Dinheiro</label>
                                                    <input type="text" class="form-control  bg-white text-black"
                                                        name="dinheiro" id="dinheiro">
                                                </div>
                                                <div class="form-group">
                                                    <label for="diamante" class="text-white mb-2 mt-2"
                                                        style="text-align: start !important">Diamante</label>
                                                    <input type="text" class="form-control  bg-white text-black"
                                                        name="diamante" id="diamante">
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
                                aria-controls="collapseWidthExample">
                                Itens
                            </button>
                        </div>
                    </div>
                    <div class="collapse collapse-horizontal" id="collapseModelAccount{{ $contador }}">
                        <div class="card card-body w-100 bg-body-secondary">
                            <table class="table table-dark table-hover">
                                <thead>
                                    <tr>
                                        <th scope="col">Nome</th>
                                        <th scope="col">Item</th>
                                        <th scope="col">Quantidade</th>
                                        <th scope="col">Dinheiro</th>
                                        <th scope="col">Diamante</th>
                                        <th scope="col">Editar</th>
                                        <th scope="col">Exlcuir</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($acount->itens as $itens)
                                        <tr>
                                            <td>{{ $itens->nome }}</td>
                                            <td>{{ $itens->item }}</td>
                                            <td>{{ $itens->qtd }}</td>
                                            <td>{{ $itens->dinheiro }}</td>
                                            <td>{{ $itens->diamante }}</td>
                                            <td>
                                                <a href="{{ route('item-edit', ['id' => $itens->id]) }}" class="btn btn-primary me-2">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                        fill="currentColor" class="bi bi-pencil" viewBox="0 0 16 16">
                                                        <path
                                                            d="M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168l10-10zM11.207 2.5 13.5 4.793 14.793 3.5 12.5 1.207 11.207 2.5zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293l6.5-6.5zm-9.761 5.175-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325z" />
                                                    </svg>
                                                </a>
                                            </td>
                                            <td>
                                                <form action="{{ route('item-destroy', ['id' => $itens->id]) }}" method="post">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger"><svg
                                                            xmlns="http://www.w3.org/2000/svg" width="16"
                                                            height="16" fill="currentColor" class="bi bi-trash"
                                                            viewBox="0 0 16 16">
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
    </div>

@endsection
