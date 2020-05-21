<?php

    $people[] = 'Steve';
    $people[] = 'Jon';
    $people[] = 'John';
    $people[] = 'Evan';
    $people[] = 'Mason';
    $people[] = 'Tyler';
    $people[] = 'Damian';
    $people[] = 'Damien';
    $people[] = 'Nick';
    $people[] = 'Shervin';
    $people[] = 'Brian';
    $people[] = 'Zubin';

    // Get query string
    $q = $_REQUEST['q'];
    $suggestion = '';

    // Get suggestions

    if($q !== ''){
        $q = strtolower($q);
        $len = strlen($q);
        foreach($people as $person){
            if(stristr($q, substr($person, 0, $len))){
                if($suggestion === ''){
                    $suggestion = $person;
                } else {
                    $suggestion .= ", $person";
                }
            }
        }
    }

    echo $suggestion === '' ? 'No Suggestion' : $suggestion;

?>