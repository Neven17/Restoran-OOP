<?php 


error_reporting(E_ALL);
ini_set("display_errors", "1");

include "../model/RestoranModel.php";
include "../model/RecenzijaModel.php";





$dsn="mysql:host=localhost;dbname=mvcrestoranpdo";
$username="root";
$password="1100ne";

$pdo=new PDO($dsn, $username, $password);





if(isset($_GET['id'])){
    $restoranModel= new RestoranModel($pdo);
    $recenzijaModel=new RecenzijaModel($pdo);
    $restoran=$restoranModel->dohvatDetaljaRestorana($_GET['id']);
    $recenzije=$recenzijaModel->dohvatRecenzijaZaRestoran($_GET['id']);
    
    

    include "../view/detaljiRestoranaView.php";




}else{
    $restoranModel= new RestoranModel($pdo);
$restorani=$restoranModel->dohvatRestorana();

include "../view/listaRestoranaView.php";


}







?>