<?php
require_once "includes/conexao.php";

$query_carga = mysqli_query($conn, "SELECT * FROM carga");
$query_despacho = mysqli_query($conn, "SELECT * FROM despacho");
$query_retirada = mysqli_query($conn, "SELECT * FROM retirada");
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/reservas.css">
    <title>Reservas</title>
</head>

<body>
    <?php
    require_once("includes/header.php");
    ?>
    <div class="grid-container">
        <?php
        while ($rs_carga = mysqli_fetch_array($query_carga)) {
            $rs_despacho = mysqli_fetch_array($query_despacho);
            $rs_retirada = mysqli_fetch_array($query_retirada);
        ?>
            <div class="grid-item">
                <h2>Carga: <?php echo $rs_carga["nome"]; ?></h2>
                <p><b>Empresa despachante:</b> <?php echo $rs_despacho["empresa"]; ?></p>
                <p><b>Empresa receptora:</b> <?php echo $rs_retirada["empresa"]; ?></p>
                <p><b>Peso:</b> <?php echo $rs_carga["peso"]; ?> T</p>
                <p><b>Local de despache:</b> <?php echo $rs_carga["partida"]; ?><br><b> Local de retirada:</b> <?php echo $rs_carga["chegada"]; ?></p>
            </div>
        <?php
        }
        ?>
    </div>
    <footer> </footer>
</body>

</html>
