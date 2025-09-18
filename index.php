<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Accueil - École de Ngoundiane</title>

    <!-- Tailwind CDN -->
    <script src="https://cdn.tailwindcss.com"></script>

    <!-- Font Awesome CDN -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.0/css/all.min.css" crossorigin="anonymous">

    <!-- CSS custom -->
    <link rel="stylesheet" href="./public/css/main.css">

    <style>
        /* Typing effect */
        @keyframes typing { from { width: 0 } to { width: 100% } }
        @keyframes blink { 50% { border-color: transparent } }
        .typewriter {
            display: inline-block;
            border-right: 2px solid white;
            white-space: nowrap;
            overflow: hidden;
            animation: typing 4s steps(40, end), blink .75s step-end infinite;
        }

        /* Scroll reveal animation */
        .reveal {
            opacity: 0;
            transform: translateY(40px);
            transition: all 0.8s ease-out;
        }
        .reveal.active {
            opacity: 1;
            transform: translateY(0);
        }
    </style>
</head>
<body class="bg-gray-200">

    <!-- Header -->
    <?php require_once 'header.php'; ?>

    <!-- Bannière -->
    <section class="relative flex h-[60vh] md:h-[80vh] items-center justify-center text-white w-full bg-cover bg-center bg-[url('./public/images/banniere-accueil.jpg')]">
        <!-- Overlay sombre -->
        <div class="absolute inset-0 bg-gradient-to-r from-blue-900 via-transparent to-blue-900 backdrop-blur-sm"></div>

        <!-- Contenu centré -->
        <div class="relative z-10 flex flex-col items-center justify-center text-center px-4">
            <h1 class="text-3xl sm:text-4xl md:text-5xl font-bold typewriter">
                Bienvenue à l'École de Ngoundiane
            </h1>
            <p id="slogan" class="mt-6 text-lg sm:text-xl md:text-2xl italic text-black opacity-0 transition-opacity duration-1000 delay-500">
                L'éducation pour un avenir meilleur !
            </p>
        </div>
    </section>


    <!-- Présentation -->
    <section class="reveal">
        <div class="text-center max-w-4xl mx-auto px-6 mt-10">
            <h2 class="text-3xl font-bold mb-4"><i class="fa-solid fa-school text-blue-900 mr-2"></i> Présentation</h2>
            <span class="block h-1 w-24 bg-blue-900 mx-auto mb-6 rounded-full"></span>
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 items-center">
                <div>
                    <p class="font-bold italic mb-4 text-xl">Qui sommes-nous ?</p>
                    <p class="text-gray-700 leading-relaxed">
                        L'École de Ngoundiane est un établissement éducatif implanté au cœur du commune de Ngoundiane dans la région de Thiés,
                        dédié à l'excellence académique et à l’épanouissement des élèves. Nous accueillons les enfants dès la primaire jusqu’au secondaire.
                    </p>
                </div>
                <div class="flex justify-center">
                    <img src="./public/images/presentation-accueil.jpg" alt="École de Ngoundiane"
                        class="rounded-lg shadow-lg w-full max-w-md object-cover transform transition duration-700 hover:scale-105">
                </div>
            </div>
        </div>
    </section>

    <!-- Cycles -->
    <section class="reveal mt-20">
        <div class="text-center max-w-4xl mx-auto px-6 mb-6">
            <h2 class="text-3xl font-bold"><i class="fa-solid fa-arrows-spin text-blue-900 mr-2"></i> Nos cycles</h2>
            <span class="block h-1 w-24 bg-blue-900 mx-auto mt-5 rounded-full"></span>
            <p class="text-gray-700 mt-4 leading-relaxed max-w-3xl mx-auto">
                Nous offrons un parcours éducatif complet, de la maternelle à la terminale. Chaque cycle favorise un apprentissage progressif.
            </p>
        </div>
        <div class="max-w-5xl mx-auto px-6 grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 gap-6 text-center mt-10">
            <div class="bg-white shadow-md rounded-lg p-6 flex flex-col items-center transform transition duration-500 hover:scale-105 hover:shadow-xl">
                <i class="fas fa-baby text-pink-500 text-4xl mb-4"></i>
                <span class="text-lg font-semibold text-gray-800">Maternelle</span>
            </div>
            <div class="bg-white shadow-md rounded-lg p-6 flex flex-col items-center transform transition duration-500 hover:scale-105 hover:shadow-xl">
                <i class="fas fa-book text-blue-500 text-4xl mb-4"></i>
                <span class="text-lg font-semibold text-gray-800">Primaire</span>
            </div>
            <div class="bg-white shadow-md rounded-lg p-6 flex flex-col items-center transform transition duration-500 hover:scale-105 hover:shadow-xl">
                <i class="fas fa-graduation-cap text-yellow-500 text-4xl mb-4"></i>
                <span class="text-lg font-semibold text-gray-800">Collège</span>
            </div>
            <div class="bg-white shadow-md rounded-lg p-6 flex flex-col items-center transform transition duration-500 hover:scale-105 hover:shadow-xl">
                <i class="fas fa-university text-red-500 text-4xl mb-4"></i>
                <span class="text-lg font-semibold text-gray-800">Lycée</span>
            </div>
        </div>
    </section>

    <!-- Témoignages -->
    <section class="bg-gray-100 py-12 mt-20 reveal">
        <div class="max-w-6xl mx-auto px-4">
            <h2 class="text-3xl font-bold mb-8 text-center"><i class="fa-solid fa-comment text-blue-900 mr-2"></i> Témoignages</h2>
            <span class="block h-1 w-24 bg-blue-900 mx-auto mb-10 rounded-full"></span>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                <div class="bg-white shadow-md rounded-lg p-6 text-center hover:shadow-lg transition transform hover:scale-105">
                    <div class="flex justify-center mb-4">
                        <i class="fa-solid fa-user-tie text-5xl text-blue-900"></i>
                    </div>
                    <h3 class="text-xl font-semibold mb-2">Témoignage d’un Parent</h3>
                    <p class="text-gray-700 italic">"L'École de Ngoundiane a été un choix exceptionnel pour l'éducation de mes enfants."</p>
                    <p class="mt-4 text-sm text-gray-500">– Mme Diallo</p>
                </div>
                <div class="bg-white shadow-md rounded-lg p-6 text-center hover:shadow-lg transition transform hover:scale-105">
                    <div class="flex justify-center mb-4">
                        <i class="fa-solid fa-user-graduate text-5xl text-blue-900"></i>
                    </div>
                    <h3 class="text-xl font-semibold mb-2">Témoignage d’un Élève</h3>
                    <p class="text-gray-700 italic">"J'aime étudier à l'École de Ngoundiane. Les professeurs nous aident toujours à comprendre."</p>
                    <p class="mt-4 text-sm text-gray-500">– Alioune, élève de 5<sup>ème</sup></p>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <?php require_once 'footer.php'; ?>

    <!-- WhatsApp flottant -->
    <a href="https://wa.me/779903674" target="_blank" 
        class="fixed bottom-6 right-6 z-50 bg-green-500 w-16 h-16 rounded-full flex items-center justify-center shadow-lg hover:bg-green-600 animate-pulse transition duration-300">
        <i class="fab fa-whatsapp text-white text-2xl"></i>
    </a>

    <!-- Scroll Reveal Script -->
    <script src="public/js/index.js"></script>
</body>
</html>
