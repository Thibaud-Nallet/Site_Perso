<?php
$title = "Accueil | Thibaud Nallet";
ob_start();
?>

<!--******** NAVBAR ********-->
<?php include("includes/navigation.php"); ?>

<header id="project" class="container-fluid">
    <div class="heading">
        <h1> Openclassrooms </h1>
        <h2> Les projets </h2>

        <a href="#projet" class="scroll-link">
            <svg class="mouseProject" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 76 130" preserveAspectRatio="xMidYMid meet">
                <g fill="none" fill-rule="evenodd">
                    <rect width="70" height="118" x="1.5" y="1.5" stroke="#FFF" stroke-width="3" rx="36" />
                    <circle class="scroll" cx="36.5" cy="31.5" r="4.5" fill="#b89d30" />
                </g>
            </svg>
        </a>
        <p class='instruction'> Cliquez pour afficher </p>
    </div>
</header>

<section id="projet">
    <div class="container">
        <div class="row>">
            <h3> Mes réalisations </h3>
            <hr />
        </div>
        <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                <h4> Projet 1 </h4>
                <a id="bouton" href="./assets/docs_PDF/webagency.pdf" target="blank"> Enoncé </a>
                <a id="bouton" class="bouton1" href="http://projet1.thibaud-nallet.fr/"> Voir le site </a>
                <figure class="image1"> <img class="web" src="./assets/images/projet_OC/webagency.png" alt="#">
                    <figcaption class="desc1">
                        <div class="valide"> <img src="./assets/images/projet_OC/valide.png"></div>
                        <p>Intégrer la maquette du site d'une agence web <br> <em> HTML5 / CSS3 </em></p>
                    </figcaption>
                </figure>
            </div>

            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                <h4> Projet 2 </h4>
                <a id="bouton" href="./assets/docs_PDF/noumea.pdf" target="blank"> Enoncé </a>
                <a id="bouton" class="bouton2" href="http://projet2.thibaud-nallet.fr/"> Voir le site </a>
                <figure class="image2"> <img class="web" src="./assets/images/projet_OC/noumea.png" alt="">
                    <figcaption class="desc2">
                        <div class="valide"> <img src="./assets/images/projet_OC/valide.png"></div>
                        <p> Créez un site en personnalisant un thème WordPress <br><em> WORDPRESS / SEO </em> </p>
                    </figcaption>
                </figure>
            </div>
        </div>

        <hr />
        <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                <h4> Projet 3 </h4>
                <a id="bouton" href="./assets/docs_PDF/velo.pdf" target="blank"> Enoncé </a>
                <a id="bouton" class="bouton3" href="http://projet3.thibaud-nallet.fr"> Voir le site </a>
                <figure class="image3"> <img class="web" src="./assets/images/projet_OC/velo.png" alt="">
                    <figcaption class="desc3">
                        <div class="valide"> <img src="./assets/images/projet_OC/valide.png"></div>
                        <p> Concevez une carte interactive de location de vélos <br> <em>JavaScript</em> </p>
                    </figcaption>
                </figure>
            </div>

            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                <h4> Projet 4 </h4>
                <a id="bouton" href="./assets/docs_PDF/blog.pdf" target="blank"> Enoncé </a>
                <a id="bouton" class="bouton4" href="http://projet4.thibaud-nallet.fr"> Voir le site </a>
                <figure class="image4"> <img class="web" src="./assets/images/projet_OC/blog.png" alt="">
                    <figcaption class="desc4">
                        <!-- <div class="valide"> <img src="./assets/images/projet_OC/valide.png"></div> -->
                        <p> Créez un blog pour un écrivain <br> <em> PHP / MySQL </em> </p>
                    </figcaption>
                </figure>
            </div>
        </div>
        <hr />

        <div class="row2">
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 centre">
                <h4> Projet 5 </h4>
                <a id="bouton" href="./assets/docs_PDF/perso.pdf" target="blank"> Enoncé </a>
                <a id="bouton" class="bouton5" href="#"> Voir le site </a>

                <div class="encours">
                    <p>Projet en attente <br>Projet personnel </p>
                </div>
                <!--<figure class="image"> <img class="web" src="#" alt=""> 
                    <figcaption class="desc"> <p> Projet personnel <br>  </p> </figcaption>
                    </figure>-->
            </div>
        </div>

    </div>
    <!--******** FOOTER ********-->
    <?php
    include("includes/footer.php");
    ?>
</section>

<?php
$script = "./assets/js/project.js";
$content = ob_get_clean();
require('includes/template.php'); ?>