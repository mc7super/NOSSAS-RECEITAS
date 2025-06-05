<?php
require_once __DIR__ . '/../config/database.php';
use Database;

class Categoria {
    public static function salvar($descricao) {
        $pdo = Database::conectar();
        $sql = "INSERT INTO categoria (descricao) VALUES (:descricao)";
        $stmt = $pdo->prepare($sql);
        $stmt->execute([
            'descricao' => $descricao
        ]);
    }
}
?>