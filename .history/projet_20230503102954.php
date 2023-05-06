<?php
$title = "Mes projets";
require_once "core/entity/header.php";
require_once "core/entity/config.php";
?>


<main>

    <section class="slideshow1">
        <div class="content1">
            <div class="content-carrousel1">
                <figure class="shadow"><a href="competence.php"><img src="img/computer-1836330_1920.png" alt=""></a></figure>
                <figure class="shadow"><a href="projet.php"><img src="img/laptop-5673901_1920.jpg"></a></figure>
                <figure class="shadow"><a href="contact.php"><img src="img/contact-noir.png" alt=""></a></figure>
                <figure class="shadow"><a href="cv.php"><img src="img/cvlogo.png" alt=""></a></figure>
                <figure class="shadow"><a href="description.php"><img src="img/moianime.jpg" alt=""></a></figure>
            </div>
        </div>
    </section>

    <section class="description">
        <h1>Mes projets</h1>
    </section>

    <div class="contenent_projet">

        <?php
        // Requête SQL SELECT pour récupérer les projets de la base de données
        $sql = 'SELECT * FROM projet';

        // Exécute la requête SQL SELECT
        $result = $pdo->query($sql);

        // Vérifie si la requête a renvoyé des résultats
        if ($result->rowCount() > 0) {
            // Parcours les résultats de la requête et affiche chaque projet
            while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
                echo '<div class="contenent_projet">';
                echo '<div class="ajout_projet">';
                echo '<h2>' . $row['titre'] . '</h2>';
                echo '<img class="img_projet" src="' . $row['image'] . '" alt="' . $row['titre'] . '">';
                echo '<p>' . $row['contenu'] . '</p>';
                echo '<a href="full_projet.php"' . $row['lien'] . '">Voir le projet</a>';
                echo '</div>';
                echo '</div>';
            }
        } else {
            echo 'Aucun projet trouvé.';
        }

        ?>

    </div>

</main>

<?php
require_once "core/entity/footer.php";
?>