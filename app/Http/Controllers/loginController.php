<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class loginController extends Controller
{
  public function index()
  {
    session_start();
    if (isset($_SESSION['login'])) {
      return redirect()->route('home-index');
    }
    return view('login.index');
  }

  public function store(Request $request)
  {
    $dados = $request->only('email', 'password');
    $user = User::where('email', $dados['email'])->where('password', $dados['password'])->first();

    if (!empty($user)) {
      session_start();

      $_SESSION['login'] = ['id' => $user->id];

      return redirect()->route('home-index');
    } else {
      return view('login.index', ['msg' => 'E-mail ou senha incorretas!']);
    }

  }
}