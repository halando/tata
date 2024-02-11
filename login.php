<?php
require 'config.php';
if(!empty($_SESSION["id"])){
    header("Location:index.php");
}
if(isset($_POST["submit"])){
$usernameemail = $_POST["usernameemail"];
$password = $_POST["password"];
$result = mysqli_query($conn, "SELECT*FROM tb_user WHERE username  = '$usernameemail'or email  = '$usernameemail'");
$row = mysqli_fetch_assoc($result);
if(mysqli_num_rows($result)>0){
    if($password==$row["password"]){
        $_SESSION["login"] = true;
        $_SESSION["id"] =$row["id"];
        header("Location:index.php");
    echo
    "<script></script>";
}
else{
    
        
      
        echo
        "<script></script>";
}
}
else{
    echo
    "<script></script>";
}
}
?>
<!DOCTYPE html>
<html lang="en" dir = "ltr">
<head>
    <meta charset="UTF-8">
    
    <title>Login</title>
</head>
<body>
    <h2>Login</h2>
    <form class="" action="" method="post" autocomplete="off">
    <label for="usernameemail">Username or Email:</label>
    <input type="text" name="usernameemail" id="usernameemail" required value=""><br>
    <label for="password">Password:</label>
    <input type="password" name="password" id="password" required value=""><br>
    <button type="submit" name="submit">Login</button>
    </form>
    <br>
    <a href="registraion.php">Registration</a>
</body>
</html>