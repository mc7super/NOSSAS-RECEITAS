<?php
require_once(__DIR__ . '/../controllers/FuncionarioController.php');

$controller = new FuncionarioController();
$controller->salvar($_POST);
