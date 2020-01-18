<?php

require "controller/HomeController.php";

$pagina = isset($_GET["pagina"]) ? $_GET["pagina"] : "index";

$controller = new HomeController();

switch ($pagina) {
  case "index":
    $controller->Index();
    break;
  case "login":
    $controller->Login();
    break;
  case "painel":
    $controller->Painel();
    break;
}
