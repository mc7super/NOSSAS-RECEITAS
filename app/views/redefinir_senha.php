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
  <link href="https://fonts.googleapis.com/css2?family=Fredoka+One&amp;display=swap" rel="stylesheet"/>
  <style>
   body {
      font-family: 'Fredoka One', cursive;
    }
  </style>
 </head>
 <body class="min-h-screen flex flex-col">
  <header class="bg-yellow-400 py-4 text-center">
   <h1 class="text-3xl text-red-800">
    Nossas Receitas
   </h1>
  </header>
  <main class="flex-grow flex items-center justify-center p-4" style="background-color: transparent;">
   <img alt="Variety of food dishes on a table including salads, breads, vegetables, and various colorful meals" class="fixed inset-0 w-full h-full object-cover -z-10" height="1080" src="https://storage.googleapis.com/a1aa/image/1f028096-c0fd-4245-1b30-4c3a0f011b36.jpg" width="1920"/>
   <form autocomplete="off" class="bg-gray-300 bg-opacity-100 rounded-2xl border border-gray-700 p-10 max-w-md w-full">
    <h2 class="text-3xl mb-8 font-normal text-center text-black" style="font-family: 'Fredoka One', cursive;">
     redefinir senha
    </h2>
    <label class="block text-black text-xl mb-2 font-sans font-normal" for="senha">
     senha
    </label>
    <div class="relative mb-6">
     <input class="w-full rounded-md px-4 py-2 pr-12 text-black text-lg font-sans font-normal shadow-md focus:outline-none" id="senha" type="password"/>
     <button aria-label="Toggle password visibility" class="absolute right-2 top-1/2 -translate-y-1/2 text-black text-2xl focus:outline-none" tabindex="-1" type="button">
      <i class="fas fa-eye-slash">
      </i>
     </button>
    </div>
    <label class="block text-black text-xl mb-2 font-sans font-normal" for="confirmar-senha">
     confirmar senha
    </label>
    <div class="relative mb-6">
     <input class="w-full rounded-md px-4 py-2 pr-12 text-black text-lg font-sans font-normal shadow-md focus:outline-none" id="confirmar-senha" type="password"/>
     <button aria-label="Toggle password visibility" class="absolute right-2 top-1/2 -translate-y-1/2 text-black text-2xl focus:outline-none" tabindex="-1" type="button">
      <i class="fas fa-eye">
      </i>
     </button>
    </div>
    <div class="flex justify-end">
     <button aria-label="Submit password reset" class="text-black text-4xl border border-gray-700 rounded-full w-14 h-14 flex items-center justify-center shadow-md hover:shadow-lg focus:outline-none" type="submit">
      <i class="fas fa-arrow-right">
      </i>
     </button>
    </div>
   </form>
  </main>
 </body>
</html>
