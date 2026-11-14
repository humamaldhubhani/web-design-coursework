<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="CSS/index.css">
    <title>Home</title>
</head>
<body>
    <header>
        <div class="logo">
            <img src="img/logo.png" alt="The logo">
        </div>
        <nav>
            <ul>
                <li ><a class="Active" href="index.html">Home</a></li>
                <li><a href="products.html">Products</a></li>
                <li><a href="aboutus.html">About Us</a></li>
                <li><a href="contactus.html">Contact Us</a></li>
            </ul>
        </nav>
        <div>
        <?php 
            if(isset($_GET['username']))
            {
                echo 'Welcome '.$_GET['username'];
                echo '<a href="logout.php" class ="logout">Logout</a>';
            }
            else
            {
                echo '<a href="login.php" class ="login">Login</a>';
            }
        ?>
            
        </div>
    </header>
    <main>
        <div  class="products">
            <?php 
                require_once("Admin/config.php");
                $sql = "select * from products";
                $result = mysqli_query($link,$sql);
                $i=1;
                while($row = mysqli_fetch_assoc($result))
                {
                    
                      ?>
                            <div class="product">
                                            <div class="product_img">
                                                <img src="img/<?php echo $row['proimage'] ?>" alt="<?php echo $row['proname'] ?>">
                                            </div>
                                            <div class="product_title">
                                                <p><a href="productDetials.html"><?php echo $row['proname'] ?></a> </p>
                                            </div>
                                            <div class="product_cost">
                                                <p><?php echo $row['proprice'] ?></p>
                                            </div>
                                        </div>
                      <?php  
                    if($i %3 == 0)
                    echo "<br>";

                    $i += 1;
                }
                
            ?>

           
           
        </div>
        
    </main>
    <footer>

    </footer>
</body>
</html>