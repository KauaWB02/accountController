<?php

namespace App\Http\Controllers;

use App\Models\Accounts_itens;
use Illuminate\Http\Request;

class searchController extends Controller
{
  public function search(Request $request)
  {
    $item = $request->input('item');
    
    $quantideItem = Accounts_itens::where('item',$item)->sum('qtd');

    return response()->json(['mensagem' => 'Requisição AJAX bem-sucedida','quantity'=>$quantideItem]);
  }
}