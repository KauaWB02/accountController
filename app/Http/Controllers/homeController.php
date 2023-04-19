<?php

namespace App\Http\Controllers;

use App\Models\Categoria;
use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;

class homeController extends Controller
{
  public function index()
  {
    session_start();
    if (!isset($_SESSION['login'])) {
      return redirect()->route('login-index');
    }

    $user = User::all()->count();
    $product = Product::all()->count();
    $categoria = Categoria::all()->count();
    return view('home.index', ['user' => $user, 'product' => $product, 'categoria' => $categoria]);
  }
}