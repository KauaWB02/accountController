<?php

namespace App\Http\Controllers;

use App\Models\Categoria;
use Illuminate\Http\Request;

class categoriasController extends Controller
{
  public function index()
  {

    $listCategorias = Categoria::leftJoin('users', 'categorias.id_user', '=', 'users.id')
      ->get([
        'categorias.id',
        'categorias.name AS name_categoria',
        'categorias.created_at',
        'users.name AS name_user',
      ]);
    return view('categoria.index', ['listaCategorias' => $listCategorias]);
  }

  public function create()
  {
    return view('categoria.create');
  }

  public function store(Request $request)
  {
    session_start();
    $dados = [
      'name' => $request->nome,
      'id_user' => $_SESSION['login']['id'],
    ];
    Categoria::create($dados);
    return redirect()->route('categoria-create');
  }

  public function edit($id)
  {
    $categoria = Categoria::where('id', $id)->first();
    return view('categoria.edit', ['categoria' => $categoria]);
  }

  public function update(Request $request, $id)
  {
    $data = [
      'name' => $request->nome,
    ];

    Categoria::where('id', $id)->update($data);
    return redirect()->route('categoria-index');
  }

  public function destroy($id)
  {
    Categoria::where('id', $id)->delete();
    return redirect()->route('categoria-index');
  }
}