<html lang="pt-BR">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Tabela Medida</title>
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
<body class="bg-white">
  <header class="bg-yellow-400 py-3">
    <h1 class="text-center text-2xl font-extrabold text-red-800 select-none">
      Nossas Receitas
    </h1>
  </header>

  <main class="p-6">
    <section
      class="bg-yellow-200 rounded-3xl p-6 max-w-4xl mx-auto"
      aria-label="Tabela Medida"
    >
      <div class="flex justify-between items-center mb-4">
        <h2 class="text-center text-2xl font-semibold flex-grow select-none">
          Tabela Medida
        </h2>
        <button
          aria-label="Buscar"
          class="text-2xl text-black hover:text-gray-700 focus:outline-none"
        >
          <i class="fas fa-search"></i>
        </button>
      </div>

      <table class="w-full border border-gray-300 rounded-lg border-collapse">
        <thead>
          <tr class="bg-white">
            <th
              scope="col"
              class="border border-gray-300 text-center py-2 font-normal text-lg select-none"
            >
              Medidas
            </th>
            <th
              scope="col"
              class="border border-gray-300 text-center py-2 font-normal text-lg select-none"
            >
              Descrição
            </th>
            <th
              scope="col"
              class="border border-gray-300 text-center py-2 font-normal text-lg select-none"
            >
              Editar
            </th>
          </tr>
        </thead>
        <tbody>
          <tr class="bg-white">
            <td class="border border-gray-300 h-12"></td>
            <td class="border border-gray-300"></td>
            <td
              class="border border-gray-300 flex justify-center items-center space-x-3"
              style="min-width: 120px;"
            >
              <button
                aria-label="Editar"
                class="text-gray-700 hover:text-gray-900 text-lg"
              >
                <i class="fas fa-pencil-alt"></i>
              </button>
              <button
                aria-label="Informações"
                class="text-gray-700 hover:text-gray-900 text-lg rounded-full border border-gray-400 w-7 h-7 flex justify-center items-center"
              >
                <i class="fas fa-info"></i>
              </button>
              <button
                aria-label="Excluir"
                class="text-gray-700 hover:text-gray-900 text-lg"
              >
                <i class="fas fa-trash-alt"></i>
              </button>
            </td>
          </tr>
          <tr class="bg-white">
            <td class="border border-gray-300 h-12"></td>
            <td class="border border-gray-300"></td>
            <td
              class="border border-gray-300 flex justify-center items-center space-x-3"
              style="min-width: 120px;"
            >
              <button
                aria-label="Editar"
                class="text-gray-700 hover:text-gray-900 text-lg"
              >
                <i class="fas fa-pencil-alt"></i>
              </button>
              <button
                aria-label="Informações"
                class="text-gray-700 hover:text-gray-900 text-lg rounded-full border border-gray-400 w-7 h-7 flex justify-center items-center"
              >
                <i class="fas fa-info"></i>
              </button>
              <button
                aria-label="Excluir"
                class="text-gray-700 hover:text-gray-900 text-lg"
              >
                <i class="fas fa-trash-alt"></i>
              </button>
            </td>
          </tr>
          <tr class="bg-white">
            <td class="border border-gray-300 h-12"></td>
            <td class="border border-gray-300"></td>
            <td
              class="border border-gray-300 flex justify-center items-center space-x-3"
              style="min-width: 120px;"
            >
              <button
                aria-label="Editar"
                class="text-gray-700 hover:text-gray-900 text-lg"
              >
                <i class="fas fa-pencil-alt"></i>
              </button>
              <button
                aria-label="Informações"
                class="text-gray-700 hover:text-gray-900 text-lg rounded-full border border-gray-400 w-7 h-7 flex justify-center items-center"
              >
                <i class="fas fa-info"></i>
              </button>
              <button
                aria-label="Excluir"
                class="text-gray-700 hover:text-gray-900 text-lg"
              >
                <i class="fas fa-trash-alt"></i>
              </button>
            </td>
          </tr>
          <tr class="bg-white">
            <td class="border border-gray-300 h-12"></td>
            <td class="border border-gray-300"></td>
            <td
              class="border border-gray-300 flex justify-center items-center space-x-3"
              style="min-width: 120px;"
            >
              <button
                aria-label="Editar"
                class="text-gray-700 hover:text-gray-900 text-lg"
              >
                <i class="fas fa-pencil-alt"></i>
              </button>
              <button
                aria-label="Informações"
                class="text-gray-700 hover:text-gray-900 text-lg rounded-full border border-gray-400 w-7 h-7 flex justify-center items-center"
              >
                <i class="fas fa-info"></i>
              </button>
              <button
                aria-label="Excluir"
                class="text-gray-700 hover:text-gray-900 text-lg"
              >
                <i class="fas fa-trash-alt"></i>
              </button>
            </td>
          </tr>
        </tbody>
      </table>
    </section>
  </main>

  <footer class="p-6 max-w-4xl mx-auto">
    <button
      class="text-black text-lg font-normal select-none"
      aria-label="Voltar"
    >
      Voltar
    </button>
  </footer>
</body>
</html>