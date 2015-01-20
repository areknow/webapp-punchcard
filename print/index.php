<?PHP
include "../php/connect.php";
session_start();
$id = $_SESSION['id'];

$stack = array();
$timein = array();
$timeout = array();

$userid = $_SESSION['id'];
$queryProfile = "SELECT * FROM `users` WHERE id=$userid";
$resultProfile = mysql_query($queryProfile);
$rowProfile = mysql_fetch_array($resultProfile);

$query = "SELECT * FROM `timesheet$id`";
$result = mysql_query($query);

function prettyDate($in) {
    $replaced = str_replace(".", "-", $in);
    $in = DateTime::createFromFormat('m-d-Y', $replaced)->format('F, jS, 20y');
    return $in;
}

function prettyTime($in) {
    $in = date('H:i', mktime(0,$in));
    return $in;
}

function prettyHours($in) {
    $in = date('g:s a', strtotime($in));
    return $in;
}

function timeDiff($firstTime,$lastTime) {
    $firstTime = strtotime($firstTime);
    $lastTime = strtotime($lastTime);
    $timeDiff = $lastTime - $firstTime;
    return $timeDiff/60;
}

?>
<!doctype html>
<html lang="en">
    <head>
        <link rel="stylesheet" type="text/css" href="../css/style.css">
    </head>
    <body>
        <div id="printout-container">
            <div class="title">
                <h1>Student Employee Time Sheet</h1>
                <h2>(Use Ink Only)</h2>
            </div>
            <div class="row">
                <h4 class="inline">Name:</h4>
                <div class="echo-text inline"><?PHP echo $rowProfile['first']." ".$rowProfile['last'] ?></div>
                <div class="signature1"></div>
            </div>
            <div class="row">
                <h4 class="inline">Grizzly ID: </h4>
                <div class="echo-text inline"><?PHP echo $rowProfile['gid']; ?></div>
                <div class="signature1"> </div>
            </div>
            <div class="row">
                <h4>Pay Period Ending:</h4>
                <div class="signature1"> </div>
            </div>
            <div class="row">
                <h4>Employee signature: </h4>
                <div class="signature1"> </div>
            </div>
            <div class="row">
                <h4>Supervisors signature: </h4>
                <div class="signature1"> </div>
            </div>
            <table border="1px">
                <thead>
                    <tr>
                        <td>Date</td>
                        <td>Time-in</td>
                        <td>Time-out</td>
                    </tr>
                </thead>
                <tbody>
                        <?PHP
                        while($row = mysql_fetch_array($result)) {
                            echo "<tr>";
                            echo "<td>".prettyDate($row['date'])."</td>";
                            echo "<td>";
                            if ($row['punch'] == "in") {
                                echo prettyHours($row['time']);
                                $timein[] = $row['time'];
                            }
                            else {
                                echo "&nbsp;";
                            }
                            echo "</td>";
                            echo "<td>";
                            if ($row['punch'] == "out") {
                                echo $out = prettyHours($row['time']);
                                $timeout[] = $row['time'];
                            }
                            else {
                                echo "&nbsp;";
                            }
                        }
                        ?>
                </tbody>
            </table>
            <br>
            <h3 class="total textright">Grand Total Hours: 
            <?PHP
            $total = array();

            $length = count($timeout);
            for ($i = 0; $i < $length; $i++) {
                $sum = timeDiff($timein[$i],$timeout[$i])."<br>";
                $total[] = $sum;
            }
            $totalhours = array_sum($total);
            echo prettyTime($totalhours);
            ?>
            </h3>
            <br><br>
            <h4 class="center">
                Please turn in Signed time sheet by Noon the Thursday before the end of the pay period.
            </h4>
            <h5 class="center">
                Time sheet due dates and pay period ending dates are listed on the back side.<br>Please note holiday exceptions.
            </h5> 
        </div>
    </body>
</html>