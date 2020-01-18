<?php


require "model/Model.php";


class HomeController
{
  public function Index()
  {
    include "view/Index.php";
  }

  public function Login()
  {
    include "view/Login.php";
  }

  public function Painel()
  {
    $model = new UserModel();
    $usuario = $model->UsuarioLogado();
    include "view/Painel.php";
  }
}
