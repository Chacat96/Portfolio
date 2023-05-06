<?php
$title = "Accueil";
require_once "core/entity/header.php";
?>
    <main>
        <section id="phrase-accueil">
            <p class="nom-accueil">CHARLENE CATHERIN</p>
            <p class="texte-accueil">Developpeuse Web et Web mobile</p>
        </section>
        
        <section class="slideshow">
            <div class="content">
                <div class="content-carrousel">
                    <figure class="shadow"><a href="competence.php"><img src="img/computer-1836330_1920.png" alt=""><p class="legende">Mes compétences</p></a></figure>
                    <figure class="shadow"><a href="projet.php"><img src="img/laptop-5673901_1920.jpg"><p class="legende">Mes projets</p></a></figure>
                    <figure class="shadow"><a href="contact.php"><img src="img/image formulaire.png" alt=""><p class="legende">Contact</p></a></figure>
                    <figure class="shadow"><a href="cv.php"><img src="img/cvlogo.png" alt="" ><p class="legende">CV</p></a></figure>
                    <figure class="shadow"><a href="description.php"><img src="img/moianime.jpg" alt=""><p class="legende">Ma description</p></a></figure>
                </div>
                <div class="content-carrousel-mobile">
                    <figure class="shadow"><a href="competence.php"><img src="img/computer-1836330_1920.png" alt=""><p class="legende">Mes compétences</p></a></figure>
                    <figure class="shadow"><a href="projet.php"><img src="img/laptop-5673901_1920.jpg"><p class="legende">Mes projets</p></a></figure>
                    <figure class="shadow"><a href="contact.php"><img src="img/contact-noir.png" alt=""><p class="legende">Contact</p></a></figure>
                    <figure class="shadow"><a href="cv.php"><img src="img/cvlogo.png" alt="" ><p class="legende">CV</p></a></figure>
                    <figure class="shadow"><a href="description.php"><img src="img/moianime.jpg" alt=""><p class="legende">Ma description</p></a></figure>
                </div>
            </div>
        </section>
    </main>

   <?php
   require_once "core/entity/footer.php";
   ?>