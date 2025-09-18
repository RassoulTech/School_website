<?php 
// On récupère la page courante
$current_page = basename($_SERVER['PHP_SELF']); 
?>

<section class="relative bg-blue-900 h-16 flex items-center justify-between px-4 fixed top-0 w-full z-20 shadow-md">
    <!-- Logo -->
    <div id="logo" class="flex items-center">
        <a href="/site_vitrine_ecole/index.php">
            <img src="" alt="Logo" class="h-10">
        </a>
    </div>

    <!-- Bouton Hamburger (mobile) -->
    <button id="menu-toggle" class="relative w-8 h-8 flex flex-col justify-between items-center md:hidden focus:outline-none">
        <span class="block w-8 h-1 bg-white rounded transition-all duration-300"></span>
        <span class="block w-8 h-1 bg-white rounded transition-all duration-300"></span>
        <span class="block w-8 h-1 bg-white rounded transition-all duration-300"></span>
    </button>

    <!-- Menu -->
    <div id="menu-link" 
        class="absolute md:static top-16 right-0 md:top-0 md:right-[10%] bg-blue-900 md:bg-transparent w-full md:w-auto hidden md:flex flex-col md:flex-row items-center md:space-x-10 font-bold transition-all duration-500 ease-in-out">
        
        <ul class="flex flex-col md:flex-row md:space-x-10 w-full md:w-auto text-center md:text-left">

            <!-- Accueil -->
            <li>
                <a href="/site_vitrine_ecole/index.php" class="block py-2 px-4 rounded 
                    <?= ($current_page=='index.php') ? 'text-white' : 'text-gray-500 hover:text-gray-100'; ?>">
                    Accueil
                </a>
            </li>

            <!-- L'École -->
            <li>
                <a href="/site_vitrine_ecole/pages/ecole.php" class="block py-2 px-4 rounded 
                    <?= ($current_page=='ecole.php') ? 'text-white' : 'text-gray-500 hover:text-gray-100'; ?>">
                    L'École
                </a>
            </li>

            <!-- Dropdown Nos Cycles -->
            <li class="relative group">
                <button id="dropdown-toggle" class="w-full md:w-auto flex justify-center md:inline-flex items-center py-2 px-4 rounded
                    <?= in_array($current_page, ['cycle_primaire.php','cycle_college.php','cycle_lycee.php']) 
                        ? 'text-white' : 'text-gray-500 hover:text-gray-100'; ?>">
                    Nos Cycles 
                    <i id="dropdown-icon" class="fa-solid fa-chevron-down ml-1 text-xs transition-transform duration-300"></i>
                </button>
                <ul id="dropdown-menu" 
                    class="absolute left-0 hidden md:group-hover:block md:bg-white md:text-black bg-blue-800 text-white shadow-lg mt-2 rounded-lg p-4 md:min-w-[160px] z-20">
                    
                    <li>
                        <a href="/site_vitrine_ecole/pages/cycle_primaire.php" class="block px-4 py-2 rounded
                            <?= ($current_page=='cycle_primaire.php') ? 'bg-blue-900 text-white' : 'text-gray-700 hover:bg-gray-200'; ?>">
                            Primaire
                        </a>
                    </li>
                    <li>
                        <a href="/site_vitrine_ecole/pages/cycle_college.php" class="block px-4 py-2 rounded
                            <?= ($current_page=='cycle_college.php') ? 'bg-blue-900 text-white' : 'text-gray-700 hover:bg-gray-200'; ?>">
                            Collège
                        </a>
                    </li>
                    <li>
                        <a href="/site_vitrine_ecole/pages/cycle_lycee.php" class="block px-4 py-2 rounded
                            <?= ($current_page=='cycle_lycee.php') ? 'bg-blue-900 text-white' : 'text-gray-700 hover:bg-gray-200'; ?>">
                            Lycée
                        </a>
                    </li>
                </ul>
            </li>

            <!-- Vie scolaire -->
            <li>
                <a href="/site_vitrine_ecole/pages/vieScolaire.php" class="block py-2 px-4 rounded
                    <?= ($current_page=='vieScolaire.php') ? 'text-white' : 'text-gray-500 hover:text-gray-100'; ?>">
                    Vie Scolaire
                </a>
            </li>

            <!-- Contact -->
            <li>
                <a href="/site_vitrine_ecole/pages/contact.php" class="block py-2 px-4 rounded
                    <?= ($current_page=='contact.php') ? 'text-white' : 'text-gray-500 hover:text-gray-100'; ?>">
                    Contact
                </a>
            </li>

            <!-- Inscription -->
            <li>
                <a href="/site_vitrine_ecole/pages/inscription.php" class="block py-2 px-4 rounded
                    <?= ($current_page=='inscription.php') ? 'text-white' : 'text-gray-500 hover:text-gray-100'; ?>">
                    Inscription
                </a>
            </li>
        </ul>
    </div>
</section>

<!-- Script -->
<script src="/site_vitrine_ecole/public/js/header.js"></script>
