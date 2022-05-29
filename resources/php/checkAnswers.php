<?php
$mysqli = new mysqli('localhost', 'root', '', 'friends_survey_1_0');

session_start();
const ANSWERS = array("Carol", "Italy", 12, 3, "Joey");
$data = array_values(array_slice($_POST, 1));
$points = 0;
$name = array_values(array_slice($_POST, 0, 1))[0];
var_dump($name);
for ($i = 0; $i < count($data); $i++) {
    if ($data[$i] == ANSWERS[$i]) {
        $points += 1;
    }
}

$query = $mysqli->prepare("INSERT INTO scores (name, points) VALUES (?, ?) ON DUPLICATE KEY UPDATE points=?");
$query->bind_param("sii", $name, $points, $points);
$query->execute();
$query->close();
$_SESSION['points'] = $points;
header('Location: index.php');