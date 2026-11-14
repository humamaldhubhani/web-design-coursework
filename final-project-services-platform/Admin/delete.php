<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Delete Record</title>
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
        if(isset($_POST["id"])){
            $id = $_POST["id"];
            require_once("config.php");
            $sql = "DELETE FROM users WHERE `users`.`id` = $id";
            $result = mysqli_query($link , $sql);
            if($result)
            {;
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
                    <h2 class="mt-5 mb-3">Delete Record</h2>
                    <?php if (isset($_GET["id"]))
                    {
                        $id = $_GET["id"];
                    }
                    
                    
                    ?>
                    <form action="delete.php" method="POST">
                        <div class="alert alert-danger">
                            <input type="hidden" name="id" value=" <?php echo $id ?>"/>
                            <p>Are you sure you want to delete this employee record?</p>
                            <p>
                                <input type="submit" value="Yes" class="btn btn-danger">
                                <a href="index.php" class="btn btn-secondary">No</a>
                            </p>
                        </div>
                    </form>
                </div>
            </div>        
        </div>
    </div>
</body>
</html>
