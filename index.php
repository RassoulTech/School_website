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
    
    <!-- Fonts Google -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Amiri:wght@400;700&family=Josefin+Sans:wght@300;700&display=swap" rel="stylesheet">

    <!-- Tailwind CDN -->
    <script src="https://cdn.tailwindcss.com"></script>

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" crossorigin="anonymous">

    <!-- Fichier CSS -->
    <link rel="stylesheet" href="./public/css/main.css">

    <style>
        /* Effet machine à écrire */
        @keyframes typing { from { width: 0 } to { width: 100% } }
        @keyframes blink { 50% { border-color: transparent } }
        .typewriter {
            display: inline-block;
            border-right: 2px solid white;
            white-space: nowrap;
            overflow: hidden;
            animation: typing 4s steps(40, end), blink .75s step-end infinite;
        }

        /* Scroll reveal */
        .reveal { opacity: 0; transform: translateY(40px); transition: all 0.8s ease-out; }
        .reveal.active { opacity: 1; transform: translateY(0); }
    </style>
</head>
<body class="bg-gray-200 font-[Josefin Sans]">

    <!-- Header -->
    <?php require_once 'header.php'; ?>

    <!-- Bannière -->
    <section class="relative flex flex-col h-[70vh] md:h-[80vh] items-center justify-center text-white text-center bg-cover bg-center px-4"style="background-image: url('./public/images/banniere-accueil.jpg');">
        
        <div class="absolute inset-0 bg-gradient-to-r from-blue-900/90 via-blue-800/40 to-blue-900/90"></div>

        <div class="relative z-10 flex flex-col items-center max-w-2xl mx-auto">
            <h1 class="text-xl sm:text-2xl md:text-3xl lg:text-4xl xl:text-5xl font-bold typewriter drop-shadow-md leading-snug sm:leading-normal text-center px-3">
                Bienvenue au <br class="block sm:hidden" /> Lycée Elhadji Ousmane Ngning
            </h1>


            <p id="slogan" class="mt-6 text-sm sm:text-lg md:text-xl italic text-gray-100 opacity-0 transition-opacity duration-1000 delay-500">
                L'éducation pour un avenir meilleur !
            </p>

            <a href="./pages/inscription.php"class="mt-8 px-6 py-3 bg-white text-blue-900 font-semibold rounded-lg shadow-md hover:bg-blue-50 transition duration-300 text-sm sm:text-base">Inscrivez-vous
            </a>
        </div>
    </section>

    <!-- À propos -->
    <section class="reveal mt-10 px-4">
        <div class="text-center max-w-5xl mx-auto">
            <h2 class="text-2xl sm:text-3xl font-bold mb-4">
                <i class="fa-solid fa-school text-blue-900 mr-2"></i> À PROPOS
            </h2>
            <span class="block h-1 w-20 sm:w-24 bg-blue-900 mx-auto mb-6 rounded-full"></span>

            <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 items-center">
                <div class="text-left">
                    <p class="font-bold italic mb-4 text-lg sm:text-xl">Qui sommes-nous ?</p>
                    <p class="text-black text-2xl leading-relaxed text-justify text-sm sm:text-base">
                        L'École de Ngoundiane est un établissement éducatif implanté au cœur du commune de Ngoundiane dans la région de Thiés,
                        dédié à l'excellence académique et à l’épanouissement des élèves. Nous accueillons les enfants dès la primaire jusqu’au secondaire.
                    </p>
                </div>

                <div class="flex justify-center">
                    <img src="./public/images/apropos_accueil.jpg" alt="École de Ngoundiane"class="rounded-lg shadow-lg w-full max-w-sm sm:max-w-md object-cover transform transition duration-700 hover:scale-105">
                </div>
            </div>
        </div>
    </section>

    <!-- Cycles -->
    <section class="reveal mt-20 px-4">
        <div class="text-center max-w-4xl mx-auto">
            <h2 class="text-2xl sm:text-3xl font-bold mb-4">
                <i class="fa-solid fa-arrows-spin text-blue-900 mr-2"></i> NOS CYCLES
            </h2>
            <span class="block h-1 w-20 sm:w-24 bg-blue-900 mx-auto mb-6 rounded-full"></span>
            <p class="text-gray-700 mt-4 text-sm sm:text-base leading-relaxed">
                Nous offrons un parcours éducatif complet, de primaire à la terminale. Chaque cycle favorise un apprentissage progressif et équilibré.
            </p>
        </div>

        <div class="max-w-5xl mx-auto grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6 mt-10">
            <div class="bg-white shadow-md rounded-lg p-6 flex flex-col items-center transform transition duration-500 hover:scale-105 hover:shadow-xl">
                <i class="fas fa-book text-blue-500 text-3xl sm:text-4xl mb-3"></i>
                <span class="text-base sm:text-lg font-semibold text-gray-800">Primaire</span>
            </div>
            <div class="bg-white shadow-md rounded-lg p-6 flex flex-col items-center transform transition duration-500 hover:scale-105 hover:shadow-xl">
                <i class="fas fa-university text-red-500 text-3xl sm:text-4xl mb-3"></i>
                <span class="text-base sm:text-lg font-semibold text-gray-800">Collège</span>
            </div>
            <div class="bg-white shadow-md rounded-lg p-6 flex flex-col items-center transform transition duration-500 hover:scale-105 hover:shadow-xl">
                <i class="fas fa-graduation-cap text-yellow-500 text-3xl sm:text-4xl mb-3"></i>
                <span class="text-base sm:text-lg font-semibold text-gray-800">Lycée</span>
            </div>
        </div>
    </section>

    <!-- Témoignages -->
    <section class="bg-gray-100 py-12 mt-20 reveal px-4">
        <div class="max-w-6xl mx-auto">
            <h2 class="text-2xl sm:text-3xl font-bold mb-8 text-center">
                <i class="fa-solid fa-comment text-blue-900 mr-2"></i> TÉMOIGNAGES
            </h2>
            <span class="block h-1 w-20 sm:w-24 bg-blue-900 mx-auto mb-10 rounded-full"></span>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                <div class="bg-white shadow-md rounded-lg p-6 text-center hover:shadow-lg transition transform hover:scale-105">
                    <div class="flex justify-center mb-4">
                        <i class="fa-solid fa-user-tie text-3xl sm:text-4xl text-blue-900"></i>
                    </div>
                    <h3 class="text-lg sm:text-xl font-semibold mb-2">Témoignage d’un Parent</h3>
                    <p class="text-gray-700 italic text-sm sm:text-base">
                        "L'École de Ngoundiane a été un choix exceptionnel pour l'éducation de mes enfants."
                    </p>
                    <p class="mt-4 text-sm text-gray-500">– Mme Diallo</p>
                </div>
                <div class="bg-white shadow-md rounded-lg p-6 text-center hover:shadow-lg transition transform hover:scale-105">
                    <div class="flex justify-center mb-4">
                        <i class="fa-solid fa-user-graduate text-3xl sm:text-4xl text-blue-900"></i>
                    </div>
                    <h3 class="text-lg sm:text-xl font-semibold mb-2">Témoignage d’un Élève</h3>
                    <p class="text-gray-700 italic text-sm sm:text-base">
                        "J'aime étudier à l'École de Ngoundiane. Les professeurs nous aident toujours à comprendre."
                    </p>
                    <p class="mt-4 text-sm text-gray-500">– Alioune, élève de 5<sup>ème</sup></p>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <?php require_once 'footer.php'; ?>

    <!-- Bouton WhatsApp -->
    <a href="https://wa.me/779903674" target="_blank"class="fixed bottom-4 right-4 sm:bottom-6 sm:right-6 z-50 bg-green-500 w-12 h-12 sm:w-16 sm:h-16 rounded-full flex items-center justify-center shadow-lg hover:bg-green-600 animate-pulse transition duration-300">
    <i class="fab fa-whatsapp text-white text-xl sm:text-2xl"></i>
    </a>

    <!-- Script JS -->
    <script>
        // Apparition du slogan
        window.addEventListener('load', () => {
            const slogan = document.getElementById('slogan');
            setTimeout(() => slogan.classList.add('opacity-100'), 2500);
        });

        // Animation de révélation au scroll
        document.addEventListener('scroll', () => {
            document.querySelectorAll('.reveal').forEach(el => {
                const top = el.getBoundingClientRect().top;
                const windowHeight = window.innerHeight;
                if (top < windowHeight - 100) el.classList.add('active');
            });
        });
    </script>
</body>
</html>
