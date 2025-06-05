<?php
require_once(__DIR__ . '/../config/database.php');

class DadosDegustacao
{
    public static function inserir($degustador, $id_cozinheiro, $nome, $data_degustacao, $nota_degustacao)
    {
        $pdo = Database::conectar();
        $sql = "INSERT INTO degustacao (degustador, id_cozinheiro, nome, data_degustacao, nota_degustacao) 
                VALUES (:degustador, :id_cozinheiro, :nome, :data_degustacao, :nota_degustacao)";
        $stmt = $pdo->prepare($sql);
        $stmt->execute([
            ':degustador' => $degustador,
            ':id_cozinheiro' => $id_cozinheiro,
            ':nome' => $nome,
            ':data_degustacao' => $data_degustacao,
            ':nota_degustacao' => $nota_degustacao
        ]);
    }

    public static function listarTodos()
    {
        $pdo = Database::conectar();
        $sql = "SELECT d.*, f.nome AS nome_degustador
                FROM degustacao d
                JOIN funcionarios f ON d.degustador = f.id_funcionario";
        $stmt = $pdo->query($sql);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public static function buscarPorId($degustador, $id_cozinheiro, $nome)
    {
        $pdo = Database::conectar();
        $sql = "SELECT d.*, f.nome AS nome_degustador
                FROM degustacao d
                JOIN funcionarios f ON d.degustador = f.id_funcionario
                WHERE d.degustador = :degustador AND d.id_cozinheiro = :id_cozinheiro AND d.nome = :nome";
        $stmt = $pdo->prepare($sql);
        $stmt->execute([
            ':degustador' => $degustador,
            ':id_cozinheiro' => $id_cozinheiro,
            ':nome' => $nome
        ]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }
}
