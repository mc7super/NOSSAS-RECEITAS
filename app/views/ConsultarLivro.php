<!-- ConsultarLivro.php -->
<html lang="pt-BR">
<head>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1" />
<title>Tabela Livro</title>
<script src="https://cdn.tailwindcss.com"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
<style>
  /* Override Tailwind's default font for the header to match the screenshot's style */
  .font-poppins {
    font-family: 'Poppins', sans-serif;
  }
</style>
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@700&display=swap" rel="stylesheet" />
</head>
<body class="bg-white text-black">
  <header class="bg-yellow-400 py-3 text-center">
    <h1 class="font-poppins font-bold text-lg text-[#8B2F4B]">Nossas Receitas</h1>
  </header>
  <main class="p-6 bg-yellow-100 rounded-2xl max-w-4xl mx-auto mt-6">
    <h2 class="font-bold text-center text-lg mb-4">Tabela Livro</h2>
    <div class="overflow-x-auto">
      <table class="w-full border-collapse rounded-lg overflow-hidden">
        <thead>
          <tr class="bg-white border border-gray-300">
            <th class="border border-gray-300 px-3 py-1 text-left text-xs">Nome</th>
            <th class="border border-gray-300 px-3 py-1 text-left text-xs">Data ingresso</th>
            <th class="border border-gray-300 px-3 py-1 text-left text-xs">Salário</th>
            <th class="border border-gray-300 px-3 py-1 text-left text-xs">Cargo</th>
            <th class="border border-gray-300 px-3 py-1 text-left text-xs">Nome fantasia</th>
            <th class="border border-gray-300 px-3 py-1 text-left text-xs">Editar</th>
          </tr>
        </thead>
        <tbody>
          <tr class="bg-white border border-gray-300">
            <td class="border border-gray-300 px-3 py-1 text-sm">Arthur</td>
            <td class="border border-gray-300 px-3 py-1 text-sm">12/06/2021</td>
            <td class="border border-gray-300 px-3 py-1 text-sm">R$1518</td>
            <td class="border border-gray-300 px-3 py-1 text-sm">Cozinheiro</td>
            <td class="border border-gray-300 px-3 py-1 text-sm">Arturito</td>
            <td class="border border-gray-300 px-3 py-1 text-sm flex gap-2">
              <i class="fas fa-pencil-alt"></i>
              <i class="far fa-clock"></i>
              <i class="fas fa-trash"></i>
            </td>
          </tr>
          <tr class="bg-white border border-gray-300">
            <td class="border border-gray-300 px-3 py-1 text-sm">Carlos</td>
            <td class="border border-gray-300 px-3 py-1 text-sm">13/07/25</td>
            <td class="border border-gray-300 px-3 py-1 text-sm">R$1518</td>
            <td class="border border-gray-300 px-3 py-1 text-sm">Cozinheiro</td>
            <td class="border border-gray-300 px-3 py-1 text-sm">Carlitos</td>
            <td class="border border-gray-300 px-3 py-1 text-sm flex gap-2">
              <i class="fas fa-pencil-alt"></i>
              <i class="far fa-clock"></i>
              <i class="fas fa-trash"></i>
            </td>
          </tr>
          <tr class="bg-white border border-gray-300">
            <td class="border border-gray-300 px-3 py-1 text-sm">Pedro Q.</td>
            <td class="border border-gray-300 px-3 py-1 text-sm">14/02/22</td>
            <td class="border border-gray-300 px-3 py-1 text-sm">R$1518</td>
            <td class="border border-gray-300 px-3 py-1 text-sm">Cozinheiro</td>
            <td class="border border-gray-300 px-3 py-1 text-sm">Pedrinho</td>
            <td class="border border-gray-300 px-3 py-1 text-sm flex gap-2">
              <i class="fas fa-pencil-alt"></i>
              <i class="far fa-clock"></i>
              <i class="fas fa-trash"></i>
            </td>
          </tr>
          <tr class="bg-white border border-gray-300">
            <td class="border border-gray-300 px-3 py-1 text-sm">Bruno H</td>
            <td class="border border-gray-300 px-3 py-1 text-sm">16/01/20</td>
            <td class="border border-gray-300 px-3 py-1 text-sm">R$1518</td>
            <td class="border border-gray-300 px-3 py-1 text-sm">Cozinheiro</td>
            <td class="border border-gray-300 px-3 py-1 text-sm">Mr. Classics</td>
            <td class="border border-gray-300 px-3 py-1 text-sm flex gap-2">
              <i class="fas fa-pencil-alt"></i>
              <i class="far fa-clock"></i>
              <i class="fas fa-trash"></i>
            </td>
          </tr>
          <tr class="bg-white border border-gray-300">
            <td class="border border-gray-300 px-3 py-1 text-sm">João Gomes</td>
            <td class="border border-gray-300 px-3 py-1 text-sm">17/12/22</td>
            <td class="border border-gray-300 px-3 py-1 text-sm">R$1518</td>
            <td class="border border-gray-300 px-3 py-1 text-sm">Cozinheiro</td>
            <td class="border border-gray-300 px-3 py-1 text-sm">Pitbull</td>
            <td class="border border-gray-300 px-3 py-1 text-sm flex gap-2">
              <i class="fas fa-pencil-alt"></i>
              <i class="far fa-clock"></i>
              <i class="fas fa-trash"></i>
            </td>
          </tr>
          <tr class="bg-white border border-gray-300">
            <td class="border border-gray-300 px-3 py-1 text-sm">Donald T.</td>
            <td class="border border-gray-300 px-3 py-1 text-sm">22/04/23</td>
            <td class="border border-gray-300 px-3 py-1 text-sm">R$1518</td>
            <td class="border border-gray-300 px-3 py-1 text-sm">Cozinheiro</td>
            <td class="border border-gray-300 px-3 py-1 text-sm">Presida</td>
            <td class="border border-gray-300 px-3 py-1 text-sm flex gap-2">
              <i class="fas fa-pencil-alt"></i>
              <i class="far fa-clock"></i>
              <i class="fas fa-trash"></i>
            </td>
          </tr>
        </tbody>
      </table>
    </div>
  </main>
  <footer class="p-6 text-right text-base">
    <button class="bg-transparent text-black focus:outline-none">Voltar</button>
  </footer>
</body>
</html>