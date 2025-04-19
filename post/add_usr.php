<?php
include 'key.php';

if (isset($_POST['username']) && !empty($_POST['username']) && isset($_POST['password']) && !empty($_POST['password']) && isset($_POST['credits']) && !empty($_POST['credits'])):
    $username = htmlspecialchars($_POST['username']);
    $password = htmlspecialchars($_POST['password']);
    $credits = htmlspecialchars($_POST['credits']);

    $sql = "SELECT Pseudo FROM usr";
    $pseudos = $key -> query($sql);

    foreach ($pseudos AS $p):
        if($p['Pseudo' ] == $username){
            header('Location:../pages/connexion.php');
            exit;
        }
        
    endforeach;
    $sql = "INSERT INTO usr (Pseudo, MDP, Crédits) VALUES ('$username', '$password', '$credits')";
    $query = $key->query($sql);
    header('Location:../index.php');

else:
    header('Location:../pages/connexion.php');
endif;
