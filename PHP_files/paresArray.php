<?php

    // 2 - Filtrar os números pares de um array de números de tamanho variável. Crie um array com números aleatórios, 
    // que pode ter diferentes tamanhos e crie um programa para separar os números pares desse array em outro array. 
    // Imprima esse novo array ao final.


    function array_random($sizeArray, $maxValueArray) // Espera como parametro o tamanho de indices do array e o maior valor que poderá ser distribuido nele
    {
        $array = [];

        for($i = 1; $i <= $sizeArray; $i++)
        {
            array_push($array, rand(1, $maxValueArray));
        }

        return $array;
    }
    
    function array_filter_even($array)
    {
        $arrayEven = [];

        foreach($array as $element)
        {
            if($element % 2 == 0)
            {
                array_push($arrayEven, $element);
            }
        }

        return $arrayEven;
    }

    $randomArray = array_random(10,20);
    $arrayFiltered = array_filter_even($randomArray);

    echo "ARRAY ORIGINAL: [" . join(", ", $randomArray) . "]<br/>NÚMEROS PARES DESTE ARRAY: [" . join(", ", $arrayFiltered) . "]";