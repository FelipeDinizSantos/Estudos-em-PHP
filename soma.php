<?php

    //  1 - Some todos os números em um array de tamanho variável.

    function sum_array($array)
    {
        $sum = 0;

        foreach($array as $element)
        {
            $sum += $element;
        }

        return $sum;
    }

    echo "A soma do array é: " . sum_array([3,3,3,7,6,6]);