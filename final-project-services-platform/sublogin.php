<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/sublogin.css">
    <title>sublogin</title>
</head>
<body>
<?php 
$error = "";
if($_SERVER["REQUEST_METHOD"] == "POST")
{
  if(isset($_POST["email"]) && isset($_POST["Password"]))
  {
    require_once("Admin/config.php");
    $email = $_POST["email"];
    $password = $_POST["Password"];
    $sql = "select * from users where `email` = ? and `password` = ?";
    $stmt = mysqli_prepare($link, $sql);
    mysqli_stmt_bind_param($stmt, "ss", $email, $password);
    mysqli_stmt_execute($stmt);
    $resutl = mysqli_stmt_get_result($stmt);
    
    if (mysqli_num_rows($resutl)>0)
    {
      $row = mysqli_fetch_assoc($resutl);
      //print_r($row);
      if($row["type"]==1)
      header ("Location:index.php?email=".$row['email']);
    else
    header("Location:Admin/index.php");
    }
    else
    {
      $error = "User not found";
    }
  }
}?>


    <main>
  <div class="container">
     <div class="logo"><img src="img/logo/whitelogo.png" alt="logo"></div>
    <form action="" method = "POST">
        <input type="email" placeholder="email" name="email" required="" id="email" />
        <input type="password" placeholder="Password" name = "Password" required="" id="password" />
        <lable for = "error" ><?php echo $error ?></lable>
        <input type="submit" id="" value="Log in"/>
      
    </form>
  </div>
    </main>
</body>
</html>          
