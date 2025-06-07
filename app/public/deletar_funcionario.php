<?php
require_once __DIR__ . '/../controllers/FuncionarioController.php';

$controller = new FuncionarioController();

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['id_funcionario'])) {
    try {
        $controller->deletar($_POST['id_funcionario']);
        // Exclusão deu certo
        header("Location: index.php?page=consultar-funcionario&excluido=1");
        exit;
    } catch (Exception $e) {
        // Algo deu ruim na exclusão, trata aqui
        echo "Erro ao excluir funcionário: " . $e->getMessage();
        exit;
    }
} else {
    header("Location: index.php?page=consultar-funcionario");
    exit;
}
?>