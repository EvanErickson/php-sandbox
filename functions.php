<?php

    function simpleFunction(){
        echo 'hello world';
    }

    // simpleFunction();


    // function sayHello($name = 'Guest'){
    //     echo "Hello $name<br>";
    // }

    // sayHello('Evan');



    // function addNumbers($num1, $num2){
    //     echo $num1 + $num2;
    // }

    // addNumbers(1,3);


    // or you can do 
    // function addNumbers($num1, $num2){
    //     return $num1 + $num2;
    // }

    // echo addNumbers(1,3);






    $myNum = 10;

    function addFive($num){
        $num += 5;
    }

    function addTen(&$num){
        $num += 10;
    }

    addFive($myNum);
    echo "Value: $myNum<br>";

    addTen($myNum);
    echo "Value: $myNum<br>"
?>