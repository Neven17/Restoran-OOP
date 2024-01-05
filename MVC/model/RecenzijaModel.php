<?php 



class RecenzijaModel{

    private $pdo;


    public function __construct($dbConnection){
    
        $this->pdo=$dbConnection;


    }

    function insertRecenzija($restoran_id, $korisnik, $ocjena, $komentar) {
       
            $query = "INSERT INTO recenzije(restoran_id, korisnik, ocjena, komentar) VALUES (:restoran_id, :korisnik, :ocjena, :komentar)";
            $stmt = $this->pdo->prepare($query);
            $stmt->bindParam(":restoran_id", $restoran_id, PDO::PARAM_INT);
            $stmt->bindParam(":korisnik", $korisnik);
            $stmt->bindParam(":ocjena", $ocjena);
            $stmt->bindParam(":komentar", $komentar);
            $stmt->execute();
     
    }
    

   

    function dohvatRecenzijaZaRestoran($id){
        $query = "SELECT * FROM recenzije WHERE restoran_id=:restoran_id";
        $stmt = $this->pdo->prepare($query);
        $stmt->bindParam(":restoran_id" , $id);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
        
    }
    






}
?>