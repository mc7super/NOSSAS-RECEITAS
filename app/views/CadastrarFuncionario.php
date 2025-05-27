<!-- CadastrarFuncionario.php -->
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
    input[type="date"] {
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

  <!-- Ícones do Google -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>
<body>

  <header>Nossas Receitas</header>

  <div class="container">
    <div class="form-box">
      <div class="row">
        <div class="half">
          <label for="funcionario">Funcionário</label>
          <input type="text" id="funcionario" name="funcionario">
        </div>
        <div class="half">
          <label for="data">Data ingresso</label>
          <input type="date" id="data" name="data" value="2025-08-17">
        </div>
      </div>

      <div class="row">
        <div class="half">
          <label for="cargo">Cargo</label>
          <input type="text" id="cargo" name="cargo">
        </div>
        <div class="half">
          <label for="salario">Salário</label>
          <input type="text" id="salario" name="salario" placeholder="R$">
        </div>
      </div>

      <div class="form-group">
        <label for="fantasia">Nome fantasia</label>
        <input type="text" id="fantasia" name="fantasia">
      </div>

      <button class="btn-salvar" onclick="alert('Funcionário salvo!')">
        <span class="material-icons">save</span> Salvar
      </button>
    </div>

    <div class="voltar" onclick="window.history.back()">Voltar</div>
  </div>

</body>
</html>
