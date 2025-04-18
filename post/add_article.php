<?php
include 'key.php';

if (isset($_POST['title']) && !empty($_POST['title'])):
    $title = htmlspecialchars($_POST['title']);
    $describe = htmlspecialchars($_POST['describe']);
    $price = isset($_POST['price']) && is_numeric($_POST['price']) ? (int)$_POST['price'] : 0;
    $sponso = isset($_POST['sponso']) ? 1 : 0;
    $theme = isset($_POST['theme']) ? (int)$_POST['theme'] : 0;
    
    $sql = "INSERT INTO Article (Titre, Description, Prix, Sponsorisé, Image, theme) 
            VALUES (:title, :describe, :price, :sponso, '', :theme)";
    $stmt = $key->prepare($sql);
    $stmt->execute([
        ':title' => $title,
        ':describe' => $describe,
        ':price' => $price,
        ':sponso' => $sponso,
        ':theme' => $theme
    ]);

    $articleId = $key->lastInsertId();

    $image = $_FILES['image']['name'];
    $ext = strtolower(pathinfo($image, PATHINFO_EXTENSION));
    $allowedTypes = array("jpg", "png", "gif", "jpeg");

    if (in_array($ext, $allowedTypes)) {
        $tempName = $_FILES['image']['tmp_name'];

        $safeTitle = preg_replace('/[^a-zA-Z0-9_-]/', '_', strtolower($title));
        $newImageName = $safeTitle . '-' . $articleId . '.' . $ext;
        $targetPath = "image/" . $newImageName;

        if (!is_dir('../image')) {
            mkdir('../image', 0777, true);
        }

        if (move_uploaded_file($tempName, '../' . $targetPath)) {
            $updateSql = "UPDATE Article SET Image = :image WHERE id = :id";
            $updateStmt = $key->prepare($updateSql);
            $updateStmt->execute([
                ':image' => $targetPath,
                ':id' => $articleId
            ]);
        } else {
            echo "Échec de l'upload de l'image.";
        }
    }

    header('Location:../index.php');

else:
    header('Location:../pages/ajout.php');
endif;
