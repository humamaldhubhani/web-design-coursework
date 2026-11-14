
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title  >View Record</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        .wrapper{
            width: 600px;
            margin: 0 auto;
        }
    </style>
</head>
<body>
    <div class="wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <h1 class="mt-5 mb-3">View Record</h1>
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
    <div class="form-group">
    <label>Name</label>
    <p><b><?php echo $row["name"] ?></b></p>
</div>
<div class="form-group">
    <label>lname</label>
    <p><b><?php echo $row["lname"] ?></b></p>
</div>
<div class="form-group">
    <label>password</label>
    <p><b><?php echo $row["password"] ?></b></p>
</div>
<div class="form-group">
    <label>email</label>
    <p><b><?php echo $row["email"] ?></b></p>
</div>
<div class="form-group">
<label>Type</label>
    <p><b><?php if($row["type"]==2)
                                        echo "yes";
                                    else echo "no"; ?></b></p>
</div>

<?php  

  }
  else
  {
   echo ' <div class="alert alert-danger"><em>No records were found.</em></div>';

  }
}
else
{
    header("Location:index.php");
}
?>
                  
                    
                    <p><a href="index.php" class="btn btn-primary">Back</a></p>
                </div>
            </div>        
        </div>
    </div>
</body>
</html>