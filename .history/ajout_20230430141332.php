<?php
$title = "Ajout d'un projet";
require_once "core/entity/header.php";
require_once "core/entity/config.php";

// Vérifie si le formulaire a été soumis
if (isset($_POST['ajouter'])) {

	// Récupère les données du formulaire
	$titre = $_POST['titre'];
	$contenu = $_POST['contenu'];
	$lien = $_POST['lien'];

	// Vérifie si un fichier a été uploadé
	if (!empty($_FILES['image']['name'])) {
		// Chemin de stockage pour l'image
		$uploadDir = 'img/img_projet/';
		// Nom de fichier unique basé sur la date et l'heure actuelle
		$fileName = uniqid() . '_' . $_FILES['image']['name'];
		// Chemin complet de l'image à stocker
		$uploadPath = $uploadDir . $fileName;
		// Déplace le fichier téléchargé vers le dossier de stockage
		move_uploaded_file($_FILES['image']['tmp_name'], $uploadPath);
		// Stocke l'URL de l'image dans la variable $imageURL
		$imageURL = $uploadPath;
	} else {
		// Si aucune image n'a été téléchargée, $imageURL sera définie sur NULL
		$imageURL = NULL;
	}

	// Requête SQL pour insérer les données du projet dans la base de données
	$sql = "INSERT INTO projet (titre, contenu, image, lien) VALUES ('$titre', '$contenu', '$imageURL', '$lien')";

	// Exécute la requête SQL et vérifie si elle s'est bien déroulée
	if ($pdo->query($sql) === TRUE) {
		echo "Le projet a été ajouté avec succès.";
	} else {
		echo "Une erreur s'est produite lors de l'ajout du projet : ";
	}
}

?>

<main>
	<form action="" method="post" enctype="multipart/form-data">
		<div class="projet">
			<input type="text" placeholder="Titre" name="titre">
			<input type="file" name="image">
			<textarea name="contenu" cols="30" rows="10"></textarea>
			<input type="texte" placeholder="Lien" name="lien">
			<input type="submit" value="Ajouter" name="ajouter">
	</form>
	</div>
</main>