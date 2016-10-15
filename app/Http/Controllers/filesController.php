<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
class filesController extends Controller
{
    public function createNewFolder(Request $r)
    {
      $nombre = $r->input('nombre');
      $query1 = app('db')->select("SELECT * FROM carpetas WHERE nombre = '$nombre'");
      if($query1 != null)
      {
        return 1;
      }
      else {
        $queryi = app('db')->insert("INSERT INTO carpetas (nombre) VALUES ('$nombre')");
        return 0;
      }
    }

    public function getMyFolders()
    {
      $query = app('db')->select("SELECT * FROM carpetas");
      return $query;
    }

    public function gotoFolder($id)
    {
      session_start();
      $_SESSION["currentFolder"] = $id;
      return view("wosfiles-files");
    }

    public function createNewFile(Request $r)
    {
      session_start();
      $id = $_SESSION["currentFolder"];
      $nombre = $r->input('nombre');
      $queryv = app('db')->select("SELECT * FROM archivos WHERE nombre = '$nombre'");
      if($queryv != null)
      {
        return 1;
      }
      else {
        $queryi = app('db')->insert("INSERT INTO archivos (carpetaid,nombre) VALUES ({$id} , '$nombre')");
        return 0;
      }
    }

    public function getFilesByFolder(Request $r)
    {
      session_start();
      $id = $r->input('id');
      $_SESSION["currentFolder"] = $id;
      $query = app('db')->select("SELECT * FROM archivos WHERE carpetaid = {$id}");
      return $query;
    }
}
