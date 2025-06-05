<?php

use App\Controller\UsuarioController;

$rota = $_GET['rota'] ?? 'login';

switch ($rota) {
    case 'login':
        include(__DIR__ . '/../views/login.php');
        break;

    case 'formulario':
        include(__DIR__ . '/../app/view/formulario_usuario.php');
        break;

    case 'salvar':
        (new UsuarioController)->salvar($_POST);
        break;

    case 'lista':
        include(__DIR__ . '/../app/view/lista_usuarios.php');
        break;

    default:
        echo "404 - Página não encontrada.";
}
