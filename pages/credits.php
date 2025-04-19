<?php $page = "Crédits";
include "../incr/header.php";
include "../incr/nav.php";?>

    <main>
        <form action="pages/add_credits.php" method="post">
            <input type="number" name="add" maxlength="100" placeholder="Crédits à rajouter...">
            <br>
            <input type="submit">
        </form>
    </main>

    <?php include "../incr/aside.php";
    include "../incr/footer.php";?>
</body>
</html>