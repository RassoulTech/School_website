<footer class="bg-gray-900 text-white py-6 mt-10">
    <div class="max-w-6xl mx-auto px-4">
        <!-- Grille du footer -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 text-sm text-center md:text-left">
            <!-- École Ngoundiane -->
            <div>
                <h2 class="text-xl mb-4 font-bold">École de Ngoundiane</h2>
                <p class="mb-2">Adresse : Ngoundiane, Sénégal</p>
                <p class="mb-2">Téléphone : +221 77 123 45 67</p>
                <p class="mb-2">Email : contact@ngoundiane.sn</p>
            </div>

            <!-- Liens utiles -->
            <div>
                <h3 class="font-bold mb-4">Liens Rapides</h3>
                <ul class="space-y-2">
                <li><a href="index.php" class="text-gray-400 hover:underline hover:text-white">Accueil</a></li>
                <li><a href="ecole.php" class="text-gray-400 hover:underline hover:text-white">L'École</a></li>
                <li><a href="cycles.php" class="text-gray-400 hover:underline hover:text-white">Nos Cycles</a></li>
                <li><a href="vieScolaire.php" class="text-gray-400 hover:underline hover:text-white">Vie Scolaire</a></li>
                <li><a href="contact.php" class="text-gray-400 hover:underline hover:text-white">Contact</a></li>
                <li><a href="inscription.php" class="text-gray-400 hover:underline hover:text-white">Inscription</a></li>
                </ul>
            </div>

            <!-- Support -->
            <div>
                <h3 class="font-bold mb-4">Supports</h3>
                <ul class="space-y-2">
                <li><a href="faq.php" class="text-gray-400 hover:underline hover:text-white">FAQ</a></li>
                </ul>
            </div>

            <!-- Newsletter -->
            <div>
                <h3 class="font-bold mb-4">Inscrivez-vous à notre Newsletter</h3>
                <form action="#" method="post" class="flex flex-col sm:flex-row justify-center sm:justify-start items-center gap-2">
                    <input type="email" placeholder="Votre email" class="w-full sm:w-auto px-3 py-2 rounded-l-lg border border-gray-300 text-black focus:outline-none focus:ring-2 focus:ring-blue-900">
                    <button type="submit" class="bg-blue-900 text-white px-4 py-2 rounded-r-lg hover:bg-blue-900">
                        S'inscrire
                    </button>
                </form>
            </div>
        </div>

        <!-- Footer bas -->
        <div class="mt-10 border-t border-gray-700 pt-4 text-center text-xs text-gray-400">
        <p>&copy; <?= date ('Y') ?> École Ngoundiane. Tous droits réservés.</p>
        </div>
    </div>
</footer>