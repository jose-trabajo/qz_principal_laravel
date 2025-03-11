<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bienvenido a QUIMIZA</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gradient-to-r from-red-500 to-orange-600 text-white flex items-center justify-center h-screen">
    <div class="text-center">
        <h1 class="text-5xl font-bold mb-4 animate-bounce">¡Bienvenido a QUIMIZA - V2!</h1>
        <p class="text-lg">Explora el portal y conoce mas de nosotros.</p>
        <a href="{{ route('uno-1') }}" class="mt-6 inline-block bg-white text-red-600 font-semibold px-6 py-2 rounded-lg shadow-lg hover:bg-gray-200 transition">Explorar</a>
    </div>
</body>
</html>
