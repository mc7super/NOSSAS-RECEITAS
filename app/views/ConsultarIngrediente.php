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
  <header class="bg-yellow-400 py-3 text-center">
    <h1 class="text-2xl font-extrabold text-[#8B2B3B]">Nossas Receitas</h1>
  </header>

  <main class="p-6 flex flex-col items-center">
    <section
      class="bg-yellow-200 rounded-3xl w-full max-w-4xl p-8"
      style="min-width: 320px;"
    >
      <h2 class="text-center text-2xl font-semibold mb-6">Tabela Ingredientes</h2>
      <table class="w-full border-collapse rounded-lg overflow-hidden">
        <thead>
          <tr class="bg-white">
            <th class="border border-gray-300 py-2 text-center text-lg font-normal">Ingredientes</th>
            <th class="border border-gray-300 py-2 text-center text-lg font-normal">Descrição</th>
            <th class="border border-gray-300 py-2 text-center text-lg font-normal">Editar</th>
          </tr>
        </thead>
        <tbody>
          <tr class="bg-white">
            <td class="border border-gray-300 py-2 text-center text-lg font-normal">Ovo</td>
            <td class="border border-gray-300 py-2 text-center text-lg font-normal">t</td>
            <td class="border border-gray-300 py-2 text-center text-lg font-normal space-x-2">
              <i class="fas fa-pencil-alt cursor-pointer"></i>
              <i class="fas fa-info-circle cursor-pointer"></i>
              <i class="fas fa-trash cursor-pointer"></i>
            </td>
          </tr>
          <tr class="bg-white">
            <td class="border border-gray-300 py-2 text-center text-lg font-normal">Leite</td>
            <td class="border border-gray-300 py-2 text-center text-lg font-normal">t</td>
            <td class="border border-gray-300 py-2 text-center text-lg font-normal space-x-2">
              <i class="fas fa-pencil-alt cursor-pointer"></i>
              <i class="fas fa-info-circle cursor-pointer"></i>
              <i class="fas fa-trash cursor-pointer"></i>
            </td>
          </tr>
          <tr class="bg-white">
            <td class="border border-gray-300 py-2 text-center text-lg font-normal">Farinha</td>
            <td class="border border-gray-300 py-2 text-center text-lg font-normal">t</td>
            <td class="border border-gray-300 py-2 text-center text-lg font-normal space-x-2">
              <i class="fas fa-pencil-alt cursor-pointer"></i>
              <i class="fas fa-info-circle cursor-pointer"></i>
              <i class="fas fa-trash cursor-pointer"></i>
            </td>
          </tr>
          <tr class="bg-white">
            <td class="border border-gray-300 py-2 text-center text-lg font-normal">Fermento</td>
            <td class="border border-gray-300 py-2 text-center text-lg font-normal">t</td>
            <td class="border border-gray-300 py-2 text-center text-lg font-normal space-x-2">
              <i class="fas fa-pencil-alt cursor-pointer"></i>
              <i class="fas fa-info-circle cursor-pointer"></i>
              <i class="fas fa-trash cursor-pointer"></i>
            </td>
          </tr>
          <tr class="bg-white">
            <td class="border border-gray-300 py-2 text-center text-lg font-normal">Carne</td>
            <td class="border border-gray-300 py-2 text-center text-lg font-normal">t</td>
            <td class="border border-gray-300 py-2 text-center text-lg font-normal space-x-2">
              <i class="fas fa-pencil-alt cursor-pointer"></i>
              <i class="fas fa-info-circle cursor-pointer"></i>
              <i class="fas fa-trash cursor-pointer"></i>
            </td>
          </tr>
          <tr class="bg-white">
            <td class="border border-gray-300 py-2 text-center text-lg font-normal">Frango</td>
            <td class="border border-gray-300 py-2 text-center text-lg font-normal">t</td>
            <td class="border border-gray-300 py-2 text-center text-lg font-normal space-x-2">
              <i class="fas fa-pencil-alt cursor-pointer"></i>
              <i class="fas fa-info-circle cursor-pointer"></i>
              <i class="fas fa-trash cursor-pointer"></i>
            </td>
          </tr>
          <tr class="bg-white">
            <td class="border border-gray-300 py-2 text-center text-lg font-normal">Chocolate</td>
            <td class="border border-gray-300 py-2 text-center text-lg font-normal">t</td>
            <td class="border border-gray-300 py-2 text-center text-lg font-normal space-x-2">
              <i class="fas fa-pencil-alt cursor-pointer"></i>
              <i class="fas fa-info-circle cursor-pointer"></i>
              <i class="fas fa-trash cursor-pointer"></i>
            </td>
          </tr>
        </tbody>
      </table>
    </section>

    <button
      class="mt-10 self-end text-black text-xl font-normal bg-transparent border-none cursor-pointer"
      type="button"
    >
      Voltar
    </button>
  </main>
</body>
</html>