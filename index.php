<?php
$errors=array();
require "functions.php";



if($_SERVER['REQUEST_METHOD'] == "POST")
{

	$errors= login($_POST);

	if(count($errors) == 0)
	{
		header("Location: profile.php");
		die;
	}
}

?>

<html lang="en">

<head>
<style>
.btnlink{
  background-color:white;
  padding: 10px 20px;
  text-decoration:none;
  border-radius:1px;
  color:white;
  text-decoration:none;
}
@media (max-width: 870px) {
  #home_img{
    display: none;
  }
}

 
</style>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="css1/index.css" />
  <title>Emr </title>
</head>

<body>
  <div class="container">
    <div class="forms-container">
	
      <div class="signin-signup">
        <form action="#" method="post" class="sign-in-form">
          <h2 class="title">Sign in</h2>
		  
      <div class="error">
			<?php if(count($errors) > 0):?>
				<?php foreach ($errors as $error):?>
					<?= $error?> <br>	
				<?php endforeach;?>
			<?php endif;?>
			
	</div>

          <div class="input-field">
            <i class="fas fa-user"></i>
			
            <input type="text" placeholder="Email Address" name="email" >
          </div>
          <div class="input-field">
            <i class="fas fa-lock"></i>
            <input type="password" placeholder="Password" name="password" >
          </div>
          <input type="submit" value="Login" name="signin" class="btn solid" />
          <p style="display: flex;justify-content: center;align-items: center;margin-top: 20px;"><a href="forgotpassword/forgotpassword.php" style="color: #4590ef;">Forgot Password?</a></p>
        </form>
		
		
		
       
      </div>
    </div>

    <div class="panels-container " >
      <div class="panel left-panel">
        <div class="content">
          <h3>New here ?</h3>
          <p>
            Create Your Account BY Signing up.Click button below.
          </p>
          <a href="signup.php" class="btn btnlink">
            Sign up
          </a>
        </div>
        <!-- <img src="img/log.svg" class="image" alt="" /> -->
      <img src="img/home.png" id="home_img" style="width:300px;z-index:199;margin-right:8rem;" alt="" />

      </div>
      <div class="panel right-panel">

        <div class="content " >
          <h3>One of us ?</h3>
          <p>
            Already registered?Click button below.
          </p>


          <button class="btn transparent" id="sign-in-btn">
            Sign in
          </button>

        </div>

      </div>
    </div>

  </div>

  <script src="https://kit.fontawesome.com/64d58efce2.js" crossorigin="anonymous"></script>
  
</body>

</html>