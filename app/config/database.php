<!-- database.php -->
<?php
$host = 'localhost';
$dbname = 'nossa_receita';
$user = 'root';
$password = '';
$charset = 'utf8mb4';

$dsn = "mysql:host=$host;dbname=$dbname;charset=$charset";

$options = [
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_EMULATE_PREPARES => false,
];

try {
    $pdo = new PDO($dsn, $user, $password, $options);
} catch (PDOException $e) {
    // Em produção, mostre uma mensagem genérica
    die("Erro na conexão com o banco de dados.");
    // Em desenvolvimento, use:
    // die("Erro na conexão: " . $e->getMessage());
}
?>
