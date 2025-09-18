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
    $nom = htmlspecialchars($_POST['name']);
    $birthdate = htmlspecialchars($_POST['birthdate']);
    $email_parent = htmlspecialchars($_POST['parent_email']);

    $message_body = "
        <strong>Nom de l'élève :</strong> $nom <br>
        <strong>Date de naissance :</strong> $birthdate <br>
        <strong>Email du parent :</strong> $email_parent
    ";

    $mail = new PHPMailer(true);

    try {
        // SMTP
        $mail->isSMTP();
        $mail->Host       = 'smtp.gmail.com';
        $mail->SMTPAuth   = true;
        $mail->Username   = 'dionemhd1@gmail.com';  // <-- ton Gmail
        $mail->Password   = 'ozkh wzmd riro avcv';     // <-- mot de passe d'application
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
        $mail->Port       = 465;

        // Expéditeur et destinataire
        $mail->setFrom('dionemhd1@gmail.com', 'Ecole de Ngoundiane');
        $mail->addAddress('dionemhd1@gmail.com'); 

        // Contenu
        $mail->isHTML(true);
        $mail->Subject = 'Nouvelle inscription depuis Incription - ecole Ngoundiane';
        $mail->Body    = $message_body;
        $mail->AltBody = "Nom: $nom\nDate de naissance: $birthdate\nEmail parent: $email_parent";

        $mail->send();
        $message_alert = "<p class='bg-green-100 text-green-800 p-3 rounded mb-4'>✅ Votre inscription a été envoyée avec succès.</p>";
    } catch (Exception $e) {
        $message_alert = "<p class='bg-red-100 text-red-800 p-3 rounded mb-4'>❌ Erreur lors de l'envoi : {$mail->ErrorInfo}</p>";
    }
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inscription - École de Ngoundiane</title>

    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.0/css/all.min.css" crossorigin="anonymous">
    <!-- CSS personnalisé -->
    <link rel="stylesheet" href="./public/css/main.css">
</head>
<body class="bg-gray-200">

<?php require_once '../header.php'; ?>

<!-- Procédure détaillée -->
<section class="bg-white py-8">
    <div class="max-w-4xl mx-auto p-6">
        <h2 class="text-2xl font-bold mb-4 flex items-center">
            <i class="fa-solid fa-list-check text-blue-900 mr-2"></i> Procédure d'Inscription
        </h2>
        <p class="text-gray-700">Pour inscrire votre enfant à l'École de Ngoundiane, veuillez suivre les étapes suivantes :</p>
        <ol class="list-decimal list-inside space-y-2 mt-4 text-gray-700">
            <li>Remplir le formulaire d'inscription disponible sur notre site web.</li>
            <li>Fournir les documents requis (certificat de naissance, photo d'identité, etc.).</li>
            <li>Prendre rendez-vous avec le secrétariat pour finaliser l'inscription.</li>
            <li>Effectuer le paiement des frais d'inscription.</li>
        </ol>
    </div>
</section>

<!-- Documents requis -->
<section class="bg-gray-50 py-8">
    <div class="max-w-4xl mx-auto p-6">
        <h2 class="text-2xl font-bold mb-4 flex items-center">
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
        <h2 class="text-2xl font-bold mb-4 flex items-center">
            <i class="fa-solid fa-money-bill-wave text-blue-900 mr-2"></i> Frais d'Inscription
        </h2>
        <p class="text-gray-700">Les frais d'inscription pour l'année scolaire 2023-2024 sont les suivants :</p>
        <ul class="list-disc list-inside space-y-2 mt-4 text-gray-700">
            <li><strong>Primaire :</strong> 75,000 FCFA</li>
            <li><strong>Collège :</strong> 100,000 FCFA</li>
            <li><strong>Lycée :</strong> 120,000 FCFA</li>
        </ul>
    </div>
</section>

<!-- Formulaire d'inscription -->
<section class="bg-gray-50 py-8">
    <div class="max-w-4xl mx-auto p-6">
        <h2 class="text-2xl font-bold mb-4 flex items-center">
            <i class="fa-solid fa-pen-to-square text-blue-900 mr-2"></i> Formulaire d'Inscription
        </h2>
        <div class="bg-gray-100 p-6 rounded-lg shadow-md">
            <?php echo $message_alert; ?>
            <form action="" method="post" class="space-y-4">
                <div>
                    <label for="name" class="block text-gray-700">Nom de l'élève :</label>
                    <input type="text" id="name" name="name" required
                        class="w-full p-3 border border-gray-300 rounded focus:ring-blue-900 focus:border-blue-900">
                </div>
                <div>
                    <label for="birthdate" class="block text-gray-700">Date de naissance :</label>
                    <input type="date" id="birthdate" name="birthdate" required
                        class="w-full p-3 border border-gray-300 rounded focus:ring-blue-900 focus:border-blue-900">
                </div>
                <div>
                    <label for="parent_email" class="block text-gray-700">Email du parent :</label>
                    <input type="email" id="parent_email" name="parent_email" required
                        class="w-full p-3 border border-gray-300 rounded focus:ring-blue-900 focus:border-blue-900">
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
<script src="public/js/progress.js"></script>
</body>
</html>
