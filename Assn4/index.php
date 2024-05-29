<?php
    session_start();
    $logged_in = false;
    $errors = filter_input(INPUT_GET,'errors');
    $username_cookie = filter_input(INPUT_COOKIE,'username');
    $password_cookie = filter_input(INPUT_COOKIE,'password');

    if( isset($_SESSION['username']) && isset($_SESSION['logged_in']) ){
        $logged_in = TRUE;
    } elseif( $username_cookie == 'first' && $password_cookie == 'player') {
        $_SESSION['username'] = $username_cookie;
        $_SESSION['logged_in'] = TRUE;
        $logged_in = TRUE;
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to Memero</title>
</head>
<body>
    <?php include('header.php'); ?>
    <?php  if(!$logged_in ) :?>
        <div id="data_entry">
        <form action="login.php" method="post">
            Username <input type="text" name="username" placeholder="Username" size="10">
            Password <input type="password" name="password" placeholder="Password" size="10">
            <input type="checkbox" name="stay_logged_in">Stay logged in?
            <input type="submit" value="submit">
            <div class="errors"><?=$errors?></div>
        </form>
        </div>
    <?php else : ?>
        <div id="data_entry">
        <a href="enter_nums.php">Click to begin</a></br>
        <a href="logout.php">Click to logout</a>
        </div>
    <?php endif; ?>



</body>
</html>