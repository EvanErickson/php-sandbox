<?php
    
    $loggedIn = true;
    // if($loggedIn){
    //     echo 'You are logged in';
    // } else{
    //     echo 'Logged out';
    // }

    // echo ($loggedIn) ? 'Logged in' : 'Logged out';
?>


<!-- #inline php -->
<div>
<?php if($loggedIn): ?>
    <h1>Welcome User</h1>
<?php else: ?>
    <h1>Welcome Guest</h1>
<?php endif; ?>


</div>