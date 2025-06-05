<?php
require_once __DIR__ . '/../config/database.php';
require_once __DIR__ . '/../models/Categoria.php';

$descricao = $_POST['descricao'] ?? null;

if ($descricao) {
    Categoria::salvar($descricao);
    header('Location: ../views/sucesso.php');
    exit;
} else {
    header('Location: ../views/incluirCategoria.php?erro=campos_vazios');
    exit;
}
?>
