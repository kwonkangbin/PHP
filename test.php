<?php
    $num1 = 10;
    $num2 = "10";
    $num3 = [1,2,3];
    $num4 = ['name' => '강빈', 'age'=>'18'];

    echo $num1 + $num2;

    echo $num1 . $num2;

    echo $num3[2];
    echo $num4['name'];
    $a = m();
    echo $a;
    function m(){
        // echo "나는" . $num;
        return 100;
    }
?>