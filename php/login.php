<?php
if(isset($_POST['login'])) {
    
    // connect to the host and DB
    include 'connect.php';
   
    // securly gather POST variables from html
    $usr = mysql_real_escape_string($_POST['username']);
    $pas = mysql_real_escape_string($_POST['password']);
    $sec = hash('sha256', $pas);
    
    // check if user and password variables match in the users table
    $sql = mysql_query("SELECT * FROM users  
        WHERE email='$usr' AND 
        password='$sec' LIMIT 1");
    
    // if true, send to home page
    if(mysql_num_rows($sql) == 1) {
        $row = mysql_fetch_array($sql);
        session_start();
        $_SESSION['id'] = $row['id'];
        $_SESSION['logged'] = TRUE;
        $_SESSION['bad'] = FALSE;
        header("Location: ../home");
        exit;
    }
    
    else { // if false, send to front door
        session_start();
        $_SESSION['logged'] = FALSE;
        $_SESSION['bad'] = TRUE;
        header("Location: ../");
        exit;
    }
}