<?php
session_start();

if (isset($_SESSION['usuario']['cargo'])) {
    $cargo = strtolower($_SESSION['usuario']['cargo']);
    switch ($cargo) {
        case 'administrador':
            header('Location: ../Views/DashAdmin.php');
            exit;
        case 'cozinheiro':
            header('Location: ../Views/DashCozinheiro.php');
            exit;
        case 'degustador':
            header('Location: ../Views/DashDegustador.php');
            exit;
        case 'editor':
            header('Location: ../Views/DashEditor.php');
            exit;
        default:
            session_destroy();
            header('Location: index.php?erro=cargo_invalido');
            exit;
    }
}
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Nossas Receitas - Login</title>
  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    body,
    html {
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
      /* Altura da tela menos o header */
      background-image: url('https://images.unsplash.com/photo-1600891964599-f61ba0e24092');
      background-size: cover;
      background-position: center;
      display: flex;
      justify-content: center;
      align-items: center;
    }

    .login-box {
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

    .login-box h2 {
      margin-bottom: 1rem;
      color: #333;
    }

    .login-box input[type="email"],
    .login-box input[type="password"] {
      width: 100%;
      padding: 0.6rem;
      border-radius: 5px;
      border: 1px solid #ccc;
    }

    .input-wrapper {
      position: relative;
      width: 100%;
    }

    .toggle-password {
      position: absolute;
      top: 50%;
      right: 10px;
      transform: translateY(-50%);
      background: none;
      border: none;
      cursor: pointer;
      font-size: 1rem;
    }

    .login-box a {
      align-self: flex-start;
      font-size: 0.9rem;
      color: blue;
      text-decoration: none;
    }

    .login-button {
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

    .login-button:hover {
      background-color: #444;
    }
  </style>
</head>

<body>

  <header>Nossas Receitas</header>

  <div class="background">
    <div class="login-box">
      <h2>Login</h2>
      <?php if (isset($_GET['erro'])): ?>
  <?php
    $mensagem = '';
    switch ($_GET['erro']) {
      case 'cargo_invalido':
        $mensagem = 'Cargo inválido. Entre em contato com o administrador.';
        break;
      case 'credenciais_invalidas':
        $mensagem = 'E-mail ou senha inválidos.';
        break;
      case 'campos_vazios':
        $mensagem = 'Preencha todos os campos.';
        break;
      default:
        $mensagem = 'Erro desconhecido. Tente novamente.';
    }
  ?>
  <p style="color: red; text-align: center;"><?php echo $mensagem; ?></p>
<?php endif; ?>

      <form action="autenticar.php" method="POST">
        <input type="email" name="email" placeholder="e-mail" required>
        <div class="input-wrapper">
          <input type="password" name="senha" placeholder="senha" id="senha" required>
          <button type="button" class="toggle-password" onclick="toggleSenha()" aria-label="Mostrar ou esconder senha">👁‍🗨</button>
        </div>
        <a href="../Views/redefinicao.php">redefinir senha</a>
        <button type="submit" class="login-button">➜</button>
      </form>

    </div>
  </div>

  <script>
    function toggleSenha() {
      const input = document.getElementById("senha");
      input.type = input.type === "password" ? "text" : "password";
    }
  </script>

</body>

</html>