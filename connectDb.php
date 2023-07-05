<?php
try{

    $bdd= new PDO('mysql:host=localhost;dbname=php_jsdb','root','');
}catch(Exception $e)
{
    die('Erreur:'.$e->getMessage());
}
?>