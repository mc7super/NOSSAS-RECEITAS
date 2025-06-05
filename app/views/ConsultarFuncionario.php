<!-- ConsultarFuncionario.php --> 
<?php
require_once __DIR__ . '/../models/dados_funcionario.php';
$funcionarios = DadosFuncionario::listarTodos();
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Consulta de  Funcionário</title>
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

    .box {
      background-color: #f5f0c9;
      border-radius: 20px;
      padding: 2rem;
      width: 100%;
      max-width: 800px;
      display: flex;
      flex-direction: column;
      align-items: center;
    }

    h2 {
      margin-bottom: 1.5rem;
    }

    table {
      width: 100%;
      border-collapse: collapse;
      background-color: white;
      margin-bottom: 1rem;
    }

    th, td {
      padding: 0.7rem;
      border: 1px solid #ccc;
      text-align: center;
      font-size: 0.95rem;
    }

    th {
      background-color: #e9e9e9;
    }

    .btn-add {
      padding: 0.6rem 1.2rem;
      background-color: #1877f2;
      color: white;
      border: none;
      border-radius: 6px;
      font-size: 0.95rem;
      cursor: pointer;
    }

    .btn-add:hover {
      background-color: #0f5ec0;
    }

    .icon {
      cursor: pointer;
      margin: 0 5px;
      font-size: 1.1rem;
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
    <div class="box">
      <h2>Consultar Funcionário</h2>
      <table>
        <thead>
          <tr>
            <th>Nome</th>
            <th>Data ingresso</th>
            <th>Salário</th>
            <th>Cargo</th>
            <th>Nome fantasia</th>
            <th>Editar</th>
          </tr>
        </thead>
        <tbody>
          <?php foreach ($funcionarios as $f): ?>
            <tr>
              <td><?= htmlspecialchars($f['nome']) ?></td>
              <td><?= htmlspecialchars($f['data_ingresso']) ?></td>
              <td>R$ <?= number_format($f['salario'], 2, ',', '.') ?></td>
              <td><?= htmlspecialchars($f['cargo_nome']) ?></td>
              <td><?= htmlspecialchars($f['nome_fantasia']) ?></td>
              <td><span class="material-icons icon">edit</span></td>
            </tr>
          <?php endforeach; ?>
        </tbody>
      </table>
      <button class="btn-add" onclick="window.location.href='IncluirFuncionario.php'">Adicionar funcionário</button>
    </div>

    <div class="voltar" onclick="window.history.back()">Voltar</div>
  </div>

</body>
</html>
