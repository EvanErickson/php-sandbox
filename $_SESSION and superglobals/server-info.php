<?php
# $_SERVER SUPERGLOBAL

// Create server array 
    $server = [
        'Host Server Name' => $_SERVER['SERVER_NAME'] . "<br>",
        'Host Header' => $_SERVER['HTTP_HOST'] . "<br>",
        'Server Software' => $_SERVER['SERVER_SOFTWARE'] . "<br>",
        'Document Root' => $_SERVER['DOCUMENT_ROOT'] . "<br>",
        'Current Page' => $_SERVER['PHP_SELF'] . '<br>',
        // PHP SELF is important because a lot of the times when doing forms, if you want to submit it to the page you are on, you do this.
        'Script Name' => $_SERVER['SCRIPT_NAME'] . '<br>',
        'Absolute Path' => $_SERVER['SCRIPT_FILENAME']. '<br>' . '<br>'
    ];

    // print_r($server);
// Create client array

    $client = [
        'Client System Info' => $_SERVER['HTTP_USER_AGENT'] . '<br>',
        'Client IP' => $_SERVER['REMOTE_ADDR'] . '<br>',
        'Remote Port' => $_SERVER['REMOTE_PORT']
    ];

    // print_r($client);
?>