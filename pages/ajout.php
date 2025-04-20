<?php $page = "Ajout";
include "../incr/header.php";
include "../incr/nav.php";?>

<main>
        <h1>Veuillez remplir les champs:</h1>
        <form action="../post/add_article.php" method="post" enctype="multipart/form-data">
            <br>
            <input type="text" name="title" maxlength="100" placeholder="Titre">
            <br>
            <input type="number" name="price" placeholder="Prix...">
            <br>
            <select name="theme">
                <optgroup label = "Thème">
                    <option value="1">La Malice</option>
                    <option value="2">La Bienveillance</option>
                    <option value="3">La Malveillance</option>
                    <option value="4">Goupi Land</option>
                    <option value="5">Le Garage</option>
                </optgroup>
            </select>
            <br>
            <input type="text" name="describe" maxlength="1000" placeholder="Description">
            <br>
            <input type="file" name="image" placeholder="Ajouter une photo">
            <br>
            <p>Sponsorisé ?<p>
            <input type="checkbox" name="sponso" value = 1 >
            <br>
            <input type="image" src="../assets/envo.svg" alt="envoyer" id="send_button">
        </form>
    </main>

    <?php include "../incr/aside.php";
    include "../incr/footer.php";?>

</body>
</html>
