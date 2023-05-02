<?php
$title = "CV";
require_once "core/entity/header.php";
?>
    <main>

        <section class="slideshow1">
            <div class="content1">
                <div class="content-carrousel1">
                    <figure class="shadow"><a href="competence.php"><img src="img/computer-1836330_1920.png" alt=""></a></figure>
                    <figure class="shadow"><a href="projet.php"><img src="img/laptop-5673901_1920.jpg"></a></figure>
                    <figure class="shadow"><a href="contact.php"><img src="img/contact-noir.png" alt=""></a></figure>
                    <figure class="shadow"><a href="cv.php"><img src="img/cvlogo.png" alt="" ></a></figure>
                    <figure class="shadow"><a href="description.php"><img src="img/moianime.jpg" alt=""></a></figure>
                </div>
            </div>
        </section>

        <section class="description">
            <h1>Mon CV</h1>
        </section>

        <section class="lien-CV"> 
            <p>Téléchargez le fichier PDF ici : <a href="img/CV_2023-03-11_Charlene_CATHERIN.pdf">CV.pdf</a></p>
        </section>

        <section class="CV">
           <img src="img/CV_2023-03-11_Charlene_CATHERIN_page-0001.jpg" alt="CV">
        </section>
    </main>

    <?php
   require_once "core/entity/footer.php";
   ?>