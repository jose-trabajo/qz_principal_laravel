<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bienvenido a QUIMIZA</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
</head>
<body class="bg-gradient-to-r from-red-500 to-orange-600 text-white flex items-center justify-center h-screen">
    <div class="menu-hamburguesa">
        <input type="checkbox" id="menu-toggle">
        <label for="menu-toggle">
            <span></span>
            <span></span>
            <span></span>
        </label>
        <div class="menu">
            <a href="{{ route('iniciouno') }}">Inicio</a>
            <a href="{{ route('acerca') }}">Acerca De</a>
            <a href="{{ route('contacto') }}">Contacto</a>
        </div>
    </div>
    <div class="text-center">
        <h1 class="text-5xl font-bold mb-4 animate-bounce">¡Bienvenido a QUIMIZA - V1!</h1>
        <p class="text-lg">Explora el portal y conoce más de nosotros.</p>
        <a href="{{ route('dos-2') }}" class="mt-6 inline-block bg-white text-red-600 font-semibold px-6 py-2 rounded-lg shadow-lg hover:bg-gray-200 transition">Explorar</a>
        <div class="mt-10">
            <img src="imagenes/banner-quimiza.jpg" alt="Imagen de la empresa" class="w-1/2 mx-auto rounded-lg shadow-lg">
            <p class="mt-4 text-lg">Datos importantes de la empresa...</p>
        </div>
    </div>
</body>
</html>