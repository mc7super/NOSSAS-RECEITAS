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
          <tr>
            <td>João Pedro</td>
            <td>12/04/2025</td>
            <td>R$ 1200</td>
            <td>Cozinheiro</td>
            <td>João</td>
            <td>
              <span class="material-icons icon" title="Editar">edit</span>
              <span class="material-icons icon" title="Excluir">delete</span>
            </td>
          </tr>
          <tr>
            <td>Joana Lima</td>
            <td>11/04/2025</td>
            <td>R$ 1300</td>
            <td>Degustador</td>
            <td>Joana</td>
            <td>
              <span class="material-icons icon" title="Editar">edit</span>
              <span class="material-icons icon" title="Excluir">delete</span>
            </td>
          </tr>
          <tr>
            <td>Carlos Santos</td>
            <td>10/04/2025</td>
            <td>R$ 2000</td>
            <td>Administrador</td>
            <td>Carlos</td>
            <td>
              <span class="material-icons icon" title="Editar">edit</span>
              <span class="material-icons icon" title="Excluir">delete</span>
            </td>
          </tr>
          <tr>
            <td>Rafaela Rocha</td>
            <td>22/04/2025</td>
            <td>R$ 1500</td>
            <td>Editor</td>
            <td>Rafaela</td>
            <td>
              <span class="material-icons icon" title="Editar">edit</span>
              <span class="material-icons icon" title="Excluir">delete</span>
            </td>
          </tr>
          <tr>
            <td>Ana Lúcia</td>
            <td>21/04/2025</td>
            <td>R$ 1300</td>
            <td>Degustador</td>
            <td>Ana</td>
            <td>
              <span class="material-icons icon" title="Editar">edit</span>
              <span class="material-icons icon" title="Excluir">delete</span>
            </td>
          </tr>
        </tbody>
      </table>
      <button class="btn-add" onclick="window.location.href='CadastrarFuncionario.php'">Adicionar funcionário</button>
    </div>

    <div class="voltar" onclick="window.history.back()">Voltar</div>
  </div>

</body>
</html> 