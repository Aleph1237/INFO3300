<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Document</title>
</head>
<body>
    <h1>Welcome to Corbin's Personality Test</h1>
    <h3>Answer the following questions, and our system will match you to a profession!</h3>
    <div id="questionnaire">
        <form method="get" action="results.php">
        <sel>
            <li>Where do you prefer to workout?</li>
                <input type="radio" name="workout_location" value="country_club" checked>The Country Club
                <input type="radio" name="workout_location" value="outside">Outside
                <input type="radio" name="workout_location" value="no_workout">I don't workout
                <br/><br/>

            <li>Check all the recreation activities you want to persue in your life.</li>
                 <input type="checkbox" name="activities[]" value="wake_surfing">Wake surfing <br/>
                 <input type="checkbox" name="activities[]" value="snowmobiling">Snowmobiling <br/>
                 <input type="checkbox" name="activities[]" value="reading">Reading <br/>
                 <input type="checkbox" name="activities[]" value="extreme_hiking">Extreme Hiking <br/>
                 <input type="checkbox" name="activities[]" value="visiting_foreign_countries">Visiting foreign countries <br/>
                 <input type="checkbox" name="activities[]" value="motorcycle_tours">Motorcycle tours <br/><br/>


            <li>Type your favorite boy's name.</li>
            <input type="text" name="boys_name" placeholder="enter name"><br/><br/>
            <li>Type your favorite girl's name.</li>
            <input type="text" name="girls_name" placeholder="enter name"><br/><br>/
            <li>Describe one of your talents.</li>
            <textarea name="talents" cols="30" rows="10"></textarea>
            <li>Which of the following are you most likely to do?</li>
            <select name="likely_task">
                <option value="tanning">Go to a tanning salon</option>
                <option value="hgh">take human growth hormone</option>
                <option value="stitch">stitch up your own finger</option>
            </select><br/><br/>
            <li>Select all the TV shows you like.</li>
            <select name="tv_shows[]" size="9" multiple>
                <option value="house">House</option>
                <option value="breaking_bad">Breaking Bad</option>
                <option value="housewives">Housewives of Beverly Hills</option>
                <option value="greys_anatomy">Grey's Anatomy</option>
                <option value="ncis">NCIS</option>
                <option value="csi">CSI: New York</option>
                <option value="chicago_hope">Chicago Hope</option>
                <option value="the_bachelor">The Bachelor</option>
                <option value="survivor">Survivor</option>
            </select><br/><br/>
            <input type="submit" value="Submit">
        </ol>
        </form>
    </div>
</body>
</html>