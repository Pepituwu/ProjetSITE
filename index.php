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
        <form action="index.php" method="get">
            <input type="text" name="name" maxlength="100" placeholder="Recherche" id="search">
            <input type="image" src="assets/cherche.svg" alt="rechercher" id="loupe">
        </form>
        <h2>
        <a href="index.php?theme=1">La Malice</a>
        <br> 
        <a href="index.php?theme=2">La Bienveillance</a> 
        <br> 
        <a href="index.php?theme=3">La Malveillance</a>
        <br> 
        <a href="index.php?theme=4">Goupi Land</a>
        <br> 
        <a href="index.php?theme=5">Le Garage</a> 
        </h2>
    </nav>

    <main>
        <?php 
        include 'post/key.php';
        if (!empty($_GET['name'])) {
            $nom = $_GET['name']; 
            $sql = "SELECT * FROM article WHERE titre = " . $key->quote($nom); //

        } elseif (!empty($_GET['theme'])) {
            $theme = $_GET['theme'];
            $sql = "SELECT * FROM article WHERE theme = " . $key->quote($theme);

        } else {
            $sql = "SELECT * FROM article";
        }
        

        $articles = $key->query($sql);

        foreach($articles AS $r): ?>


        <a href="pages/article.php?article=<?= $r['id']?>">
            <article>
                    <img src="<?= $r['image']?>" alt="Article <?= $r['id']?>">
                    <div id="infos">
                    <h2>
                    <?= $r['titre']?>
                </h2>
                <h3>
                    Prix : <?= $r['prix']?> €
                </h3>
                </div>
            </article>
        </a>

        <?php endforeach; ?>
        
    </main>

    <aside>
        <h1>
            Articles Sponsorisés
        </h1>
    <?php 
        $sql = "SELECT * FROM article WHERE sponsorise = 1";
        $articles = $key->query($sql);

        foreach($articles AS $r): ?>
        <a href="pages/article.php?article=<?= $r['id']?>">
            <article>
                <img src="<?= $r['image']?>" alt="Article <?= $r['id']?>">
                <div id="infos">
                    <h2>
                        <?= $r['titre']?>
                    </h2>
                    <h3>
                        Prix : <?= $r['prix']?> €
                    </h3>
                    <p>
                        Description : <?= $r['description']?>
                    </p>
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
