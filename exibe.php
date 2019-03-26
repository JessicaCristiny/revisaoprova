<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>exibe</title>
    </head>
    <body>
        <?php
        $chave = $_GET["id"];
        
        if($chave == "doce"){
           echo"Brigadeiro de Leite Ninho, Torta de Morango e Doce de Leite";
        } elseif ($chave == "salgado") {
            echo"Coxinha, Lanche e Torta de Frango";
        }elseif ($chave == "quente") {
            echo"Café, Vinho Quente e Chá";
        }elseif ($chave == "gelada") {
            echo"Cerveja, Refrigerante e Suco";
        }

        ?>
    </body>
</html>
