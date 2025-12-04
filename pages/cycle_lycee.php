<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cycle Lycée - École de Ngoundiane</title>
    <!-- Fonts google -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Amiri:ital,wght@0,400;0,700;1,400;1,700&family=Josefin+Sans:ital,wght@0,100..700;1,100..700&family=Noto+Nastaliq+Urdu:wght@400..700&family=Silkscreen:wght@400;700&display=swap" rel="stylesheet">
    <!-- file css -->
    <link rel="stylesheet" href="../public/css/main.css">
    <!-- CDN Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- CDN Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.0/css/all.min.css" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body class="bg-gray-100 text-gray-800">

    <!-- Header -->
    <?php require_once '../header.php'; ?>

    <!-- Bannière -->
    <section class="relative h-64 flex items-center justify-center text-white bg-[url('./public/images/lycee-banner.jpg')] bg-cover bg-center">
        <div class="absolute inset-0 bg-blue-900/70"></div>
        <h1 class="text-4xl md:text-3xl font-bold z-10 animate-fadeIn">Cycle Lycée</h1>
    </section>

    <!-- Présentation -->
    <section class="max-w-6xl mx-auto px-6 py-12">
        <div class="text-center mb-10">
            <h2 class="text-3xl font-bold text-blue-900 mb-4"><i class="fa-solid fa-university mr-2"></i> Présentation</h2>
            <p class="text-gray-600 max-w-3xl mx-auto leading-relaxed">
                Le <strong>cycle lycée</strong> constitue la dernière étape du parcours scolaire secondaire.  
                Il prépare les élèves au <span class="font-semibold">baccalauréat</span> et les aide à construire leur projet d’orientation pour l’enseignement supérieur ou la vie professionnelle.
            </p>
        </div>
    </section>

    <!-- Méthodes pédagogiques -->
    <section class="max-w-6xl mx-auto px-6 py-12 grid grid-cols-1 md:grid-cols-2 gap-8 items-center">
        <div>
            <h3 class="text-2xl font-semibold text-blue-800 mb-3"><i class="fa-solid fa-chalkboard-user mr-2"></i> Méthodes pédagogiques</h3>
            <p class="text-gray-700 leading-relaxed">
                Au lycée, l’enseignement vise à approfondir les disciplines tout en développant l’esprit critique :
            </p>
            <ul class="mt-4 space-y-2 text-gray-700">
                <li><i class="fa-solid fa-check text-green-600 mr-2"></i> Approfondissement des savoirs scientifiques, littéraires et techniques</li>
                <li><i class="fa-solid fa-check text-green-600 mr-2"></i> Préparation intensive aux examens (baccalauréat)</li>
                <li><i class="fa-solid fa-check text-green-600 mr-2"></i> Développement de l’autonomie et de la responsabilité</li>
                <li><i class="fa-solid fa-check text-green-600 mr-2"></i> Orientation et préparation à l’enseignement supérieur</li>
            </ul>
        </div>
        <div class="flex justify-center">
            <img src="./public/images/methodes-lycee.jpg" alt="Méthodes Lycée" class="rounded-xl shadow-lg w-full max-w-md hover:scale-105 transition duration-300">
        </div>
    </section>

    <!-- Objectifs pédagogiques -->
    <section class="max-w-6xl mx-auto px-6 py-12 grid grid-cols-1 md:grid-cols-2 gap-8 items-center">
        <div class="flex justify-center md:order-2">
            <img src="./public/images/objectifs-lycee.jpg" alt="Objectifs pédagogiques Lycée" class="rounded-xl shadow-lg w-full max-w-md hover:scale-105 transition duration-300">
        </div>
        <div class="md:order-1">
            <h3 class="text-2xl font-semibold text-blue-800 mb-3"><i class="fa-solid fa-bullseye mr-2"></i> Objectifs pédagogiques</h3>
            <p class="text-gray-700 leading-relaxed">
                Nos objectifs au lycée sont de :
            </p>
            <ul class="mt-4 space-y-2 text-gray-700">
                <li><i class="fa-solid fa-star text-yellow-500 mr-2"></i> Assurer la réussite aux épreuves du baccalauréat</li>
                <li><i class="fa-solid fa-star text-yellow-500 mr-2"></i> Former des citoyens responsables et engagés</li>
                <li><i class="fa-solid fa-star text-yellow-500 mr-2"></i> Préparer aux études supérieures et aux concours</li>
                <li><i class="fa-solid fa-star text-yellow-500 mr-2"></i> Développer l’esprit d’analyse, de recherche et d’innovation</li>
            </ul>
        </div>
    </section>

    <!-- Call to Action -->
    <section class="bg-blue-900 text-white py-12 text-center">
        <h2 class="text-3xl font-bold mb-4">Un tremplin vers l’avenir</h2>
        <p class="mb-6">Le lycée est une étape essentielle pour réussir sa vie universitaire et professionnelle.</p>
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

    <!-- Animation -->
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
