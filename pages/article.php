<?php $page = "Article";
include "../incr/header.php";
include "../incr/nav.php";?>

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
    
    <?php include "../incr/aside.php";
    include "../incr/footer.php";?>
</body>
</html>