<?php
require_once(__DIR__ . '/../controller/UsuarioController.php');

use App\Controller\UsuarioController;

$usuarios = (new UsuarioController)->listar();
?>

<h2>Lista de Usuários</h2>
<table border="1">
    <tr>
        <th>ID</th><th>Nome</th><th>Email</th>
    </tr>
    <?php foreach ($usuarios as $u): ?>
        <tr>
            <td><?= $u['id'] ?></td>
            <td><?= $u['nome'] ?></td>
            <td><?= $u['email'] ?></td>
        </tr>
    <?php endforeach; ?>
</table>
