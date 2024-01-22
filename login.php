<?php
session_start();
include("connect.php"); 

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $un = $_POST['un'];
    $pwd = $_POST['pwd'];

    // Validate credentials
    $query = "SELECT id FROM upms WHERE un ='$un' AND pwd ='$pwd'";
    $result = mysqli_query($conn, $query);

    if (mysqli_num_rows($result) == 1) {
        $_SESSION['un'] = $un;
        header("Location: homepage.php"); 
    } else {
        echo' alert ("Enter correct details")';
    }
}
?>
