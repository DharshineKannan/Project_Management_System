<?php
session_start();
include("connect.php"); 

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $un = $_POST['un'];
    $pwd = $_POST['pwd'];

    $query = "INSERT INTO upms (un, pwd) VALUES ('$un', '$pwd')";
    if (mysqli_query($conn, $query)) {
        header("Location: index.html");
    } else {
        echo "Error: " . mysqli_error($conn);
    }
}
?>
