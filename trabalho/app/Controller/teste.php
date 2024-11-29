<?php

require_once "ValidarUsuario.php";
require_once __DIR__ . "/../Model/UsuarioBanco.php";

$validarUsuario = new ValidarUsuario();

$cadastrarUsuario = new CadastrarUsuario("U3", "Miaw", "gatinhosGatescos@gmail.com", "123");

($cadastrarUsuario->retornar());
