<?php
    include("connect.php");
    $id = $_GET['id'];
    $q = "delete from apms where id = $id ";
    mysqli_query($conn,$q);    
    header('location: homepage.php');
?>