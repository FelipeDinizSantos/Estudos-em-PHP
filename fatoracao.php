<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fatoração PHP</title>
    <style>
        body{
            font-family: arial; 
        }
        h1{
            font-weight: normal;
            text-align: center;
        }
        .container{
            text-align: center;
            font-size: 1.5em;
        }
    </style>
</head>
<body>
    <h1> Fatoração utilizando PHP: </h1> 
    <div class="container">
        <p>
            <?php

                function calc_factorial($number = 3)
                {
                    if($number > -1 && is_integer($number))
                    {
                        $i = $number;
                        $factorial = 1;
                
                        do
                        {
                            $factorial *= $i;
                            $i--;
                        }
                        while($i > 0);
                
                        return [$number, $factorial];
                    }
                    throw new Exception("Número inválido. Por favor, insira um número inteiro não negativo!");
                }

                try
                {
                    $result = calc_factorial(3); // Defina o valor a ser fatorado aqui!
                    echo "O fatorial de " . $result[0] . " é: " . $result[1] . " | (" . $result[0] . "! = " . $result[1] . ")";
                }
                catch(Exception $error)
                {
                    echo $error->getMessage();
                }

            ?>
        </p>
    </div>
</body>
</html>