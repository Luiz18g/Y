<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>ccadastro de clientes</h1>
    <?php
    $nome = "Luiz";
    $idade = 19;
    $fumante = false;
    echo "<p>Id cliente: $nome <br>";
    echo "idade cliente: $idade <br>";
    echo "fumante: $fumante <br>";

    /*
    Operadores Aritiméticos

    Adição: (+)
    Subtração: (-)
    Multiplicação: (*)
    Divisão: (/)
    Módulo - resto da divisão: (%)

    */

    /*
    Operadores Relacionais

    Os operadores relacionais 
    (ou de comparação) permitem efetuar 
    comparações entre valores contidos em 
    variáveis ou constantes entre si, 
    resultando sempre em um valor booleano 
    (lógico, 0 ou 1, verdadeiro ou falso)

    */

    echo "<p>Operadores logicos: </p>";
    $fumante = true;
    echo !$fumante;

    if($idade >= 18){
        echo "Sua idade é: $idade <br>";
        echo "Pode entrar na festa<br>";
    }
    else{
        echo "Sua idade é: $idade<br>";
        echo "Não pode entrar na festa<br>";
    }

    $nota = 8;
    if($nota >= 8){
        echo "<p>Sua Nota é: $nota (Aprovado)</p>";
    }else{
        echo "<p>Sua nota é: $nota (Reprovado)</p>";
    }

    $idade = 20;
    if($idade >= 18){
        echo "Pode entrar";
    }else{
        echo "rejeitado";
    }

    $cor = "azul";
    switch ($cor){
        case 'azul':
            echo "<p>Sua cor favorita é:<br>Azul</br></p>";
            break;

            case 'vermelho':
                echo "<p>Sua cor favorita é:<br>Vermelho</br></p>";
                break;

            case 'verde':
                echo "<p>Sua cor favorita é:<br>Verde</br></p>";
                break;
            
            default:
                echo "<p>Sua cora favorita não é verde,
                nem azul e nem vermelho</p>";
                break;
            }

    $dia = 3;
    switch($dia){
        case 1:
            echo "Domingo";
            break;
        case 2:
            echo "Segunda";
        case 3:
            echo "Terça";
             break;
        default:
        echo "Dia Inválido";
        break;

    }
    ?>
</body>
</html>