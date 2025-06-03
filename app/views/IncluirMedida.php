<html lang="pt-BR">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Nossas Receitas</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link
    href="https://fonts.googleapis.com/css2?family=Fredoka+One&display=swap"
    rel="stylesheet"
  />
  <style>
    body {
      font-family: Arial, sans-serif;
    }
    .fredoka {
      font-family: 'Fredoka One', cursive;
    }
  </style>
</head>
<body class="m-0 p-0">
  <header class="bg-yellow-400 w-full py-3 flex justify-center">
    <h1 class="fredoka text-2xl text-red-800">Nossas Receitas</h1>
  </header>

  <main class="p-6">
    <section
      class="border border-blue-500 rounded-2xl bg-yellow-200 max-w-3xl mx-auto p-6"
    >
      <h2 class="text-center font-bold text-lg mb-4">Inserir Medida</h2>

      <div class="mb-4">
        <h3 class="text-lg mb-2">Medidas</h3>
        <table class="w-full border-collapse rounded-lg overflow-hidden">
          <thead>
            <tr class="bg-white">
              <th class="border border-gray-300 py-1 text-center text-sm">Medida</th>
              <th class="border border-gray-300 py-1 text-center text-sm">Descrição</th>
            </tr>
          </thead>
          <tbody>
            <tr class="bg-white">
              <td class="border border-gray-300 py-1 text-center text-sm">g</td>
              <td class="border border-gray-300 py-1 text-center text-sm">Gramas</td>
            </tr>
            <tr class="bg-white">
              <td class="border border-gray-300 py-1 text-center text-sm">Kg</td>
              <td class="border border-gray-300 py-1 text-center text-sm">Kilogramas</td>
            </tr>
            <tr class="bg-white">
              <td class="border border-gray-300 py-1 text-center text-sm">ml</td>
              <td class="border border-gray-300 py-1 text-center text-sm">Mililitros</td>
            </tr>
            <tr class="bg-white rounded-b-lg">
              <td class="border border-gray-300 py-1 text-center text-sm rounded-bl-lg">L</td>
              <td class="border border-gray-300 py-1 text-center text-sm rounded-br-lg">Litros</td>
            </tr>
          </tbody>
        </table>
      </div>

      <div class="mb-6">
        <h3 class="text-lg mb-2">Descrição</h3>
        <textarea
          rows="5"
          class="w-full rounded-md p-2 resize-none"
          aria-label="Descrição"
        ></textarea>
      </div>

      <div class="flex justify-end">
        <button
          class="bg-blue-500 text-white px-6 py-2 rounded-md text-lg"
          type="button"
        >
          Incluir +
        </button>
      </div>
    </section>

    <div class="max-w-3xl mx-auto mt-6 flex justify-end">
      <button class="text-xl font-normal bg-transparent border-none p-0 m-0 cursor-pointer">
        Voltar
      </button>
    </div>
  </main>
</body>
</html>