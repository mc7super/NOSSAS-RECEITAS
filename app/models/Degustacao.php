<?php
namespace App\Model;
require_once(__DIR__ . '/../config/database.php');

use Database; // importa a classe Database global

class Degustacao {
    public static function listar() {
        $pdo = Database::conectar();
        $sql = "SELECT * FROM degustacao";
        $stmt = $pdo->query($sql);
        return $stmt->fetchAll();
    }

    public static function salvar($dados) {
        $pdo = Database::conectar();
        $sql = "INSERT INTO degustacao (campo1, campo2) VALUES (:valor1, :valor2)";
        $stmt = $pdo->prepare($sql);
        $stmt->execute([
            ':valor1' => $dados['campo1'],
            ':valor2' => $dados['campo2'],
        ]);
    }
}
