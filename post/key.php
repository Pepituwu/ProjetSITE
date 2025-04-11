<?php
if (!defined('SERVER')){
    define('SERVER', 'mysql:server=localhost;dbname=lakaka');
}
if (!defined('LOGIN')){
    define('LOGIN', 'root');
}
if (!defined('PASSWORD')){
    define('PASSWORD', 'root'); //laisser vide pour les utilisateurs de wamp
}


try{
    $key = new PDO(SERVER, LOGIN, PASSWORD);
}catch(Exception $e){
    echo $e->getMessage();
}