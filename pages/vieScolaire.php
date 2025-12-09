<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
?>
<!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Vie Scolaire - École de Francophone</title>
<!-- Fonts google -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Amiri:ital,wght@0,400;0,700;1,400;1,700&family=Josefin+Sans:ital,wght@0,100..700;1,100..700&family=Noto+Nastaliq+Urdu:wght@400..700&family=Silkscreen:wght@400;700&display=swap" rel="stylesheet">
<!-- file css -->
<link rel="stylesheet" href="../public/css/main.css">
<!-- Tailwind CSS -->
<script src="https://cdn.tailwindcss.com"></script>
<!-- Font Awesome -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.0/css/all.min.css" crossorigin="anonymous">
<style>
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
<?php require_once '../header.php'; ?>

<!-- Clubs et Activités -->
<section class="reveal">
    <div class="text-center max-w-4xl mx-auto px-6 mt-10">
        <h2 class="text-3xl font-bold text-center"><i class="fa-solid fa-futbol text-blue-900 mr-2"></i> Clubs et Activités</h2>
        <span class="block h-1 w-24 bg-blue-900 mx-auto mt-4 mb-6 rounded-full"></span>
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 items-center mt-10">
            <div>
                <p class="font-bold italic mb-4 text-xl">Des activités pour tous</p>
                <p class="text-gray-700 leading-relaxed">
                    L'École de Francophone propose une large variété de clubs et d'activités extrascolaires :
                    sport, musique, arts, théâtre et bien plus encore. Ces activités permettent aux élèves
                    de développer leurs talents et de s’épanouir en dehors du cadre académique.
                </p>
            </div>
            <div class="flex justify-center">
                <img src="../public/images/club&activite.jpg" 
                    alt="Élèves en activité sportive ou musicale" 
                    class="rounded-lg shadow-lg w-full max-w-md object-cover transform transition duration-700 hover:scale-105">
            </div>
        </div>
    </div>
</section>

<!-- Transport Scolaire -->
<section class="reveal mt-20">
    <div class="text-center max-w-4xl mx-auto px-6">
        <h2 class="text-3xl font-bold text-center"><i class="fa-solid fa-bus text-blue-900 mr-2"></i> Transport Scolaire</h2>
        <span class="block h-1 w-24 bg-blue-900 mx-auto mt-4 mb-6 rounded-full"></span>
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 items-center mt-10">
            <div class="flex justify-center">
                <img src="../public/images/transport.jpg" 
                    alt="Bus scolaire jaune" 
                    class="rounded-lg shadow-lg w-full max-w-md object-cover transform transition duration-700 hover:scale-105">
            </div>
            <div>
                <p class="font-bold italic mb-4 text-xl">Un transport sûr et fiable</p>
                <p class="text-gray-700 leading-relaxed">
                    Nous offrons un service de transport scolaire sécurisé et ponctuel pour nos élèves. 
                    Nos bus scolaires, confortables et bien entretenus, assurent des trajets en toute sécurité.
                </p>
            </div>
        </div>
    </div>
</section>

<!-- Règlement Intérieur -->
<section class="reveal mt-20">
    <div class="text-center max-w-4xl mx-auto px-6">
        <h2 class="text-3xl font-bold text-center"><i class="fa-solid fa-book text-blue-900 mr-2"></i> Règlement Intérieur</h2>
        <span class="block h-1 w-24 bg-blue-900 mx-auto mt-4 mb-6 rounded-full"></span>
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 items-center mt-10">
            <div>
                <p class="font-bold italic mb-4 text-xl">Discipline et respect</p>
                <p class="text-gray-700 leading-relaxed">
                    Le règlement intérieur de l'École de Francophone garantit un cadre
                    d'apprentissage serein et respectueux. Chaque élève s'engage à adopter une attitude
                    responsable pour le bien-être de tous.
                </p>
            </div>
            <div class="flex justify-center">
                <img src="../public/images/reglement_interieur.jpg" 
                    alt="Élèves attentifs en classe" 
                    class="rounded-lg shadow-lg w-full max-w-md object-cover transform transition duration-700 hover:scale-105">
            </div>
        </div>
    </div>
</section>

<!-- Santé et Bien-être -->
<section class="reveal mt-20 mb-20">
    <div class="text-center max-w-4xl mx-auto px-6">
        <h2 class="text-3xl font-bold text-center"><i class="fa-solid fa-heartbeat text-blue-900 mr-2"></i> Santé et Bien-être</h2>
        <span class="block h-1 w-24 bg-blue-900 mx-auto mt-4 mb-6 rounded-full"></span>
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 items-center mt-10">
            <div class="flex justify-center">
                <img src="../public/images/santé&bien-etre.jpg" 
                    alt="Infirmerie scolaire" 
                    class="rounded-lg shadow-lg w-full max-w-md object-cover transform transition duration-700 hover:scale-105">
            </div>
            <div>
                <p class="font-bold italic mb-4 text-xl">Un environnement sain</p>
                <p class="text-gray-700 leading-relaxed">
                    Nous veillons à la santé et au bien-être de nos élèves à travers un suivi médical régulier.
                    Une infirmerie équipée est disponible pour offrir les premiers soins et assurer un suivi rapide.
                </p>
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

<!-- Scroll Reveal Script -->
<script>
const reveals = document.querySelectorAll('.reveal');
window.addEventListener('scroll', () => {
    for (let r of reveals) {
        const top = r.getBoundingClientRect().top;
        const windowHeight = window.innerHeight;
        if (top < windowHeight - 100) r.classList.add('active');
    }
});
</script>

</body>
</html>
