<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<form action="circuito.php" method="post">
        <h1>CIRCUITO</h1>
        <h2>ingrese resistencia y intensidad de corriente</h2>
        <input type="number" name="numero1" value="resistencia" autocomplete="on">
        <input type="number" name="numero2" value="intesidad de corriente" autocomplete="on">
        
        <input type="submit" name="" value="submit" autocomplete="on">

    </form>
</body>
</html>

<?php




$n1 = $_POST['numero1'];
$n2 = $_POST['numero2'];




/* para que el error de no rellenar los inputs aun no salga */
error_reporting (0);
/*  <!-- el isset es para trabajar con variables -->
<!-- el is_numeric es para determinar si es un numero o no --> */

    
$voltaje = $n1 * $n2;
    /* este get lo podemos utilizar para llamar a las variables globales */


echo "el voltaje es: " . $voltaje;



/* 



$num1 = $_POST['numero1'];
$num1 = $_POST['numero2'];

$voltaje = $num1 *  $num2;

echo "el voltaje es : ".$voltaje;

 */

?>