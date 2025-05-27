<!-- IncluirDegustacao.php -->
<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Incluir Degustação</title>
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <style>
    /* Reset e base */
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }
    body, html {
      font-family: Arial, sans-serif;
      background-color: #1e1e1e;
    }

    /* Cabeçalho */
    header {
      background-color: #FFD700;
      color: #B22222;
      text-align: center;
      padding: 20px;
      font-size: 1.8rem;
      font-weight: bold;
    }

    /* Container principal */
    .container {
      background-color: white;
      padding: 2rem;
    }

    /* Box do formulário */
    .form-box {
      background-color: #f5f0c9;
      border-radius: 20px;
      padding: 2rem;
      max-width: 500px;
      margin: 0 auto;    /* centra horizontalmente */
      display: flex;
      flex-direction: column;
      gap: 1rem;
    }

    .form-box h2 {
      text-align: center;
      font-size: 1.3rem;
      margin-bottom: 0.5rem;
    }

    label {
      font-weight: bold;
      margin-bottom: 0.3rem;
    }

    input[type="text"],
    input[type="date"],
    select {
      padding: 0.5rem;
      border-radius: 5px;
      border: 1px solid #ccc;
      font-size: 1rem;
      width: 100%;
    }

    .btn-salvar {
      align-self: center;
      display: flex;
      align-items: center;
      gap: 0.3rem;
      padding: 0.6rem 1.2rem;
      background-color: #1877f2;
      color: white;
      border: none;
      border-radius: 6px;
      font-size: 1rem;
      cursor: pointer;
      margin-top: 0.5rem;
    }
    .btn-salvar:hover {
      background-color: #0f5ec0;
    }

    .voltar {
      margin-top: 2rem;
      text-align: center;
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
    <div class="form-box">
      <h2>Incluir Degustação</h2>

      <label for="degustador">Degustador</label>
      <input type="text" id="degustador" name="degustador" placeholder="Nome do degustador">

      <label for="data-degustacao">Data Degustação</label>
      <input type="date" id="data-degustacao" name="data-degustacao" value="2025-08-17">

      <label for="cozinheiro">Nome do Cozinheiro</label>
      <input type="text" id="cozinheiro" name="cozinheiro" placeholder="Nome do cozinheiro">

      <label for="receita">Nome Receita</label>
      <input type="text" id="receita" name="receita" placeholder="Nome da receita">

      <label for="nota">Nota da Degustação</label>
      <select id="nota" name="nota">
        <option value="">Selecione uma nota</option>
        <option value="1">1 ★</option>
        <option value="2">2 ★★</option>
        <option value="3">3 ★★★</option>
        <option value="4">4 ★★★★</option>
        <option value="5">5 ★★★★★</option>
      </select>

      <button class="btn-salvar" onclick="alert('Degustação registrada!')">
        <span class="material-icons">save</span> Salvar
      </button>
    </div>

    <div class="voltar" onclick="window.history.back()">Voltar</div>
  </div>

</body>
</html>
