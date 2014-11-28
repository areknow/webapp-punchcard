<?PHP

include "connect.php";
session_start();
$id = $_SESSION['id'];

$query = "SELECT * FROM `timesheet$id`";
$result = mysql_query($query);

echo "<table id='report-table' class='pure-table pure-table-bordered'>"; 
echo "<thead><tr><th>Date</th><th>Time</th><th>In/Out</th></tr></thead>"; 
//echo "<tbody>";

while($row = mysql_fetch_array($result)) {  
    if ($row['punch'] == "in") {
        echo "<tr class='tr-blue'><td>" . $row['date'] . "</td><td>" . $row['time'] . "</td><td>" . $row['punch'] . "</td></tr>"; 
    }
    else {
        echo "<tr class=''><td>" . $row['date'] . "</td><td>" . $row['time'] . "</td><td>" . $row['punch'] . "</td></tr>"; 

    }
}

//echo "</tbody>";
echo "</table>"; 