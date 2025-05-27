<?php
session_start();

if (!isset($_SESSION['usuario'])) {
    header("Location: ../public/index.php?erro=nao_autenticado");
    exit;
}

$cargo = strtolower($_SESSION['usuario']['cargo']);

// Recebe cargos permitidos como array
function checarCargo(array $cargosPermitidos) {
    global $cargo;
    if (!in_array($cargo, $cargosPermitidos)) {
        header("Location: ../public/index.php?erro=sem_permissao");
        exit;
    }
}
?>
