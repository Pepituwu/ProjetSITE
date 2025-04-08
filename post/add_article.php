<?php

// var_dump($_POST);
if(isset($_POST['title']) && !empty($_POST['title'])
    && 
    isset($_POST['price']) && !empty($_POST['price'])) 
    :
    $title = htmlspecialchars($_POST['title']);
    $describe = htmlspecialchars($_POST['describe']);

    $price = isset($_POST['price']) && is_numeric($_POST['price']) ? (int)$_POST['price'] : 0;

    $sponso = isset($_POST['sponso']) ? 1 : 0;

    $image = $_FILES['image']['name'];
    $ext = strtolower(pathinfo($image, PATHINFO_EXTENSION));
    $allowedTypes = array("jpg", "png", "gif", "jpeg");

    $tempName = $_FILES['image']['tmp_name'];
    $targetPath = "image/".$image;
    if (in_array($ext, $allowedTypes)){
        if (move_uploaded_file($tempName, '../'.$targetPath)){

        } else {
            echo "File not uploaded";
        };
    }


    // echo $image;

    $sql = "INSERT INTO Article (Titre, Description, Prix, Sponsorisé, Image) VALUES ('$title','$describe', '$price','$sponso','$targetPath')";
    // echo $sql;
    include 'key.php';

    if($key->query($sql)):
        header('Location:../index.php');
    else:
        echo "Tout ne s'est pas passé comme prévu";
    endif;
 else:
    header('Location:../pages/ajout.php');
endif;