<?php 

session_start();

if (!isset($_SESSION['username'])) {
    header("Location: index.php");
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <title>Welcome</title>
</head>
<body>
<div class="abcd">
    <?php  echo "<h1 style='color:white;'>Welcome " . $_SESSION['username'] . "</h1>"; ?>
       <a class="log" href="logout2.php">Logout</a>

   </div> 
    <?php include 'index3.php'; ?>
</body>
</html>