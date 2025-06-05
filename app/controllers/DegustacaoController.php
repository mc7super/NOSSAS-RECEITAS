<?php
namespace App\Controller;

require_once(__DIR__ . '/../models/Degustacao.php');

use App\Model\Degustacao;

class DegustacaoController
{
    public function salvar($dados)
    {
        Degustacao::salvar($dados);
        header("Location: ../views/ConsultarDegustacao.php?rota=lista");
        exit;
    }

    public function listar()
    {
        return Degustacao::listar();
    }
}
