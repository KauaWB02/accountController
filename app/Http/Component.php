<?php
namespace App\Http;

use App\Models\User;


class Component
{
  public static function verifyIsAdmin()
  {
    $idUser = $_SESSION['login']['id'];
    $isAdminUser = User::where('id', $idUser)->get('isAdmin')->first();
    return $isAdminUser->isAdmin;
  }

  public static function formatDate($data)
  {
    return date('d/m/Y', strtotime($data));
  }
}