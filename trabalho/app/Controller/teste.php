<?php

require_once "ValidarUsuario.php";
require_once __DIR__ . "/../Model/UsuarioBanco.php";

$validarUsuario = new ValidarUsuario();
var_dump($validarUsuario->retornar());
