<!DOCTYPE html>
<html lang="fr-FR">

<head>
    <!--***** META *****-->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Bienvenue sur le site web de Jean Forteroche, écrivain. Découvrez son nouveau roman 'Billet simple
        pour l'Alaska', publié en ligne.">
    <!--***** LINK *****-->
    <!-- Favicon -->
    <link rel="icon" type="image/png" href="#" />
    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Anton" rel="stylesheet" type='text/css'>
    <link href="https://fonts.googleapis.com/css?family=Crimson+Text" rel="stylesheet" type='text/css'>
    <link href="https://fonts.googleapis.com/css?family=Orbitron" rel="stylesheet" type='text/css'>
    <!-- Fontawesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <!-- Feuille de style -->
    <link rel="stylesheet" href="./assets/css/style.css">
    <!--***** TITLE *****-->
    <title> <?= $title ?> </title>
</head>

<body data-spy="scroll" data-target=".navbar" data-offset="60">
    <?= $content ?>
</body>

<!--***** SCRIPT *****-->
<!-- JQuery -->
<script src="https://code.jquery.com/jquery-2.2.4.min.js" integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44=" crossorigin="anonymous"></script>
<!-- Bootstrap -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
<!-- Fichier js -->
<script src="<?= $script ?>"> </script>
</body>

</html>