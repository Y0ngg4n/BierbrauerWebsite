<?php
$leadersdata = @json_decode(@file_get_contents("images/leaders.json", true), true);
$teamdata = @json_decode(@file_get_contents("images/teams.json", true), true);
$leadersDirectoryPath = "images/leaders/";
$teamsDirectoryPath = "images/teams/";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Bierbrauer × Beerzone</title>
    <link rel="stylesheet" href="css/home.css">
    <link rel="stylesheet" href="css/leaderssection.css">
    <link rel="stylesheet" href="css/teamsection.css">
    <link rel="stylesheet" href="css/mediasection.css">
    <link rel="stylesheet" href="css/bootstrap.min.css"
          crossorigin="anonymous">
    <link rel="stylesheet" href="css/main.css" crossorigin="anonymous">
    <script src="js/jquery-3.3.1.min.js"
            crossorigin="anonymous"></script>
    <script src="js/popper.min.js"
            crossorigin="anonymous"></script>
    <script src="js/bootstrap.min.js"
            crossorigin="anonymous"></script>
    <script>
        // $(document).ready(function () {
        //
        // });

    </script>
</head>
<nav class="nav navbar fixed-top navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="index.html">
        <img class="navbar-brand-logo"
             src="images/logos/bierbrauer-logo.png">
        Bierbrauer</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarToggler"
            aria-controls="navbarToggler" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarToggler">
        <ul class="navbar-nav ml-auto custom-center">
            <li class="nav-item">
                <a class="nav-link" href="#welcomeSection">Home</a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="#leadersSection">Führungsstab</a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="#leadersSection">Teams</a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="#mediaSection">Galerie</a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="#">Kontakte</a>
            </li>
        </ul>
        <ul class="navbar-nav ml-auto">
            <li class="nav-item pull-right">
                <a class="nav-link" href="#">Einloggen</a>
            </li>
        </ul>
    </div>
</nav>

<body data-spy="scroll" data-target=".navbar" data-offset="50">

<div class="parallaxContainer">

    <section id="mainVideoSection">
        <video id="mainVideo" controls autoplay loop
               poster="images/home/video/mainvideothumbnail.jpg">
            <source src="videos/home/Bierbrauer9.mp4">
            Your browser does not support the video tag.
        </video>
        <!--<div class="image" data-type="background" data-speed="2">-->

        <!--</div>-->
        <div class="stuff" data-type="content">
            <h1>Willkommen im Bierbrauer-HQ!</h1>
            <h2>Hier findest du alle aktuellen Infos zu der Bierbrauerfraktion auf der Beerzone.</h2>
        </div>
    </section>

    <section id="welcomeSection">
        <div class="stuff" data-type="content">
            <h1>Wir kämpfen für das Bier!</h1>
            <h2>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut
                labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et
                ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum
                dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore
                magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet
                clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.</h2>
        </div>
    </section>

    <section id="parallaxBackground1">
        <div class="image" data-type="background" data-speed="7"></div>
    </section>

    <section id="leadersSection">
        <div class="stuff" data-type="content">

            <h1 id="leadersSectionTitle"><b>Führungsstab</b></h1>

            <div class="row">
                <div class="col-3">
                    <h2 class="avatarRow">Fraktionsführer</h2>
                    <?php
                    $counter = 0;
                    foreach ($leadersdata['fraktionsfuehrer'] as $leader) {
                        if ($counter > 3) {
                            echo "</div><div class='row'>";
                            $counter = 0;
                        }
                        echo "<div class='col-1-lg mx-auto'><a href='" . $leader['link'] . "'>
                        <img class='avatarImage' src='" . $leadersDirectoryPath . $leader['avatarImage'] . "'></a>
                        <p>" . $leader['name'] . "</p></div>";
                        $counter++;
                    }
                    ?>
                </div>
                <div class="col-3">
                    <h2 class="avatarRow">Teamleiter</h2>
                    <?php
                    $counter = 0;
                    foreach ($leadersdata['teamleiter'] as $leader) {
                        if ($counter > 3) {
                            echo "</div><div class='row'>";
                            $counter = 0;
                        }
                        echo "<div class='col-1-lg mx-auto'><a href='" . $leader['link'] . "'>
                        <img class='avatarImage' src='" . $leadersDirectoryPath . $leader['avatarImage'] . "'></a>
                        <p>" . $leader['name'] . "</p></div>";
                        $counter++;
                    }
                    ?>
                </div>
                <div class="col-3">
                    <h2 class="avatarRow">Vize-Teamleiter</h2>
                    <?php
                    $counter = 0;
                    foreach ($leadersdata['vizeteamleiter'] as $leader) {
                        if ($counter > 3) {
                            echo "</div><div class='row'>";
                            $counter = 0;
                        }
                        echo "<div class='col-1-lg mx-auto'><a href='" . $leader['link'] . "'>
                        <img class='avatarImage' src='" . $leadersDirectoryPath . $leader['avatarImage'] . "'></a>
                        <p>" . $leader['name'] . "</p></div>";
                        $counter++;
                    }
                    ?>
                </div>
                <div class="col-3">
                    <h2 class="avatarRow">Ehrengarde</h2>
                    <?php
                    $counter = 0;
                    foreach ($leadersdata['ehrengarde'] as $leader) {
                        if ($counter > 3) {
                            echo "</div><div class='row'>";
                            $counter = 0;
                        }
                        echo "<div class='col-1-lg mx-auto'><a href='" . $leader['link'] . "'>
                        <img class='avatarImage' src='" . $leadersDirectoryPath . $leader['avatarImage'] . "'></a>
                        <p>" . $leader['name'] . "</p></div>";
                        $counter++;
                    }
                    ?>
                </div>
            </div>

            <h2 class="avatarRow">501st Beertrooper</h2>
            <div class="row">
                <?php
                $counter = 0;
                foreach ($leadersdata['501stBeertrooper'] as $leader) {
                    if ($counter > 3) {
                        echo "</div><div class='row'>";
                        $counter = 0;
                    }
                    echo "<div class='col-1-lg mx-auto'><a href='" . $leader['link'] . "'>
                        <img class='avatarImage' src='" . $leadersDirectoryPath . $leader['avatarImage'] . "'></a>
                        <p>" . $leader['name'] . "</p></div>";
                    $counter++;
                }
                ?>
            </div>

            <h2 class="avatarRow">Offiziere</h2>
            <div class="row">
                <?php
                $counter = 0;
                foreach ($leadersdata['offizier'] as $leader) {
                    if ($counter > 3) {
                        echo "</div><div class='row'>";
                        $counter = 0;
                    }
                    echo "<div class='col-1-lg mx-auto'><a href='" . $leader['link'] . "'>
                        <img class='avatarImage' src='" . $leadersDirectoryPath . $leader['avatarImage'] . "'></a>
                        <p>" . $leader['name'] . "</p></div>";
                    $counter++;
                }
                ?>
            </div>

            <h2 class="avatarRow">KFC´s</h2>
            <div class="row">
                <?php
                $counter = 0;
                foreach ($leadersdata['kfc'] as $leader) {
                    if ($counter > 3) {
                        echo "</div><div class='row'>";
                        $counter = 0;
                    }
                    echo "<div class='col-1-lg mx-auto'><a href='" . $leader['link'] . "'>
                        <img class='avatarImage' src='" . $leadersDirectoryPath . $leader['avatarImage'] . "'></a>
                        <p>" . $leader['name'] . "</p></div>";
                    $counter++;
                }
                ?>
            </div>
        </div>
    </section>

    <section id="parallaxBackground2">
        <div class="image" data-type="background" data-speed="7"></div>
    </section>

    <section id="teamsSection">
        <div class="stuff" data-type="content">
            <h1 id="teamSectionTitle"><b>Teams</b></h1>
            <div class="row">
                <?php
                $counter = 0;
                foreach ($teamdata as $team) {
                    if ($counter > 6) {
                        echo "</div><div class='row'>";
                        $counter = 0;
                    }
                    echo "<div class='col-1-lg mx-auto'><a href='" . $team['link'] . "'>
                        <img class='teamImage' src='" . $teamsDirectoryPath . $team['teamImage'] . "'></a>
                        <p>" . $team['name'] . "</p></div>";
                    $counter++;
                }
                ?>
            </div>
            <h3>und viele weitere...</h3>
        </div>
    </section>


    <section id="parallaxBackground2">
        <div class="image" data-type="background" data-speed="7"></div>
    </section>


    <section id="mediaSection">
        <div class="stuff" data-type="content">
            <h1><b>Galerie</b></h1>
            <div class="row">
                <div id="carouselExampleIndicators " class="carousel slide carouselSettings" data-ride="carousel">
                    <ol class="carousel-indicators">

                        <?php
                        for ($i = 0; $i < (count(glob("images/media/*"))); $i++) {
                            if ($i < 1) {
                                echo "<li data-target='#carouselExampleIndicators' data-slide-to='0' class='active'></li>";
                            } else {
                                echo "<li data-target='#carouselExampleIndicators' data-slide-to='" . $i . "'></li>";
                            }
                        } ?>

                    </ol>
                    <div class="carousel-inner">
                        <?php
                        $counter = 0;
                        foreach (glob("images/media/*") as $files) {
                            if ($counter < 1)
                                echo "<div class='carousel-item active'>
      <img src='" . $files . "'>
    </div>";
                            else {
                                echo "<div class='carousel-item'>
      <img src='" . $files . "'>
    </div>";
                            }
                        }
                        ?>
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
        </div>
    </section>
</div>

<div class="footer-dark">
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-sm-6 col-md-3 item">
                    <h3>Services</h3>
                    <ul>
                        <li><a href="#">Web design</a></li>
                        <li><a href="#">Development</a></li>
                        <li><a href="#">Hosting</a></li>
                    </ul>
                </div>
                <div class="col-sm-6 col-md-3 item">
                    <h3>About</h3>
                    <ul>
                        <li><a href="#">Company</a></li>
                        <li><a href="#">Team</a></li>
                        <li><a href="#">Careers</a></li>
                    </ul>
                </div>
                <div class="col-md-6 item text">
                    <h3>Company Name</h3>
                    <p>Praesent sed lobortis mi. Suspendisse vel placerat ligula. Vivamus ac sem lacus. Ut vehicula
                        rhoncus elementum. Etiam quis tristique lectus. Aliquam in arcu eget velit pulvinar dictum vel
                        in justo.</p>
                </div>
                <div class="col item social"><a href="#"><i class="fa fa-facebook"></i></a><a href="#"><i
                                class="fa fa-twitter"></i></a><a href="#"><i class="fa fa-youtube"></i></a><a
                            href="#"><i
                                class="fa fa-instagram"></i></a></div>
            </div>
            <p class="copyright">Company Name © 2018</p>
        </div>
    </footer>
</div>
</body>
</html>