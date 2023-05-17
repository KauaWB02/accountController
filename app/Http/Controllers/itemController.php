<?php

namespace App\Http\Controllers;


use App\Http\Component;
use App\Models\Accounts_itens;
use Illuminate\Http\Request;

class itemController extends Controller
{
  public function store(Request $request, $id)
  {
    $dados = [
      'id_account' => (int) $id,
      'nome' => $request->nome,
      'item' => $request->item,
      'qtd' => $request->qtd,
      'dinheiro' => $request->dinheiro,
      'diamante' => $request->diamante,
    ];
    Accounts_itens::create($dados);
    return redirect()->route('home-index');
  }

  public function edit($id)
  {
    $isAdmin = Component::verifyIsAdmin();
    $item = Accounts_itens::where('id', $id)->first();
    return view('item.edit', compact('isAdmin', 'item'));
  }
  public function update(Request $request, $id)
  {

    $dados = [
      'nome' => $request->nome,
      'item' => $request->item,
      'qtd' => $request->qtd,
      'dinheiro' => $request->dinheiro,
      'diamante' => $request->diamante,
    ];

    Accounts_itens::where('id', $id)->update($dados);
    return redirect()->route('home-index');
  }

  public function destroy($id)
  {
    Accounts_itens::where('id', $id)->delete();
    return redirect()->route('home-index');
  }

}