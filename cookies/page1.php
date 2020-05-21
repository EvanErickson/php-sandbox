<?php

    setcookie('username', 'frank', time() + 8600);

    if(count($_COOKIE > 0)){
        echo 'There are '.count($_COOKIE).'cookies here.';
    } else {
        echo 'no cookies';  
    }

    echo $username;
    // if(isset($_POST['submit'])){
    //     $username = htmlentities($_POST['username']);

    //     setcookie('username', $username, time()+3600);

    //     header('Location: page2.php');
    // }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>PHP COOKIES</title>
</head>
<body>
    <form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
        <input type="text" name="username" placeholder="username">
        <br>
        <input type="submit" name="submit" value="Submit">
    </form>
</body>
</html>