<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/styleRestorani.css">
    <title>Restorani</title>
</head>
<body>

<h1>LISTA RESTORANA</h1>

    <ul class="restorani-lista">
        <?php   
        foreach($restorani as $restoran) {
            echo "<li><a href='../controller/restoranController.php?id={$restoran['restorani_id']}'>{$restoran['naziv']}</a></li>";
        }
        ?>
    </ul>

</body>
</html>
