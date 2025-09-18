<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>École de Ngoundiane</title>
    <!-- File CSS -->
    <link rel="stylesheet" href="./public/css/main.css">
    <!-- CDN Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- CDN Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.0/css/all.min.css" crossorigin="anonymous" referrerpolicy="no-referrer"/>
    <style>
        @keyframes fadeInUp {
        from {opacity:0; transform: translateY(40px);}
        to {opacity:1; transform: translateY(0);}
        }
        @keyframes fadeInLeft {
        from {opacity:0; transform: translateX(-60px);}
        to {opacity:1; transform: translateX(0);}
        }
        @keyframes fadeInRight {
        from {opacity:0; transform: translateX(60px);}
        to {opacity:1; transform: translateX(0);}
        }

        /* animations prêtes */
        .animate-up   { animation: fadeInUp 1s ease forwards; }
        .animate-left { animation: fadeInLeft 1s ease forwards; }
        .animate-right{ animation: fadeInRight 1s ease forwards; }

        /* état initial invisible */
        .hidden-anim { opacity: 0; }

        .delay-1 { animation-delay: .3s; }
        .delay-2 { animation-delay: .6s; }
        .delay-3 { animation-delay: .9s; }
    </style>
    </head>
    <body class="bg-gray-200">

    <!-- Menu -->
    <?php require_once '../header.php'; ?>

    <!-- Padding top -->
    <div class="pt-12"></div>

    <!-- Présentation des sections clés -->
    <section class="bg-gray-50 py-12">
        <div class="max-w-6xl mx-auto px-6 grid gap-12 md:grid-cols-3">

        <!-- Historique -->
        <div class="bg-white rounded-lg shadow-md p-6 text-center hover:shadow-lg transition transform hover:-translate-y-1 duration-500 hidden-anim" data-anim="animate-left">
            <div class="flex justify-center mb-4">
            <i class="fa-solid fa-envelope-open-text text-blue-900 text-4xl"></i>
            </div>
            <h3 class="text-xl font-bold mb-3">Historique de l'École</h3>
            <p class="text-gray-600 leading-relaxed mb-4">
            Fondée en <span class="font-semibold text-blue-900">1990</span>, l’École de Ngoundiane s’est donnée pour mission
            d’offrir un enseignement de qualité à tous les enfants de la région. 
            Depuis plus de trois décennies, nous sommes devenus un véritable pilier de l’éducation locale,
            formant des générations d’élèves fiers et ambitieux.
            </p>
            <img src="../public/images/ancienne-ecole.jpg" alt="Ancienne photo de l'école" class="rounded-lg mx-auto">
        </div>

        <!-- Valeurs & Mission -->
        <div class="bg-white rounded-lg shadow-md p-6 text-center hover:shadow-lg transition transform hover:-translate-y-1 duration-500 hidden-anim" data-anim="animate-up delay-1">
            <div class="flex justify-center mb-4">
            <i class="fa-solid fa-star text-blue-900 text-4xl"></i>
            </div>
            <h3 class="text-xl font-bold mb-3">Valeurs et Mission</h3>
            <p class="text-gray-600 leading-relaxed mb-4">
            Notre mission est de former des élèves <span class="font-semibold text-blue-900">compétents, responsables et engagés</span>.
            Nos valeurs reposent sur l’intégrité, le respect mutuel et l’excellence académique.
            Chaque jour, nous encourageons la curiosité intellectuelle, la créativité et l’esprit d’entraide.
            </p>
            <img src="../public/images/valeurs-educatives.jpg" alt="Valeurs éducatives" class="rounded-lg mx-auto">
        </div>

        <!-- Projet Pédagogique -->
        <div class="bg-white rounded-lg shadow-md p-6 text-center hover:shadow-lg transition transform hover:-translate-y-1 duration-500 hidden-anim" data-anim="animate-right delay-2">
            <div class="flex justify-center mb-4">
            <i class="fa-solid fa-diagram-project text-blue-900 text-4xl"></i>
            </div>
            <h3 class="text-xl font-bold mb-3">Projet Pédagogique</h3>
            <p class="text-gray-600 leading-relaxed mb-4">
            Nous proposons une pédagogie <span class="font-semibold text-blue-900">globale et innovante</span>, 
            où les savoirs académiques se complètent par des compétences sociales et émotionnelles.
            Apprentissage par projet, activités culturelles, implication communautaire :
            nous préparons nos élèves à relever les défis de demain.
            </p>
            <img src="../public/images/activite-pedagogique.jpg" alt="Activité pédagogique" class="rounded-lg mx-auto">
        </div>

        </div>
    </section>

    <!-- Équipe dirigeante -->
    <section class="py-16">
        <div class="max-w-4xl mx-auto p-6 text-center hidden-anim" data-anim="animate-up">
        <h2 class="text-2xl font-bold mb-4">
            <i class="fa-solid fa-users mr-2 text-blue-900"></i> Équipe Dirigeante
        </h2>
        <span class="block h-1 w-16 bg-blue-900 rounded mx-auto mb-6"></span>
        <p class="text-gray-700 max-w-3xl mx-auto leading-relaxed mb-6">
            Notre équipe dirigeante est composée de professionnels expérimentés et
            passionnés par l'éducation. Ils travaillent sans relâche pour assurer
            le bon fonctionnement de l'école et le bien-être des élèves.
        </p>
        </div>

        <!-- Cartes des dirigeants -->
        <div class="max-w-6xl mx-auto grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 px-6">
        
        <!-- Dirigeant 1 -->
        <article class="bg-white shadow-md rounded-lg p-6 flex flex-col items-center text-center hidden-anim" data-anim="animate-left delay-1">
            <img src="../public/images/equipe1.jpg" alt="Photo de M. Ndiaye, Directeur" class="h-32 w-32 rounded-full object-cover mb-4">
            <h3 class="text-xl font-semibold mb-1">Directeur</h3>
            <p class="italic font-bold mb-4 text-gray-500">M. Ndiaye</p>
            <i class="fa-solid fa-quote-left mr-2 text-blue-900 text-2xl"></i>
            <blockquote class="text-gray-700 text-sm leading-relaxed">
            Directeur depuis 2015, il a une vaste expérience dans le domaine de l'éducation et œuvre
            à l’amélioration continue de la qualité de l'enseignement.
            </blockquote>
        </article>

        <!-- Dirigeante 2 -->
        <article class="bg-white shadow-md rounded-lg p-6 flex flex-col items-center text-center hidden-anim" data-anim="animate-up delay-2">
            <img src="../public/images/equipe 2.jpg" alt="Photo de Mme Sow, Directrice Adjointe" class="h-32 w-32 rounded-full object-cover mb-4">
            <h3 class="text-xl font-semibold mb-1">Directrice Adjointe</h3>
            <p class="italic font-bold mb-4 text-gray-500">Mme Sow</p>
            <i class="fa-solid fa-quote-left mr-2 text-blue-900 text-2xl"></i>
            <blockquote class="text-gray-700 text-sm leading-relaxed">
            Elle supervise les opérations quotidiennes et veille au respect des normes académiques.
            </blockquote>
        </article>

        <!-- Dirigeant 3 -->
        <article class="bg-white shadow-md rounded-lg p-6 flex flex-col items-center text-center hidden-anim" data-anim="animate-right delay-3">
            <img src="../public/images/equipe 3.jpg" alt="Photo de M. Fall, Responsable pédagogique" class="h-32 w-32 rounded-full object-cover mb-4">
            <h3 class="text-xl font-semibold mb-1">Responsable Pédagogique</h3>
            <p class="italic font-bold mb-4 text-gray-500">M. Fall</p>
            <i class="fa-solid fa-quote-left mr-2 text-blue-900 text-2xl"></i>
            <blockquote class="text-gray-700 text-sm leading-relaxed">
            Responsable de la mise en œuvre du projet pédagogique et de la formation des enseignants.
            </blockquote>
        </article>

        </div>
    </section>

    <!-- Footer -->
    <?php require_once '../footer.php'; ?>

    <!-- JS Scroll animations -->
    <script src="../public/js/ecole.js"></script>
</body>
</html>
