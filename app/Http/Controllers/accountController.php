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
      'email' => 'required',
      'nome' => 'required'
    ], [
        'email.required' => 'O campo "E-mail" é Obrigatório',
        'nome.required' => 'O campo "Nome" é Obrigatório'
      ]);

    $dados = [
      'email' => $request->email,
      'nome' => $request->nome,
      'dinheiro' => (String)$request->dinheiro,
      'diamante' => (String)$request->diamante,
    ];

    Accounts::create($dados);
    return redirect()->route('account-create');

  }

  public function edit($id)
  {
    $isAdmin = Component::verifyIsAdmin();
    $account = Accounts::where('id', $id)->first();
    return view('account.edit', compact('isAdmin', 'account'));
  }

  public function update(Request $request, $id)
  {

    $dados = [
      'email' => $request->email,
      'nome' => $request->nome,
      'dinheiro' => (String)$request->dinheiro,
      'diamante' => (String)$request->diamante,
    ];

    Accounts::where('id', $id)->update($dados);
    return redirect()->route('home-index');
  }

  public function destroy($id)
  {
    Accounts::where('id', $id)->delete();
    return redirect()->route('home-index');
  }
}