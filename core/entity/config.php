<?php
// définit l'hôte, le port et le nom de la base de données
$dbhost =("localhost"); 
$dbport =("3306");
$dbname = ("portfolio");

// définit le nom d'utilisateur et le mot de passe de la base de données comme étant vide
$dbuser = "root"; 
$dbpassword = ""; 

// Connexion PDO pour se connecter à la base de données
$dsn = "mysql:host=$dbhost;port=$dbport;dbname=$dbname;charset=utf8"; 

// définit le mode d'erreur PDO, le mode de récupération et la préparation à la base de données
$options = [
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION, 
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC, 
    PDO::ATTR_EMULATE_PREPARES => false,  
];

// crée une nouvelle instance PDO avec les paramètres de connexion et les options
try {
    $pdo = new PDO($dsn, $dbuser, $dbpassword, $options); 
} catch (\PDOException $e) { 
    throw new \PDOException($e->getMessage(), (int)$e->getCode()); 
}
?>
