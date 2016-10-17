<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
class userController extends Controller
{
  public function login(Request $r)
  {
    session_start();
    $user = $r->input('user');
    $user = strtolower($user);
    $user  = preg_replace('[\s+]',"", $user);
    $password = $r->input('password');
    $query = app('db')->select("SELECT * FROM usuarios WHERE name = '$user' AND password = '$password' ");
    if ($query != null) {
      $_SESSION['user'] = $query;

      return 0;
    }
    else {
      return 1;
    }
  }

  public function verificarDerechos()
  {
    session_start();
    $query = app('db')->select("SELECT * FROM usuarios");

    return $query;
  }

  public function cambiarDerechos(Request $r)
  {
    session_start();
    $id = $r->input('id');
    if($_SESSION['user'][0]->level == 0)
    {
      $queryS = app('db')->select("SELECT * FROM usuarios WHERE id = {$id}");
      if($queryS[0]->level == 1){
        $nlevel = 0;
      }
      else {
        $nlevel = 1;
      }
      $query = app('db')->update("UPDATE usuarios SET level = {$nlevel} WHERE id = {$id}");
      return 0;
    }
    else {
      return 1;
    }


  }
}
