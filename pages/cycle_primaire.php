<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cycle Primaire - École Francophone</title>
    <!-- Fonts google -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Amiri:ital,wght@0,400;0,700;1,400;1,700&family=Josefin+Sans:ital,wght@0,100..700;1,100..700&family=Noto+Nastaliq+Urdu:wght@400..700&family=Silkscreen:wght@400;700&display=swap" rel="stylesheet">
    <!-- file css -->
    <link rel="stylesheet" href="../public/css/main.css">
    <!-- CDN Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- CDN Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.0/css/all.min.css" integrity="sha512-DxV+EoADOkOygM4IR9yXP8Sb2qwgidEmeqAEmDKIOfPRQZOWbXCzLC6vjbZyy0vPisbH2SyW27+ddLVCN+OMzQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body class="bg-gray-100 text-gray-800">

    <!-- Header -->
    <?php require_once '../header.php'; ?>

    <!-- Bannière -->
    <section class="relative h-64 flex items-center justify-center text-white bg-[url('./public/images/primaire-banner.jpg')] bg-cover bg-center">
        <div class="absolute inset-0 bg-blue-900/70"></div>
        <h1 class="text-4xl md:text-3xl font-bold z-10 animate-fadeIn">Cycle Primaire</h1>
    </section>

    <!-- Présentation du cycle -->
    <section class="max-w-6xl mx-auto px-6 py-12">
        <div class="text-center mb-10">
            <h2 class="text-3xl font-bold text-blue-900 mb-4"><i class="fa-solid fa-book-open mr-2"></i>Présentation</h2>
            <p class="text-gray-600 max-w-3xl mx-auto leading-relaxed">
                Le <strong>cycle primaire</strong> est une étape fondamentale dans la scolarité des enfants.  
                Il est divisé en plusieurs niveaux : <span class="font-semibold">Cours Préparatoire (CP)</span>, 
                <span class="font-semibold">Cours Élémentaire 1 (CE1)</span> et 
                <span class="font-semibold">Cours Élémentaire 2 (CE2)</span>.  
                C’est durant cette période que les bases de la lecture, de l’écriture et des mathématiques sont consolidées.
            </p>
        </div>

        <!-- Méthodes d'apprentissage -->
        <div class="grid grid-cols-1 md:grid-cols-2 gap-8 items-center mb-16">
            <div>
                <h3 class="text-2xl font-semibold text-blue-800 mb-3"><i class="fa-solid fa-lightbulb mr-2"></i>Méthodes d'apprentissage</h3>
                <p class="text-gray-700 leading-relaxed">
                    Nos enseignants adoptent une pédagogie active basée sur :
                </p>
                <ul class="mt-4 space-y-2 text-gray-700">
                    <li><i class="fa-solid fa-check text-green-600 mr-2"></i> L’enseignement explicite et structuré</li>
                    <li><i class="fa-solid fa-check text-green-600 mr-2"></i> Les travaux de groupe favorisant la coopération</li>
                    <li><i class="fa-solid fa-check text-green-600 mr-2"></i> Des projets interdisciplinaires stimulants</li>
                </ul>
            </div>
            <div class="flex justify-center">
                <img src="./public/images/methodes-primaire.jpg" alt="Méthodes d'apprentissage" class="rounded-xl shadow-lg w-full max-w-md hover:scale-105 transition duration-300">
            </div>
        </div>

        <!-- Objectifs pédagogiques -->
        <div class="grid grid-cols-1 md:grid-cols-2 gap-8 items-center">
            <div class="flex justify-center md:order-2">
                <img src="./public/images/objectifs-primaire.jpg" alt="Objectifs pédagogiques" class="rounded-xl shadow-lg w-full max-w-md hover:scale-105 transition duration-300">
            </div>
            <div class="md:order-1">
                <h3 class="text-2xl font-semibold text-blue-800 mb-3"><i class="fa-solid fa-bullseye mr-2"></i>Objectifs pédagogiques</h3>
                <p class="text-gray-700 leading-relaxed">
                    Le cycle primaire vise à développer les compétences fondamentales et à éveiller la curiosité intellectuelle des élèves :
                </p>
                <ul class="mt-4 space-y-2 text-gray-700">
                    <li><i class="fa-solid fa-star text-yellow-500 mr-2"></i> Maîtriser la lecture et l’écriture</li>
                    <li><i class="fa-solid fa-star text-yellow-500 mr-2"></i> Comprendre et appliquer les bases en mathématiques</li>
                    <li><i class="fa-solid fa-star text-yellow-500 mr-2"></i> Découvrir les sciences et l’histoire</li>
                    <li><i class="fa-solid fa-star text-yellow-500 mr-2"></i> Développer la créativité et l’autonomie</li>
                </ul>
            </div>
        </div>
    </section>

    <!-- Call to Action -->
    <section class="bg-blue-900 text-white py-12 text-center">
        <h2 class="text-3xl font-bold mb-4">Prêt à inscrire votre enfant ?</h2>
        <p class="mb-6">Offrez-lui un parcours éducatif de qualité dès le cycle primaire.</p>
        <a href="inscription.php" class="bg-white text-blue-900 font-semibold px-6 py-3 rounded-lg shadow hover:bg-gray-100 transition">
            Inscrire maintenant
        </a>
    </section>

    <!-- Footer -->
    <?php require_once '../footer.php'; ?>

        <!-- WhatsApp flottant -->
    <a href="https://wa.me/779903674" target="_blank" 
        class="fixed bottom-6 right-6 z-50 bg-green-500 w-16 h-16 rounded-full flex items-center justify-center shadow-lg hover:bg-green-600 animate-pulse transition duration-300">
        <i class="fab fa-whatsapp text-white text-2xl"></i>
    </a>

    <!-- Animations -->
    <style>
        @keyframes fadeIn {
            from {opacity: 0; transform: translateY(20px);}
            to {opacity: 1; transform: translateY(0);}
        }
        .animate-fadeIn {
            animation: fadeIn 1s ease-out;
        }
    </style>
</body>
</html>
