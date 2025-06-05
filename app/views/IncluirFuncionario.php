<?php require_once '../models/dados_funcionario.php'; ?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Cadastro de Funcionário</title>
  <style>
    body {
      margin: 0;
      font-family: Arial, sans-serif;
      background-color: #1e1e1e;
    }

    header {
      background-color: #FFD700;
      color: #B22222;
      text-align: center;
      padding: 20px;
      font-weight: bold;
      font-size: 1.8rem;
    }

    .container {
      background-color: white;
      padding: 2rem;
      display: flex;
      flex-direction: column;
      align-items: center;
    }

    .form-box {
      background-color: #f5f0c9;
      border-radius: 20px;
      padding: 2rem;
      width: 100%;
      max-width: 500px;
      display: flex;
      flex-direction: column;
      gap: 1rem;
    }

    .form-group {
      display: flex;
      flex-direction: column;
    }

    .row {
      display: flex;
      flex-wrap: wrap;
      gap: 1rem;
    }

    .half {
      flex: 1 1 48%;
      display: flex;
      flex-direction: column;
    }

    label {
      font-weight: bold;
      margin-bottom: 0.3rem;
    }

    input[type="text"],
    input[type="date"],
    input[type="email"],
    select {
      padding: 0.5rem;
      border-radius: 5px;
      border: 1px solid #ccc;
      font-size: 1rem;
      width: 100%;
      box-sizing: border-box;
    }

    .btn-salvar {
      background-color: #1877f2;
      color: white;
      padding: 0.6rem 1.2rem;
      border: none;
      border-radius: 6px;
      font-size: 1rem;
      cursor: pointer;
      align-self: center;
      display: flex;
      align-items: center;
      gap: 0.3rem;
    }

    .btn-salvar:hover {
      background-color: #0f5ec0;
    }

    .voltar {
      margin-top: 2rem;
      font-size: 1rem;
      cursor: pointer;
      color: black;
      text-decoration: underline;
    }

    .voltar:hover {
      color: #444;
    }
  </style>
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>
<body>

<header>Nossas Receitas</header>

<div class="container">
  <form class="form-box" action="../public/salvar_funcionario.php" method="post">
    <div class="row">
      <div class="half">
        <label for="nome">Funcionário</label>
        <input type="text" id="nome" name="nome" value="<?= htmlspecialchars($funcionario['nome'] ?? '') ?>" required>
      </div>
      <div class="half">
        <label for="data">Data ingresso</label>
        <input type="date" id="data" name="data" value="<?= $funcionario['data_ingresso'] ?? '' ?>" required>
      </div>
    </div>

    <div class="row">
      <div class="half">
        <label for="rg">RG</label>
        <input type="text" id="rg" name="rg" value="<?= htmlspecialchars($funcionario['rg'] ?? '') ?>" required>
      </div>
      <div class="half">
        <label for="id_cargo">Cargo</label>
        <select id="id_cargo" name="id_cargo" required>
          <option value="">Selecione o cargo</option>
          <option value="1">Administrador</option>
          <option value="2">Cozinheiro</option>
          <option value="3">Degustador</option>
          <option value="4">Editor</option>
        </select>
      </div>
    </div>

    <div class="row">
      <div class="half">
        <label for="salario">Salário</label>
        <input type="text" id="salario" name="salario" value="<?= isset($funcionario['salario']) ? 'R$' . number_format($funcionario['salario'], 2, ',', '.') : '' ?>" required>
      </div>
      <div class="half">
        <label for="nome_fantasia">Nome fantasia</label>
        <input type="text" id="nome_fantasia" name="nome_fantasia" value="<?= htmlspecialchars($funcionario['nome_fantasia'] ?? '') ?>" required>
      </div>
    </div>

    <div class="form-group">
      <label for="email">Email</label>
      <input type="email" id="email" name="email" value="<?= htmlspecialchars($funcionario['email'] ?? '') ?>" required>
    </div>

    <button type="submit" class="btn-salvar">
      <span class="material-icons">save</span> Salvar
    </button>
  </form>

  <div class="voltar" onclick="window.history.back()">Voltar</div>
</div>
</body>
</html>
