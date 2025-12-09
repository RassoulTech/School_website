<?php
// Affiche toutes les erreurs PHP
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Import PHPMailer
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require '../PHPMailer/src/Exception.php';
require '../PHPMailer/src/PHPMailer.php';
require '../PHPMailer/src/SMTP.php';

$message_alert = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nom        = htmlspecialchars($_POST['name']);
    $birthdate  = htmlspecialchars($_POST['birthdate']);
    $parent_tel = htmlspecialchars($_POST['parent_tel']);
    $parent_email = htmlspecialchars($_POST['parent_email']);
    $cycle      = htmlspecialchars($_POST['education']);
    $classe     = htmlspecialchars($_POST['classe']);

    $message_body = "
        <strong>Nom de l'élève :</strong> $nom <br>
        <strong>Date de naissance :</strong> $birthdate <br>
        <strong>Téléphone du parent :</strong> $parent_tel <br>
        <strong>Email du parent :</strong> $parent_email <br>
        <strong>Cycle :</strong> $cycle <br>
        <strong>Classe :</strong> $classe
    ";

    $mail = new PHPMailer(true);

    try {
        // Config SMTP
        $mail->isSMTP();
        $mail->Host       = 'smtp.gmail.com';
        $mail->SMTPAuth   = true;
        $mail->Username   = 'dionemhd1@gmail.com';    // <-- Mon Gmail
        $mail->Password   = 'ozkh wzmd riro avcv';       // <-- Mon mot de passe d'application
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
        $mail->Port       = 465;

        // Expéditeur & destinataire
        $mail->setFrom('dionemhd1@gmail.com', 'Ecole de Francophone');
        $mail->addAddress('dionemhd1@gmail.com');

        // Contenu
        $mail->isHTML(true);
        $mail->Subject = "Nouvelle inscription - $nom";
        $mail->Body    = $message_body;
        $mail->AltBody = strip_tags(str_replace("<br>", "\n", $message_body));

        $mail->send();
        $message_alert = "<p class='bg-green-100 text-green-800 p-3 rounded mb-4'>✅ Inscription envoyée avec succès.</p>";
    } catch (Exception $e) {
        $message_alert = "<p class='bg-red-100 text-red-800 p-3 rounded mb-4'>❌ Erreur : {$mail->ErrorInfo}</p>";
    }
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inscription - École de Francophone</title>
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
</head>
<body class="bg-gray-200">

<?php require_once '../header.php'; ?>

<!-- Procédure détaillée -->
<section class="bg-white py-8">
    <div class="max-w-4xl mx-auto p-6">
        <h2 class="text-3xl font-bold mb-4 flex items-center">
            <i class="fa-solid fa-list-check text-blue-900 mr-2"></i> Procédure d'Inscription
        </h2>
        <p class="text-gray-700">Pour inscrire votre enfant à l'École de Francophone, veuillez suivre les étapes suivantes :</p>
        <ol class="list-decimal list-inside space-y-2 mt-4 text-gray-700">
            <li>Remplir le formulaire d'inscription ci-dessous.</li>
            <li>Fournir les documents requis (certificat de naissance, photo d'identité, etc.).</li>
            <li>Prendre rendez-vous avec le secrétariat pour finaliser l'inscription.</li>
            <li>Effectuer le paiement des frais d'inscription.</li>
        </ol>
    </div>
</section>

<!-- Documents requis -->
<section class="bg-gray-50 py-8">
    <div class="max-w-4xl mx-auto p-6">
        <h2 class="text-3xl font-bold mb-4 flex items-center">
            <i class="fa-solid fa-file-lines text-blue-900 mr-2"></i> Documents Requis
        </h2>
        <ul class="list-disc list-inside space-y-2 text-gray-700">
            <li>Certificat de naissance de l'élève</li>
            <li>Photocopie de la carte d'identité des parents</li>
            <li>Bulletin scolaire de l'année précédente (pour les élèves du primaire et du secondaire)</li>
            <li>Deux photos d'identité récentes</li>
        </ul>
    </div>
</section>

<!-- Tarifs & frais -->
<section class="bg-white py-8">
    <div class="max-w-4xl mx-auto p-6">
        <h2 class="text-3xl font-bold mb-4 flex items-center">
            <i class="fa-solid fa-money-bill-wave text-blue-900 mr-2"></i> Frais d'Inscription
        </h2>
        <p class="text-gray-700">Les frais d'inscription pour l'année scolaire <?= date('Y') . '-' . (date('Y') + 1)?> sont les suivants :</p>
        <ul class="list-disc list-inside space-y-2 mt-4 text-gray-700">
            <li><strong>Primaire :</strong> 3,000 FCFA</li>
            <li><strong>Collège :</strong> 8,000 FCFA</li>
            <li><strong>Lycée :</strong> 15,000 FCFA</li>
        </ul>
    </div>
</section>

<!-- Formulaire d'inscription -->
<section class="bg-gray-50 py-8">
<div class="max-w-4xl mx-auto p-6">
    <h2 class="text-3xl font-bold mb-4 flex items-center">
    <i class="fa-solid fa-pen-to-square text-blue-900 mr-2"></i> Formulaire d'Inscription
    </h2>
    <div class="bg-gray-100 p-6 rounded-lg shadow-md">
    <?php echo $message_alert; ?>
    <form action="" method="post" class="space-y-4">
        <div>
        <label for="name" class="block text-gray-700">Nom de l'élève *</label>
        <input type="text" id="name" name="name" required placeholder="Nom complet"
            class="w-full p-3 border border-gray-300 rounded focus:ring-blue-900 focus:border-blue-900">
        </div>

        <div>
        <label for="birthdate" class="block text-gray-700">Date de naissance *</label>
        <input type="date" id="birthdate" name="birthdate" required
            class="w-full p-3 border border-gray-300 rounded focus:ring-blue-900 focus:border-blue-900">
        </div>

        <div>
        <label for="parent_tel" class="block text-gray-700">Téléphone du parent *</label>
        <input type="text" id="parent_tel" name="parent_tel" required placeholder="+221 77 000 00 00"
            class="w-full p-3 border border-gray-300 rounded focus:ring-blue-900 focus:border-blue-900">
        </div>

        <div>
        <label for="parent_email" class="block text-gray-700">Email du parent *</label>
        <input type="email" id="parent_email" name="parent_email" required placeholder="contact@exemple.com"
            class="w-full p-3 border border-gray-300 rounded focus:ring-blue-900 focus:border-blue-900">
        </div>

        <!-- Cycle -->
        <div>
        <label for="education" class="block text-gray-700">Cycle d'étude *</label>
        <select id="education" name="education" required
            class="w-full p-3 border border-gray-300 rounded focus:ring-blue-900 focus:border-blue-900">
            <option value="">Sélectionnez le cycle</option>
            <option value="Primaire">Primaire</option>
            <option value="Collège">Collège</option>
            <option value="Lycée">Lycée</option>
        </select>
        </div>

        <!-- Classe dépendante -->
        <div>
        <label for="classe" class="block text-gray-700">Classe *</label>
        <select id="classe" name="classe" required
            class="w-full p-3 border border-gray-300 rounded focus:ring-blue-900 focus:border-blue-900">
            <option value="">Sélectionnez d'abord un cycle</option>
        </select>
        </div>

        <div class="text-center">
        <button type="submit"
            class="bg-blue-900 text-white px-6 py-2 rounded hover:bg-blue-800 transition duration-200">
            <i class="fa-solid fa-paper-plane mr-2"></i> Envoyer
        </button>
        </div>
    </form>
    </div>
</div>
</section>


<?php require_once '../footer.php'; ?>

<!-- WhatsApp flottant -->
<a href="https://wa.me/779903674" target="_blank" 
    class="fixed bottom-6 right-6 z-50 bg-green-500 w-16 h-16 rounded-full flex items-center justify-center shadow-lg hover:bg-green-600 animate-pulse transition duration-300">
    <i class="fab fa-whatsapp text-white text-3xl"></i>
</a>

<script src="../public/js/inscription.js"></script>
</body>
</html>
