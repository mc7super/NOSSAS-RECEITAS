<!-- database.php -->
<?php
class Database {
    private static $pdo;

    public static function conectar() {
        if (!self::$pdo) {
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
                self::$pdo = new PDO($dsn, $user, $password, $options);
            } catch (PDOException $e) {
                die("Erro na conexão com o banco de dados.");
            }
        }
        return self::$pdo;
    }
}
