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
        <?php echo $aboutMeParagraph ?>
    </div>

    <div class="portfolio" id="portfolio">
        <h1 class="portfolioTitle font2">Portfolio</h1>
            <div class="projectBox project1">
                <div class="projectInfo font3">
                    <h1>Mayden Logo Challenge</h1>
                    <h2>First exercise to make the Mayden Academy logo using just HTML and CSS</h2>
                    <h2><a href="https://dev.maydenacademy.co.uk/students/2019/feb/ben/Logo/" target="_blank">Project Link</a></h2>
                    <h2><a href="https://github.com/Knux2/maydenLogo" target="_blank">Github Link</a></h2>
                </div>
            </div>
            <div class="projectBox project2">
                <div class="projectInfo font3">
                    <h1>Pilot Shop</h1>
                    <h2>First build of a responsive website</h2>
                    <h2><a href="https://dev.maydenacademy.co.uk/students/2019/feb/ben/PilotShop/" target="_blank">Project Link</a></h2>
                    <h2><a href="https://github.com/Knux2/pilotshop" target="_blank">Github Link</a></h2>
                </div>
            </div>
            <div class="projectBox project3">
                <div class="projectInfo font3">
                    <h1>Paint App</h1>
                    <h2>Using JavaScript to create a paint app</h2>
                    <h2><a href="https://dev.maydenacademy.co.uk/projects/2019Feb/2019-paint-app/" target="_blank">Project Link</a></h2>
                    <h2><a href="https://github.com/Mayden-Academy/2019-paint-app" target="_blank">Github Link</a></h2>
                </div>
            </div>
            <div class="projectBox project4">
                <div class="projectInfo font3">
                    <h1>Solar System</h1>
                    <h2>Using SVG and CSS animations I've created a solar system</h2>
                    <h2><a href="https://dev.maydenacademy.co.uk/students/2019/feb/ben/solarSystem/solarSystem.html" target="_blank">Project Link</a></h2>
                    <h2><a href="https://github.com/Knux2/solarSystem" target="_blank">Github Link</a></h2>
                </div>
            </div>
            <div class="projectBox project5">
                <div class="projectInfo font3">
                    <h1>Async and Await</h1>
                    <h2>Generating information on a page using an API</h2>
                    <h2><a href="https://dev.maydenacademy.co.uk/students/2019/feb/ben/asyncAndAwait/asyncAndAwait.html" target="_blank">Project Link</a></h2>
                    <h2><a href="https://github.com/Knux2/asyncAwaitFetch" target="_blank">Github Link</a></h2>
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
            <li><a href="tel:07515-460416"><img src="img/Phone.svg" class="icon"/></a></li>
        </ul>
    </div>
</body>
</html>
