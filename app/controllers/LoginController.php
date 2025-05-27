<?php
require_once '../models/Receita.php';

class ReceitaController
{

    public function listarReceitas($conn)
    {
        $receitas = Receita::all($conn);
        return $receitas;
    }

    public function adicionarReceita($nome, $categoria, $descricao, $conn)
    {
        $sql = "INSERT INTO receitas (nome, categoria, descricao) VALUES ('$nome', '$categoria', '$descricao')";
        if ($conn->query($sql) === TRUE) {
            return "Receita adicionada com sucesso!";
        } else {
            return "Erro: " . $conn->error;
        }
    }
}
?>