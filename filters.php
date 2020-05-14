<?php


# Check if a character or hotdog is in the data posted (or get'd) / Check for posted data
   /* if(filter_has_var(INPUT_POST, 'data')){
        echo 'Data found';
    } else{
        echo 'Data not found';
    } */

    // if(filter_has_var(INPUT_POST, 'data')){
    //     $email = $_POST['data'];

    //     //Remove illegal characters
    //     $email = filter_var($email, FILTER_SANITIZE_EMAIL);
    //     echo $email.'<br>'; 

    //     if(filter_input(INPUT_POST, 'data', FILTER_VALIDATE_EMAIL)){
    //         echo 'email is valid';
    //     }else{
    //         echo 'email is not valid';
    //     }
    // }

// Validate will make sure it is a specific thing, sanitize will get rid of other chars that are not allowed

    #FILTER_VALIDATE_BOOLEAN
    #FILTER_VALIDATE_EMAIL
    #FILTER_VALIDATE_FLOAT
    #FILTER_VALIDATE_INT
    #FILTER_VALIDATE_IP
    #FILTER_VALIDATE_REGEXP
    #FILTER_VALIDATE_URL


    #FILTER_SANITIZE_EMAIL
    #FILTER_SANITIZE_ENCODED
    #FILTER_SANITIZE_NUMBER_FLOAT
    #FILTER_SANITIZE_NUMBER_INT
    #FILTER_SANITIZE_SPECIAL_CHARS
    #FILTER_SANITIZE_STRING
    #FILTER_SANITIZE_URL



# Filtering a var and making sure it is an int

// $var = '12';

// if(filter_var($var, FILTER_VALIDATE_INT)){
//     echo $var . ' is a number';
// } else {
//     echo $var . 'is not a number';
// };


# Sanitizing a var (to prevent hacking)
    // Number
    // $var = '3323jwfjsdafjskdfj23r23rqwef98fsd9ds';
    // var_dump(filter_var($var, FILTER_SANITIZE_NUMBER_INT));



    // $var = '<script>alert(1)</script>';
    // echo $var;
    // echo filter_var($var, FILTER_SANITIZE_SPECIAL_CHARS);


#Filter var array and filter input array
    #filter input array
//     $filters = array(
//         "data" => FILTER_VALIDATE_EMAIL,
//         'data2' => array(
//             'filter' => FILTER_VALIDATE_INT,
//             'options' => array(
//                 'min_range' => 1,
//                 'max_range' => 100
//             )
//         )
//     );


// print_r(filter_input_array(INPUT_POST, $filters));

    #filter var array
    $arr = [
        'name' => 'evan erickson',
        'age' => '26',
        'email' => 'e@e.com'
    ];

    $filters = [
        'name' => [
            'filter' => FILTER_CALLBACK,
            'options' => 'ucwords'
        ],
        'age' => [
            'filter' => FILTER_VALIDATE_INT,
            'options' => [
                'min_range' => 1,
                'max_range' => 120
            ]
        ],
        'email' => FILTER_VALIDATE_EMAIL
    ];


    print_r(filter_var_array($arr, $filters));








?>

<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
    <input type="text" name="data">
    <input type="text" name="data2">
    <button type="submit">Submit</button>
</form>