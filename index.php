<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/mobile.css">
    <title>Amazon - index</title>
</head>
<body>
    <header>
        <div id="logo">
            <a href="index.php">
                <img src="image/logo.jpg" alt="logo" width="12%">
            </a>
            
        </div>
        <a href="index.php">
            <p>Lakaka.land</p>
        </a>
        <div id="droites">
            <a href="pages/ajout.php">
                <img src="assets/add.svg" alt="ajouter" id="icones"width="12%">
            </a>
            <a href="pages/credits.php">
                <img src="assets/euro.svg" alt="Crédits"id="icones"width="12%">
            </a>
            <a href="pages/connexion.php">
                <img src="assets/connexion.svg" alt="connexion"id="icones"width="12%">
            </a>
        </div>
       

    </header>

    <nav>
        <form action="pages/recherche.php" method="post">
            <input type="text" name="search" maxlength="100" placeholder="Recherche">
            <input type="image" src="assets/cherche.svg" alt="rechercher" width="11%" id="loupe">
        </form>
        <h2>
        <a href="index.php?theme=malice">La malice</a>
        <br> 
        <a href="index.php?theme=bien">La bienveillance</a> 
        <br> 
        <a href="index.php?theme=mal">La malveillance</a>
        <br> 
        <a href="index.php?theme=goupi">Goupi land</a>
        <br> 
        <a href="index.php?theme=garage">Le garage</a> 
        </h2>
    </nav>

    <main>
        <?php 
        $sql = "SELECT * FROM Article";

        include 'post/key.php';
        $articles = $key->query($sql);

        foreach($articles AS $r): ?>


        <a href="pages/article.php?article=<?= $r['Id']?>">
            <article>
                    <img src="<?= $r['Image']?>" alt="Article <?= $r['Id']?>">
                    <div id="infos">
                    <h2>
                    <?= $r['Titre']?>
                </h2>
                <h3>
                    Prix : <?= $r['Prix']?> €
                </h3>
                </div>
            </article>
        </a>

        <?php endforeach; ?>
        
    </main>

    <aside>
    <?php 
        $sql = "SELECT * FROM Article WHERE Sponsorisé = 1";
        $articles = $key->query($sql);

        foreach($articles AS $r): ?>
        <a href="pages/article.php?article=<?= $r['Id']?>">
            <article>
                <img src="<?= $r['Image']?>" alt="Article <?= $r['Id']?>">
                <div id="infos">
                    <h2>
                        <?= $r['Titre']?>
                    </h2>
                    <h3>
                        Prix : <?= $r['Prix']?> €
                    </h3>
                </div>
            </article>
        </a>
        <?php endforeach; ?>
    </aside>

    <footer>
        <p><h2>Copyright 2025</h2></p>
    </footer>
</body>
</html>
