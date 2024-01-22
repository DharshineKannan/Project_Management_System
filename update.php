<?php
    include("connect.php");
    if(isset($_POST['btn']))
    {
        $id = $_GET['id'];
        $np=$_POST['np'];
        $tl=$_POST['tl'];
        $pc=$_POST['pc'];
        $q= "update apms set np='$np', tl='$tl', pc='$pc' where id=$id";
        $query=mysqli_query($conn,$q);
        header('location:homepage.php');
    } 
    if(isset($_GET['id'])) 
    {
        $q = "SELECT * FROM apms WHERE id='".$_GET['id']."'";
        $query=mysqli_query($conn,$q);
        $res= mysqli_fetch_array($query);
    }
?>



<!DOCTYPE html>
<html>

<head>
    <title>Update Projects</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            display: flex;
        }

        #sidebar {
            width: 150px;
            height: 100%;
            background-color:cadetblue;
            color: white;
            padding: 20px;
            box-shadow: 2px 0 5px rgba(0, 0, 0, 0.1);
            position: fixed;
            left: 0;
            top: 0;
            bottom: 0;
            overflow-y: auto;
            font-family: Georgia, 'Times New Roman', Times, serif;
        }

        #content {
            flex: 1;
            padding: 20px;
            margin-left: 250px; /* Add left margin to avoid hiding behind the sidebar */
            font-family: Georgia, 'Times New Roman', Times, serif;
        }

        h4 {
            margin-bottom: 20px;
        }

        a {
            color: white;
            text-decoration: none;
            display: block;
            padding: 10px;
            margin-bottom: 10px;
            transition: background-color 0.3s;
        }

        a:hover {
            background-color: #555;
        }

        h2 {
            color: #333;
        }
         
        h3{
            text-align: center;
        }

        form {
            padding: 20px 40px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            max-width:500px;
            width: 100%;
            font-family: Georgia, 'Times New Roman', Times, serif;
            margin-left: 150px;
            margin-top: 100px;
        }

        label {
            display: block;
            margin-bottom: 8px;
        }

        input {
            width: calc(100% - 16px);
            padding: 8px;
            margin-bottom: 16px;
            box-sizing: border-box;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        button {
            width: 100%;
            background-color: #4caf50;
            color: #fff;
            padding: 10px 15px;
            border: none;
            cursor: pointer;
            font-size: 16px;
            font-family: Georgia, 'Times New Roman', Times, serif;
            font-weight: 500;
        }

        button:hover {
            background-color: #45a049;
        }
    </style>
</head>

<body>
    <div id="sidebar">
        <h4> Dashboard </h4>
        <a href="homepage.php">Home</a>
        <a href="add.html">Add Projects </a>
        <a href="index.html">Logout</a>
    </div>

    <div id="content">
        <h2>Project Management System</h2>
    
        <form  method="post">
            <h3> UPDATE PROJECTS </h3>
            <label for="np"> Name of the Project </label>
            <input type="text" id="np" name="np" value ="<?php echo $res['np'];?>" >
            <br>
            <label for="tl"> Team Leader </label>
            <input type="text" id="tl" name="tl" value ="<?php echo $res['tl'];?>">
            <br>
            <label for="pc"> Percentage Completed </label>
            <input type="number" id="pc" name="pc" value ="<?php echo $res['pc'];?>">
            <br>
            <button type="submit" name="btn"> Update </button>
        </form>
    </div>
</body>

</html>
