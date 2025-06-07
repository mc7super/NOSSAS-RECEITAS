<?php
require_once __DIR__ . '/../controllers/FuncionarioController.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $controller = new FuncionarioController();
    $controller->atualizar($_POST);
} else {
    echo "Requisição inválida.";
    exit;
}
?>