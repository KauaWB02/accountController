<?php

namespace App\Http\Controllers;

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
}