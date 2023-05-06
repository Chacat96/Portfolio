<?php
$title = "Contact";
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

        <section class="contact-h1">
            <h1>Contact</h1>
        </section>

        <section class="formulaire-contact">
            <form class="contact">
                <div class="form">
                      <label id="nom">Nom:</label>
                      <input type="text" name="Nom">
                  
                      <label id="prenom">Prénom:</label>
                      <input type="text" name="prénom">
                   
                   
                      <label id="email">Email:</label>
                      <input type="email" name="email">
              
                        <label>Objet:</label>
                        <textarea name="message"></textarea>
                   
                        <input type="submit" value="Envoyer" class="bouton-contact">
                    </div>
            </form>
        </section>
    </main>

    <?php
   require_once "core/entity/footer.php";
   ?>