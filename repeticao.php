<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Repetição</h1>
    <?php
    //array
    $clientes = ["Luiz","Andre","Bianca","Carla"];
    $contador = 0;
    while($contador <= 3){
        echo "$clientes[$contador]<br>";
        $contador++;
    }
    ?>
</body>
</html>