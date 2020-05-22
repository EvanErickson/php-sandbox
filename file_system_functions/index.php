<?php

    $path = '/zhangyiwan/dir1/myfile.php';
    $file = 'file1.txt';

    // Return filename
    // echo basename($path);

    // Return filename without extension
    // echo basename($path, '.php');

    // Return the directory name from the path
    // echo dirname($path);

    // if(file_exists($file)){
    //     echo 'page load';
    // };


    // Get the absolute path
        // echo realpath($file);



    // Checks to see if file exists
    // echo is_file($file);

        // Check to see if file exists, works with folders too
        // echo file_exists($file);

    // Check to see if its a string
        // echo is_string($file);

        // is_writable();

        // filesize();


        // Make a directory
        // mkdir('/testing');

        // Delete an empty directory
        // rmdir();

        // Copy a file
        // copy('fileOne', 'fileTwo');

        // Get contents from a file
        // echo file_get_contents($file);


        // Writing to a file
        $handle = fopen('file1.txt', 'w');
        $txt = 'John Doe';
        fwrite($handle, $txt);
        fclose($handle);
        

?>