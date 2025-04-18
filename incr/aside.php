<aside>
    <h1>
        Articles Sponsorisés
    </h1>
        <?php 
        
        $sql = "SELECT * FROM article WHERE sponsorise = 1";
        include '../post/key.php';
        
        $articles = $key->query($sql);
        
        foreach($articles AS $r): ?>
        <a href = "article.php?article=<?= $r['Id']?>">
            <article>
                <img src="../<?= $r['image']?>" alt="Article <?= $r['Id']?>">
                <div id="infos">   
                <h2>
                        <?= $r['titre']?>
                    </h2>
                    <h3>
                        Prix : <?= $r['prix']?> €
                    </h3>
                    <p>
                        <?= $r['description'] ?>
                    </p>
                </div> 
            </article>
        </a>
        <?php endforeach; ?>
    </aside>
