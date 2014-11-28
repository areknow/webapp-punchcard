<?PHP

include 'connect.php';

$id = $_POST['userid']; 
$time = $_POST['intime']; 
$date = $_POST['date'];

$sql= "INSERT INTO `timesheet$id` (id, date, time, punch) VALUES (NULL, '$date', '$time','out');";

if (!mysql_query($sql, $db)) {
    die('......Error: ' . mysql_error());
}

$timeArray = explode(":",$time);

$hour = $timeArray[0];
$min = $timeArray[1];
$sec = $timeArray[2];
$ampm = "";

if ($hour <= 12) {
    $time = "$hour:$min AM";
}
else {
    $hour = $hour - 12;
    $time = "$hour:$min PM";
}

echo $time;