<?php
require_once __DIR__ . '/../models/dados_funcionario.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    try {
        DadosFuncionario::excluir($id);
        header('Location: ConsultarFuncionario.php');
        exit;
    } catch (PDOException $e) {
        echo "Erro ao excluir funcionário: " . $e->getMessage();
    }
} else {
    echo "ID do funcionário não informado.";
}
?>
