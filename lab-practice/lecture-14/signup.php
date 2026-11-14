
<!DOCTYPE html>
<!--[if lt IE 7 ]> <html lang="en" class="ie6 ielt8"> <![endif]-->
<!--[if IE 7 ]>    <html lang="en" class="ie7 ielt8"> <![endif]-->
<!--[if IE 8 ]>    <html lang="en" class="ie8"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--> <html lang="en"> <!--<![endif]-->
<head>
<meta charset="utf-8">
<title>Paper Stack</title>
<link rel="stylesheet" type="text/css" href="CSS/style.css" />
</head>
<body>

<div class="container">
  <section id="content">
    <form action="signup.html" method = "POST">
      <h1>Sign Up Form</h1>
      <div>
        <input type="text" placeholder="Username" name = "UserName" required="" id="username" />
      </div>
      <div>
        <input type="email" placeholder="Email" name = "Email" required="" id="email" />
      </div>
      <div>
        <input type="password" placeholder="Password" name = "Password" required="" id="password" />
      </div>
      <div>
      <lable> <?php echo $error ?></lable>
      </div>
      <div>
        <input type="submit" value="Sign in" />
        <a href="login.html">Already Have Account?</a>
      </div>
    </form><!-- form -->
    
  </section><!-- content -->
</div><!-- container -->
</body>
</html>
