<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Create Record</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        .wrapper{
            width: 600px;
            margin: 0 auto;
        }
    </style>
      <script>
		// Check local storage
		let localS = localStorage.getItem('theme'),
			themeToSet = localS

		// If local storage is not set, we check the OS preference
		if (!localS) {
			themeToSet = window.matchMedia('(prefers-color-scheme: dark)').matches ? 'dark' : 'light'
		}

		// Set the correct theme
		document.documentElement.setAttribute('data-theme', themeToSet)
	</script>
    
    <link rel="stylesheet" href="style.css">
    <script src="script.js" defer></script>
</head>
<body>


       
<div id="main-content">
            <div id="main-content__container">
            <?php
    if($_SERVER["REQUEST_METHOD"]=="POST");
{
     if(isset($_POST["name"]) && isset($_POST["text"])) 
  {
    echo "test";
    $name = $_POST["name"];
    $text = $_POST["text"];
    $img = $_FILES["img"]["name"];
    $filetomove = $_FILES["img"]["tmp_name"];
    $dist = "../../img/".$img ;
    if(move_uploaded_file( $filetomove, $dist))
    {
        require_once("../config.php");
        $sql = "INSERT INTO `creat` (`name`, `text`, `img`) VALUES ( '$name', '$text', '$img')";
         $result = mysqli_query($link , $sql);
         if($result)
         {
            header ("Location:index.php");
         }
         else{
            header ("Location:error.php");

         }
    }

  }
}

  ?>
    <div class="wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <h2 class="mt-5">Create Record</h2>
                    <p>Please fill this form and submit to add employee record to the database.</p>
                    <form action="create.php" enctype ="multipart/form-data" method="POST">
                        <div class="form-group">
                            <label>Name</label>
                            <input type="text" name="name" class="form-control" value="">
                            <span class="invalid-feedback"></span>
                        </div>
                        <div class="form-group">
                            <label>text</label>
                            <input name="text" class="form-control">
                            <span class="invalid-feedback"></span>
                        </div>
                       
                        <div class="form-group">
                            <label>img</label>
                            <input type="file" name="img"></textarea>
                            <span class="invalid-feedback"></span>
                        </div>
                        <input type="submit" class="btn btn-primary" value="Submit">
                        <a href="index.php" class="btn btn-secondary ml-2">Cancel</a>
                    </form>
                </div>
            </div>        
        </div>
    </div>
               
            </div>
        </div>



  
</body>
</html>