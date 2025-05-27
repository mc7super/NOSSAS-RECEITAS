<?php
session_start();

// Inclui a conexão com PDO e a classe Usuario
require_once __DIR__ . '/../config/database.php';
require_once __DIR__ . '/../models/usuario.php';

// Verifica se e-mail e senha foram enviados
if (!isset($_POST['email'], $_POST['senha']) || empty($_POST['email']) || empty($_POST['senha'])) {
    header("Location: ../public/index.php?erro=campos_vazios");
    exit;
}

$email = filter_var(trim($_POST['email']), FILTER_SANITIZE_EMAIL);
$senha = $_POST['senha'];

// Usa a classe Usuario para buscar no banco
$usuario = Usuario::findByEmail($email, $pdo);

if ($usuario && password_verify($senha, $usuario->senha_hash)) {
    session_regenerate_id(true);
    $_SESSION['usuario'] = [
        'id' => $usuario->id,
        'email' => $usuario->email,
        'nome' => $usuario->id_funcionario, // ou um atributo nome se for carregado
        'cargo' => $usuario->cargo,
    ];

    // Redirecionamento com base no cargo
    $redirects = [
        'administrador' => '../Views/DashAdmin.php',
        'cozinheiro' => '../Views/DashCozinheiro.php',
        'degustador' => '../Views/DashDegustador.php',
        'editor' => '../Views/DashEditor.php',
    ];

    $cargo = strtolower($usuario->cargo);

    if (isset($redirects[$cargo])) {
        header("Location: " . $redirects[$cargo]);
        exit;
    } else {
        header('Location: ../public/index.php?erro=cargo_invalido');
        exit;
    }
} else {
    header("Location: ../public/index.php?erro=credenciais_invalidas");
    exit;
}
