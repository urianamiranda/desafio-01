<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link
        href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css"
        rel="stylesheet"
    >

    <title>Desafio 01</title>
</head>

<body class="min-h-screen flex flex-col bg-gray-200">

    <header class="bg-green-600 text-white p-4 shadow">
        <div class="max-w-4xl mx-auto">
            <h1 class="text-2xl font-bold">Loja de Mercadorias</h1>
            <p class="text-sm">Desafio prático de PHP</p>
        </div>
    </header>

    <main class="flex-1">
        <?= $content ?>
    </main>

    <footer class="bg-gray-800 text-white text-center p-4">
        <p>Desafio 01 — PHP</p>
    </footer>

</body>
</html>