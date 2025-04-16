<?php define('BASE', '/ProjetSITE/'); ?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/mobile.css">
    <title>Amazon - <?= $page?></title>
</head>
<body>
    <header>
        <div id="logo">
            <a href="../index.php">
                <img src="../image/logo.jpg" alt="logo" width="12%">
                <p>Lakaka.land</p>
            </a>
        </div>
        <div id="droites"></div>
        <a href="ajout.php">
            <img src="../assets/add.svg" alt="Ajouter"id="icones"width="12%">
        </a>
        <a href="credits.php">
            <img src="../assets/euro.svg" alt="Crédits"id="icones"width="12%">
        </a>
        <a href="connexion.php">
            <img src="../assets/connexion.svg" alt="connexion"id="icones"width="12%">
        </a>
        
    </header>
