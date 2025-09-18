<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cycle Collège - École de Ngoundiane</title>
    <!-- CDN Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- CDN Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.0/css/all.min.css" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body class="bg-gray-100 text-gray-800">

    <!-- Header -->
    <?php require_once '../header.php'; ?>

    <!-- Bannière -->
    <section class="relative h-64 flex items-center justify-center text-white bg-[url('./public/images/college-banner.jpg')] bg-cover bg-center">
        <div class="absolute inset-0 bg-blue-900/70"></div>
        <h1 class="text-4xl md:text-5xl font-bold z-10 animate-fadeIn">Cycle Collège</h1>
    </section>

    <!-- Présentation -->
    <section class="max-w-6xl mx-auto px-6 py-12">
        <div class="text-center mb-10">
            <h2 class="text-3xl font-bold text-blue-900 mb-4"><i class="fa-solid fa-school mr-2"></i> Présentation</h2>
            <p class="text-gray-600 max-w-3xl mx-auto leading-relaxed">
                Le <strong>cycle collège</strong> couvre les classes de la <span class="font-semibold">6ème à la 3ème</span>.  
                C’est une étape clé où l’élève consolide ses acquis, développe son autonomie et prépare son avenir scolaire.
            </p>
        </div>
    </section>

    <!-- Méthodes pédagogiques -->
    <section class="max-w-6xl mx-auto px-6 py-12 grid grid-cols-1 md:grid-cols-2 gap-8 items-center">
        <div>
            <h3 class="text-2xl font-semibold text-blue-800 mb-3"><i class="fa-solid fa-chalkboard-teacher mr-2"></i> Méthodes pédagogiques</h3>
            <p class="text-gray-700 leading-relaxed">
                Nos méthodes au collège favorisent l’autonomie et l’esprit critique :
            </p>
            <ul class="mt-4 space-y-2 text-gray-700">
                <li><i class="fa-solid fa-check text-green-600 mr-2"></i> Enseignement disciplinaire approfondi</li>
                <li><i class="fa-solid fa-check text-green-600 mr-2"></i> Projets interdisciplinaires et travaux de groupe</li>
                <li><i class="fa-solid fa-check text-green-600 mr-2"></i> Utilisation des outils numériques</li>
            </ul>
        </div>
        <div class="flex justify-center">
            <img src="./public/images/methodes-college.jpg" alt="Méthodes Collège" class="rounded-xl shadow-lg w-full max-w-md hover:scale-105 transition duration-300">
        </div>
    </section>

    <!-- Objectifs pédagogiques -->
    <section class="max-w-6xl mx-auto px-6 py-12 grid grid-cols-1 md:grid-cols-2 gap-8 items-center">
        <div class="flex justify-center md:order-2">
            <img src="./public/images/objectifs-college.jpg" alt="Objectifs pédagogiques Collège" class="rounded-xl shadow-lg w-full max-w-md hover:scale-105 transition duration-300">
        </div>
        <div class="md:order-1">
            <h3 class="text-2xl font-semibold text-blue-800 mb-3"><i class="fa-solid fa-bullseye mr-2"></i> Objectifs pédagogiques</h3>
            <p class="text-gray-700 leading-relaxed">
                Au collège, les objectifs pédagogiques sont :
            </p>
            <ul class="mt-4 space-y-2 text-gray-700">
                <li><i class="fa-solid fa-star text-yellow-500 mr-2"></i> Renforcer les connaissances en sciences, langues et humanités</li>
                <li><i class="fa-solid fa-star text-yellow-500 mr-2"></i> Développer l’autonomie et l’organisation</li>
                <li><i class="fa-solid fa-star text-yellow-500 mr-2"></i> Stimuler l’esprit critique et la créativité</li>
                <li><i class="fa-solid fa-star text-yellow-500 mr-2"></i> Préparer à l’orientation future (lycée, filières spécialisées)</li>
            </ul>
        </div>
    </section>

    <!-- Call to Action -->
    <section class="bg-blue-900 text-white py-12 text-center">
        <h2 class="text-3xl font-bold mb-4">Construisons l’avenir dès aujourd’hui</h2>
        <p class="mb-6">Donnez à votre enfant les meilleures bases pour réussir au collège et au-delà.</p>
        <a href="inscription.php" class="bg-white text-blue-900 font-semibold px-6 py-3 rounded-lg shadow hover:bg-gray-100 transition">
            Inscrire maintenant
        </a>
    </section>

    <!-- Footer -->
    <?php require_once '../footer.php'; ?>

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
