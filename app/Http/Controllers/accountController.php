<?php

namespace App\Http\Controllers;


use App\Http\Component;
use App\Models\Accounts;
use App\Models\accounts_itens;
use Illuminate\Http\Request;

class accountController extends Controller
{
  public function create()
  {

    $isAdmin = Component::verifyIsAdmin();
    return view('account.index', compact('isAdmin'));
  }

  public function store(Request $request)
  {

    $this->validate($request, [
      'nome' => 'required'
    ], [
        'nome.required' => 'O campo "Nome" é Obrigatório'
      ]);

    $dados = ['nome' => $request->nome];

    Accounts::create($dados);
    return redirect()->route('account-create');

  }
}