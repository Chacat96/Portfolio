<?php
session_start();
$title = "Connexion";
require_once "core/entity/header.php";
require_once "core/entity/config.php";

if(isset($_SESSION["connexion"])) {
    echo "Vous êtes connecté en tant que ".$_SESSION["connexion"];
    // Redirection vers la connecté
    header("Location: connecte.php");
    exit();
}

//On détermine si email et password existent
if (
    isset($_POST["identifiant"]) && $_POST["identifiant"] != "" &&
    isset($_POST["mdp"]) && $_POST["mdp"] != ""
) {

    //On crée les variables
    $identifiant = trim($_POST["identifiant"]);
    $mdp = trim($_POST["mdp"]);

    //On se connecte à la base de données
    require_once "core/entity/config.php";

    // Requête sql
    $sql = "SELECT * FROM `utilisateur` WHERE identifiant = :identifiant";

    // Prépare la requête sql
    $query = $pdo->prepare($sql);
    $query->bindParam(":identifiant", $identifiant, PDO::PARAM_STR);

    // Exécute la requête sql
    if ($query->execute()) {
        // Récupération de l'utilisateur correspondant à l'identifiant fourni
        $user = $query->fetch();

        // Vérification des informations d'identification de l'utilisateur
        if ($user && $mdp ==$user['mdp']) {
            // Les informations d'identification sont valides, stockage de l'identifiant dans la session et redirection vers la page d'accueil
            $_SESSION["connexion"] = $identifiant;
            header("Location: connecte.php");
            exit();
        } else {
            $message = "<p>Identifiants incorrects</p>";
        }
    }
}
?>

<main>
    <section class="section-connexion">
        <?php if(isset($message)) { echo $message; } ?>
        <form action="connexion.php" class="login" method="post">
            <input class="id-connexion" type="text" name="identifiant" placeholder="Identifiant">
            <input class="id-connexion" type="password" name="mdp" placeholder="Mot de passe">
            <input class="bouton-connexion" type="submit" name="connexion" value="Connexion" >
        </form>
    </section>  
</main>

<?php
require_once "core/entity/footer.php";
?>
