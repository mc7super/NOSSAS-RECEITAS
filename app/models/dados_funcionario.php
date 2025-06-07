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
        return $pdo->lastInsertId(); // Pega o id que acabou de ser inserido
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
    public static function criarUsuario($idFuncionario, $email)
    {
        $pdo = Database::conectar();
        $sql = "INSERT INTO usuario (funcionario_id, email) VALUES (:funcionario_id, :email)";
        $stmt = $pdo->prepare($sql);
        return $stmt->execute([
            ':funcionario_id' => $idFuncionario,
            ':email' => $email
        ]);
    }
    public static function excluirUsuarioPorFuncionarioId($idFuncionario)
    {
        $pdo = Database::conectar();
        $sql = "DELETE FROM usuario WHERE funcionario_id = :id";
        $stmt = $pdo->prepare($sql);
        return $stmt->execute([':id' => $idFuncionario]);  // RETURN aqui
    }

    public static function excluir($id)
    {
        $pdo = Database::conectar();
        $stmt = $pdo->prepare("DELETE FROM funcionarios WHERE id_funcionario = ?");
        return $stmt->execute([$id]); // RETURN aqui também
    }


    // No arquivo dados_funcionario.php
    public static function excluirPorId($id)
    {
        $pdo = Database::conectar(); // ou o método que você usa pra conectar
        $sql = "DELETE FROM funcionarios WHERE id_funcionario = ?";
        $stmt = $pdo->prepare($sql);
        return $stmt->execute([$id]);
    }
    // Atualiza dados do funcionário
    public static function atualizar($id, $nome, $rg, $id_cargo, $data_ingresso, $salario, $nome_fantasia)
    {
        $pdo = Database::conectar();
        $sql = "UPDATE funcionarios SET nome = :nome, rg = :rg, id_cargo = :id_cargo, 
            data_ingresso = :data_ingresso, salario = :salario, nome_fantasia = :nome_fantasia
            WHERE id_funcionario = :id";
        $stmt = $pdo->prepare($sql);
        return $stmt->execute([
            ':nome' => $nome,
            ':rg' => $rg,
            ':id_cargo' => $id_cargo,
            ':data_ingresso' => $data_ingresso,
            ':salario' => $salario,
            ':nome_fantasia' => $nome_fantasia,
            ':id' => $id
        ]);
    }

    // Verifica se já existe usuário com esse id_funcionario na tabela usuario
    public static function emailExiste($idFuncionario)
    {
        $pdo = Database::conectar();
        $sql = "SELECT COUNT(*) FROM usuario WHERE funcionario_id = :id";
        $stmt = $pdo->prepare($sql);
        $stmt->execute([':id' => $idFuncionario]);
        return $stmt->fetchColumn() > 0;
    }

    // Atualiza email do usuário
    public static function atualizarEmail($idFuncionario, $email)
    {
        $pdo = Database::conectar();
        $sql = "UPDATE usuario SET email = :email WHERE funcionario_id = :id";
        $stmt = $pdo->prepare($sql);
        return $stmt->execute([
            ':email' => $email,
            ':id' => $idFuncionario
        ]);
    }

}
