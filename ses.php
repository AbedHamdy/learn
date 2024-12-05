<?php

    $num1=rand(1,100);
    $num2=rand(1,100);
    function sum($num11,$num22)
    {
        echo $num11+$num22;
    }
    echo "num1 = " . $num1 . "<br>";
    echo "num2 = " . $num2 . "<br>";
    sum($num1,$num2);
