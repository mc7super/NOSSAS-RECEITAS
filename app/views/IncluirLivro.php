<!-- IncluirLivro.php -->
<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Incluir Livro</title>
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <style>
    /* Reset básico */
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }
    body {
      font-family: Arial, sans-serif;
      background-color: #1e1e1e;
      color: #333;
    }

    /* Cabeçalho */
    header {
      background-color: #FFD700;
      color: #B22222;
      text-align: center;
      padding: 16px;
      font-size: 1.8rem;
      font-weight: bold;
    }

    /* Container geral */
    .container {
      padding: 24px;
      background-color: white;
      min-height: calc(100vh - 64px);
    }

    /* Box do formulário */
    .form-box {
      background-color: #f5f0c9;
      border-radius: 12px;
      padding: 24px;
      max-width: 700px;
      margin: 0 auto;
      display: flex;
      flex-wrap: wrap;
      gap: 16px;
    }

    .form-column {
      flex: 1 1 45%;
      display: flex;
      flex-direction: column;
      gap: 8px;
    }

    /* Se precisar que um campo ocupe 100% da largura, basta usar full-width */
    .full-width {
      flex: 1 1 100%;
    }

    h2 {
      width: 100%;
      text-align: center;
      margin-bottom: 16px;
      font-size: 1.3rem;
    }

    label {
      font-weight: bold;
      font-size: 0.95rem;
    }

    input[type="text"],
    textarea {
      padding: 8px;
      border: 1px solid #ccc;
      border-radius: 4px;
      font-size: 1rem;
      width: 100%;
      font-family: inherit;
    }

    textarea {
      min-height: 120px;
      resize: vertical;
    }

    .actions {
      width: 100%;
      display: flex;
      justify-content: center;
      margin-top: 16px;
    }

    .btn-salvar {
      display: flex;
      align-items: center;
      gap: 8px;
      padding: 10px 20px;
      background-color: #1877f2;
      color: white;
      border: none;
      border-radius: 6px;
      font-size: 1rem;
      cursor: pointer;
    }
    .btn-salvar:hover {
      background-color: #1056a3;
    }

    .voltar {
      margin-top: 24px;
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
      <h2>Incluir Livro</h2>

      <div class="form-column">
        <label for="titulo">Título</label>
        <input type="text" id="titulo" name="titulo" placeholder="Título do livro">

        <label for="isbn">ISBN</label>
        <input type="text" id="isbn" name="isbn" placeholder="ISBN">

        <label for="editor">Editor</label>
        <input type="text" id="editor" name="editor" placeholder="Nome do editor">
      </div>

      <div class="form-column">
        <label for="editora">Associar Editora</label>
        <textarea id="editora" name="editora" placeholder="Digite ou selecione editora"></textarea>
      </div>

      <div class="actions full-width">
        <button class="btn-salvar" onclick="alert('Livro salvo!')">
          <span class="material-icons">save</span> Salvar
        </button>
      </div>
    </div>

    <div class="voltar" onclick="window.history.back()">Voltar</div>
  </div>

</body>
</html>
