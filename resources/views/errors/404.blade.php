<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>404 - Página Não Encontrada | Hotel Lobisomem</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-slate-900 text-white flex items-center justify-center min-h-screen p-4">
    <div class="text-center max-w-lg bg-slate-800/90 backdrop-blur-md p-8 rounded-2xl shadow-2xl border border-slate-700">
        <h1 class="text-6xl font-black text-amber-500 mb-2">404</h1>
        <h2 class="text-2xl font-bold mb-3 text-slate-100">Página Não Encontrada</h2>
        <p class="text-slate-300 mb-8 text-sm leading-relaxed">
            A página ou recurso que você está tentando acessar não existe, foi removida ou está temporariamente indisponível no sistema.
        </p>
        <a href="{{ url('/') }}" class="inline-block bg-slate-700 hover:bg-slate-600 text-white font-semibold py-3 px-6 rounded-lg transition duration-200 shadow-md border border-slate-600">
            ← Voltar ao Início
        </a>
    </div>
</body>
</html>