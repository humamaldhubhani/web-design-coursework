<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/subsignup.css">
    <title>Document</title>
</head>
<body>
    <?php
if($_SERVER["REQUEST_METHOD"] == "POST")
{
  if(isset($_POST["name"]) && isset($_POST["lname"]) && isset($_POST["email"]) && isset($_POST["password"]))
  {
    require_once("Admin/config.php");
    $name = $_POST["name"];
    $lname = $_POST["lname"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $sql = "INSERT INTO `users` (`id`, `name`, `lname`, `email`, `password`, `type`) VALUES (NULL, ?, ?, ?, ?, '2')";
    $stmt = mysqli_prepare($link, $sql);
    mysqli_stmt_bind_param($stmt, "ssss", $name, $lname, $email, $password);
    $resutl = mysqli_stmt_execute($stmt);
    if ($resutl)
    {
      
      header("Location:sublogin.php");
    }
    else
    {
      $error = "User not found";
    }
  }
   
  }

    ?>

    <main>
        <div class="container">
            <div class="logo"><img src="img/logo/blacklogo.png" alt="logo"></div>
            <h2>Sign Up</h2>
            <form action="" method="POST">
            <input type="text" name="name" id="" placeholder="First name">
            <input type="text" name="lname" id="" placeholder="Last name">
            <input type="email" name="email" id="" placeholder="Email">
            <input type="password" name="password" id="" placeholder="Password">
            <div class="termsofservice">
                <input type="checkbox" name="" id="check">
            <label for="check">I agree to the <a href="">term of services</a></label>
            <input type="submit" id="signup" value="Sign up" />
            </div>
        </form>
            
        </div>
    </main>  
</body>
</html>