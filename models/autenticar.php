<?php
session_start();
require_once '../conectabd.php';

if (!isset($_POST['email'], $_POST['senha'])) {
    die('Por favor, preencha e-mail e senha.');
}

$email = $_POST['email'];
$senha = $_POST['senha'];

// Buscar usuário e cargo
$sql = "SELECT u.id_Usuario, u.senha_hash, f.nome, c.descricao AS cargo
        FROM Usuario u
        JOIN funcionarios f ON u.funcionario_id = f.id_funcionario
        JOIN Cargo c ON f.Cargo_id = c.id_Cargo
        WHERE u.email = :email AND u.ativo = 1";

$stmt = $pdo->prepare($sql);
$stmt->execute(['email' => $email]);
$usuario = $stmt->fetch(PDO::FETCH_ASSOC);

if ($usuario && password_verify($senha, $usuario['senha_hash'])) {
    $_SESSION['usuario'] = $usuario;

    // Redirecionamento conforme cargo
    switch (strtolower($usuario['cargo'])) {
        case 'administrador':
            header("Location: ../dashboards/admin.php");
            break;
        case 'cozinheiro':
            header("Location: ../dashboards/cozinheiro.php");
            break;
        default:
            header("Location: ../dashboards/geral.php");
    }
    exit;
} else {
    echo "E-mail ou senha inválidos!";
}
