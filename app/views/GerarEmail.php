<!-- GerarEmail.php -->
<html lang="pt-BR">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Nossas Receitas</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
  />
  <link
    href="https://fonts.googleapis.com/css2?family=Fredoka+One&display=swap"
    rel="stylesheet"
  />
  <style>
    body {
      font-family: 'Inter', sans-serif;
    }
    .font-fredoka {
      font-family: 'Fredoka One', cursive;
    }
  </style>
</head>
<body class="bg-white">
  <header class="bg-yellow-400 py-3 text-center">
    <h1 class="font-fredoka text-[A73838] text-lg leading-none">Nossas Receitas</h1>
  </header>

  <main class="p-4">
    <section class="bg-yellow-100 rounded-xl p-6 max-w-4xl mx-auto">
      <h2 class="text-center font-semibold text-lg mb-4">Gerar e-mail de Produção Mensal</h2>
      <div class="overflow-x-auto">
        <table class="w-full border border-gray-300 border-collapse rounded-lg">
          <thead>
            <tr class="bg-white">
              <th class="border border-gray-300 px-3 py-1 text-left text-sm font-normal">Cozinheiro</th>
              <th class="border border-gray-300 px-3 py-1 text-center text-sm font-normal">Receitas prontas</th>
              <th class="border border-gray-300 px-3 py-1 text-center text-sm font-normal">Receitas a Fazer</th>
              <th class="border border-gray-300 px-3 py-1 text-center text-sm font-normal">Meta</th>
              <th class="border border-gray-300 px-3 py-1 text-center text-sm font-normal">Editor</th>
            </tr>
          </thead>
          <tbody>
            <tr class="bg-white">
              <td class="border border-gray-300 px-3 py-1 text-sm">Arthur</td>
              <td class="border border-gray-300 px-3 py-1 text-center text-sm">8</td>
              <td class="border border-gray-300 px-3 py-1 text-center text-sm">12</td>
              <td class="border border-gray-300 px-3 py-1 text-center text-sm">✓</td>
              <td class="border border-gray-300 px-3 py-1 text-center text-sm space-x-1">
                <i class="fas fa-pencil-alt"></i>
                <i class="fas fa-info-circle"></i>
                <i class="fas fa-trash"></i>
                <i class="far fa-square"></i>
              </td>
            </tr>
            <tr class="bg-white">
              <td class="border border-gray-300 px-3 py-1 text-sm">Djonga</td>
              <td class="border border-gray-300 px-3 py-1 text-center text-sm">22</td>
              <td class="border border-gray-300 px-3 py-1 text-center text-sm">5</td>
              <td class="border border-gray-300 px-3 py-1 text-center text-sm">✓</td>
              <td class="border border-gray-300 px-3 py-1 text-center text-sm space-x-1">
                <i class="fas fa-pencil-alt"></i>
                <i class="fas fa-info-circle"></i>
                <i class="fas fa-trash"></i>
                <i class="far fa-square"></i>
              </td>
            </tr>
            <tr class="bg-white">
              <td class="border border-gray-300 px-3 py-1 text-sm">Froid</td>
              <td class="border border-gray-300 px-3 py-1 text-center text-sm">9</td>
              <td class="border border-gray-300 px-3 py-1 text-center text-sm">16</td>
              <td class="border border-gray-300 px-3 py-1 text-center text-sm">✓</td>
              <td class="border border-gray-300 px-3 py-1 text-center text-sm space-x-1">
                <i class="fas fa-pencil-alt"></i>
                <i class="fas fa-info-circle"></i>
                <i class="fas fa-trash"></i>
                <i class="far fa-square"></i>
              </td>
            </tr>
            <tr class="bg-white">
              <td class="border border-gray-300 px-3 py-1 text-sm">Beyoncé</td>
              <td class="border border-gray-300 px-3 py-1 text-center text-sm">7</td>
              <td class="border border-gray-300 px-3 py-1 text-center text-sm">14</td>
              <td class="border border-gray-300 px-3 py-1 text-center text-sm">
                <i class="fas fa-sync-alt"></i>
              </td>
              <td class="border border-gray-300 px-3 py-1 text-center text-sm space-x-1">
                <i class="fas fa-pencil-alt"></i>
                <i class="fas fa-info-circle"></i>
                <i class="fas fa-trash"></i>
                <input type="checkbox" checked class="inline-block align-middle" />
              </td>
            </tr>
            <tr class="bg-white">
              <td class="border border-gray-300 px-3 py-1 text-sm">Pedro Pascal</td>
              <td class="border border-gray-300 px-3 py-1 text-center text-sm">15</td>
              <td class="border border-gray-300 px-3 py-1 text-center text-sm">18</td>
              <td class="border border-gray-300 px-3 py-1 text-center text-sm">
                <i class="far fa-clock"></i>
              </td>
              <td class="border border-gray-300 px-3 py-1 text-center text-sm space-x-1">
                <i class="fas fa-pencil-alt"></i>
                <i class="fas fa-info-circle"></i>
                <i class="fas fa-trash"></i>
                <input type="checkbox" class="inline-block align-middle" />
              </td>
            </tr>
            <tr class="bg-white">
              <td class="border border-gray-300 px-3 py-1 text-sm">Joel Miller</td>
              <td class="border border-gray-300 px-3 py-1 text-center text-sm">5</td>
              <td class="border border-gray-300 px-3 py-1 text-center text-sm">25</td>
              <td class="border border-gray-300 px-3 py-1 text-center text-sm">✓</td>
              <td class="border border-gray-300 px-3 py-1 text-center text-sm space-x-1">
                <i class="fas fa-pencil-alt"></i>
                <i class="fas fa-info-circle"></i>
                <i class="fas fa-trash"></i>
                <input type="checkbox" class="inline-block align-middle" />
              </td>
            </tr>
            <tr class="bg-white">
              <td class="border border-gray-300 px-3 py-1 text-sm">Ellie</td>
              <td class="border border-gray-300 px-3 py-1 text-center text-sm">10</td>
              <td class="border border-gray-300 px-3 py-1 text-center text-sm">16</td>
              <td class="border border-gray-300 px-3 py-1 text-center text-sm">✓</td>
              <td class="border border-gray-300 px-3 py-1 text-center text-sm space-x-1">
                <i class="fas fa-pencil-alt"></i>
                <i class="fas fa-info-circle"></i>
                <i class="fas fa-trash"></i>
                <input type="checkbox" checked class="inline-block align-middle" />
              </td>
            </tr>
          </tbody>
        </table>
      </div>
      <div class="mt-6 text-center">
        <button
          class="bg-blue-600 text-white px-4 py-2 rounded-md text-sm flex items-center justify-center mx-auto"
          type="button"
        >
          Enviar para os selecionados&nbsp;<i class="fas fa-envelope"></i>
        </button>
      </div>
    </section>
  </main>

  <footer class="p-4 text-right text-lg font-normal" onclick="window.history.back()">Voltar</footer>
</body>
</html>