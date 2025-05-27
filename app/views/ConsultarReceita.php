<!-- ConsultarReceita.php -->
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
  <style>
    /* Custom font family to match the header */
    @import url('https://fonts.googleapis.com/css2?family=Fredoka+One&display=swap');
    .font-fredoka {
      font-family: 'Fredoka One', cursive;
    }
  </style>
</head>
<body class="bg-white min-h-screen flex flex-col justify-between">
  <header class="bg-yellow-400 py-3">
    <h1 class="text-center text-[#a63f3f] font-fredoka text-xl select-none">Nossas Receitas</h1>
  </header>

  <main class="flex justify-center p-4">
    <section class="bg-yellow-100 rounded-2xl p-6 w-full max-w-4xl">
      <h2 class="text-center font-semibold mb-4 text-lg select-none">Tabela Receita</h2>
      <div class="overflow-x-auto">
        <table class="w-full border-collapse rounded-lg overflow-hidden">
          <thead>
            <tr class="bg-white border border-gray-300 rounded-t-lg">
              <th class="border border-gray-300 rounded-tl-lg px-2 py-1 text-sm text-center font-normal">Nome da Receita</th>
              <th class="border border-gray-300 px-2 py-1 text-sm text-center font-normal">Data Criação</th>
              <th class="border border-gray-300 px-2 py-1 text-sm text-center font-normal">Modo de Preparo</th>
              <th class="border border-gray-300 px-2 py-1 text-sm text-center font-normal">Quantidade</th>
              <th class="border border-gray-300 px-2 py-1 text-sm text-center font-normal">Receita inédita</th>
              <th class="border border-gray-300 rounded-tr-lg px-2 py-1 text-sm text-center font-normal">Editor</th>
            </tr>
          </thead>
          <tbody>
            <tr class="bg-white border border-gray-300 text-xs">
              <td class="border border-gray-300 px-2 py-1 text-left">Bolo de Cenoura</td>
              <td class="border border-gray-300 px-2 py-1 text-center">01/04/2025</td>
              <td class="border border-gray-300 px-2 py-1 text-center">Misturar e assar</td>
              <td class="border border-gray-300 px-2 py-1 text-center">1 unidade</td>
              <td class="border border-gray-300 px-2 py-1 text-center">Sim</td>
              <td class="border border-gray-300 px-2 py-1 text-center space-x-1">
                <i class="fas fa-pencil-alt cursor-pointer" title="Editar"></i>
                <i class="fas fa-info-circle cursor-pointer" title="Informações"></i>
                <i class="fas fa-trash cursor-pointer" title="Excluir"></i>
              </td>
            </tr>
            <tr class="bg-white border border-gray-300 text-xs">
              <td class="border border-gray-300 px-2 py-1 text-center">Arroz Doce</td>
              <td class="border border-gray-300 px-2 py-1 text-center">03/04/2025</td>
              <td class="border border-gray-300 px-2 py-1 text-center">Cozinhar com leite</td>
              <td class="border border-gray-300 px-2 py-1 text-center">4 porções</td>
              <td class="border border-gray-300 px-2 py-1 text-center">Não</td>
              <td class="border border-gray-300 px-2 py-1 text-center space-x-1">
                <i class="fas fa-pencil-alt cursor-pointer" title="Editar"></i>
                <i class="fas fa-info-circle cursor-pointer" title="Informações"></i>
                <i class="fas fa-trash cursor-pointer" title="Excluir"></i>
              </td>
            </tr>
            <tr class="bg-white border border-gray-300 text-xs">
              <td class="border border-gray-300 px-2 py-1 text-left">Lasanha</td>
              <td class="border border-gray-300 px-2 py-1 text-center">05/04/2025</td>
              <td class="border border-gray-300 px-2 py-1 text-center">Montar camadas e assar</td>
              <td class="border border-gray-300 px-2 py-1 text-center">6 porções</td>
              <td class="border border-gray-300 px-2 py-1 text-center">Não</td>
              <td class="border border-gray-300 px-2 py-1 text-center space-x-1">
                <i class="fas fa-pencil-alt cursor-pointer" title="Editar"></i>
                <i class="fas fa-info-circle cursor-pointer" title="Informações"></i>
                <i class="fas fa-trash cursor-pointer" title="Excluir"></i>
              </td>
            </tr>
            <tr class="bg-white border border-gray-300 text-xs">
              <td class="border border-gray-300 px-2 py-1 text-left">Salada de Frutas</td>
              <td class="border border-gray-300 px-2 py-1 text-center">07/04/2025</td>
              <td class="border border-gray-300 px-2 py-1 text-center">Picar frutas e misturar</td>
              <td class="border border-gray-300 px-2 py-1 text-center">3 porções</td>
              <td class="border border-gray-300 px-2 py-1 text-center">Sim</td>
              <td class="border border-gray-300 px-2 py-1 text-center space-x-1">
                <i class="fas fa-pencil-alt cursor-pointer" title="Editar"></i>
                <i class="fas fa-info-circle cursor-pointer" title="Informações"></i>
                <i class="fas fa-trash cursor-pointer" title="Excluir"></i>
              </td>
            </tr>
            <tr class="bg-white border border-gray-300 text-xs">
              <td class="border border-gray-300 px-2 py-1 text-left">Pudim</td>
              <td class="border border-gray-300 px-2 py-1 text-center">10/04/2025</td>
              <td class="border border-gray-300 px-2 py-1 text-center">Bater e assar em banho-maria</td>
              <td class="border border-gray-300 px-2 py-1 text-center">1 unidade</td>
              <td class="border border-gray-300 px-2 py-1 text-center">Não</td>
              <td class="border border-gray-300 px-2 py-1 text-center space-x-1">
                <i class="fas fa-pencil-alt cursor-pointer" title="Editar"></i>
                <i class="fas fa-info-circle cursor-pointer" title="Informações"></i>
                <i class="fas fa-trash cursor-pointer" title="Excluir"></i>
              </td>
            </tr>
            <tr class="bg-white border border-gray-300 text-xs">
              <td class="border border-gray-300 px-2 py-1 text-left">Torta de Frango</td>
              <td class="border border-gray-300 px-2 py-1 text-center">12/04/2025</td>
              <td class="border border-gray-300 px-2 py-1 text-center">Preparar massa e recheio</td>
              <td class="border border-gray-300 px-2 py-1 text-center">1 unidade</td>
              <td class="border border-gray-300 px-2 py-1 text-center">Sim</td>
              <td class="border border-gray-300 px-2 py-1 text-center space-x-1">
                <i class="fas fa-pencil-alt cursor-pointer" title="Editar"></i>
                <i class="fas fa-info-circle cursor-pointer" title="Informações"></i>
                <i class="fas fa-trash cursor-pointer" title="Excluir"></i>
              </td>
            </tr>
          </tbody>
        </table>
      </div>
    </section>
  </main>

  <footer class="p-4">
    <div class="text-right text-lg select-none">Voltar</div>
  </footer>
</body>
</html>