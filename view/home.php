<!DOCTYPE html>
<html lang="fr-FR">

<head>
    <title> Thibaud Nallet </title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Anton" rel="stylesheet" type='text/css'>
    <link href="https://fonts.googleapis.com/css?family=Crimson+Text" rel="stylesheet" type='text/css'>
    <link href="https://fonts.googleapis.com/css?family=Orbitron" rel="stylesheet" type='text/css'>
    <!-- Utilisation des icones fontawesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <!-- Feuille de style -->
    <link rel="stylesheet" href="accueil/style.css">
    <link rel="stylesheet" href="accueil/nav/style.css">
    <link rel="stylesheet" href="accueil/footer/style.css">
    <script src="accueil/script.js"></script>
</head>

<body data-spy="scroll" data-target=".navbar" data-offset="60">

    <nav class="navbar navbar-default navbar-fixed-top">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
            </div>
            <div class="collapse navbar-collapse" id="myNavbar">
                <ul class="nav navbar-nav">
                    <li><a href="#about"> A propos </a></li>
                    <li><a href="competences/index.html"> Mes compétences </a></li>
                    <li><a href="projet/index.html"> Projet OC </a></li>
                    <!--<li><a href="portfolio/index.html"> Portfolio </a></li>-->
                    <li><a href="contact/index.html"> Contact </a></li>
                </ul>
            </div>
        </div>
    </nav>

    <header id="header" class="container-fluid">
        <div class="heading">
            <h1> Thibaud Nallet</h1>
            <h2>Développeur Web Junior,<br> en formation avec Openclassrooms </h2>
            <a href="docs/Cv%20dev.pdf" class="button1">Telecharger CV</a>
        </div>
        <ul class="list-unstyled list-inline">
            <li> <a href="https://www.linkedin.com/in/" target="_blank">
                    <i class="fab fa-linkedin fa-4x"></i>
                </a> </li>
            <li> <a href="https://github.com/" target="_blank">
                    <i class="fab fa-github-square fa-4x"></i>
                </a></li>
        </ul>

        <a href="#about" class="scroll-link">
            <svg class="mouse" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 76 130" preserveAspectRatio="xMidYMid meet">
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
                    <img src="accueil/images/Photo.png" alt="Thibaud">
                </div>

                <div class="col-lg-7 col-xs-12">
                    <h4>Je m'appelle Thibaud Nallet, je suis à la recherche d'un <strong> contrat d'apprentissage. </strong> </h4>
                    <div class="text">
                        <p>Anciennement éducateur sportif, j'ai mis fin à ma carrière prématurément à cause de problèmes physiques. Je suis actuellement en reconversion professionnelle et je m'intéresse au métier de développeur informatique. </p>
                        <p>Pourquoi cette branche particulièrement car il y a un côté créatif avec la résolution de multiples problèmes variés ainsi que de nombreuses opportunités et de techniques diverses.</p>
                        <p>Je suis actuellement des cours en ligne avec open classroom pour valider le diplôme de niveau 3 Développeur intégrateur en réalisation d’applications web.</p>
                        <p> J'envisage de rentrer en formation au mois d’octobre avec le CESI de Dijon sur la formation Responsable en ingénierie des logiciels et je cherche une <strong>première expérience en entreprise </strong> en alternance. </p>
                        <a href="competences/index.html" class="button2">En savoir plus ...</a>
                    </div>
                </div>

            </div>

        </div>
    </section>
    <footer>
        <div class=" col-lg-12 footer-container">
            <div class="col-lg-6 col-xs-6 thibaud">
                <p>© 2019 - <a class="titi" href="http://thibaud-nallet.fr">Thibaud Nallet</a></p>
            </div>
            <div class="col-lg-6 col-xs-6 chevron">
                <a href="#header" class="chevron"><i class="fa fa-chevron-up" aria-hidden="true"></i></a> </div>
        </div>
    </footer>

</body>

</html>