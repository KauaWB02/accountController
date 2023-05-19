<?php

namespace App\Http\Controllers;

use App\Models\Accounts_itens;
use DB;
use Illuminate\Http\Request;

class searchController extends Controller
{
  public function search(Request $request)
  {
    $item = $request->input('item');

    $itemDados = Accounts_itens::where('item', $item)->groupBy('item')->select('item', DB::raw('SUM(qtd) as total'))->first();

    if (empty($itemDados)) {
      return response()->json(['mensagem' => 'Requisição AJAX bem-sucedida', 'item' => $item, 'quantity' => 0]);

    }

    return response()->json(['mensagem' => 'Requisição AJAX bem-sucedida', 'item' => $itemDados->item, 'quantity' => $itemDados->total]);
  }
}