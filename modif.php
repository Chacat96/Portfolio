<?php
$title = "Modification";
require_once "core/entity/header.php";
require_once "core/entity/config.php";

$sql = 'SELECT * FROM projet';

$result = $pdo->query($sql);

if ($result->rowCount() > 0) {

    while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
        echo '<div class = "content_modif">';
        echo '<div class = "modif">';
        echo '<h2>'. $row['titre'] . '</h2>';
        echo '<img class = "img_projet" src="' . $row['image'] . '" alt = "' .$row['titre'] . '">';
        echo '<p>' . $row['contenu'] . '</p>';
        echo '<input class = "bouton_modif" type = "submit" name = "modif" value = "Modifier">';
        echo '<input class = "bouton_supprimer" type = "submit" name = "suppr" value = "Supprimer">';
        echo '</div>';
        echo '</div>';
    }
} else {
    echo 'Aucun projet trouvé.';
}

if(isset($_POST['bouton_modif'])) {

}

if(isset($_POST['bouton_supprimer'])) {
    
}
?>



