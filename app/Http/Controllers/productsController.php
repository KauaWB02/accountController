<?php

namespace App\Http\Controllers;

use App\Http\Component;
use App\Models\Categoria;
use App\Models\Product;
use Illuminate\Database\Query\JoinClause;
use Illuminate\Http\Request;

class productsController extends Controller
{
  public function index()
  {
    $isAdmin = Component::verifyIsAdmin();
    $listProduct = Product::leftJoin('users', 'products.id_user', '=', 'users.id')
      ->leftJoin('categorias', 'products.id_categoria', '=', 'categorias.id')
      ->get([
        'products.id',
        'products.name AS product_name',
        'products.unitary_value',
        'products.created_at',
        'users.name AS name_user',
        'categorias.name AS name_categoria'
      ]);

    return view('product.index', compact('isAdmin', 'listProduct'));
  }

  public static function formatDate($data)
  {
    return date('d/m/Y', strtotime($data));
  }

  public function create()
  {
    $isAdmin = Component::verifyIsAdmin();
    $listaCategorias = Categoria::all();

    return view('product.create', compact('isAdmin', 'listaCategorias'));
  }

  public function edit($id)
  {

    $isAdmin = Component::verifyIsAdmin();

    $product = Product::leftJoin('categorias', 'products.id_categoria', '=', 'categorias.id')
      ->get([
        'products.id',
        'products.name AS product_name',
        'products.unitary_value',
        'products.created_at',
        'categorias.name AS name_categoria',
        'categorias.id AS id_categoria'
      ])->where('id', $id)->first();

    $listaCategorias = Categoria::all();
    return view('product.edit', compact('isAdmin', 'product', 'listaCategorias'));
  }

  public function update(Request $request, $id)
  {
    $data = [
      'name' => $request->nome,
      'unitary_value' => $request->valor,
      'id_categoria' => (int) $request->categoria,
    ];

    Product::where('id', $id)->update($data);
    return redirect()->route('product-index');
  }

  public function store(Request $request)
  {
    $dados = [
      'name' => $request->nome,
      'id_user' => $_SESSION['login']['id'],
      'id_categoria' => (int) $request->categoria,
      'unitary_value' => $request->valor,
    ];
    Product::create($dados);
    return redirect()->route('product-create');
  }

  public function destroy($id)
  {
    Product::where('id', $id)->delete();
    return redirect()->route('product-index');
  }
}