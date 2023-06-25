<?php 
    error_reporting(-1);

    session_start();

    $_SESSION['count'] = isset($_SESSION['count']) ? ++$_SESSION['count'] :1;
    
    
?>

<a href = "index2.php">Index2</a>