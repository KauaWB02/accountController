<?php

namespace App\Http\Controllers;

use App\Http\Component;
use App\Models\User;
use Illuminate\Http\Request;

class usersController extends Controller
{

  public function index()
  {
    $isAdmin = Component::verifyIsAdmin();
    $idUser = $_SESSION['login']['id'];
    $users = User::all()->whereNotIn('id', $idUser);
    return view('user.index', compact('isAdmin', 'users'));
  }

  public function create()
  {
    $isAdmin = Component::verifyIsAdmin();
    return view('user.create', compact('isAdmin'));
  }

  public function store(Request $request)
  {

    $isAdmin = Component::verifyIsAdmin();

    $dados = [
      'name' => $request->nome,
      'email' => $request->email,
      'password' => $request->password,
      'isAdmin' => $request->isAdmin == 'on' ? true : false,
    ];
    User::create($dados);
    return view('user.create', compact('isAdmin'));
  }

  public function edit($id)
  {
    $isAdmin = Component::verifyIsAdmin();
    $user = User::where('id', $id)->first();
    return view('user.edit', compact('isAdmin', 'user'));
  }

  public function update(Request $request, $id)
  {
    $dados = [
      'name' => $request->nome,
      'email' => $request->email,
      'password' => $request->password,
      'isAdmin' => $request->isAdmin == 'on' ? true : false,
    ];

    User::where('id', $id)->update($dados);
    return redirect()->route('user-index');
  }

  public function destroy($id)
  {
    User::where('id', $id)->delete();
    return redirect()->route('user-index');
  }
}