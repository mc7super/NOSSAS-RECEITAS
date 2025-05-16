<?php
require_once '../controllers/ReceitaController.php';

$receitaController = new ReceitaController();

// listar todas as receitas
if ($_SERVER['REQUEST_METHOD'] == 'GET') {
    $receitas = $receitaController->listarReceitas($conn);
    echo json_encode($receitas);
}

// adicionar uma receita
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['nome']) && isset($_POST['categoria']) && isset($_POST['descricao'])) {
    $nome = $_POST['nome'];
    $categoria = $_POST['categoria'];
    $descricao = $_POST['descricao'];
    echo $receitaController->adicionarReceita($nome, $categoria, $descricao, $conn);
}
?>
