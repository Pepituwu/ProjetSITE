<?php $page = "Connexion";
include "../incr/header.php";
include "../incr/nav.php";?>

    <main>
    <form action="../post/add_usr.php" method="post">
        <input type="text" name="username" maxlength="100" placeholder="Pseudo">
    <br>
        <input type="password" name="password" placeholder="Mot de passe...">
    <br>
        <input type="number" name="credits" placeholder="Crédits...">
    <br>
        <input type="submit">
    </form>
    </main>

    <?php include "../incr/aside.php";
    include "../incr/footer.php";?>

</body>
</html>