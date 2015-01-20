<!DOCTYPE HTML>
<html>
    <head>
        <title>PunchCard - Login</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="http://yui.yahooapis.com/pure/0.5.0/pure-min.css">
        <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
        <link href='http://fonts.googleapis.com/css?family=Raleway:400,300,700' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" href="css/clock.css" type="text/css">
        <link rel="stylesheet" href="css/style.css" type="text/css">
        <script src="http://code.jquery.com/jquery.js"></script>
        <script src="src/clock.js"></script>
    </head>
    <body class="login-bg">
        <div id="clock_base">
            <div id="ss" class="c_part"></div>
            <div id="mm" class="c_part"></div>
            <div id="hh" class="c_part"></div>	
            <div id="center"></div>
        </div>
        <div id="login">
            <div id="login-title" class="nomobile">
                <div class="header">
                    <h1>PunchCard</h1>
                </div>
            </div>
            <?PHP
            session_start();
            if ($_SESSION['bad'] == TRUE) {
                echo "<div class='bad-login'>Please try again</div>";
                $_SESSION['bad'] = FALSE;
            }
            else {}
            ?>
            <form class="pure-form" action="php/login.php" method="post">
                <h2 class="mobile-title noregular">PunchCard</h2>
                <div class="input-cont">
                    <input name="username" type="text" placeholder="Enter your email">
                    <div class="fa-input"><i class="fa fa-user"></i></div>
                </div>
                <div class="input-cont">
                    <input name="password" type="password" placeholder="Password">
                    <div class="fa-input"><i class="fa fa-lock"></i></div>
                </div>
                <button name="login" class="pure-button pure-button-primary" type="submit">Login</button>
                <a href="">Forgot your password?</a>
            </form>
            <div class="icon"><span class="icon-text">Timesheet<br>Managment</span></div>
        </div>
        <div id="login-footer">
            &copy; 2014 - Arnaud Crowther, Amanda Labelle, Eric Maul, Alex Osbourn
        </div>
    </body>
</html>