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
    $clientes = ["Luiz","Andre","Bianca",
    "Carla", "Gabriel", "Matheus"];
    $i = 0;
    while($i <= 5){
        echo "$clientes[$i]<br>";
        $i++;
    }
    echo "<br>";
    for ($i = 0; $i < count($clientes);$i++){
        echo"$clientes[$i]<br>";
    }
    ?>
</body>
</html>