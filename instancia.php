<?php
/* include ejecuta el script aun si no carga el elemento
require, no ejecuta si no se carga */


/* include_once 'clases.php';
$objPersona = new Persona('Luis Carlos',13); */
require_once('./clases.php');
$objPersona = new Persona('Luis Carlos',13);


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Hola</h1>
        <?php 
            echo $objPersona->getNombre();
         
        ?>

</body>
</html>




