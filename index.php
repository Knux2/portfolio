<?php

require_once 'php/dbConnection.php';
require_once 'php/viewMeFunctions.php';
$db = getDbConn();
$viewAboutMe = viewAboutMe($db);
$paragraph = getParagraph($viewAboutMe);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Bens Portfolio Page</title>
    <link rel='stylesheet' type='text/css' href='css/normalise.css'>
    <link rel='stylesheet' type='text/css' href='css/style.css'>
</head>

<body>
    <div class="hero font1">
        <nav>
            <ul>
                <li><a href="#home">Home</a></li>
                <li><a href="#aboutMe">About Me</a></li>
                <li><a href="#portfolio">Portfolio</a></li>
                <li><a href="#contactInfo">Contact Info</a></li>
            </ul>
        </nav>
        <div class="title font1">
            <h1>Ben Ashfield</h1>
            <h2>Web Developer in the making</h2>
        </div>
    </div>

    <div class="heading" id="aboutMe">
        <h1 class="font2">About Me</h1>
        <?php echo $paragraph ?>
    </div>

    <div class="portfolio" id="portfolio">
        <h1 class="portfolioTitle font2">Portfolio</h1>
            <div class="projectBox project1">
                <div class="projectInfo font3">
                    <h1>Mayden Logo Challenge</h1>
                    <h2>First big exercise to make the Mayden Academy logo using just HTML and CSS</h2>
                </div>
            </div>
            <div class="projectBox project2">
                <div class="projectInfo font3">
                    <h1>Pilot Shop</h1>
                    <h2>First build of a responsive website</h2>
                </div>
            </div>
            <div class="projectBox project3">
                <div class="projectInfo"></div>
            </div>
            <div class="projectBox project4">
                <div class="projectInfo"></div>
            </div>
            <div class="projectBox project5">
                <div class="projectInfo"></div>
            </div>
            <div class="projectBox project6">
                <div class="projectInfo"></div>
            </div>
    </div>

    <div class="contactInfo" id="contactInfo">
        <h1 class="contactTitle font2">Contact</h1>
    </div>
    <div class="contactSymbols">
        <ul>
            <li><a href="https://twitter.com/Knux2"><img src="img/Twitter.svg" class="icon"/></a></li>
            <li><a href="https://github.com/Knux2"><img src="img/Github.svg" class="icon"/></a></li>
            <li><a href="https://instagram.com/Knux_2"><img src="img/Instagram.svg" class="icon"/></a></li>
            <li><a href="mailto:ben_ashfield@hotmail.com"><img src="img/Email.svg" class="icon"/></a></li>
            <li><a href="tel:07515-460416"><img src="img/Phone.svg" class="icon"/></a></li>
        </ul>
    </div>
</body>
</html>
