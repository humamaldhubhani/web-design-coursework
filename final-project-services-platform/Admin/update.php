<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Update Record</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        .wrapper{
            width: 600px;
            margin: 0 auto;
        }
    </style>
</head>
<body>
<?php
if($_SERVER["REQUEST_METHOD"] == "POST")
{
  if(isset($_POST["name"]) && isset($_POST["lname"]) && isset($_POST["email"]) && isset($_POST["password"]))
  {
    
    $name = $_POST["name"];
    $lname = $_POST["lname"];
    $email = $_POST["email"];
    $id = $_POST["id"];
    $type = $_POST["isadmin"];
    $password = $_POST["Password"];
    if(isset($_POST["isadmin"]))
    {
        $type = 2;
    }
    else
    {
     $type = 1;
    }
    require_once("config.php");
    $sql = "UPDATE `users`SET  `name` = '$name', `lname`= '$lname', `email` =  '$email', `password` = '$password', `type`='$type' where `id` = '$id'";
    $resutl = mysqli_query($link , $sql);
    if($result)
    {
        header("Location:index.php");
    }
    else
    {
        header("Location:error.php");

    }

  }
}
?>
    <div class="wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <h2 class="mt-5">Update Record</h2>
                    <p>Please edit the input values and submit to update the employee record.</p>
                    <?php 
if(isset($GET["id"]))
{
 $id = $GET["id"];
 require_once("config.php");
  $sql = "select * from `users` where `id` = `$id`" ;
  $result = mysqli_query($link,$sql);
  if(mysqli_num_rows($result) > 0)
{
    $row = mysqli_fetch_assoc($result);
    ?>
<form action="update.php" method="POST">
<div class="form-group">
    <label>Name</label>
    <input type="text" name="name" class="form-control" value="<?php echo $row["name"] ?>">
    <span class="invalid-feedback"></span>
</div>
<div class="form-group">
    <label>Name</label>
    <input type="text" name="lname" class="form-control" value="<?php echo $row["lname"] ?>">
    <span class="invalid-feedback"></span>
</div>
<div class="form-group">
    <label>password</label>
    <textarea name="password" class="form-control"><?php echo $row["password"] ?></textarea>
    <span class="invalid-feedback"></span>
</div>
<div class="form-group">
    <label>email</label>
    <input type="text" name="email" class="form-control" value="<?php echo $row["email"] ?>">
    <span class="invalid-feedback"></span>
</div>
<div class="form-group">
    <label> Is Admin</label><br>
    <input type="checkbox" name="isadmin" value="1" <?php if($row["type"] == 2) echo "checked"?> >
    <label for="isadmin"><?php
    if($row["type"] == 2)
    echo "Yes";
   else
echo "No"; ?></label>
</div>
<input type="hidden" name="id" value="<?php echo $row["id"] ?>"/>
<input type="submit" class="btn btn-primary" value="Submit">
<a href="index.php" class="btn btn-secondary ml-2">Cancel</a>
</form>
<?php
  }}
  else 
  {
    echo ' <div class="alert alert-danger"><em>No records were found.</em></div>';

  }
  ?>
  
                    
                </div>
            </div>        
        </div>
    </div>
</body>
</html>