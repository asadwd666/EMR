<?php  

require "functions.php";

$errors = array();

if($_SERVER['REQUEST_METHOD'] == "POST")
{

	$errors = signup($_POST);

	if(count($errors) == 0)
		
	{
		
		header("Location: index.php");
	
	}
}

?>
<html>
	<head>
	<style>
	p{
		color:red;
	}
	.signup-forms{
		float:right;
	}
	.error{
		width:370px;
		border:1px;
		background-color:snow;
		height:auto;
	}
	a{
	text-decoration:none;
	padding:10px 20px;
	color:white;
	
	background-color: #5995fd;
	
}
.btnlink{
  background-color:white;
  padding: 10px 10px;
  text-decoration:none;
  border-radius:1px;
  color:salmon;
  text-decoration:none;
}
.btnlink:hover{
	color:salmon;
        background-color:white;
        box-shadow:2px 3px 4px 5px white;
}

	
	 </style>
	 <link rel="stylesheet" href="css1/index.css" />
	
	</head>
	<body>
	
	
	<div class="container">
	

	
    <div class="forms-container">
	
      <div class="signin-signup">
	
	 <form action="#" class="sign-up-forms" method="post">
          <h2 class="title">Sign up</h2>
		    <div class="error">
			<?php if(count($errors) > 0):?>
				<?php foreach ($errors as $error):?>
					<?= $error?> <br>	
				<?php endforeach;?>
			<?php endif;?>
			
	</div>
		  
		
          <div class="input-field">
            <i class="fas fa-user"></i>
            <input type="text" placeholder="Full Name" name="username" >
          </div>
          <div class="input-field">
            <i class="fas fa-envelope"></i>
            <input type="text" placeholder="Email Address" name="email">
          </div>
          <div class="input-field">
            <i class="fas fa-lock"></i>
            <input type="password" placeholder="Password" name="password" >
          </div>
          <div class="input-field">
            <i class="fas fa-lock"></i>
            <input type="text" placeholder="Confirm Password" name="password2" >
          </div>
          <input type="submit" class="btn" name="signup" value="Sign up" />
        </form>
		
		 </div>
		 <div class="panels-container">
      <div class="panel left-panel">
	  
	    <div class="content">
          
        <h4>Wanna go back home?click the Button below</h4><br>
          <a class="btnlink"   href="index.php">
            Home
          </a>
        </div>
        <img src="img/log.svg" class="image" alt="" />
      </div>
	  
	  </div>
	  </div>
		 
    </div>
	
	</div>
	
	
	
	
	
  <script src="https://kit.fontawesome.com/64d58efce2.js" crossorigin="anonymous"></script>
 
	</body>



</html>


  





		
		



     



		
		
		
		
       
     
		
		</body>
		</html>
		
		 
  <script src="app.js"></script>