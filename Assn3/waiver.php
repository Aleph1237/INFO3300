<?php

$first_name= filter_input(INPUT_GET, 'first_name');
$last_name= filter_input(INPUT_GET, 'last_name');
$minor_name=filter_input(INPUT_GET, 'minor_name');
$minor_age=filter_input(INPUT_GET, 'minor_age');
$minor_date=filter_input(INPUT_GET, 'minor_date');
$street=filter_input(INPUT_GET, 'street');
$city=filter_input(INPUT_GET, 'city');
$state=filter_input(INPUT_GET, 'state');
$zip=filter_input(INPUT_GET, 'zip');
$email=filter_input(INPUT_GET, 'email');
$signature=filter_input(INPUT_GET, 'signature');
$authorize_play=filter_input(INPUT_GET, 'authorize_play');

$first_name_error = filter_input(INPUT_GET, 'first_name_error');
$last_name_error = filter_input(INPUT_GET, 'last_name_error');
$minor_name_error = filter_input(INPUT_GET, 'minor_name_error');
$minor_age_error = filter_input(INPUT_GET, 'minor_age_error');
$minor_date_error = filter_input(INPUT_GET, 'minor_date_error');
$street_error = filter_input(INPUT_GET, 'street_error');
$city_error = filter_input(INPUT_GET, 'city_error');
$state_error = filter_input(INPUT_GET, 'state_error');
$zip_error = filter_input(INPUT_GET, 'zip_error');
$email_error = filter_input(INPUT_GET, 'email_error');
$signature_error = filter_input(INPUT_GET, 'signature_error');

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="styles.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Carnival Waiver</title>
</head>
<body>
    <h1 id="head_waiver">CW - Carnival Waiver$&nbsp;&nbsp;</h1> <img src="ferris_wheel.jpg">
    <div id="waiver">
        <form action="result.php" method="get">
        Guardian First name <input name="first_name" type="text" placeholder="first name" value="<?=$first_name?>"> <br/>
        <div class='errors'><?php echo $first_name_error; ?></div>
        Guardian Last name<input name="last_name" type="text" placeholder="last name" value="<?=$last_name?>"> <br/>
        <div class='errors'><?php echo $last_name_error; ?></div>
        Minor's name<input name="minor_name" type="text" placeholder="minor's name" value="<?=$minor_name?>"> <br/>
        <div class='errors'><?php echo $minor_name_error; ?></div>
        Minor's age<input name="minor_age" type="text" placeholder="age" size="3" value="<?=$minor_age?>"> <br/>
        <div class='errors'><?php echo $minor_age_error; ?></div>
        Minor's birthdate<input name="minor_date" placeholder="birthdate" type="text" value="<?=$minor_date?>"> <br/>
        <div class='errors'><?php echo $minor_date_error; ?></div>
        Street <input name="street" type="text" placeholder="street" size= "30" value="<?=$street?>"> <br/>
        <div class='errors'><?php echo $street_error; ?></div>
        City <input name="city" placeholder="city" type="text" value="<?=$city?>">
        <div class='errors'><?php echo $city_error; ?></div>
        State <input name="state" type="text" placeholder="state" size="5" value="<?=$state?>">
        <div class='errors'><?php echo $state_error; ?></div>
        Zip <input name="zip" type="text" placeholder="ZIP" size="5" value="<?=$zip?>">
        <div class='errors'><?php echo $zip_error; ?></div>
        Guardian's email<input name="email" type="email" placeholder="email" value="<?=$email?>"> <br/>
        <div class='errors'><?php echo $email_error; ?></div>
        Pleace type your name below to sign digitally<br/>
        <div class='errors'><?php echo $signature_error; ?></div>
        <textarea name="signature" cols="50" rows="3" value="<?=$signature?>"></textarea> <br/>
        I agree to allow my child to play Dial-a-Fortune games
        <input name="authorize_play" type="radio" value="true">Yes
        <input name="authorize_play" type="radio" value="false" checked>No <br/>
            <input type="submit" value="submit">
        </form>
    </div>
</body>
</html>