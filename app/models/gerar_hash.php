<!-- gerar_hash.php -->
<?php
$senha = 'degustador'; // sua senha desejada
echo password_hash($senha, PASSWORD_DEFAULT);
?>
