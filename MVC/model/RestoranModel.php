<?php 


class RestoranModel{



    private $pdo;            //pitaj za ovo

     public function __construct($dbConnection)
    {
        $this->pdo = $dbConnection;
    }

    public function dohvatRestorana(){

        $query="SELECT * FROM restorani";
        $stmt=$this->pdo->prepare($query);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
        

    }

    public function dohvatDetaljaRestorana($id){
        $query="SELECT * FROM restorani WHERE restorani_id=:restorani_id";
        $stmt=$this->pdo->prepare($query);
        $stmt->bindParam(":restorani_id", $id);
        $stmt->execute();
        return  $stmt->fetch(PDO::FETCH_ASSOC);
    }



}



?>
