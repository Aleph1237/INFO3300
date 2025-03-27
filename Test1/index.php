<?php
session_start();
$user_guess_display = '';
$actual_direction_display = '';
$result = '';
if( isset($_SESSION['user_guess']) && !empty($_SESSION['user_guess'])){
    $user_guess_display = "Your guess was" . " " . $_SESSION['USER_GUESS'] . '<BR>';
}
if( isset($_SESSION['user_guess']) && !empty($_SESSION['actual_direction']) ){
    $actual_direction_display = "Actual direction was" . " " .  $_SESSION["actual_direction"] . "<br>";
}
if(($_SESSION['user_guess']) == ($_SESSION['actual_direction']) && !empty($_SESSION['actual_direction'])){
    $result = '<div id="result">Correct! You guessed right!</div>';
}
if(($_SESSION['user_guess']) != ($_SESSION['actual_direction']) && !empty($_SESSION["actual_direction"])){
    $result = '<div id="result">Hey, not bad. Maybe try again?</div>';
}


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Robot Guess</title>
</head>
<body>
    <h1>Guess the robot's movement (left or right)</h1>
    <div id="page_content">
        <form action="move.php" method="get">
        <?= $user_guess_display ?> </br>
        <?= $actual_direction_display ?> </br>
        <?= $result ?> </br>
        <input type="text" name="user_input" size="10">
        <input type="submit" value="submit">
        </form>
    </div>
</body>
</html>