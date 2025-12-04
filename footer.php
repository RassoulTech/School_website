<?php 
// On récupère la page courante
$current_page = basename($_SERVER['PHP_SELF']); 
?>

<footer class="bg-gray-900 text-white py-6 mt-10">
    <div class="max-w-6xl mx-auto px-4">
        <!-- Grille du footer -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 text-sm text-center md:text-left">
            
            <!-- École Ngoundiane -->
            <div>
                <h1 class="text-xl mb-4 font-bold">École de <span class="text-blue-900 font-bold">Ngoundiane</span> </h1>
                <p class="mb-2">Adresse : Ngoundiane, Sénégal</p>
                <p class="mb-2">Téléphone : +221 77 123 45 67</p>
                <p class="mb-2">Email : contact@ngoundiane.sn</p>
            </div>

            <!-- Liens rapides -->
            <div>
                <h3 class="font-bold mb-4">Liens Utiles</h3>
                <ul class="space-y-2">
                    <li><a href="/site_vitrine_ecole/index.php" class="<?= ($current_page=='index.php') ? 'text-white' : 'text-gray-400 hover:text-white'; ?>">Accueil</a></li>
                    <li><a href="/site_vitrine_ecole/pages/ecole.php" class="<?= ($current_page=='ecole.php') ? 'text-white' : 'text-gray-400 hover:text-white'; ?>">L'École</a></li>
                    <li><a href="/site_vitrine_ecole/pages/cycle_primaire.php" class="<?= ($current_page=='cycle_primaire.php') ? 'text-white' : 'text-gray-400 hover:text-white'; ?>">Primaire</a></li>
                    <li><a href="/site_vitrine_ecole/pages/cycle_college.php" class="<?= ($current_page=='cycle_college.php') ? 'text-white' : 'text-gray-400 hover:text-white'; ?>">Collège</a></li>
                    <li><a href="/site_vitrine_ecole/pages/cycle_lycee.php" class="<?= ($current_page=='cycle_lycee.php') ? 'text-white' : 'text-gray-400 hover:text-white'; ?>">Lycée</a></li>
                    <li><a href="/site_vitrine_ecole/pages/vieScolaire.php" class="<?= ($current_page=='vieScolaire.php') ? 'text-white' : 'text-gray-400 hover:text-white'; ?>">Vie Scolaire</a></li>
                    <li><a href="/site_vitrine_ecole/pages/contact.php" class="<?= ($current_page=='contact.php') ? 'text-white' : 'text-gray-400 hover:text-white'; ?>">Contact</a></li>
                    <li><a href="/site_vitrine_ecole/pages/inscription.php" class="<?= ($current_page=='inscription.php') ? 'text-white' : 'text-gray-400 hover:text-white'; ?>">Inscription</a></li>
                </ul>
            </div>

            <!-- Support -->
            <div>
                <h3 class="font-bold mb-4">Support</h3>
                <ul>
                    <li><a href="/site_vitrine_ecole/pages/faq.php" class="<?= ($current_page=='faq.php') ? 'text-white' : 'text-gray-400 hover:text-white'; ?>">FAQ</a></li>
                </ul>
            </div>

            <!-- Newsletter -->
            <div>
                <h3 class="font-bold mb-4">Inscrivez-vous à notre Newsletter</h3>
                <form action="#" method="post" class="flex flex-col sm:flex-row justify-center sm:justify-start items-center gap-2">
                    <input type="email" placeholder="Votre email" 
                        class="w-full sm:w-auto px-3 py-2 rounded-l-lg border border-gray-300 text-black focus:outline-none focus:ring-2 focus:ring-blue-900">
                    <button type="submit" 
                            class="bg-blue-900 text-white px-4 py-2 rounded-r-lg hover:bg-blue-800 transition">
                        S'inscrire
                    </button>
                </form>
            </div>
        </div>

        <!-- Footer bas -->
        <div class="mt-10 border-t border-gray-700 pt-4 flex  items-center justify-center space-y-4 md:space-y-0 md:flex-row">
            <p class="text-xs text-gray-400">&copy; <?= date('Y') ?> École Ngoundiane. Tous droits réservés.</p>
        </div>
    </div>
</footer>
