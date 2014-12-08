<?PHP
include "connect.php";
session_start();
$id = $_SESSION['id'];

$query = "SELECT * FROM `timesheet1`";
$result = mysql_query($query);
$row = mysql_fetch_array($result);

echo "<pre>";
var_dump($row);
echo "</pre>";
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
                <div class="echo-text inline">Arnaud Crowther</div>
                <div class="signature1"></div>
            </div>
            <div class="row">
                <h4 class="inline">Grizzly ID: </h4>
                <div class="echo-text inline">G000120054</div>
                <div class="signature1"> </div>
            </div>
            <div class="row">
                <h4>Pay Period Ending:</h4>
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
                        <td>Date</td>
                        <td>Total Hours</td>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <?PHP
//                        while($row = mysql_fetch_array($result)) { 
//                            echo "<td>".$row['date']."</td>";
//                            echo "<td>".$row['']."</td>";
//                            echo "<td>".$row['']."</td>";
//                            echo "<td>".$row['']."</td>";
//                            echo "<td>".$row['']."</td>";
//                        }
                        ?>
                    </tr>
                </tbody>
            </table>
            <h3 class="textright">Grand Total hours: 56</h3>
            <h4>
                Please turn in Signed time sheet by Noon the Thursday before the end of the pay period.
            </h4>
            <h5>
                Time sheet due dates and pay period ending dates are listed on the back side.<br>Please note holiday exceptions.
            </h5> 
        </div>
    </body>
</html>