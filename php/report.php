<?PHP

include "connect.php";
session_start();
$id = $_SESSION['id'];

$query = "SELECT * FROM `timesheet$id`";
$result = mysql_query($query);

echo "<table id='report-table' class='pure-table pure-table-bordered'>"; 
echo "<thead><tr><th>Date</th><th>In</th><th>Out</th></tr></thead>"; 
//echo "<tbody>";

while($row = mysql_fetch_array($result)) { 
    if ($row['punch'] == "in") {
        echo "<tr class='tr-blue'>";
    }
    else {
        echo "<tr class=''>";
    }
//    echo "<tr>";
    echo "<td>".$row['date']."</td>";
    echo "<td>";
    if ($row['punch'] == "in") {
        echo $row['time'];
    }
    else {
        echo "&nbsp;";
    }
    echo "</td>";
    echo "<td>";
    if ($row['punch'] == "out") {
        echo $out = $row['time'];
    }
    else {
        echo "&nbsp;";
    }
    echo "<tr>";
}

echo "</table>"; 