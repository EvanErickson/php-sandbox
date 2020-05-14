<?php
# for loop
    #@params - init, condition, inc
    for($i = 0; $i < 10; $i++){
        // echo $i . '.';
        // echo '<br>';
    }

# while loop
    #@params - condition

    // $i = 0;

    while($i < 10){
        // echo 'hi';
        // echo '<br>';
        $i++;
    }



# Do While Loop
    #@params - condition

    // $i = 0;

    // do{
    //     echo $i;
    //     echo '<br>';
    //     $i++;
    // }

    // while($i < 10);





# For Each
        // include as, array is plural, and the thing you put after "as" is singular version of it 
   /* $people = ['Brad', 'Jose', 'William'];

    foreach($people as $person){
        echo $person;
        echo '<br>';
    }
    */




    $people = ['Brad' => 'brad@gmail.com', 'Jose' => 'jose@gmail.com', 'William' => 'will@gmail.com'];

    foreach($people as $person => $email){
        echo $person . ': ' . $email;
        echo '<br>';
    }





?>