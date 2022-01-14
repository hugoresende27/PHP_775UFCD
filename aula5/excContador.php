<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exc contador</title>
</head>
<body>

<?php

    $cont = 1;
    $flag = false;

    while ($cont<=10){
        
            if ($cont <3 || $cont > 7 && $cont < 10){

                echo "$cont"."<br>"; 

            }

            elseif ($cont >= 3 && $cont <= 7)
            {
                if (!$flag)
                    {
                        echo "...<br>";
                        $flag = true;
                    } 
                }

            elseif ($cont == 10)
                {
                    echo "Ola Hugo!";
                }
        
            
            $cont++;
        }
    

        $cont = 1;

    while ($cont<=10){

        if ($cont > 2 && $cont <8)
        {
            if (!$flag)
                {
                    echo "...<br>";
                    $flag = true;
                } 
        
            else
            {
                echo "$cont"."<br>";  
            }
        
        } 
        else
        {
            echo "Ola Hugo!";
        }
        $cont++;
    }
    


?>
    
</body>
</html>