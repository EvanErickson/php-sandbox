<?php
    session_start();
    $name = $_SESSION['name'];
    $email = $_SESSION['email'];

    print_r($_SESSION);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Sessions Page 3</title>
</head>
<body>
    <h1>Hello <?php echo $name; ?></h1>
</body>
</html>