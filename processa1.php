<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>processa1</title>
        <form method="POST" action="index.php">
    </head>
    <body>
        <?php
        $VI = $_POST["valorInicial"];
        $VF = $_POST["valorFinal"];
        $soma=0;
        $cont=0;
        
         $vetorPAR = array();
         $contPAR=0;
         $vetorIMPAR = array();
         $contIMPAR=0;
        
        echo"Valor Inicial= ".$VI ." Valor Final= ".$VF."<br>" ;
        for($i= $VI; $i<= $VF; $i++){
          if($i %2 ==0){ 
            $vetorPAR[$contPAR]=$i;
            $contPAR=$contPAR+1;
            
        }else {
            $vetorIMPAR[$contIMPAR]=$i;
            $contIMPAR=$contIMPAR+1;
            
        }
        $soma= $soma+ $i;
        $cont=$cont+1;
        }
        
        $media= $soma/$cont;
        
        echo "Valores Pares:<br>";
        for($i=0; $i < count ($vetorPAR);$i++){
        echo $vetorPAR[$i]."<br>" ;
        }
        echo "Valores Impares:<br>";
        for($i=0; $i < count ($vetorIMPAR);$i++){
        echo $vetorIMPAR[$i]."<br>" ;
        }
        echo "A media desses valores é= ".$media;
        
        
        ?>
    </body>
</html>
