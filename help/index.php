<?PHP session_start(); ?>
<!doctype html>
<html class="home-bg">
    <head>
        <title>PunchCard - Help</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="http://yui.yahooapis.com/pure/0.5.0/pure-min.css">
        <link rel="stylesheet" href="../css/style.css" type="text/css">
        <link rel="stylesheet" href="../css/buttons.css" type="text/css">
        <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
        <link href='http://fonts.googleapis.com/css?family=Raleway:400,300,700' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Aldrich' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Orbitron:900' rel='stylesheet' type='text/css'>
        <link href="../skdslider/skdslider.css" rel="stylesheet">
        <script src="http://code.jquery.com/jquery.js"></script>
        <script src="../src/jquery-ui.min.js"></script>
        <script src="../skdslider/skdslider.js"></script>
        <script src="../src/init.js"></script>
    </head>
    <body>
        <?PHP include '../php/navigation.php' ?>
        <div id="content">
            <div class="skdslider">
                <div id="mobile-button">
                    <i class="fa fa-bars fa-2x"></i>
                </div>
                <div class="slider-shadow"></div>
                <ul id="slider" class="slides">
                    <li>
                        <img src="../res/slide1.jpg" />
                        <div class="header">
                            <h1>PunchCard</h1>
                            <p>The automated timesheet management system</p>
                        </div>
                    </li>
                    <li>
                        <img src="../res/slide2.jpg" />
                        <div class="header">
                            <h1>PunchCard</h1>
                            <p>The automated timesheet management system</p>
                        </div>
                    </li>
                    <li>
                        <img src="../res/slide3.jpg" />
                        <div class="header">
                            <h1>PunchCard</h1>
                            <p>The automated timesheet management system</p>
                        </div>
                    </li>
                </ul>
            </div>
            <div class="section help">
                <h1>Help</h1>
                <hr>
                <p>
                    <h3>Principle Usage</h3>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris
                </p>
                <p>
                    <h3>Frequently Asked Questions</h3>
                    <ol>
                        <li>
                            <strong class="">This is a question</strong><br>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris
                        </li>
                        <li>
                            <strong>This is a question</strong><br>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris
                        </li>
                        <li>
                            <strong>This is a question</strong><br>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris
                        </li>
                        <li>
                            <strong>This is a question</strong><br>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris
                        </li>
                    </ol>
                </p>
            </div>
        </div>
        <div id="footer">
            &copy; 2014 - Arnaud Crowther, Amanda Labelle, Eric Maul, Alex Osbourn
        </div>
        <div id="liveDay" class="hidden"></div>
        <h3 id="liveTime" class="hidden"></h3>
    </body>
</html>