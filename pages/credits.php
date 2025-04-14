<?php $page = "Crédits";
include "../incr/header.php";
include "../incr/nav.php";?>

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

    <?php include "../incr/aside.php";
    include "../incr/footer.php";?>
</body>
</html>