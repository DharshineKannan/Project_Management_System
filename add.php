<?php
session_start();
include("connect.php"); 

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $np = $_POST['np'];
    $tl = $_POST['tl'];
    $pc = $_POST['pc'];

    $query = "INSERT INTO apms (np, tl, pc) VALUES ('$np', '$tl','$pc')";
    if (mysqli_query($conn, $query)) {
        header("Location: homepage.php");
    } else {
        echo "Error: " . mysqli_error($conn);
    }
}
?>
