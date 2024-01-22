<?php
    include("connect.php");
        $q = "select * from apms ";
        $query=mysqli_query($conn,$q);
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>
    <style>
        body {
            font-family:Georgia, 'Times New Roman', Times, serif;
            margin: 0;
            padding: 0;
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
            margin-left: 250px; 

        }

        h4 {
            margin-bottom: 20px;
            color: #fff;
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
        .card{
            padding: 10px; 
            margin: 30px; 
            border-radius: 5px; 
            box-shadow: 0 0 8px rgba(0, 0, 0, 0.1);

        }
    
    


.card {
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 10px;
    margin: 30px;
    border-radius: 5px;
    box-shadow: 0 0 8px rgba(0, 0, 0, 0.1);
}

.project-info {
    flex: 1;
}


.delete-link {
    color: darkolivegreen;
    text-decoration: none;
    padding: 5px 10px;
    border: 1px solid darkolivegreen;
    border-radius: 3px;
    transition: background-color 0.3s, color 0.3s;
    margin: 10px;
}

.delete-link:hover {
    background-color: darkolivegreen;
    color: white;
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
    
        <?php
            while ($qq = mysqli_fetch_array($query)) 
            {
        ?>

<div class="card">
    <div class="project-info">
        <h5 style="font-size: 20px; margin-bottom: 6px;">
            <?php echo "Name of the Project: " . $qq['np']; ?>
        </h5>
        <h5 style="font-size: 14px; margin-bottom: 6px;">
            <?php echo "Team Leader: " . $qq['tl']; ?>
        </h5>
        <h5 style="font-size: 14px;">
            <?php echo "Percentage Completed: " . $qq['pc'] . "%"; ?>
        </h5>
    </div>
    <div class="delete-link-container">
        <a class="delete-link" href="delete.php?id=<?php echo $qq['id']; ?>"> Delete </a>
    </div>
    <div class="delete-link-container">
        <a class="delete-link" href="update.php?id=<?php echo $qq['id']; ?>"> Update </a>
    </div>
</div>


        <?php
            }
            ?>
            
</body>
</html>
