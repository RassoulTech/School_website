<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FAQ - École de Ngoundiane</title>
    <!-- Fonts google -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Amiri:ital,wght@0,400;0,700;1,400;1,700&family=Josefin+Sans:ital,wght@0,100..700;1,100..700&family=Noto+Nastaliq+Urdu:wght@400..700&family=Silkscreen:wght@400;700&display=swap" rel="stylesheet">
    <!-- file css -->
    <link rel="stylesheet" href="../public/css/main.css">
    <!-- Tailwind CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.0/css/all.min.css" crossorigin="anonymous" />

    <style>
        /* Animation accordéon */
        .faq-answer {
            max-height: 0;
            overflow: hidden;
            transition: max-height 0.5s ease, opacity 0.5s ease;
            opacity: 0;
        }
        .faq-answer.open {
            opacity: 1;
        }
    </style>
</head>
<body class="bg-gray-100">

    <!-- Header -->
    <?php require_once '../header.php'; ?>

    <!-- Bannière -->
    <section class="relative flex h-48 items-center justify-center text-white w-full bg-blue-900">
        <h1 class="text-4xl md:text-3xl font-bold">FAQ - Questions Fréquentes</h1>
    </section>

    <!-- FAQ Section -->
    <section class="max-w-4xl mx-auto p-6 mt-10 reveal">
        <h2 class="text-3xl font-bold mb-8 text-center text-blue-900">
            <i class="fa-solid fa-question-circle mr-2"></i> Questions fréquentes
        </h2>

        <div class="space-y-4">
            <!-- FAQ Item 1 -->
            <div class="bg-white shadow-md rounded-lg overflow-hidden transition transform hover:scale-105 hover:shadow-xl">
                <button class="w-full text-left px-6 py-4 flex justify-between items-center focus:outline-none faq-toggle hover:bg-blue-50">
                    <span class="font-semibold text-gray-800">Comment inscrire mon enfant ?</span>
                    <i class="fa-solid fa-chevron-down transition-transform duration-300"></i>
                </button>
                <div class="faq-answer px-6 pb-4 text-gray-700">
                    Vous pouvez inscrire votre enfant via notre formulaire en ligne ou en contactant directement le secrétariat de l’école.
                </div>
            </div>

            <!-- FAQ Item 2 -->
            <div class="bg-white shadow-md rounded-lg overflow-hidden transition transform hover:scale-105 hover:shadow-xl">
                <button class="w-full text-left px-6 py-4 flex justify-between items-center focus:outline-none faq-toggle hover:bg-blue-50">
                    <span class="font-semibold text-gray-800">Quels sont les horaires de l’école ?</span>
                    <i class="fa-solid fa-chevron-down transition-transform duration-300"></i>
                </button>
                <div class="faq-answer px-6 pb-4 text-gray-700">
                    L’école est ouverte du lundi au vendredi de 8h00 à 19h00. Les activités périscolaires peuvent varier selon le cycle.
                </div>
            </div>

            <!-- FAQ Item 3 -->
            <div class="bg-white shadow-md rounded-lg overflow-hidden transition transform hover:scale-105 hover:shadow-xl">
                <button class="w-full text-left px-6 py-4 flex justify-between items-center focus:outline-none faq-toggle hover:bg-blue-50">
                    <span class="font-semibold text-gray-800">Y a-t-il un transport scolaire ?</span>
                    <i class="fa-solid fa-chevron-down transition-transform duration-300"></i>
                </button>
                <div class="faq-answer px-6 pb-4 text-gray-700">
                    Oui, nous proposons un service de transport scolaire sécurisé pour certaines zones autour de Ngoundiane.
                </div>
            </div>

            <!-- FAQ Item 4 -->
            <div class="bg-white shadow-md rounded-lg overflow-hidden transition transform hover:scale-105 hover:shadow-xl">
                <button class="w-full text-left px-6 py-4 flex justify-between items-center focus:outline-none faq-toggle hover:bg-blue-50">
                    <span class="font-semibold text-gray-800">Comment contacter l’école ?</span>
                    <i class="fa-solid fa-chevron-down transition-transform duration-300"></i>
                </button>
                <div class="faq-answer px-6 pb-4 text-gray-700">
                    Vous pouvez nous contacter par téléphone au +221 77 123 45 67 ou par email à 
                    <a href="/site_vitrine_ecole/pages/contact.php" class="text-blue-600 hover:underline">contact@ngoundiane.sn</a>.
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <?php require_once '../footer.php'; ?>

        <!-- WhatsApp flottant -->
    <a href="https://wa.me/779903674" target="_blank" 
        class="fixed bottom-6 right-6 z-50 bg-green-500 w-16 h-16 rounded-full flex items-center justify-center shadow-lg hover:bg-green-600 animate-pulse transition duration-300">
        <i class="fab fa-whatsapp text-white text-2xl"></i>
    </a>

    <!-- Scripts -->
    <script src="../public/js/faq.js"></script>

</body>
</html>
