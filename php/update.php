<?php

// is this used ????

    include 'connect.php';
   
    $time = mysql_real_escape_string($_POST['time']);
    $id = mysql_real_escape_string($_POST['id']);

if(isset($_POST['punchin'])) {
    
    
    echo "$time / $id";
    
    return "test";
}

if(isset($_POST['punchout'])) {
    
}

if(isset($_POST['printreport'])) {
    
}
