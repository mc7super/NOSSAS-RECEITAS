<html lang="pt-BR">
 <head>
  <meta charset="utf-8"/>
  <meta content="width=device-width, initial-scale=1" name="viewport"/>
  <title>
   Nossas Receitas
  </title>
  <script src="https://cdn.tailwindcss.com">
  </script>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet"/>
  <style>
   @import url('https://fonts.googleapis.com/css2?family=Fredoka+One&display=swap');
    body {
      font-family: 'Fredoka One', cursive;
    }
  </style>
 </head>
 <body class="m-0 p-0">
  <header class="bg-yellow-400 text-[#9b2c2c] text-center text-2xl font-bold py-3">
   Nossas Receitas
  </header>
  <div class="relative w-full min-h-screen flex items-center justify-center" style="background-color: transparent;">
   <img alt="Mesa com variedade de alimentos, incluindo saladas, pães, frutas e pratos diversos, vista de cima" class="absolute inset-0 w-full h-full object-cover" height="800" src="https://storage.googleapis.com/a1aa/image/9e7a6c6b-2853-4dca-459a-1379abc7141a.jpg" width="1200"/>
   <div class="relative bg-gray-300 bg-opacity-100 rounded-lg p-6 w-80 max-w-full flex flex-col gap-4">
    <div class="flex items-center gap-4">
     <button aria-label="Voltar" class="text-2xl text-black">
      <i class="fas fa-arrow-left" onclick="window.history.back()">
      </i>
     </button>
     <h2 class="text-center flex-grow text-lg font-normal text-black">
      redefinição
     </h2>
    </div>
    <label class="text-black text-sm font-normal" for="email">
     e-mail
    </label>
    <input class="rounded-md border border-gray-300 px-3 py-1 focus:outline-none focus:ring-2 focus:ring-yellow-400" id="email" type="email"/>
    <div class="flex justify-end">
     <button aria-label="Enviar" class="text-2xl text-black">
      <i class="fas fa-arrow-right">
      </i>
     </button>
    </div>
   </div>
  </div>
 </body>
</html>
