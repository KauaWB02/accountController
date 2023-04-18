<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class homeController extends Controller
{
  public function index()
  {
    session_start();
    // if (!isset($_SESSION['login'])) {
    //   return redirect()->route('login-index');
    // }
    return view('home.index');
  }
}