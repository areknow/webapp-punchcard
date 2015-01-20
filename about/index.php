<?PHP session_start(); 
session_start();
if(!$_SESSION['logged']) { 
    header("Location: ../"); 
    exit;
}
?>
<!doctype html>
<html class="home-bg">
    <head>
        <title>PunchCard - About</title>
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
                <div class="header"><br><br>
                    <h1>PunchCard</h1>
                    <p>The automated timesheet management system</p>
                </div>
                <ul id="slider" class="slides">
                    <li>
                        <img src="../res/slide3.jpg" />
                    </li>
                    <li>
                        <img src="../res/slide4.jpg" />
                        <div class="header">
                        </div>
                    </li>
                    <li>
                        <img src="../res/slide5.jpg" />
                        <div class="header">
                        </div>
                    </li>
                </ul>
            </div>
            <div class="section about">
                <h1>About</h1>
                <hr>
                <p>
                    <h3>History</h3>
                    Conceived in the Fall of 2014, PunchCard is the workable solution for the lacking Oakland University part-time employee hourly accounting system. Designed, developed, and built by student employees of OU's School of Engineering and Computer Science, Arnaud Crowther, Eric Maul, Amanda Labelle, and Alex Osbourn set out to develop a completely paperless and easy to use time-card application.
                </p>
                <p>
                    <h3>Motivation</h3>
                    They chose to tackle this problem as their Sophomore Project out of frustration and desire for something better. By providing a better, more streamlined method for tracking time and hours worked, the application will help reduce errors, account for missed time, and provide a more fair and accurate system. They aim to bring Oakland University's lesser thought-of processes into the 21st Century and away from a deficient handwritten time-card system.
                </p>
                <p>
                    <h3>Goals</h3>
                    The team had the following goals in mind when developing this application:
                    <ul>
                        <li>Adopt a paperless system</li>
                        <li>Establish a worry-free way to track time</li>
                        <li>Prevent simple errors</li>
                        <li>Take the timesheet process into the digital age</li>
                        <li>Presented all in a simple, uncluttered style</li>
                    </ul>
                </p>
                <h2 class="conclusion">The end result is a great tool for tracking hours for employees with fluctuating shifts.</h2>
            </div>
        </div>
        <div id="footer">
            &copy; 2014 - Arnaud Crowther, Amanda Labelle, Eric Maul, Alex Osbourn
        </div>
        <div id="liveDay" class="hidden"></div>
        <h3 id="liveTime" class="hidden"></h3>
    </body>
</html>