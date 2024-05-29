<?php
$relationships_array[] = "You will have a large family";
$relationships_array[] = "You will have a few close friends";
$relationships_array[] = "You will have a smaller family, but many close friends";

$money_array[] = "You will be rich";
$money_array[] = "You will be comfortable";
$money_array[] = "There is more to life than money";

$fame_array[] = "You will be famous";
$fame_array[] = "You will be well-known in your city";
$fame_array[] = "You prefer your solitude";

$relationships_random = random_int(0,count($relationships_array)-1);
$money_random = random_int(0,count($money_array)-1);
$fame_random = random_int(0,count($fame_array)-1);
$lucky_number = random_int(0,100);

$relationships_fortune = $relationships_array[$relationships_random];
$money_fortune = $money_array[$money_random];
$fame_fortune = $fame_array[$fame_random];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-US-Compatible" content="ie=edge">
    <title>Dial-a-Fortune</title>
</head>
<body>
    by Corbin Woods
    <h1><?php echo $relationships_fortune; ?></h1>
    <h1><?php echo $money_fortune; ?></h1>
    <h1><?php echo $fame_fortune; ?></h1>
    <h1>Lucky Number</h1>
        <?php 
        for($i=0; $i<= $lucky_number; $i++){
            echo $i . ' ';
        }
        ?>


</body>
</html>