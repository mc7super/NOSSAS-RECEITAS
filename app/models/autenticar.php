<?php
session_start();

// Caminho absoluto para evitar erro de localização do arquivo
require_once __DIR__ . '/../database.php';

// Verifica se e-mail e senha foram enviados
if (!isset($_POST['email'], $_POST['senha'])) {
    die('Por favor, preencha e-mail e senha.');
}

$email = filter_var(trim($_POST['email']), FILTER_SANITIZE_EMAIL);
$senha = $_POST['senha'];

// Consulta para buscar o usuário, nome do funcionário e o cargo
$sql = "SELECT u.id_Usuario, u.senha_hash, f.nome, c.descricao AS cargo
        FROM Usuario u
        JOIN funcionarios f ON u.funcionario_id = f.id_funcionario
        JOIN Cargo c ON f.Cargo_id = c.id_Cargo
        WHERE u.email = :email AND u.ativo = 1";

$stmt = $pdo->prepare($sql);
$stmt->execute(['email' => $email]);
$usuario = $stmt->fetch(PDO::FETCH_ASSOC);

// Verifica se o usuário foi encontrado e se a senha confere
if ($usuario && password_verify($senha, $usuario['senha_hash'])) {
    session_regenerate_id(true);
    $_SESSION['usuario'] = $usuario;

    // Redirecionamento com base no cargo
    switch (strtolower($usuario['cargo'])) {
        case 'administrador':
            header("Location: ../Views/DashAdmin.php");
            break;
        case 'cozinheiro':
            header("Location: ../Views/DashCozinheiro.php");
            break;
        case 'degustador':
            header("Location: ../Views/DashDegustador.php");
            break;
        case 'editor':
            header("Location: ../Views/DashEditor.php");
            break;
        default:
            // Cargo desconhecido → volta para login com mensagem de erro
            header('Location: ../index.php?erro=credenciais_invalidas');
            exit;

    }

    exit;
} if (!isset($_POST['email'], $_POST['senha'])) {
    header("Location: ../index.php?erro=campos_vazios");
    exit;
} else {
    // Login inválido → volta para login com erro
    header("Location: ../index.php?erro=credenciais_invalidas");
    exit;
}
?>
