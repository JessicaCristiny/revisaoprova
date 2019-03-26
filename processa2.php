<!DOCTYPE html>

<html>
    <head>
        <form method="POST" action="processa2.php">
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        $nome = $_POST["nome"];
        $salario = $_POST["salario"];
        $percentualAumento = $_POST["percentualAumento"];
        
        function salario_novo ($salario, $percentualAumento){
            $porcentagem= $percentualAumento/100;
            $aumentosalario= $salario * $porcentagem;
            $salarionovo = $salario + $aumentosalario;
            echo "O salário novo será no valor de: ".$salarionovo ;
        }
        
        
        salario_novo($salario, $percentualAumento);
            
       ?>
    </body>
</html>
