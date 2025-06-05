<?php

// Autoload manual
require_once(__DIR__ . '/../config/database.php');
require_once(__DIR__ . '/../controllers/usuarioController.php');
require_once(__DIR__ . '/../models/usuario.php');

require_once __DIR__ . '/../vendor/autoload.php'; // se usa composer

// suas rotas, controllers, etc aqui

// Roteamento
require_once(__DIR__ . '/../routes/web.php');
?>