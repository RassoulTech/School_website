<?php
// Importation des classes PHPMailer dans l'espace de noms global
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require '../PHPMailer/src/Exception.php';
require '../PHPMailer/src/PHPMailer.php';
require '../PHPMailer/src/SMTP.php';

$message_alert = ""; // Variable qui contient le message de retour

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nom = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);

    $message_body = "
        <strong>Nom :</strong> $nom <br>
        <strong>Email :</strong> $email <br>
        <strong>Message :</strong> $message
    ";

    $mail = new PHPMailer(true);

    try {
        // Config SMTP
        $mail->isSMTP();
        $mail->Host       = 'smtp.gmail.com';
        $mail->SMTPAuth   = true;
        $mail->Username   = 'dionemhd1@gmail.com';       // <-- ton Gmail
        $mail->Password   = 'ozkh wzmd riro avcv';          // <-- mot de passe d'application
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
        $mail->Port       = 465;

        // Expéditeur et destinataire
        $mail->setFrom('dionemhd1@gmail.com', 'Ecole de Ngoundiane');
        $mail->addAddress('dionemhd1@gmail.com'); 

        // Contenu
        $mail->isHTML(true);
        $mail->Subject = "Nouveau Contact - $nom";
        $mail->Body    = $message_body;
        $mail->AltBody = "Nom: $nom\nEmail: $email\nMessage: $message";

        $mail->send();
        $message_alert = "<p class='bg-green-100 text-green-800 p-3 rounded mb-4'>✅ Votre message a été envoyé avec succès.</p>";
    } catch (Exception $e) {
        $message_alert = "<p class='bg-red-100 text-red-800 p-3 rounded mb-4'>❌ Erreur lors de l'envoi : {$mail->ErrorInfo}</p>";
    }
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact - École de Ngoundiane</title>
    <!-- Fonts google -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Amiri:ital,wght@0,400;0,700;1,400;1,700&family=Josefin+Sans:ital,wght@0,100..700;1,100..700&family=Noto+Nastaliq+Urdu:wght@400..700&family=Silkscreen:wght@400;700&display=swap" rel="stylesheet">
    <!-- file css -->
    <link rel="stylesheet" href="../public/css/main.css">
    <!-- CDN tailwind css-->
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- CDN font awersome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.0/css/all.min.css" integrity="sha512-DxV+EoADOkOygM4IR9yXP8Sb2qwgidEmeqAEmDKIOfPRQZOWbXCzLC6vjbZyy0vPisbH2SyW27+ddLVCN+OMzQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body class="bg-gray-200">
    
    <!-- Menu déroulante -->
    <?php require_once '../header.php'; ?>

    <!-- Section Contact -->
    <section class="bg-white py-12">
        <div class="max-w-4xl mx-auto px-6">
            <h2 class="text-3xl font-bold text-center mb-6"><i class="fa-solid fa-paper-plane text-blue-900 mr-2"></i> Contactez-nous</h2>
            
            <div class="bg-gray-100 p-6 rounded-lg shadow-md max-w-xl mx-auto">
                <?php echo $message_alert; // Affiche le message de retour ?>
                <!-- Formulaire de contact -->
                <form action="" method="post" class="space-y-5">
                    <div>
                        <label for="name" class="block text-sm font-medium text-gray-700"><i class="fa-solid fa-user mr-1 text-blue-900"></i> Nom *</label>
                        <input type="text" id="name" name="name" required placeholder="Nom complet"
                            class="mt-1 w-full p-3 border border-gray-300 rounded-md focus:ring-blue-900 focus:border-blue-900">
                    </div>

                    <div>
                        <label for="email" class="block text-sm font-medium text-gray-700"><i class="fa-solid fa-envelope mr-1 text-blue-900"></i> Email *</label>
                        <input type="email" id="email" name="email" required placeholder="contact@exemple.com"
                            class="mt-1 w-full p-3 border border-gray-300 rounded-md focus:ring-blue-900 focus:border-blue-900">
                    </div>

                    <div>
                        <label for="message" class="block text-sm font-medium text-gray-700"><i class="fa-solid fa-comment-dots mr-1 text-blue-900"></i> Message *</label>
                        <textarea id="message" name="message" rows="4" required placeholder="Votre message ici..."
                            class="mt-1 w-full p-3 border border-gray-300 rounded-md focus:ring-blue-900 focus:border-blue-900"></textarea>
                    </div>

                    <div class="text-center">
                        <button type="submit"class="bg-blue-900 text-white px-6 py-2 rounded-md hover:bg-blue-900 transition duration-200"><i class="fa-solid fa-paper-plane mr-2"></i> Envoyer</button>
                    </div>
                </form>
            </div>
        </div>
    </section>

    <!-- Informations de Contact -->
    <section class="bg-gray-100 py-10">
        <div class="max-w-4xl mx-auto px-6 text-center">
            <h2 class="text-2xl font-bold mb-4"><i class="fa-solid fa-address-book text-blue-900 mr-2"></i> Informations de Contact</h2>
            <p class="text-gray-700 mb-2"><i class="fa-solid fa-location-dot text-blue-900 mr-2"></i>Ngoundiane, Sénégal</p>
            <p class="text-gray-700 mb-2"><i class="fa-solid fa-phone text-blue-900 mr-2"></i>+221 77 123 45 67</p>
            <p class="text-gray-700"><i class="fa-solid fa-envelope text-blue-900 mr-2"></i>
                <a href="mailto:contact@ngoundiane.sn" class="text-blue-900 hover:underline">contact@ngoundiane.sn</a>
            </p>
        </div>
    </section>

    <!-- Carte Google Maps -->
    <section class="py-10">
        <div class="max-w-4xl mx-auto px-6">
            <h2 class="text-2xl font-bold text-center mb-4"><i class="fa-solid fa-map-location-dot text-blue-900 mr-2"></i> Localisation</h2>
            <div class="w-full h-96 rounded-lg overflow-hidden shadow-lg">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3858.89550891989!2d-16.739631926375377!3d14.718499174182243!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xec1e8970a19ddc5%3A0x21979765f5bedec0!2sLyc%C3%A9e%20De%20Ngoundiane!5e0!3m2!1sfr!2ssn!4v1758073270534!5m2!1sfr!2ssn" 
                    width="100%" height="100%" style="border:0;" allowfullscreen="" 
                    loading="lazy" referrerpolicy="no-referrer-when-downgrade">
                </iframe>
            </div>
        </div>
    </section>

<!-- Réseaux sociaux -->
<section class="bg-blue-900 py-8">
    <div class="max-w-4xl mx-auto px-6 text-center text-white">
        <h2 class="text-2xl font-bold mb-4"><i class="fa-solid fa-share-nodes mr-2"></i> Suivez-nous</h2>
        <div class="flex justify-center space-x-6 text-2xl">
            <a href="#" class="hover:text-gray-300"><i class="fab fa-facebook"></i></a>
            <a href="#" class="hover:text-gray-300"><i class="fab fa-twitter"></i></a>
            <a href="#" class="hover:text-gray-300"><i class="fab fa-instagram"></i></a>
            <a href="#" class="hover:text-gray-300"><i class="fab fa-youtube"></i></a>
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

    <!-- Files js -->
    <script src="js/contact.js"></script>
    <script src="public/js/progress.js"></script>
</body>
</html>