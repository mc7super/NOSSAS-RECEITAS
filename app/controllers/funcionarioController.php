<?php
require_once(__DIR__ . '/../models/dados_funcionario.php');

class FuncionarioController
{
    public function salvar($dados)
    {
        $nome = $dados['nome'] ?? '';
        $rg = $dados['rg'] ?? '';
        $id_cargo = $dados['id_cargo'] ?? 0;
        $data_ingresso = $dados['data'] ?? '';
        $salario = floatval(str_replace(',', '.', str_replace('R$', '', $dados['salario'] ?? 0)));
        $nome_fantasia = $dados['nome_fantasia'] ?? '';
        $email = $dados['email'] ?? '';

        if (!empty($nome) && !empty($rg) && !empty($id_cargo) && !empty($email)) {
            $idFuncionario = DadosFuncionario::inserir($nome, $rg, $id_cargo, $data_ingresso, $salario, $nome_fantasia);
            DadosFuncionario::criarUsuario($idFuncionario, $email);
            header('Location: ../views/IncluirFuncionario.php?sucesso=1');
            exit;
        } else {
            echo "Preencha todos os campos obrigatórios.";
        }
    }

    public function listar()
    {
        return DadosFuncionario::listarTodos();
    }
public function temUsuario($idFuncionario)
{
    return DadosFuncionario::emailExiste($idFuncionario);
}

    public function deletar($id)
{
    if ($this->temUsuario($id)) {
        $excluiuUsuarios = DadosFuncionario::excluirUsuarioPorFuncionarioId($id);
        var_dump($excluiuUsuarios); // true ou false
        if (!$excluiuUsuarios) {
            return false;
        }
    } else {
        // Se não tem usuário, já pode seguir
        var_dump("Não tem usuário vinculado.");
    }

    $excluiuFuncionario = DadosFuncionario::excluir($id);
    var_dump($excluiuFuncionario); // true ou false
    if (!$excluiuFuncionario) {
        return false;
    }

    return true;
}


    public function atualizar($dados)
    {
        $id = $dados['id_funcionario'] ?? 0;
        $nome = $dados['nome'] ?? '';
        $rg = $dados['rg'] ?? '';
        $id_cargo = $dados['id_cargo'] ?? 0;
        $data_ingresso = $dados['data'] ?? '';
        $salario = floatval(str_replace(',', '.', str_replace('R$', '', $dados['salario'] ?? 0)));
        $nome_fantasia = $dados['nome_fantasia'] ?? '';
        $email = $dados['email'] ?? '';

        if ($id && !empty($nome) && !empty($rg) && !empty($id_cargo) && !empty($email)) {
            DadosFuncionario::atualizar($id, $nome, $rg, $id_cargo, $data_ingresso, $salario, $nome_fantasia);

            if (DadosFuncionario::emailExiste($id)) {
                DadosFuncionario::atualizarEmail($id, $email);
            } else {
                DadosFuncionario::criarUsuario($id, $email);
            }

            header('Location: ../views/EditarFuncionario.php?id=' . $id . '&sucesso=1');
            exit;
        } else {
            echo "Preencha todos os campos obrigatórios.";
        }
    }
}
