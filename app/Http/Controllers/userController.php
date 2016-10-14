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
}
