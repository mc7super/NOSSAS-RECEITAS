<!-- RealatorioMensal.php -->
<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Relatório & Parâmetros</title>
  <style>
    /* Reset básico */
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

    /* Cabeçalho */
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

    
    .content-box {
      background-color: #f5f0c9;
      padding: 2rem;
      border-radius: 20px;
      box-shadow: 0 0 10px rgba(0,0,0,0.2);
      width: 90%;
      max-width: 800px;
      display: flex;
      gap: 2rem;
      flex-wrap: wrap;
      justify-content: center;
    }

    
    .block {
      background-color: rgba(255,255,255,0.9);
      padding: 1.5rem;
      border-radius: 12px;
      flex: 1 1 250px;
      display: flex;
      flex-direction: column;
      gap: 1rem;
    }

    .block h3 {
      font-size: 1.2rem;
      color: #333;
      text-align: center;
      margin-bottom: 0.5rem;
    }

    .report-item {
      font-size: 1rem;
      color: #222;
    }

    .label {
      font-size: 0.95rem;
      color: #222;
      margin-bottom: 0.3rem;
    }

    input[type="date"],
    input[type="email"] {
      padding: 0.5rem;
      border: 1px solid #ccc;
      border-radius: 5px;
      font-size: 1rem;
      width: 100%;
    }

    .btn {
      margin-top: auto;
      padding: 0.7rem;
      background-color: #1877f2;
      color: white;
      border: none;
      border-radius: 8px;
      font-size: 1rem;
      cursor: pointer;
      transition: background-color 0.3s;
    }
    .btn:hover {
      background-color: #1056a3;
    }

    /* Voltar */
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

    <div class="content-box">
      
      <div class="block">
        <h3>Relatório de Produção Mensal</h3>
        <div class="report-item">Total de Receitas: <strong id="total-receitas">10</strong></div>
        <div class="report-item">Degustações Realizadas: <strong id="total-degustacoes">10</strong></div>
        <button class="btn" onclick="enviarPorEmail()">Enviar por E-mail</button>
      </div>

      
      <div class="block">
        <h3>Parâmetro do Sistema</h3>
        <label class="label" for="data-producao">Data Produção</label>
        <input id="data-producao" type="date" value="2025-04-12">

        <label class="label" for="email-param">E-mail</label>
        <input id="email-param" type="email" placeholder="seu@exemplo.com">

        <button class="btn" onclick="salvarParametros()">Salvar</button>
      </div>
    </div>

    <div class="voltar" onclick="window.history.back()">Voltar</div>
  </div>

  <script>
    function enviarPorEmail() {
      // integrar com com backend para enviar relatório
      alert('Relatório enviado por e-mail com sucesso!');
    }

    function salvarParametros() {
      const data = document.getElementById('data-producao').value;
      const email = document.getElementById('email-param').value;
      if (!data || !email.includes('@')) {
        alert('Preencha a data e um e-mail válido.');
        return;
      }
      alert('Parâmetros salvos!');
    }
  </script>

</body>
</html>
