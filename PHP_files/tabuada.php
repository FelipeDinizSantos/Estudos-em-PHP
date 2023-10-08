<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabuada com PHP</title>
    <style>
        body{
            position: relative;
            margin: 0;
            padding: 0;
        }
        h1{
            font-family: arial; 
            font-weight: normal;
            text-align: center;
        }
        .container{ 
            display: flex;
            flex-direction: row;
            justify-content: center;
            align-items: center;
            height: 80vh;
            width: 100%;
            gap: 2.5em
        }
        .container p{
            font-size: 1.2em;
            text-align: justify
        }
    </style>
</head>
<body>
    <h1> TABUADA DO 1 AO 10 UTILIZANDO LOOP EM PHP: </h1>
    <div class="container"> 
    <?php

        for($i = 1; $i<=10; $i++) // Defina o 'range' da tabuada aqui!
        {
            echo '<p>';
            for($y = 1; $y<=10; $y++)
            {
                echo "$i  x $y = " . ($i * $y) ."<br/>";
            }
            echo "</p>";
        }

    ?>
    </div> 
</body>
</html>