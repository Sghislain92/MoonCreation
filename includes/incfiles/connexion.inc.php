<?php
// connexion.inc.php
$host = '127.0.0.1'; // Ton hôte de base de données
$dbname = 'vcard'; // Le nom de ta base de données
$charset = 'utf8mb4'; // Le jeu de caractères
$username = 'root'; // Ton utilisateur
$password = ''; // Ton mot de passe

try {
    // Connexion à la base de données avec PDO
    $bdd = new PDO("mysql:host=$host;dbname=$dbname;charset=$charset", $username, $password);
    
    // Configurer le PDO pour lancer des exceptions en cas d'erreur
    $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

} catch (PDOException $e) {
    die("Erreur de connexion : " . $e->getMessage());
}
?>