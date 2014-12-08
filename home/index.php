<?PHP
include '../php/connect.php';

session_start();
if(!$_SESSION['logged']) { 
    header("Location: ../"); 
    exit;
}
$userid = $_SESSION['id'];

date_default_timezone_set('America/Detroit');
$liveDate = date("m.d.y");

$sql= mysql_query("SELECT punch FROM `timesheet$userid` WHERE date='$liveDate' ORDER BY id DESC LIMIT 1");
$row = mysql_fetch_array($sql);
$punchStatus = $row["punch"];

if (!isset($punchStatus)) {
    $isDisabled = array("", "disabled");
}
else if (isset($punchStatus)) {
    if ($punchStatus == "in") {
        $isDisabled = array("disabled", "");
    }
    else if ($punchStatus == "out") {
        $isDisabled = array("", "disabled");
    }
}
$query = "SELECT * FROM `users` WHERE id=$userid";
$result = mysql_query($query);
$row = mysql_fetch_array($result);
//$GLOBALS['fullname'] = $row['first']." ".$row['last'];
$_SESSION['fullname'] = $row['first']." ".$row['last'];
?>
<html class="home-bg">
    <head>
        <title>PunchCard - Home</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="http://yui.yahooapis.com/pure/0.5.0/pure-min.css">
        <link rel="stylesheet" href="../css/buttons.css" type="text/css">
        <link rel="stylesheet" href="../css/animate.css" type="text/css">
        <link rel="stylesheet" href="../css/style.css" type="text/css">
        <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
        <link href='http://fonts.googleapis.com/css?family=Raleway:400,300,700' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Aldrich' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Orbitron:900' rel='stylesheet' type='text/css'>
        <link href="../skdslider/skdslider.css" rel="stylesheet">
        <script src="http://code.jquery.com/jquery.js"></script>
        <script src="../src/jquery-ui.min.js"></script>
        <script src="../skdslider/skdslider.js"></script>
        <script src="../src/toword.js"></script>
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
            <div class="want noselect">
                <div class="shadow-cover"></div>
                <div id="liveDay"></div>
                <h3 id="liveTime" class="tile"></h3><br>
                <div class="tile button button-3d <?PHP echo $isDisabled[0] ?>" onclick="punchIn('<?PHP echo $userid; ?>');">
                    Punch In
                </div>
                <div class="tile button button-3d <?PHP echo $isDisabled[1] ?>" onclick="punchOut('<?PHP echo $userid; ?>');">
                    Punch Out
                </div>
                <div class="tile button button-3d" id="report-print">
                    Print Report
                </div>
            </div>
        </div>
        <div id="footer">
            &copy; 2014 - Arnaud Crowther, Amanda Labelle, Eric Maul, Alex Osbourn
        </div>
        
        <!-- hidden objects -->
        <div class="modal" id="modal-in">
            <div class="popup">
                <div class="dismiss" id="x-in"><i class="fa fa-times"></i></div>
                <div class="inner">
                    <div class="success"><i class="fa fa-check-circle"></i> Success</div>
                    <div class="text">You have punched-in at <span id="resultTime-in"></span></div>
                </div>
            </div>
        </div>
        <div class="modal" id="modal-out">
            <div class="popup">
                <div class="dismiss" id="x-out"><i class="fa fa-times"></i></div>
                <div class="inner">
                    <div class="success"><i class="fa fa-check-circle"></i> Success</div>
                    <div class="text">You have punched-out at <span id="resultTime-out"></span></div>
                </div>
            </div>
        </div>
        <div class="modal" id="modal-print">
            <div class="popup print">
                <div class="dismiss" id="x-print"><i class="fa fa-times"></i></div>
                <div class="inner print-inner">
                    <div class="success clickme margin-right" onclick="$('#report-table').printElement();">
                        <i class="fa fa-print"></i> Print
                    </div>
                    <div class="success clickme" onclick="$('#report-table').printElement();">
                        <i class="fa fa-envelope"></i> Email
                    </div>
                    <div class="print-cont">
                        <div class="text"><?PHP include '../php/report.php'; ?></div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>