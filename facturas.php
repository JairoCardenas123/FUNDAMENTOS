<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="facturas.php" method = "POST" >
        <label for="">Cryptomonedas</label>
        <select  name="opt" id="">
            <option value="">Seleccione la cryptomoneda </option>
            <option value="XRP">XRP</option>
            <option  value="DOGE">DOGE</option>
            <option  value="BITCOIN">BITCOIN</option>
            <option  value="NFT">NFT</option>
            <option  value="SOLANA">SOLANA</option>
        </select>
        <label>Cantidad</label>
        <input name = "cantidad" type="number">

        <label>Digite el valor de un precio</label>
        <input name = "precio" type="numer">

        <input type="submit">

    </form>
</body>
</html>

<?php

$bit = $_POST['opt'];
$cantidad = $_POST['cantidad'];
$precio = $_POST['precio'];

$math = $cantidad * $precio;

echo "Nombre de cryptomoneda es: {$bit}, y la conversion es {$math}";


?>