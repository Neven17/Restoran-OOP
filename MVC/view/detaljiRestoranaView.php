<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/styleRecenzije.css">
    <title>Detalji Restorana</title>
</head>
<body>

    <div class="restoran-detalji">
        <h1><?php echo $restoran['naziv']; ?></h1>
        <h2><?php echo $restoran['opis']; ?></h2>

        <h3>RECENZIJE</h3>
        <ul class="recenzije-lista">
            <?php
            foreach($recenzije as $recenzija) {
                echo "<li>Ime korisnika: {$recenzija['korisnik']} <br>  Ocjena: {$recenzija['ocjena']} <br>Recenzija:{$recenzija['komentar']} </li>";
            }
            ?>
        </ul>
         
        <h1>OSTAVITE SVOJU RECENZIJU:</h1>
        <form action="../controller/recenzijaController.php" method="post">
            <input type="hidden" name="id" value="<?php echo $restoran['restorani_id']; ?>"><br>
            Vaše ime: <input type="text" name="korisnik" required><br><br>
            Ocjena: <input type="number" name="ocjena" min="1" max="5" required><br><br>
            Komentar: <textarea name="komentar"></textarea><br><br>
            <input type="submit" value="POŠALJI RECENZIJU">
        </form>
    </div>

</body>
</html>
