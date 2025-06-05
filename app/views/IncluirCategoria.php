<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Nossas Receitas</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Fredoka+One&display=swap');

        body {
            font-family: Arial, sans-serif;
        }

        .fredoka {
            font-family: 'Fredoka One', cursive;
        }
    </style>
</head>

<body class="bg-white m-0 p-0">
    <header class="bg-yellow-400 py-3 text-center">
        <h1 class="fredoka text-red-800 text-xl">Nossas Receitas</h1>
    </header>

    <main class="px-6 py-8">
        <section class="bg-yellow-100 rounded-2xl max-w-xl mx-auto p-8">
            <h2 class="text-center font-semibold text-lg mb-6">Incluir Categoria</h2>
            <form class="max-w-md mx-auto space-y-4" method="POST" action="../controllers/categoriaController.php">
                <div>
                    <label for="descricao" class="block mb-1 text-base font-normal text-black">Descrição</label>
                    <input id="descricao" name="descricao" type="text"
                        class="w-full rounded border border-gray-300 px-3 py-2 text-base focus:outline-none focus:ring-2 focus:ring-blue-500"
                        required />
                </div>
                <button type="submit"
                    class="w-full bg-blue-600 text-white text-base py-2 rounded hover:bg-blue-700 flex justify-center items-center gap-2">
                    Salvar <i class="fas fa-save"></i>
                </button>
            </form>

        </section>
    </main>

    <footer class="px-6 py-4">
        <div class="max-w-xl mx-auto text-right text-black text-lg font-normal cursor-pointer"
            onclick="window.history.back()">Voltar</div>
    </footer>
</body>

</html>