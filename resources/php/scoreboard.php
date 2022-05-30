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
        $rows = $q->fetch_all();
        $scores = array();
        $names = array();
        foreach ($rows as $row) {
            array_push($names, $row[0]);
            array_push($scores, $row[1]);
        }
        $scoreboard = array();
        for ($i = 0; $i < count($scores); $i++) {
            $scoreboard[$names[$i]] = $scores[$i];
        }
        arsort($scoreboard);

        $names = array_keys($scoreboard);
        $scores = array_values($scoreboard);
        $first_score = $scoreboard[array_key_first($scoreboard)];
        $place = 1;
        $first_name = array_key_first($scoreboard);
        echo "<tr><td>$place</td><td>$first_name</td><td>$first_score</td><td>🇵🇱</td></tr>";
        for ($j = 1; $j < count($scoreboard); $j++) {
            if ($scores[$j] == $first_score) {
                echo "<tr><td>$place</td><td>$names[$j]</td><td>$scores[$j]</td><td>🇵🇱</td></tr>";
            } else {
                $place++;
                $first_score = $scores[$j];
                echo "<tr><td>$place</td><td>$names[$j]</td><td>$scores[$j]</td><td>🇵🇱</td></tr>";

            }
        }
        ?>
    </table>

</div>
</body>
</html>

