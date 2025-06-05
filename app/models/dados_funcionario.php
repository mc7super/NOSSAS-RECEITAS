<?php
// app/models/dados_funcionario.php
require_once(__DIR__ . '/../config/database.php');

class DadosFuncionario
{

    public static function inserir($nome, $rg, $id_cargo, $data_ingresso, $salario, $nome_fantasia)
    {
        $pdo = Database::conectar();
        $sql = "INSERT INTO funcionarios (nome, rg, id_cargo, data_ingresso, salario, nome_fantasia) 
                VALUES (:nome, :rg, :id_cargo, :data_ingresso, :salario, :nome_fantasia)";
        $stmt = $pdo->prepare($sql);
        $stmt->execute([
            ':nome' => $nome,
            ':rg' => $rg,
            ':id_cargo' => $id_cargo,
            ':data_ingresso' => $data_ingresso,
            ':salario' => $salario,
            ':nome_fantasia' => $nome_fantasia
        ]);
    }

    public static function listarTodos()
    {
        $pdo = Database::conectar();
        $sql = "SELECT f.*, ca.descricao AS cargo_nome
                FROM funcionarios f 
                JOIN cargo ca ON f.id_cargo = ca.id_cargo";
        $stmt = $pdo->query($sql);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public static function buscarPorId($id)
    {
        $pdo = Database::conectar();
        $sql = "SELECT f.*, c.descricao AS nome_cargo FROM funcionarios f 
            JOIN cargo c ON f.id_cargo = c.id_cargo WHERE f.id_funcionario = :id";
        $stmt = $pdo->prepare($sql);
        $stmt->execute([':id' => $id]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

}
