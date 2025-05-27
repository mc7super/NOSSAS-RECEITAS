<?php
require_once __DIR__ . '/../config/auth.php';

// Exemplo para admin
checarCargo(['administrador']);

// Aqui o resto da página do admin...
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Dashboard do Administrador</title>
  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    body, html {
      height: 100%;
      font-family: Arial, sans-serif;
      background-color: #1e1e1e;
    }

    header {
      background-color: #FFD700;
      color: #B22222;
      padding: 20px;
      text-align: center;
      font-size: 2rem;
      font-weight: bold;
    }

    .container {
      display: flex;
      flex-direction: column;
      align-items: center;
      padding: 2rem;
      background-color: white;
      height: calc(100% - 80px);
    }

    .dashboard-box {
      background-color: #f5f0c9;
      padding: 2rem;
      border-radius: 20px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
      width: 90%;
      max-width: 500px;
      text-align: center;
    }

    .dashboard-box h2 {
      margin-bottom: 1.5rem;
      font-size: 1.5rem;
      color: #333;
    }

    .grid-buttons {
      display: grid;
      grid-template-columns: 1fr 1fr;
      gap: 0.8rem;
    }

    .grid-buttons button {
      height: 60px;
      padding: 0.5rem;
      background-color: #1877f2;
      color: white;
      border: none;
      border-radius: 8px;
      font-size: 0.95rem;
      cursor: pointer;
      transition: 0.3s;
      white-space: normal;
      word-wrap: break-word;
      display: flex;
      align-items: center;
      justify-content: center;
      text-align: center;
    }

    .grid-buttons button:hover {
      background-color: #1056a3;
    }

    .voltar {
      margin-top: 1.5rem;
      font-size: 1rem;
      color: black;
      text-decoration: underline;
      cursor: pointer;
    }

    .voltar:hover {
      color: #444;
    }
  </style>
</head>
<body>

  <header>Nossas Receitas</header>

  <div class="container">
    <div class="dashboard-box">
      <h2>Dashboard Administrador</h2>

      <div class="grid-buttons">
        <button onclick="window.location.href='AddFuncionario.php'">Cargo</button>
        <button>Restaurantes</button>
        <button>Categoria</button>
        <button>Funcionário</button>
        <button>Relatório de Produção Mensal</button>
        <button>Referência</button>
        <button>Gerar e-mail de produção Mensal</button>
        <button>Parâmetros do Sistema</button>
      </div>

      <div class="voltar" onclick="window.history.back()">Voltar</div>
    </div>
  </div>

</body>
</html>
