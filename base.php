<?php
try
{
$bdd = new PDO('mysql:host=localhost;dbname=mama', 'root', '');
}catch(Exception $e)
{
die('Erreur : '.$e->getMessage('non connect\é'));

}
?>