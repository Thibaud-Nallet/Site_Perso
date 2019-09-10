<?php
session_start();

require("controller/FrontEndController.php");

$frontEnd = new FrontEndController;

try {
    if (isset($_GET["action"])) {
        /* ------------------------------------------------------- */
        /* --                   PARTIE HOME                     -- */
        /* ------------------------------------------------------- */
        if ($_GET["action"] == "home") {
            $frontEnd->home();
            /* ----------------------------------------------------------------- */
            /* --                      PAGE PROJET                            -- */
            /* ----------------------------------------------------------------- */
        } elseif ($_GET["action"] == "project") {
            $frontEnd->project();
        } else {
            throw new Exception("Erreur : cette page n'existe pas");
        }
    } else {
        $frontEnd->home();
    }
} catch (Exception $e) {
    //$frontEnd->error();
    echo $e->getMessage();
}
