<?php
$title = "Accueil | Thibaud Nallet";
ob_start();
?>

<!--******** NAVBAR ********-->
<?php include("includes/navigation.php"); ?>

<header id="home" class="container-fluid">
    <div class="heading">
        <h1> Thibaud Nallet</h1>
        <h2>Développeur Web Junior,<br> en formation avec Openclassrooms </h2>
        <a href="./assets/docs_PDF/cv_Dev.pdf" class="button1">Telecharger CV</a>
    </div>
    <ul class="list-unstyled list-inline">
        <li> <a href="https://www.linkedin.com/in/thibaud-nallet-ab2370ab" target="_blank">
                <i class="fab fa-linkedin fa-4x"></i>
            </a> </li>
        <li> <a href="https://github.com/Thibaud-Nallet" target="_blank">
                <i class="fab fa-github-square fa-4x"></i>
            </a></li>
    </ul>

    <a href="#about" class="scroll-link">
        <svg class="mouseHome" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 76 130" preserveAspectRatio="xMidYMid meet">
            <g fill="none" fill-rule="evenodd">
                <rect width="70" height="118" x="1.5" y="1.5" stroke="#FFF" stroke-width="3" rx="36" />
                <circle class="scroll" cx="36.5" cy="31.5" r="4.5" fill="#b89d30" />
            </g>
        </svg>
    </a>
</header>

<section id="about" class="container-fluid">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h3> Qui suis-je ? </h3>
            </div>
        </div>
        <div class="row" id="presentation">
            <div class="col-lg-5 col-xs-12 profile-picture">
                <img src="./assets/images/home/Photo.png" alt="Thibaud">
            </div>

            <div class="col-lg-7 col-xs-12">
                <h4>Je m'appelle Thibaud Nallet, je suis à la recherche d'un <strong> contrat d'apprentissage. </strong> </h4>
                <div class="text">
                    <p>Anciennement éducateur sportif, j'ai mis fin à ma carrière prématurément à cause de problèmes physiques. Je suis actuellement en reconversion professionnelle et je m'intéresse au métier de développeur informatique. </p>
                    <p>Pourquoi cette branche particulièrement car il y a un côté créatif avec la résolution de multiples problèmes variés ainsi que de nombreuses opportunités et de techniques diverses.</p>
                    <p>Je suis actuellement des cours en ligne avec open classroom pour valider le diplôme de niveau 3 Développeur intégrateur en réalisation d’applications web.</p>
                    <p> J'envisage de rentrer en formation au mois d’octobre avec le CESI de Dijon sur la formation Responsable en ingénierie des logiciels et je cherche une <strong>première expérience en entreprise </strong> en alternance. </p>
                    <a href="index.php?action=project" class="button2">En savoir plus ...</a>
                </div>
            </div>

        </div>

    </div>
</section>

<!--******** FOOTER ********-->
<?php
$script = "./assets/js/project.js";
include("includes/footer.php");
$content = ob_get_clean();
require('includes/template.php'); ?>