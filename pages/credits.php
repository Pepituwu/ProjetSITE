<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/mobile.css">
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
        <a href="credits.php">
            <img src="../assets/connexion.svg" alt="Crédits">
        </a>
        <a href="connexion.php">
            <img src="assets/" alt="connexion">
        </a>

    </header>

    <nav>
        <form action="pages/recherche.php" method="post">
            <input type="text" name="search" maxlength="100" placeholder="Cherche...">
            <input type="submit">
        </form>
    </nav>

    <main>
        <form action="pages/add_credits.php" method="post">
            <input type="file" name="image">
            <br>
            <input type="text" name="title" maxlength="100" placeholder="Titre">
            <br>
            <input type="text" name="describe" maxlength="1000" placeholder="Description">
            <br>
            <input type="submit">
        </form>
    </main>

    <aside>
        <article>
            <img src="assets/exemple.jpg" alt="exemple">
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Natus inventore et nesciunt ipsa maxime omnis a cum fugiat dicta saepe excepturi officia error asperiores at, enim voluptatum blanditiis alias officiis!</p>
        </article>
    </aside>

    <footer>
        <p>copyright 2025</p>
    </footer>
</body>
</html>