<?php
    //Message vars
    $msg = '';
    $msgClass = '';
    // Check for the submit
    if(filter_has_var(INPUT_POST, 'submit')){
        echo 'Submitted';
    }
    // Get form data
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);

    //Check required fields
    if(!empty($email) && !empty($name) && !empty($message)){
        //Passed
        // Check email
        if(filter_var($email, FILTER_VALIDATE_EMAIL) === false){
            // Failed
            $msg = 'Please use a valid email.';
            $msgClass = 'alert-danger';
        } else {
            // Passed
            $toEmail = 'evanserickson@gmail.com';
            $subject = 'Contact request from '.$name;
            $body = '<h2>Contact Request</h2>
                <h4>Name</h4><p>'.$name.'</p>
                <h4>Email</h4><p>'.$email.'</p>
                <h4>Message</h4><p>'.$message.'</p>
            ';

            // Headers
            $headers = "MIME-Version: 1.0" ."\r\n";
            $headers .="Content-type:text/html;charset=UTF-8" . " \r\n";

            $headers .= "From: " .$name. "<".$email.">"."\r\n";

            if(mail($toEmail, $subject, $body, $headers)){
                // Email sent
                $msg = 'Email sent';
                $msgClass = 'alert-success';
            } else {
                $msg = 'Email failed';
                $msgClass = 'alert-danger';
            }
        }
    } else {
        // Failed
        $msg = 'Please fill in all fields';
        $msgClass = 'alert-danger';
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
    <link rel='stylesheet' href='https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css' integrity='sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh' crossorigin='anonymous'>
</head>
<body>
    <nav class="navbar navbar-dark bg-dark">
        <div class="container">
            <div class="navbar-header">
                <a href="index.php" class="navbar-brand">My Website</a>
            </div>
        </div>
    </nav>

    <div class="container">
        <?php if($msg != ''): ?>
            <div class="alert <?php echo $msgClass; ?>"><?php echo $msg; ?></div>
        <?php endif; ?>
        <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
            <div class="form-group">
                <label for="">Name</label>  
                <input type="text" name="name" class="form-control" value="<?php echo isset($_POST['name']) ? $name : ''; ?>">
            </div>
            <div class="form-group">
                <label for="">Email</label>  
                <input type="text" name="email" class="form-control" value="<?php echo isset($_POST['email']) ? $email : ''; ?>">
            </div>
            <div class="form-group">
                <label for="">Message</label>  
                <textarea name="message" id="" cols="30" rows="10" class="form-control"><?php echo isset($_POST['message']) ? $message : ''; ?></textarea>
            </div>
            <br>
            <button type="submit" name="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</body>
</html>