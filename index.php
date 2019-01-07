<?php
$leadersdata = json_decode(file_get_contents("images/leaders.json", true));
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Bierbrauer × Beerzone</title>
    <link rel="stylesheet" href="css/home.css">
    <link rel="stylesheet" href="css/leaderssection.css">
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
<body>
<!--<div class="">-->

<!--<div class="video-parallax">-->
<!--<video controls autoplay loop preload="auto" poster="images/home/video/mainvideothumbnail.jpg"-->
<!--id="homeMainVideoPlayer" class="video-parallax">-->
<!--<source src="videos/home/Bierbrauer9.mp4">-->
<!--Your browser does not support the video tag.-->
<!--</video>-->
<!--</div>-->


<div class="paralax1">
    <h1>Willkommen im Bierbrauer-HQ!</h1>
</div>
</div>

<header>
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
                <li class="nav-item active">
                    <a class="nav-link" href="index.html">Home</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="#">Führungsstab</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="#">Kontakte</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="#">Medien</a>
                </li>
            </ul>
            <ul class="navbar-nav ml-auto">
                <li class="nav-item pull-right">
                    <a class="nav-link" href="#">Einloggen</a>
                </li>
            </ul>
        </div>
    </nav>
</header>


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
            <h1 id="leadersSectionTitle">Führungsstab</h1>

            <div class="row">
                <div class="col-3"><h3>Fraktionsführer</h3>0
                    <?php
                    var_dump($leadersdata["501stBeertrooper"]);
                    foreach($leadersdata as $key=>$value){
                        echo $leader['name'];
                    }
                    ?>
                    ?>
<!--                    --><?php
//                    foreach (glob('images/leaders/fraktionsfuehrer/*') as $filename) {
//                        //Simply print them out onto the screen.
//                        $withoutExt = ucfirst(preg_replace('/\\.[^.\\s]{3,4}$/', '', basename($filename)));
//                        echo "<div class='col-1-lg mx-auto'><img class='avatarImage' src='" . $filename . "'><p>".$withoutExt."</p></div>";
//                    }
//                    ?><!--</div>-->
<!--                <div class="col-3">-->
<!--                    <h3>Teamleiter</h3>-->
<!--                    --><?php
//                    foreach (glob('images/leaders/teamleiter/*') as $filename) {
//                        //Simply print them out onto the screen.
//                        $withoutExt = ucfirst(preg_replace('/\\.[^.\\s]{3,4}$/', '', basename($filename)));
//                        echo "<div class='col-1-lg mx-auto'><img class='avatarImage' src='" . $filename . "'><p>".$withoutExt."</p></div>";
//                    }
//                    ?><!--</div>-->
<!--                <div class="col-3">-->
<!--                    <h3>Vice-Teamleiter</h3>-->
<!--                    --><?php
//                    foreach (glob('images/leaders/vizeteamleiter/*') as $filename) {
//                        //Simply print them out onto the screen.
//                        $withoutExt = ucfirst(preg_replace('/\\.[^.\\s]{3,4}$/', '', basename($filename)));
//                        echo "<div class='col-1-lg mx-auto'><img class='avatarImage' src='" . $filename . "'><p>".$withoutExt."</p></div>";
//                    }
//                    ?><!--</div>-->
<!--                <div class="col-3">-->
<!--                    <h3>Ehrengarde</h3>-->
<!--                    --><?php
//                    foreach (glob('images/leaders/ehrengarde/*') as $filename) {
//                        //Simply print them out onto the screen.
//                        $withoutExt = ucfirst(preg_replace('/\\.[^.\\s]{3,4}$/', '', basename($filename)));
//                        echo "<div class='col-1-lg mx-auto'><img class='avatarImage' src='" . $filename . "'><p>".$withoutExt."</p></div>";
//                    }
//                    ?>
                </div>
            </div>


            <h3 class="avatarRow">501st Beertrooper</h3>
            <div class="row">
                <?php
                foreach (glob('images/leaders/501stBeertrooper/*') as $filename) {
                    //Simply print them out onto the screen.
                    $withoutExt = ucfirst(preg_replace('/\\.[^.\\s]{3,4}$/', '', basename($filename)));
                    echo "<div class='col-1-lg mx-auto'><img class='avatarImage' src='" . $filename . "'><p>".$withoutExt."</p></div>";
                }
                ?>
            </div>

            <h3 class="avatarRow">Offiziere</h3>
            <div class="row">
                <?php
                foreach (glob('images/leaders/offizier/*') as $filename) {
                    //Simply print them out onto the screen.
                    $withoutExt = ucfirst(preg_replace('/\\.[^.\\s]{3,4}$/', '', basename($filename)));
                    echo "<div class='col-1-lg mx-auto'><img class='avatarImage' src='" . $filename . "'><p>".$withoutExt."</p></div>";
                }
                ?>
            </div>

            <h3 class="avatarRow">KFC´s</h3>
            <div class="row">
                <?php
                foreach (glob('images/leaders/kfc/*') as $filename) {
                    //Simply print them out onto the screen.
                    $withoutExt = ucfirst(preg_replace('/\\.[^.\\s]{3,4}$/', '', basename($filename)));
                    echo "<div class='col-1-lg mx-auto'><img class='avatarImage' src='" . $filename . "'><p>".$withoutExt."</p></div>";
                }
                ?>
            </div>
        </div>
    </section>

    <section id="parallaxBackground2">
        <div class="image" data-type="background" data-speed="7"></div>
    </section>

    <section id="contactSection">
        <div class="stuff" data-type="content">
            <h1>Kontakte</h1>
            <iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2FDieBierbrauer%2F&tabs=timeline&width=340&height=500&small_header=false&adapt_container_width=true&hide_cover=false&show_facepile=true&appId" width="340" height="500" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true" allow="encrypted-media"></iframe>
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