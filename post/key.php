<!-- connexion -->
<?php

define('SERVER', 'mysql:server=localhost;dbname=lakaka');
define('LOGIN', 'root');
define('PASSWORD', 'root'); //laisser vide pour les utilisateurs de wamp
try{
    $key = new PDO(SERVER, LOGIN, PASSWORD);
}catch(Exception $e){
    echo $e->getMessage();
}