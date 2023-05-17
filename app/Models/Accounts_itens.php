<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Accounts_itens extends Model
{
  use HasFactory;
  protected $fillable = [
    'id',
    'id_account',
    'nome',
    'item',
    'qtd',
    'dinheiro',
    'diamante',
    'created_at',
  ];
}