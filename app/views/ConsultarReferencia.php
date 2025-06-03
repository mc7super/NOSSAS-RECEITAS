<html lang="pt-BR">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Tabela Referência</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
  />
  <link
    href="https://fonts.googleapis.com/css2?family=Quicksand&display=swap"
    rel="stylesheet"
  />
  <style>
    body {
      font-family: 'Quicksand', sans-serif;
    }
  </style>
</head>
<body class="bg-white m-0 p-0">
  <header class="bg-yellow-400 py-3">
    <h1 class="text-center text-2xl font-extrabold text-[#8B2B3B] select-none">
      Nossas Receitas
    </h1>
  </header>

  <main class="flex justify-center px-4 py-8">
    <section
      class="bg-yellow-100 rounded-3xl max-w-4xl w-full p-6 md:p-10"
      aria-label="Tabela Referência"
    >
      <h2 class="text-center text-xl font-semibold mb-6 select-none">
        Tabela Referência
      </h2>
      <table class="w-full border-collapse text-center text-sm md:text-base">
        <thead>
          <tr class="border border-gray-300">
            <th class="border border-gray-300 py-2 font-normal">Funcionário</th>
            <th class="border border-gray-300 py-2 font-normal">Restaurante</th>
            <th class="border border-gray-300 py-2 font-normal">Data Início</th>
            <th class="border border-gray-300 py-2 font-normal">Data Fim</th>
            <th class="border border-gray-300 py-2 font-normal">Editar</th>
          </tr>
        </thead>
        <tbody>
          <tr class="border border-gray-300">
            <td class="border border-gray-300 py-2">Arthur</td>
            <td class="border border-gray-300 py-2">Nazo</td>
            <td class="border border-gray-300 py-2">12/03/2022</td>
            <td class="border border-gray-300 py-2">20/07/2024</td>
            <td class="border border-gray-300 py-2 space-x-2">
              <i class="fas fa-pencil-alt cursor-pointer" aria-label="Editar"></i>
              <i class="fas fa-info-circle cursor-pointer" aria-label="Informações"></i>
              <i class="fas fa-trash cursor-pointer" aria-label="Excluir"></i>
            </td>
          </tr>
          <tr class="border border-gray-300">
            <td class="border border-gray-300 py-2">Raffa Moreira</td>
            <td class="border border-gray-300 py-2">Pão Dourado</td>
            <td class="border border-gray-300 py-2">02/05/2020</td>
            <td class="border border-gray-300 py-2">-</td>
            <td class="border border-gray-300 py-2 space-x-2">
              <i class="fas fa-pencil-alt cursor-pointer" aria-label="Editar"></i>
              <i class="fas fa-info-circle cursor-pointer" aria-label="Informações"></i>
              <i class="fas fa-trash cursor-pointer" aria-label="Excluir"></i>
            </td>
          </tr>
          <tr class="border border-gray-300">
            <td class="border border-gray-300 py-2">Amanda</td>
            <td class="border border-gray-300 py-2">Comida Brasileira</td>
            <td class="border border-gray-300 py-2">22/01/2019</td>
            <td class="border border-gray-300 py-2">-</td>
            <td class="border border-gray-300 py-2 space-x-2">
              <i class="fas fa-pencil-alt cursor-pointer" aria-label="Editar"></i>
              <i class="fas fa-info-circle cursor-pointer" aria-label="Informações"></i>
              <i class="fas fa-trash cursor-pointer" aria-label="Excluir"></i>
            </td>
          </tr>
          <tr class="border border-gray-300">
            <td class="border border-gray-300 py-2">Melody</td>
            <td class="border border-gray-300 py-2">Família Pastrini</td>
            <td class="border border-gray-300 py-2">30/03/2023</td>
            <td class="border border-gray-300 py-2">10/02/2025</td>
            <td class="border border-gray-300 py-2 space-x-2">
              <i class="fas fa-pencil-alt cursor-pointer" aria-label="Editar"></i>
              <i class="fas fa-info-circle cursor-pointer" aria-label="Informações"></i>
              <i class="fas fa-trash cursor-pointer" aria-label="Excluir"></i>
            </td>
          </tr>
          <tr class="border border-gray-300">
            <td class="border border-gray-300 py-2">Hariel</td>
            <td class="border border-gray-300 py-2">Comida Caseira</td>
            <td class="border border-gray-300 py-2">12/12/2018</td>
            <td class="border border-gray-300 py-2">12/010/2022</td>
            <td class="border border-gray-300 py-2 space-x-2">
              <i class="fas fa-pencil-alt cursor-pointer" aria-label="Editar"></i>
              <i class="fas fa-info-circle cursor-pointer" aria-label="Informações"></i>
              <i class="fas fa-trash cursor-pointer" aria-label="Excluir"></i>
            </td>
          </tr>
          <tr class="border border-gray-300">
            <td class="border border-gray-300 py-2">Caio</td>
            <td class="border border-gray-300 py-2">Nazo</td>
            <td class="border border-gray-300 py-2">26/10/2020</td>
            <td class="border border-gray-300 py-2"></td>
            <td class="border border-gray-300 py-2 space-x-2">
              <i class="fas fa-pencil-alt cursor-pointer" aria-label="Editar"></i>
              <i class="fas fa-info-circle cursor-pointer" aria-label="Informações"></i>
              <i class="fas fa-trash cursor-pointer" aria-label="Excluir"></i>
            </td>
          </tr>
        </tbody>
      </table>
    </section>
  </main>

  <footer class="px-6 py-4">
    <button
      type="button"
      class="text-black text-lg font-normal bg-transparent border-none cursor-pointer select-none"
    >
      Voltar
    </button>
  </footer>
</body>
</html>