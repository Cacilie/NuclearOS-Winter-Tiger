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
      $query = app('db')->select("SELECT * FROM carpetas WHERE status = 1");
      return $query;
    }

    public function getMyTrashFolders()
    {
      $query = app('db')->select("SELECT * FROM carpetas WHERE status = 0");
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
      if($id != 0)
      {
        $_SESSION["currentFolder"] = $id;
      }
      else {
        $id = $_SESSION["currentFolder"];
      }


      $query = app('db')->select("SELECT * FROM archivos WHERE carpetaid = {$id} AND status = 1");
      return $query;
    }



    public function getTrashFilesByFolder(Request $r)
    {
      session_start();
      $id = $r->input('id');
      if($id > 0)
      {
        $_SESSION["currentFolder"] = $id;
      }
      elseif ($id == -1) {
        $query = app('db')->select("SELECT * FROM archivos WHERE status = 0");
        return $query;
      }
      else {
        $id = $_SESSION["currentFolder"];
      }

      $query = app('db')->select("SELECT * FROM archivos WHERE carpetaid = {$id} AND status = 0");
      return $query;
    }



    public function deleteFolder(Request $r)
    {
      $id = $r->input('id');
      $deactivateFolder = app('db')->update("UPDATE carpetas SET status = 0 WHERE id = {$id}");
      $deactivateFile = app('db')->update("UPDATE archivos SET status = 0 WHERE carpetaid = {$id}");
      return 0;
    }

    public function deleteTrashFolder(Request $r)
    {
      $id = $r->input('id');
      $deactivateFolder = app('db')->update("DELETE FROM carpetas WHERE id = {$id}");
      $deactivateFile = app('db')->update("DELETE FROM archivos WHERE carpetaid = {$id}");
      return 0;
    }

    public function deleteFile(Request $r)
    {
      $id = $r->input('id');
      $deactivateFile = app('db')->update("UPDATE archivos SET status = 0 WHERE id = {$id}");
      return 0;
    }

    public function deleteTrashFile(Request $r)
    {
      $id = $r->input('id');
      $deactivateFile = app('db')->update("DELETE FROM archivos WHERE id = {$id}");
      return 0;
    }
}
