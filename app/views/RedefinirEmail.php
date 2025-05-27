<!-- RedefinirEmail.php -->
<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>     
    Redefinir E-mail - Nossas Receitas 
</title>
  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    body, html {
      height: 100%;
      font-family: Arial, sans-serif;
    }

    header {
      background-color: #FFD700;
      color: #B22222;
      padding: 20px;
      text-align: center;
      font-size: 2rem;
      font-weight: bold;
    }

    .background {
      height: calc(100% - 80px);
      background-image: url('https://images.unsplash.com/photo-1600891964599-f61ba0e24092');
      background-size: cover;
      background-position: center;
      display: flex;
      justify-content: center;
      align-items: center;
    }

    .email-box {
      background-color: rgba(240, 240, 240, 0.95);
      padding: 2rem;
      border-radius: 20px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.3);
      width: 300px;
      display: flex;
      flex-direction: column;
      gap: 1rem;
      align-items: center;
    }

    .email-box h2 {
      margin-bottom: 1rem;
      color: #333;
      font-size: 1.3rem;
    }

    .email-box input[type="email"] {
      width: 100%;
      padding: 0.6rem;
      border-radius: 5px;
      border: 1px solid #ccc;
    }

    .submit-button {
      background-color: #222;
      color: white;
      padding: 0.6rem;
      border: none;
      border-radius: 50%;
      width: 50px;
      height: 50px;
      font-size: 1.5rem;
      cursor: pointer;
    }

    .submit-button:hover {
      background-color: #444;
    }
  </style>
</head>
<body>

  <header>Nossas Receitas</header>

  <div class="background">
    <div class="email-box">
      <h2>Redefinição de e-mail</h2>
      <input id="email" type="email" placeholder="Novo e-mail" required>
      <button class="submit-button" onclick="enviarEmail()">➜</button>
    </div>
  </div>

  <script>
    function enviarEmail() {
      const email = document.getElementById('email').value;

      if (email === '' || !email.includes('@')) {
        alert('Por favor, insira um e-mail válido.');
        return;
      }

      

      alert('E-mail redefinido com sucesso!');
      window.location.href = 'login.html'; // Redireciona para a tela de login 
    }
  </script>

</body>
</html>
