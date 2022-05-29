<?php
$mysql = new mysqli("localhost", "root", "", "friends_survey_1_0");
$q = $mysql->query("SELECT name, points FROM scores ORDER BY points DESC");

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../css/scoreboard-styles.css">
    <title>FRIENDS SCOREBOARD</title>
</head>
<body>
<nav class="menu">
    <ul>
        <li><a href="index.php">Home</a></li>
        <li><a href="scoreboard.php">Scoreboard</a></li>
        <li><a href="#">Memes</a></li>
    </ul>
</nav>
<div class="wrapper">

        <table>
            <tr>
                <th>Place</th>
                <th>Name</th>
                <th>Points</th>
                <th>Country</th>
            </tr>
            <?php
            while ($row = $q->fetch_row()) {
                echo "<tr><td>PLACE</td><td>$row[0]</td><td>$row[1]</td><td>COUNTRY</td></tr>";
            }
            ?>
        </table>

</div>
</body>
</html>

