<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Números primos com PHP</title>
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
    <h1>NÚMEROS PRIMOS COM PHP:</h1>
    <div class="container">
        <p>
            <?php 

                function dividers_of_number($number)
                {
                    $numberDividers = 0;

                    for($i = 1; $i <= $number; $i++)
                    {
                        if($number % $i == 0)
                        {
                            $numberDividers++;
                        }
                    }
                    return $numberDividers;
                }


                function is_even_or_prime($number = 2)
                {
                    if($number > 1 && is_integer($number))
                    {
                        if(dividers_of_number($number) == 2) 
                        {
                            return "O valor <strong>$number</strong> é primo! <br/>";
                        }
                        return "O valor <strong>$number</strong> não é um número primo! <br/>";
                    }
                    throw new Error("<strong>Número inválido</strong>. Por favor, insira um número inteiro não negativo maior que 1! <br/>");
                }
  
                try
                {
                    echo is_even_or_prime(1);
                    echo is_even_or_prime(10);
                    echo is_even_or_prime(1.4);
                }
                catch(Error $error)
                {
                    echo $error->getMessage();
                }

            ?>
        </p>
    </div>
</body>
</html>