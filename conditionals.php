<?php

# == vs ===
    // $num = '5';

    // if($num == 5){
    //     // echo 'it works';
    // }
        // This works because the == just looks at the entry. Not the data type


    // $num = '5';
    // if($num === 5){
    //     echo 'second one works with ===';
    // } elseif($num == 5){
    //     echo 'else if statement with the == for data type ignoring';
    // }
    // else{
    //     echo 'it doesnt work';
    // }






# Nested if statements and && ||

    // $newNum = 30;

    // if($newNum < 1000 && $newNum > 5){
    //     echo "it works";
    // } else {
    //     echo "it doesn't work";
    // }
    // I could nest another if inside of here, but I'm going to do something different. See above




    

# Switch Case

    $favColor = 'red';

    switch($favColor){
        case 'blue':
            echo 'blue';
        break;
        case 'red':
            echo 'red';
        break;
    }
?>