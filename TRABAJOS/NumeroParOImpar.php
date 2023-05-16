<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="NumeroParOImpar.php" method = "post" >
        <label for="">introduzca un numero para ver si es par o impar </label>
        <input type="number" name = "number" >
    </form>
</body>
</html>

<?php

$num1 = $_POST['number'];

if($num1 % 2 ){
    echo "no es par y";
} else {
    echo "es par y ";
}

if($num1 > 10){
    echo " es mayor que 10 "  ;
}else{
    echo " es menor que 10";
}

?>