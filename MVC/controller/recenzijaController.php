<?php 

include "../model/RecenzijaModel.php";

$dsn="mysql:host=localhost;dbname=mvcrestoranpdo";
$username="root";
$password="1100ne";

$pdo= new PDO($dsn, $username, $password);


if($_SERVER["REQUEST_METHOD"] === "POST")
{

    
    
    $recenzijaModel=new RecenzijaModel($pdo);
   $recenzijaModel->insertRecenzija($_POST['id'], $_POST['korisnik'], $_POST['ocjena'], $_POST['komentar']);
   header("Location: restoranController.php?id={$_POST['id']}");

    
    
}




?>