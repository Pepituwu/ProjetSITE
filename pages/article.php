<?php $page = "Article";
include "../incr/header.php";
include "../incr/nav.php";?>

    <main>

    <?php
    // j'ai besoin de l'id du produit à afficher
    $id = $_GET['article'];
    require_once "../post/key.php";
    $sql = "SELECT * FROM Article WHERE Id=$id";
    // var_dump($sql);
    $article = $key->query($sql);
    
    foreach($article as $r):
    ?>
        <img src="../<?= $r['Image']?>" alt="image article">
        <div id="description">
            <h1>
                <?= $r['Titre'];?>
            </h1>

            <h2 id="prix">Prix : <?= $r['Prix'];?> €</h2>

            <form action="../post/buy.php" method="post">
                <input type="number" placeholder="Faire une offre..." name="buy" id="buy">€
                <input type="submit">
            </form>
            <p>
                Description : <br>
                <?= $r['Description'];?>
            </p>
        </div>
    <?php 
        endforeach;
    ?>
    </main>
    
    <?php 
    include "../incr/aside.php";
    include "../incr/footer.php";?>
</body>
</html>