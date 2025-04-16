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
                <img src="image/logo.jpg" alt="logo">
                <p>Lakaka.land</p>
            </a>

        </div>
        <a href="pages/ajout.php">
            <img src="assets/add.ico" alt="ajouter">
        </a>
        <a href="pages/credits.php">
            <img src="../assets/connexion.svg" alt="Crédits">
        </a>
        <a href="pages/connexion.php">
            <img src="assets/" alt="connexion">
        </a>

    </header>

    <nav>
        <form action="pages/recherche.php" method="post">
            <input type="text" name="search" maxlength="100" placeholder="cherche">
            <input type="submit">
        </form>
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
                <h2>
                    <?= $r['Titre']?>
                </h2>
                <h3>
                    Prix : <?= $r['Prix']?> €
                </h3>
                <p>
                    <?= $r['Description'] ?>
                </p>
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
        <p>copyright 2025</p>
    </footer>
</body>
</html>