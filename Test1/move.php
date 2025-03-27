<?php
session_start();
$random_number = random_int(0,10);
$user_input = filter_input(INPUT_GET, 'user_input');

if ($random_number > 6){
    $direction = 'left';
}else if($random_number <=6){
    $direction = "right";
}

$_SESSION['user_guess']=$user_input;
$_SESSION["actual_direction"] = $direction;

header('Location: index.php');
?>