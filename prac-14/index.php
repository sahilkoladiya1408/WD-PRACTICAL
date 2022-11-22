<?php

function primeCheck($number){
    if ($number == 1)
    return 0;
     
    for ($i = 2; $i <= sqrt($number); $i++){
        if ($number % $i == 0)
            return 0;
    }
    return 1;
}
 

$num = 120;

$flag = primeCheck($num);
if ($flag == 1)
    echo  $num." is Prime Number";
else
    echo $num." is Not Prime Number";
?>