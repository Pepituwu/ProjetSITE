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
            <img src="image/logo.jpg" alt="logo">

            <p>Lakaka.land</p>
        </div>
        <a href="pages/ajout.html">
            <img src="assets/add.ico" alt="ajouter">
        </a>
        <a href="credits.html">
            <img src="../assets/connexion.svg" alt="Crédits">
        </a>
        <a href="connexion.html">
            <img src="assets/" alt="connexion">
        </a>

    </header>

    <nav>
        <form action="pages/recherche.php" method="post">
            <input type="text" name="cherche" maxlength="100" placeholder="Chercher...">
            <input type="submit">
        </form>
    </nav>

    <main>
        <img src="../image/exemple.jpg" alt="image article">
        <div id="description">
            <h1>
                TITRE
            </h1>

            <h2 id="prix">Prix : </h2>

            <form action="../post/buy.php" method="post">
                <input type="number" placeholder="Faire une offre..." name="buy" id="buy">€
                <input type="submit">
            </form>
            <p>
                Description : <br>
                Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quia, cupiditate quos voluptate accusantium quas totam. Voluptas, illo. Ipsam voluptate cupiditate fugit accusantium assumenda, dolores iure cumque, nam, aliquam impedit architecto?
            </p>
        </div>
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