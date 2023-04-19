<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
  use HasFactory;

  protected $fillable = [
    'id',
    'name',
    'id_user',
    'id_categoria',
    'unitary_value',
    'created_at',

  ];
  
}