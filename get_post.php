<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <form action="get_post.php" method="post" >
        <labe>User</label>
        <input type="text" name = "user" >
        <label>password</label>
        <input type="password" name = "password" >
        <input type="submit" value = "Send" >
    </form>

</body>
</html>

<?php

echo "<br>{$_POST["user"]}<br>";
echo "{$_POST["password"]}";



?>