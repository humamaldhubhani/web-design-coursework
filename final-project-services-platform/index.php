<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Secvices</title>
    <link rel="stylesheet" href="css/index.css">
    <link rel="stylesheet" href="css/all.min.css">
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/popsaller.css">
</head>

<body>
<header>

    <div class="hheader">
        <div class="logo">
        <img src="img/logo/whitelogo.png" alt="logo">
        </div>
        <div class="nav">
        <ul>
            <li>
                <a href="lists/tremsofservice.html">Terms of Service</a>
            </li>
            <li>
                <a href="login.php">Sign in</a>
            </li>
            <li>
                <a href="Join.php">Join</a>
            </li>     
        </ul>            
        </div>
    </div>
    <div class="harticle">
        <h1>
            Find the right freelance <br>service, right away
        </h1>
    </div>
    <div class="hsearch">
        
        <form action="">
            <input type="text" placeholder=" Search for any service">
            <a href=""><i class="fa-solid fa-magnifying-glass"></i></a>
        </form>
    </div>
    <div class="mostsearched">
        <h5>
            Popular:
        </h5>
        <ul>
            <li>
                <a href="lists/web_design.html">Web Design</a>
            </li>
            <li>
                <a href="lists/programming.html">Programming</a>
            </li>
            <li>
                <a href=" list.html">Logo Design</a>
            </li>
            <li>
                <a href="lists/Writing.html">Writing & Translation</a>
            </li>
        </ul>
    </div>

</header>

<main>
  
    </div>
    <div class="popsallers">
        <div class="subtitle">
            <h2>Popular Sallers</h2>
        </div>
        <div class="subsallercontainer">
            <div class="sallercontainer">
            <?php 
                require_once("Admin/config.php");
                $sql = "select * from creat";
                $result = mysqli_query($link,$sql);
                $i=1;
                while($row = mysqli_fetch_assoc($result))
                {
                    
                      ?>
                        <div class="card">
                    <div class="image">
                        <img src="img/<?php echo $row['img'] ?>" alt="img">
                    </div>
                    <h2><?php echo $row['name'] ?></h2>
                <p> <?php echo $row['text'] ?></p>
                </div>     
                      <?php  
                    if($i %3 == 0)
                    echo "<br>";

                    $i += 1;
                }
                
            ?>
               
                
         
            </div>
    </div>

    </div>
    <div class="categories">
        <div class="subtitle">
            <h2>Categories</h2>
        </div>
        <br>
        <div class="catlist" >
            <ul >
                
                <li ><a href="" ><i class="fa-solid fa-swatchbook " ></i></a><span> Graphics </span></li>
                <li class="list1"><a href=""><i class="fa-brands fa-python "></i></a><span> Programming </span></li>
                <li class="list1"><a href=""><i class="fa-brands fa-html5  "></i></a><span> website design </span></li>
                <li class="list1"><a href=""><i class="fa-solid fa-microphone "></i></a><span> Music </span></li>
                <br>
                <li class="list2"><a href=""><i class="fa-solid fa-film "></i></a><span> Video </span></li>
                <li><a href=""><i class="fa-solid fa-people-group "></i></a><span> Marketing </span></li>
                <li><a href=""><i class="fa-solid fa-camera-retro "></i></a><span> Photography </span></li>
                <li><a href=""><i class="fa-solid fa-chalkboard-user "></i></a><span> Toturial </span></li>
            </ul>
        </div>
       
    </div>
</main>

<footer>
    <p>&copy; 2023<em> Services</em> Yemeni.Inc</p>
    <a href="">Terms of services</a>
    <a href="">Privacy policy</a>


</footer>

</body>
</html>