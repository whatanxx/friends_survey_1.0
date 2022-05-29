<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <link rel="stylesheet" href="../css/main-style.css"/>
    <title>FRIENDS Survey</title>
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
    <img src="../images/Friends-logo.png" alt="friends" id="logo"/>
    <div class="questions">
        <form action="checkAnswers.php" method="POST">
            <label for="name">Your name:</label>
            <input type="text" name="name" autocomplete="name" id="name" required/>

            <label for="question1">1. What is the name of Ros ex-wife?</label>
            <div class="answer">
                <input
                        type="radio"
                        name="radio_ross_wife"
                        value="Stacy"
                        id="radio_ross_wife_1"
                />
                <label for="radio_ross_wife_1">Stacy</label>
            </div>
            <div class="answer">
                <input
                        type="radio"
                        name="radio_ross_wife"
                        value="Carol"
                        id="radio_ross_wife_2"
                />
                <label for="radio_ross_wife_2">Carol</label>
            </div>
            <div class="answer">
                <input
                        type="radio"
                        name="radio_ross_wife"
                        value="Rachel"
                        id="radio_ross_wife_3"
                />
                <label for="radio_ross_wife_3">Rachel</label>
            </div>
            <div class="answer">
                <input
                        type="radio"
                        name="radio_ross_wife"
                        value="Monica"
                        id="radio_ross_wife_4"
                />
                <label for="radio_ross_wife_4">Monica</label>
            </div>

            <label for="question2">2. Where does Paolo come from?</label>
            <div class="answer">
                <input
                        type="radio"
                        name="radio_paolo"
                        value="Italy"
                        id="radio_paolo_1"
                />
                <label for="radio_paolo_1">Italy</label>
            </div>
            <div class="answer">
                <input
                        type="radio"
                        name="radio_paolo"
                        value="Spain"
                        id="radio_paolo_2"
                />
                <label for="radio_paolo_2">Spain</label>
            </div>
            <div class="answer">
                <input
                        type="radio"
                        name="radio_paolo"
                        value="France"
                        id="radio_paolo_3"
                />
                <label for="radio_paolo_3">France</label>
            </div>
            <div class="answer">
                <input
                        type="radio"
                        name="radio_paolo"
                        value="Argentina"
                        id="radio_paolo_4"
                />
                <label for="radio_paolo_4">Argentina</label>
            </div>

            <label for="question3"
            >3. How many lasagnas did Monica make for her aunt?</label
            >
            <div class="answer">
                <input
                        type="radio"
                        name="radio_lasagne"
                        value="13"
                        id="radio_lasagne_1"
                />
                <label for="radio_lasagne_1">13</label>
            </div>
            <div class="answer">
                <input
                        type="radio"
                        name="radio_lasagne"
                        value="14"
                        id="radio_lasagne_2"
                />
                <label for="radio_lasagne_2">14</label>
            </div>
            <div class="answer">
                <input
                        type="radio"
                        name="radio_lasagne"
                        value="12"
                        id="radio_lasagne_3"
                />
                <label for="radio_lasagne_3">12</label>
            </div>
            <div class="answer">
                <input
                        type="radio"
                        name="radio_lasagne"
                        value="8"
                        id="radio_lasagne_4"
                />
                <label for="radio_lasagne_4">8</label>
            </div>

            <label for="question4"
            >4. How many times did Chandler break up with Janice in 1st
                season?</label
            >
            <div class="answer">
                <input
                        type="radio"
                        name="radio_breakup"
                        value="2"
                        id="radio_breakup_1"
                />
                <label for="radio_breakup_1">2</label>
            </div>
            <div class="answer">
                <input
                        type="radio"
                        name="radio_breakup"
                        value="4"
                        id="radio_breakup_2"
                />
                <label for="radio_breakup_2">4</label>
            </div>
            <div class="answer">
                <input
                        type="radio"
                        name="radio_breakup"
                        value="1"
                        id="radio_breakup_3"
                />
                <label for="radio_breakup_3">1</label>
            </div>
            <div class="answer">
                <input
                        type="radio"
                        name="radio_breakup"
                        value="3"
                        id="radio_breakup_4"
                />
                <label for="radio_breakup_4">3</label>
            </div>

            <label for="question5">5. Who Monica did see under a shower?</label>
            <div class="answer">
                <input
                        type="radio"
                        name="radio_shower"
                        value="Chandler"
                        id="radio_shower_1"
                />
                <label for="radio_shower_1">Chandler</label>
            </div>
            <div class="answer">
                <input
                        type="radio"
                        name="radio_shower"
                        value="Rachel"
                        id="radio_shower_2"
                />
                <label for="radio_shower_2">Rachel</label>
            </div>
            <div class="answer">
                <input
                        type="radio"
                        name="radio_shower"
                        value="Joey"
                        id="radio_shower_3"
                />
                <label for="radio_shower_3">Joey</label>
            </div>
            <div class="answer">
                <input
                        type="radio"
                        name="radio_shower"
                        value="Phoebe"
                        id="radio_shower_4"
                />
                <label for="radio_shower_4">Phoebe</label>
            </div>
            <div class="answer">
                <?php if (!isset($_SESSION['points'])) echo "<button type=\"submit\" id=\"send\">Send</button>"; ?>

            </div>

            <?php if (isset($_SESSION['points'])) {
                echo "<p id='points'>You got {$_SESSION['points']} points for 5 possible.</p>";
                session_destroy();
            } ?>

        </form>
    </div>
</div>
</body>
</html>
