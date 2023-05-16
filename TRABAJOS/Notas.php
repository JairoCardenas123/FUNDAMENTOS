<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="trabajos.php" method = "POST" >
        <label for="">nota1</label>
        <input name = "nota1" type="number">
        <label for="">nota2</label>
        <input name = "nota2"  type="number">
        <label for="">nota3</label>
        <input name = "nota3" type="number">
        

        <input type="submit">
    </form>
</body>
</html>

<?php

$nota1 = $_POST['nota1'];
$nota2 = $_POST['nota2'];
$nota3 = $_POST['nota3'];

$todo = ($nota1 + $nota2 + $nota3) / 3;



if($todo > 3.9){
    echo "paso cucho";
}else{
    echo "vaya pa la casita";
}

?>