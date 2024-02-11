<?php
require 'config.php';
if(!empty($_SESSION["id"])){
$id =$_SESSION["id"];
$password = $_POST["password"];
$result = mysqli_query($conn, "SELECT*FROM tb_user WHERE id  = $id");
$row = mysqli_fetch_assoc($result);
}
else{
    header("Location:login.php");
}
?>
<!DOCTYPE html>
<html lang="en" dir = "ltr">
<head>
    <meta charset="UTF-8">
    
    <title>Index</title>
</head>
<body>
    <h1>Welcome <?php echo $row["name"]; ?></h1>
    <a href="logout.php">Logout</a>
</body>
</html>