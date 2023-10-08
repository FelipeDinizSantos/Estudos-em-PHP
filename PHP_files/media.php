<?php

    function generate_student_reports($studentsList, $cutOffScore) // A função espera receber a lista contendo nome e notas dos alunos assim como a nota de corte
    {
        $results = []; // Armazena o array-bidimensional que será retornado

        foreach($studentsList as $student)
        {
            global $name, $grades, $average, $situation;
            $grades = [];
            
            foreach($student as $value) // Extrai as informações do array 'student'
            {
                if(is_string($student[0]) && is_string($value))
                {
                    $name = $value;
                }
  
                if(!is_string($value)) 
                {
                    array_push($grades, $value);
                }
            }   

            $average = number_format((array_sum($grades)) / count($grades), 1); // Realiza o calculo da média e limita o resultado em 1 casa decimal

            if($average >= $cutOffScore)
            {
                $situation = 'APROVADO';
            }
            else
            {   
                $situation = 'REPROVADO';
            }

            array_push($results, ['name' => $name, 'average' => $average, 'situation' => $situation]);
        }

        return $results;
    }

    $studentsReportCard =
    [
        ['Felipe', 10, 10, 8, 6],
        ['Isabella', 9.5, 9.5, 9.5],
        ['Sara', 7, 5, 2],
        ['Emanoele', 1, 10]
    ];

    $registerStudentsGrades = generate_student_reports($studentsReportCard, 6);
    foreach($registerStudentsGrades as $student)
    {
        echo "<br/>";
        echo "Nome do Estudante: " . $student['name'] . "<br/>Média do Aluno: " . $student['average'] . "<br/>Situação: " . $student['situation'] . "<br/>";
    }