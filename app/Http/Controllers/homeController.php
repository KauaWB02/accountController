<?php

namespace App\Http\Controllers;


use App\Http\Component;
use App\Models\Accounts;
use App\Models\Accounts_itens;
use App\Models\Categoria;
use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;

class homeController extends Controller
{
  public function index(Request $request)
  {

    $isAdmin = Component::verifyIsAdmin();
    $accountsItens = Accounts::all();
    $contador = 0;
    foreach ($accountsItens as $key => $value) {
      $itens = Accounts_itens::all()->where('id_account', $value->id);

      $value['itens'] = $itens;

    }
    return view('home.index', compact('isAdmin','accountsItens','contador'));
  }
}