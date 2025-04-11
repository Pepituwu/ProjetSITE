<?php $page = "Ajout";
include "../incr/header.php";
include "../incr/nav.php";?>

    <main>
        <form action="../post/add_article.php" method="post" enctype="multipart/form-data">
            <input type="file" name="image">
            <br>
            <input type="text" name="title" maxlength="100" placeholder="Titre">
            <input type="number" name="price" placeholder="Prix...">
            <br>
            <input type="text" name="describe" maxlength="1000" placeholder="Description">
            <br>
            <input type="checkbox" name="sponso" value = 1>
            <input type="submit">
        </form>
    </main>

    <?php include "../incr/aside.php";
    include "../incr/footer.php";?>

</body>
</html>