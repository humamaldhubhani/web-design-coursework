<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="Css/index.css">
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
            $state = false;
            if($state)
            {
        ?>
        <a href="logout.html" class ="logout">logout</a>
            
            <?php } else {?>
                <a href="login.html" class ="login">Login</a>
            <?php }?>
        </div>
    </header>
    <main>
        <div  class="products">
                <?php 
                for ($i = 1 ; $i<=9 ; $i++):?>
            <div class="product">
                <div class="product_img">
                    <img src="img/product<?php echo $i?>.png" alt="product<?php echo $i ?>">
                </div>
                <div class="product_title">
                    <p><a href="productDetials.html">Product <?php echo $i ?></a> </p>
                </div>
                <div class="product_cost">
                    <p>500$</p>
                </div>
            </div>
                <?php 
            if ($i%3 ==0)
            {
                echo "<br>";
            }
            endfor; ?>
            </div>
            
        </div>
        
    </main>
    <footer>

    </footer>
</body>
</html>