<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Banco SENAC</title>
</head>
<body>
    <?php
    require("./class/Cliente.class.php");
    

    $c1 = New Cliente();
    echo $c1->setClass("juan",123131232131,500,2500,1);
    $c1->sacar(2600);
    $c1->saldo();
    $c1->sacar(1000);
    $c1->saldo();
    $c1->sacar(2000);
    $c1->saldo();
    $c1->sacar(100);
    $c1->saldo();
    

    
    ?>
</body>
</html>