<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class categoriasController extends Controller
{
  public function index()
  {
    return view('categoria.index');
  }

  public function create()
  {
    return view('categoria.create');
  }

  public function edit()
  {
    return view('categoria.edit');
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