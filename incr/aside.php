<aside>
        <?php 
        
        $sql = "SELECT * FROM Article WHERE Sponsorisé = 1";
        include '../post/key.php';
        
        $articles = $key->query($sql);
        
        foreach($articles AS $r): ?>
        <a href = "article.php?article=<?= $r['Id']?>">
            <article>
                <img src="../<?= $r['Image']?>" alt="Article <?= $r['Id']?>">
                <div id="infos">   
                <h2>
                        <?= $r['Titre']?>
                    </h2>
                    <h3>
                        Prix : <?= $r['Prix']?> €
                    </h3>
                    <p>
                        <?= $r['Description'] ?>
                    </p>
                </div> 
            </article>
        </a>
        <?php endforeach; ?>
    </aside>
