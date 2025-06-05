<?php
session_start();

require_once __DIR__ . '/../config/database.php';
require_once __DIR__ . '/../models/usuario.php';

use App\Model\Usuario;

$pdo = Database::conectar();

// Verifica se e-mail e senha foram enviados
if (!isset($_POST['email'], $_POST['senha']) || empty($_POST['email']) || empty($_POST['senha'])) {
    header("Location: ../views/login.php?erro=campos_vazios");
    exit;
}

$email = filter_var(trim($_POST['email']), FILTER_SANITIZE_EMAIL);
$senha = $_POST['senha'];

$usuario = Usuario::findByEmail($email);

if ($usuario && password_verify($senha, $usuario->senha_hash)) {
    session_regenerate_id(true);
    $_SESSION['usuario'] = [
        'id' => $usuario->id,
        'email' => $usuario->email,
        'nome' => $usuario->id_funcionario, // se tiver nome, pode ajustar aqui
        'cargo' => $usuario->cargo,
    ];

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
        header('Location: ../views/login.php?erro=cargo_invalido');
        exit;
    }
} else {
    header("Location: ../views/login.php?erro=credenciais_invalidas");
    exit;
}