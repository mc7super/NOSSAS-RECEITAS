<?php
session_start();
require_once '../config/database.php'; // sua conexão com o banco

$idFuncionario = $_SESSION['usuario_id'] ?? null;

if (!$idFuncionario) {
    header("Location: ../public/index.php?erro=sem_sessao");
    exit;
}

$stmt = $pdo->prepare("
    SELECT f.*, c.nome AS cargo_nome 
    FROM funcionario f
    JOIN cargo c ON f.id_cargo = c.id_cargo
    WHERE f.id_funcionario = :id
");
$stmt->execute(['id' => $idFuncionario]);
$funcionario = $stmt->fetch(PDO::FETCH_ASSOC);

if (!$funcionario) {
    echo "Funcionário não encontrado.";
    exit;
}
?>