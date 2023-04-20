<?php

namespace App\Http\Controllers;

use App\Http\Component;
use App\Models\Categoria;
use Illuminate\Http\Request;

class categoriasController extends Controller
{
  public function index()
  {
    $isAdmin = Component::verifyIsAdmin();
    $listaCategorias = Categoria::leftJoin('users', 'categorias.id_user', '=', 'users.id')
      ->get([
        'categorias.id',
        'categorias.name AS name_categoria',
        'categorias.created_at',
        'users.name AS name_user',
      ]);
    return view('categoria.index', compact('isAdmin', 'listaCategorias'));
  }

  public function create()
  {
    $isAdmin = Component::verifyIsAdmin();
    return view('categoria.create', compact('isAdmin'));
  }

  public function store(Request $request)
  {


    $dados = [
      'name' => $request->nome,
      'id_user' => $_SESSION['login']['id'],
    ];
    Categoria::create($dados);

    return redirect()->route('categoria-create');
  }

  public function edit($id)
  {
    $isAdmin = Component::verifyIsAdmin();
    $categoria = Categoria::where('id', $id)->first();
    return view('categoria.edit', compact('isAdmin', 'categoria'));
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