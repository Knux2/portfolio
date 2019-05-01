<?php

require_once 'php/dbConnection.php';
require_once 'php/viewMeFunctions.php';

$db = getDbConn();
$viewAboutMe = viewAboutMe($db);
$aboutMeParagraph = getParagraph($viewAboutMe);

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
                <li><a href="#aboutMe">About Me</a></li>
                <li><a href="#portfolio">Portfolio</a></li>
                <li><a href="#contactInfo">Contact</a></li>
            </ul>
        </nav>
        <div class="title font1">
            <h1>Ben Ashfield</h1>
            <h2>Web Developer in the making</h2>
        </div>
    </div>

    <div class="heading" id="aboutMe">
        <h1 class="font2">About Me</h1>
        <?php echo $aboutMeParagraph ?>
    </div>

    <div class="portfolio" id="portfolio">
        <h1 class="portfolioTitle font2">Portfolio</h1>
            <div class="projectBox project1">
                <div class="projectInfo font3">
                    <h1>Mayden Logo Challenge</h1>
                    <h2>Making Mayden Academy logo using just HTML and CSS</h2>
                    <h2><a href="https://bit.ly/2vodP1g" target="_blank">Project Link</a></h2>
                    <h2><a href="https://bit.ly/2voeaky" target="_blank">Github Link</a></h2>
                </div>
            </div>
            <div class="projectBox project2">
                <div class="projectInfo font3">
                    <h1>Pilot Shop</h1>
                    <h2>First build of a responsive website</h2>
                    <h2><a href="https://bit.ly/2GwDaLI" target="_blank">Project Link</a></h2>
                    <h2><a href="https://bit.ly/2IJ5Xjz" target="_blank">Github Link</a></h2>
                </div>
            </div>
            <div class="projectBox project3">
                <div class="projectInfo font3">
                    <h1>PaintMaster 3000</h1>
                    <h2>Using JavaScript to create a paint app</h2>
                    <h2><a href="https://bit.ly/2UIcmgp" target="_blank">Project Link</a></h2>
                    <h2><a href="https://bit.ly/2Pu0Xjy" target="_blank">Github Link</a></h2>
                </div>
            </div>
            <div class="projectBox project4">
                <div class="projectInfo font3">
                    <h1>Solar System</h1>
                    <h2>Using SVG and CSS animations I've created a solar system</h2>
                    <h2><a href="https://bit.ly/2KZLMzN" target="_blank">Project Link</a></h2>
                    <h2><a href="https://bit.ly/2War4ys" target="_blank">Github Link</a></h2>
                </div>
            </div>
            <div class="projectBox project5">
                <div class="projectInfo font3">
                    <h1>Async and Await</h1>
                    <h2>Generating information on a page using an API</h2>
                    <h2><a href="https://bit.ly/2vnzJBO" target="_blank">Project Link</a></h2>
                    <h2><a href="https://bit.ly/2ZDhlCK" target="_blank">Github Link</a></h2>
                </div>
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
            <li><a href="https://twitter.com/Knux2" target="_blank"><img src="img/Twitter.svg" class="icon"/></a></li>
            <li><a href="https://github.com/Knux2" target="_blank"><img src="img/Github.svg" class="icon"/></a></li>
            <li><a href="https://instagram.com/Knux_2" target="_blank"><img src="img/Instagram.svg" class="icon"/></a></li>
            <li><a href="mailto:ben_ashfield@hotmail.com" target="_blank"><img src="img/Email.svg" class="icon"/></a></li>
        </ul>
    </div>
</body>
</html>
