<?php
$title = "Compétences";
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
            <h1>Mes compétences</h1>
        </section>

        <section class="competences">

            <div class="front">
                <h4>Front-End</h4>

             <!-- Bar de compétence -->
                <div class="skill-bar">
                    <div class="detail">
                        <span>Maquettage</span>
                        <span>90%</span>
                    </div>
                    <div class="bar">
                        <div class="html-bar"></div>
                    </div>
                </div>

                <!-- Bar de compétence 2 -->
                <div class="skill-bar">
                    <div class="detail">
                        <span>Figma</span>
                        <span>80%</span>
                    </div>
                    <div class="bar">
                        <div class="figma-bar"></div>
                    </div>
                </div>

                <!-- Bar de compétence 3 -->
                <div class="skill-bar">
                    <div class="detail">
                        <span>HTML</span>
                        <span>90%</span>
                    </div>
                    <div class="bar">
                        <div class="html-bar"></div>
                    </div>
                </div>

                <!-- sBar de compétence 4-->
                <div class="skill-bar">
                    <div class="detail">
                        <span>CSS</span>
                        <span>90%</span>
                    </div>
                    <div class="bar">
                        <div class="html-bar"></div>
                    </div>
                </div>
            </div>

            <div class="back">
                <h4>Back-end</h4>
                <!-- Bar de compétence back-end  -->
                <div class="skill-bar">
                    <div class="detail">
                        <span>MySQL</span>
                        <span>85%</span>
                    </div>
                    <div class="bar">
                        <div class="données-bar"></div>
                    </div>
                </div>

                <!-- Bar de compétence 2 back-end-->
                <div class="skill-bar">
                    <div class="detail">
                        <span>SQL</span>
                        <span>80%</span>
                    </div>
                    <div class="bar">
                        <div class="mysql-bar"></div>
                    </div>
                </div>

                <!-- Bar de compétence 3 back-end -->
                <div class="skill-bar">
                    <div class="detail">
                        <span>PHP</span>
                        <span>30%</span>
                    </div>
                    <div class="bar">
                        <div class="php-bar"></div>
                    </div>
                </div>

                <!-- Bar de compétence 4 back-end -->
                <div class="skill-bar">
                    <div class="detail">
                        <span>Symfony</span>
                        <span>30%</span>
                    </div>
                    <div class="bar">
                        <div class="symfony-bar"></div>
                    </div>
                </div>
            </div>
            
        </section>
    </main>

    <?php
   require_once "core/entity/footer.php";
   ?>