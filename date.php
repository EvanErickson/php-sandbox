<?php

   $day = date('d');
   $month = date('m');
   $year = date('yy');
   $year = date('Y');
   $dayWeek = date('l');


//    echo "$year / $month / $day / $dayWeek <br>";
//    echo date('Y-m-d');


    // echo date('h'); #hours
    // echo date('i'); #minutes
    // echo date('s'); #seconds
    // echo date('a'); #am or pm
    

# set time zone

// date_default_timezone_set('America/Los_Angeles');
// echo date('h:i:a')



$timestamp = mktime(5,57,22,6,10,1993);
// echo $timestamp;


// echo date('Y/m/d - h:i:a', $timestamp);



#string to time





$timestamp2 = strtotime('7:00pm 2020-04-24');

// echo $timestamp2;

// echo date('Y/m/d - h:i:a', $timestamp2);




$timestamp3 = strtotime('tomorrow');
$timestamp4 = strtotime('next sunday');
$timestamp5 = strtotime('+2 days');
$timestamp6 = strtotime('+2 hours');
$timestamp7 = strtotime('+2 minutes');
$timestamp8 = strtotime('+2 years');

// echo date('Y/m/d' ,$timestamp3);
// echo date('Y/m/d' ,$timestamp4);




?>