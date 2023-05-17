<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Accounts extends Model
{
  use HasFactory;
  protected $fillable = [
    'id',
    'email',
    'nome',
    'dinheiro',
    'diamante',
    'created_at',
  ];
}