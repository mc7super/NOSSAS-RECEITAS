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
    /* Override Tailwind's default table border-collapse to separate for spacing */
    table {
      border-collapse: separate;
      border-spacing: 0 0.25rem;
    }
  </style>
</head>
<body class="bg-white font-sans">
  <header class="bg-yellow-400 py-3 text-center">
    <h1 class="text-lg font-extrabold text-red-800">Nossas Receitas</h1>
  </header>

  <main class="p-6">
    <section
      class="bg-yellow-100 rounded-xl max-w-4xl mx-auto p-6"
      aria-label="Tabela Restaurante"
    >
      <h2 class="text-center font-semibold text-lg mb-4">Tabela Restaurante</h2>
      <table class="w-full text-center text-xs sm:text-sm border border-gray-300 rounded-md overflow-hidden">
        <thead>
          <tr class="bg-white">
            <th class="border border-gray-300 py-1 px-2 font-normal">Nota Do Restaurante</th>
            <th class="border border-gray-300 py-1 px-2 font-normal">Nome Restaurante</th>
            <th class="border border-gray-300 py-1 px-2 font-normal">Editar</th>
          </tr>
        </thead>
        <tbody>
          <tr class="bg-white">
            <td class="border border-gray-300 py-1 px-2 text-left">
              <span class="text-yellow-400 text-[10px] sm:text-xs">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="far fa-star"></i>
                <i class="far fa-star"></i>
              </span>
            </td>
            <td class="border border-gray-300 py-1 px-2">Nazo</td>
            <td class="border border-gray-300 py-1 px-2 space-x-2 text-gray-600 text-xs sm:text-sm">
              <i class="fas fa-pencil-alt"></i>
              <i class="fas fa-info-circle"></i>
              <i class="fas fa-trash-alt"></i>
            </td>
          </tr>
          <tr class="bg-white">
            <td class="border border-gray-300 py-1 px-2 text-left">
              <span class="text-yellow-400 text-[10px] sm:text-xs">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="far fa-star"></i>
              </span>
            </td>
            <td class="border border-gray-300 py-1 px-2">Pão Dourado</td>
            <td class="border border-gray-300 py-1 px-2 space-x-2 text-gray-600 text-xs sm:text-sm">
              <i class="fas fa-pencil-alt"></i>
              <i class="fas fa-info-circle"></i>
              <i class="fas fa-trash-alt"></i>
            </td>
          </tr>
          <tr class="bg-white">
            <td class="border border-gray-300 py-1 px-2 text-left">
              <span class="text-yellow-400 text-[10px] sm:text-xs">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="far fa-star"></i>
                <i class="far fa-star"></i>
              </span>
            </td>
            <td class="border border-gray-300 py-1 px-2">Comida Brasileira</td>
            <td class="border border-gray-300 py-1 px-2 space-x-2 text-gray-600 text-xs sm:text-sm">
              <i class="fas fa-pencil-alt"></i>
              <i class="fas fa-info-circle"></i>
              <i class="fas fa-trash-alt"></i>
            </td>
          </tr>
          <tr class="bg-white">
            <td class="border border-gray-300 py-1 px-2 text-left">
              <span class="text-yellow-400 text-[10px] sm:text-xs">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="far fa-star"></i>
              </span>
            </td>
            <td class="border border-gray-300 py-1 px-2">Família Pastrini</td>
            <td class="border border-gray-300 py-1 px-2 space-x-2 text-gray-600 text-xs sm:text-sm">
              <i class="fas fa-pencil-alt"></i>
              <i class="fas fa-info-circle"></i>
              <i class="fas fa-trash-alt"></i>
            </td>
          </tr>
          <tr class="bg-white">
            <td class="border border-gray-300 py-1 px-2 text-left">
              <span class="text-yellow-400 text-[10px] sm:text-xs">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
              </span>
            </td>
            <td class="border border-gray-300 py-1 px-2">Fausto e Manoel</td>
            <td class="border border-gray-300 py-1 px-2 space-x-2 text-gray-600 text-xs sm:text-sm">
              <i class="fas fa-pencil-alt"></i>
              <i class="fas fa-info-circle"></i>
              <i class="fas fa-trash-alt"></i>
            </td>
          </tr>
          <tr class="bg-white">
            <td class="border border-gray-300 py-1 px-2 text-left">
              <span class="text-yellow-400 text-[10px] sm:text-xs">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
              </span>
            </td>
            <td class="border border-gray-300 py-1 px-2">Tarumã Cozinha e Bar</td>
            <td class="border border-gray-300 py-1 px-2 space-x-2 text-gray-600 text-xs sm:text-sm">
              <i class="fas fa-pencil-alt"></i>
              <i class="fas fa-info-circle"></i>
              <i class="fas fa-trash-alt"></i>
            </td>
          </tr>
          <tr class="bg-white">
            <td class="border border-gray-300 py-1 px-2 text-left">
              <span class="text-yellow-400 text-[10px] sm:text-xs">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
              </span>
            </td>
            <td class="border border-gray-300 py-1 px-2">Coco Bambu</td>
            <td class="border border-gray-300 py-1 px-2 space-x-2 text-gray-600 text-xs sm:text-sm">
              <i class="fas fa-pencil-alt"></i>
              <i class="fas fa-info-circle"></i>
              <i class="fas fa-trash-alt"></i>
            </td>
          </tr>
          <tr class="bg-white">
            <td class="border border-gray-300 py-1 px-2 text-left">
              <span class="text-yellow-400 text-[10px] sm:text-xs">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
              </span>
            </td>
            <td class="border border-gray-300 py-1 px-2">Nonna Augusta Trattoria</td>
            <td class="border border-gray-300 py-1 px-2 space-x-2 text-gray-600 text-xs sm:text-sm">
              <i class="fas fa-pencil-alt"></i>
              <i class="fas fa-info-circle"></i>
              <i class="fas fa-trash-alt"></i>
            </td>
          </tr>
        </tbody>
      </table>
    </section>
  </main>

  <footer class="p-6 text-right text-lg font-normal text-black max-w-4xl mx-auto">
    Voltar
  </footer>
</body>
</html>