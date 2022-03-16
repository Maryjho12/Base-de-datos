<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrate</title>
</head>
<LINK REL=stylesheet HREF="estilos2.css" TYPE="text/css" MEDIA=screen>
<body>
    <form method="post">
    <h1>Registrate</h1> 
    <input type="text" name="name" placeholder="Nombre Completo">
    <input type="email" name="email" placeholder="Email">
    <input type="submit" name="register">

    </form>
    <?php

    include("conexion2.php")
   ?> 
    
</body>
</html>