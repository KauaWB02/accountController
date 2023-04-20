<?php

namespace App\Http\Controllers;


use App\Http\Component;
use App\Models\Categoria;
use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;

class homeController extends Controller
{
  public function index(Request $request)
  {

    $isAdmin = Component::verifyIsAdmin();
    $users = User::all();
    $products = Product::all();
    $categorias = Categoria::all();
    return view('home.index', compact('users', 'products', 'categorias', 'isAdmin'));
  }
}