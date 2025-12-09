<?php
// Si le fichier demandé existe, le servir
if (file_exists($_SERVER['DOCUMENT_ROOT'] . $_SERVER['REQUEST_URI'])) {
    return false;
}

// Sinon, charger index.php
include_once 'index.php';