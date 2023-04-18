<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class productsController extends Controller
{
  public function index()
  {
    return view('product.index');
  }

  public function create()
  {
    return view('product.create');
  }

  public function edit()
  {
    return view('product.edit');
  }

  public function update($id)
  {
    dd($id);
  }

  public function store()
  {

  }

  public function destroy()
  {

  }
}