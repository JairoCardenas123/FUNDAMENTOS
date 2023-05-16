<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

    /* 1. STRING SERIE CARACTERES */
    $customer = "falcao";
    echo "the customer {$customer} boungh <br>";

    /* 2. AÑADIR NUMERO  */
    $price = 20;
    echo "that cost {$price} <br>";

    /* FLOATING POINT NUMBER - REAL NUMBERS */

    $numeroPUNTO = 2.5;
    echo "el numoer es {$numeroPunto} <br>";

    /* 4. BOOLEANO */

    $state = true;
    echo "falcao es champion is {$state} <br> ";

    /*5.  obtener datos */

     $type_data = gettype($numeroPUNTO);
     echo "{$type_data} <br>"
    ?>
</body>
</html>