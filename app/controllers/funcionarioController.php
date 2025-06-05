<?php
require_once(__DIR__ . '/../models/dados_funcionario.php');

class FuncionarioController
{
    public function salvar($dados)
{
    $nome = $dados['nome'] ?? '';
    $rg = $dados['rg'] ?? '';
    $id_cargo = $dados['id_cargo'] ?? 0; // tem que ser o id numérico do cargo
    $data_ingresso = $dados['data'] ?? '';
    $salario = floatval(str_replace(',', '.', str_replace('R$', '', $dados['salario'] ?? 0)));
    $nome_fantasia = $dados['nome_fantasia'] ?? '';

    if (!empty($nome) && !empty($rg) && !empty($id_cargo)) {
        DadosFuncionario::inserir($nome, $rg, $id_cargo, $data_ingresso, $salario, $nome_fantasia);
        header('Location: ../views/CadastrarFuncionario.php?sucesso=1');
        exit;
    } else {
        echo "Preencha todos os campos obrigatórios.";
    }
}

    public function listar()
    {
        return DadosFuncionario::listarTodos();
    }
}
