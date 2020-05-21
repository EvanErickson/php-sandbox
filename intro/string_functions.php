<?php 

    //substr
    // $output = substr('hello', 0,4);
    // echo $output;

    // strlen
    // $output = strlen('hello');
    // echo $output;

    //strpos
    #finds the first occurance of a specific sub string

    // $output = strpos('Hello World!', 'o');
    // echo $output;

    //strpos
    #finds the last occurance of a specific sub string

    // $output = strrpos('Hello World!', 'o');
    // echo $output;

#trim
# trims white space

    // $text = trim('Hello World          ');
    // var_dump($text);

#strtoupper / lower / ucwords

    // $uppercase = strtoupper('hello world');
    // $lowercase = strtolower('HELLO WORLD');
    // echo $lowercase;

    // $output = ucwords('hello my name is evan.');
    // echo $output;


#strreplace() replaces all occurances with another hotdog

    // $text = 'Lorem Hello howdy Hello, I love programming';
    // $output = str_replace('Hello', 'Hi', $text);
    // echo $output;







# very important for taking strings out of arrays and can be used for high level php
// see below

// $values = ['true1', true, 'false1', false, 22, '69', 22.4, '22.469', 'hi', 'mynameisearl'];

// foreach($values as $value){
//     if(is_string($value)){
//         echo "${value} is a string <br>";
//     }
// };






#gzcompress - compress a string

$string = 'lorem ipsum, make up words, chinese is great, I love chinese food. lorem ipsum, make up words, chinese is great, I love chinese food. lorem ipsum, make up words, chinese is great, I love chinese food. lorem ipsum, make up words, chinese is great, I love chinese food. lorem ipsum, make up words, chinese is great, I love chinese food.';

$compressed = gzcompress($string);
// echo $compressed;

$original = gzuncompress($compressed);
echo $original;


?>