<?php 
    // $people = array('Kevin', 'Evan', 'Hanna', 'Mom');
    // $ids = array(23, 52, 211, 12321);
    // $cars = ['Honda', 'Toyota', 'Mercedes', 'BMW'];
    // $cars[4] = 'Infiniti';
    // $cars[] = 'Chevy';

    // echo count($cars);

#Associate Arrays
    // Are these key value pairs?
    $peeps = array('Brad' => 32, 'Jason' => 33, 'Evan' => 26);
    // echo $peeps['Brad'];

    // echo $array['Key']


    // If you want to get the name of a certain id

    // $ids = [1 => 'Evan', 2 => 'Hanna', 3=>'mom'];
    // echo $ids[3];



    # Adding to an array

    $peeps['Jill'] = 42;

    // print_r($peeps);
    // var_dump($peeps);



# Multidimensional Arrays
    // it is an array within an array

    $cars = array(
        array('Honda', 20, 10),
        array('Toyota', 32, 5),
        array('Ford', 12, 3)
    );

    // print_r($cars);
    echo $cars[1][0];
?>