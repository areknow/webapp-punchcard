<?PHP 
include '../php/connect.php';

session_start(); 
if(!$_SESSION['logged']) { 
    header("Location: ../"); 
    exit;
}

$userid = $_SESSION['id'];
$queryProfile = "SELECT * FROM `users` WHERE id=$userid";
$resultProfile = mysql_query($queryProfile);
$rowProfile = mysql_fetch_array($resultProfile);

if (isset($_POST['submit-profile'])) {
    $_POST  = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
    
    $first = $_POST['First'];
    $last = $_POST['Last'];
    $gid = $_POST['GID'];
    $super = $_POST['Super'];
    $type = $_POST['Type'];
    
    $sql= "UPDATE `users` SET 
    `first` = '$first',
    `last` = '$last',
    `gid` = '$gid',
    `supervisor` = '$super',
    `type` = '$type'
    WHERE `id` = $userid ";
    
    if (!mysql_query($sql, $db)) {
        die('Error: ' . mysql_error());
    }
    header('Location: ../profile');
    exit;
}
?>
<!doctype html>
<html class="home-bg">
    <head>
        <title>PunchCard - Profile</title>
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
            <div class="section profile">
                <h1>Profile</h1>
                <hr>
                <form action="#" method="post">
                    <div class="row">
                        <div class="col col30">First name</div>
                        <div class="col col70"><div class="row"><input name="First" type="text" value="<?PHP echo $rowProfile['first']; ?>"></div></div>
                    </div>
                    <div class="row">
                        <div class="col col30">Last name</div>
                        <div class="col col70"><div class="row"><input name="Last" type="text" value="<?PHP echo $rowProfile['last']; ?>"></div></div>
                    </div>
                    <div class="row">
                        <div class="col col30">Grizzly ID Number</div>
                        <div class="col col70"><div class="row"><input name="GID" type="text" value="<?PHP echo $rowProfile['gid']; ?>"></div></div>
                    </div>
                    <div class="row">
                        <div class="col col30">Email Address</div>
                        <div class="col col70"><div class="row"><input name="Email" disabled type="text" value="<?PHP echo $rowProfile['email']; ?>"></div></div>
                    </div>
                    <div class="row">
                        <div class="col col30">Supervisor Email</div>
                        <div class="col col70"><div class="row"><input name="Super" type="text" value="<?PHP echo $rowProfile['supervisor']; ?>"></div></div>
                    </div>
                    <div class="row">
                        <div class="col col30">Employee Type</div>
                        <div class="col col70"><div class="row"><input name="Type" type="text" value="<?PHP echo $rowProfile['type']; ?>"></div></div>
                    </div>
                    <div class="row">
                        <button type="submit" name="submit-profile">Save</button>
                    </div>
                </form>
            </div>
        </div>
        <div id="footer">
            &copy; 2014 - Arnaud Crowther, Amanda Labelle, Eric Maul, Alex Osbourn
        </div>
        <div id="liveDay" class="hidden"></div>
        <h3 id="liveTime" class="hidden"></h3>
    </body>
</html>