<?php

	require "mail.php";
	require "functions.php";
	check_login();
	$error='';

	$errors = array();

	if($_SERVER['REQUEST_METHOD'] == "GET" && !check_verified()){

		//send email
		$vars['code'] =  rand(10000,99999);

		//save to database
		$vars['expires'] = (time() + (60 * 10));
		$vars['email'] = $_SESSION['USER']->email;

		$query = "insert into verify (code,expires,email) values (:code,:expires,:email)";
		database_run($query,$vars);

		$message = "your code is " . $vars['code'];
		$subject = "Email verification";
		$recipient = $vars['email'];
		send_mail($recipient,$subject,$message);
		
	}

	if($_SERVER['REQUEST_METHOD'] == "POST"){

		if(!check_verified()){

			$query = "select * from verify where code = :code && email = :email";
			$vars = array();
			$vars['email'] = $_SESSION['USER']->email;
			$vars['code'] = $_POST['code'];

			$row = database_run($query,$vars);

			if(is_array($row)){
				$row = $row[0];
				$time = time();

				if($row->expires > $time){

					$id = $_SESSION['USER']->id;
					$query = "update users set email_verified = email where id = '$id' limit 1";
					
					database_run($query);

					header("Location: profile.php");
					die;
				}else{
					$error= "<span>Code expired</span>";
				}

			}else{
				$error= "<span>wrong code</span>";
			}
		}else{
			$error= "<span>You're already verified</span>";
		}
	}

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Verify</title>
	
	<style>
		h1{
			color:salmon;
		}

.container{
	background-color:white;
	
	
	
}
.btn {
  width: 60px;
  background-color: salmon;
  border: none;
  outline: none;
  height: 39px;
  border-radius: .3rem;
  /* display: block; */
  color: #fff;
  
  font-weight: 600;
  margin-left:14rem;
  cursor: pointer;
  transition: 0.5s;
}
input{
	background-color:snow;
	padding:10px;
	
	border-radius:10px;
	border:1px solid salmon;
}
.btn:hover {
  background-color: white;
  color:salmon;
  box-shadow: 10px 5px salmon;
  border:1px solid salmon;
}


.container{
	background-color:white;
	width:60%;
	height:80%;
	box-shadow:10px 0px 10px 0px salmon;
	margin-left:15rem;
}

	
	p{
		color:black;
		  font-family: system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;

	}
	</style>
	
</head>
<body>



	<h1>Verifing Profile</h1><br>
	<?php
	echo $error;?>

	
  
	<br><br>
 	<div class=" container">
			<br><p>An Email Has Been Sent to your Email Address. Paste the code from the Email here<p><br>
		<div>
			<?php if(count($errors) > 0):?>
				<?php foreach ($errors as $error):?>
					<?= $error?> <br>	
				<?php endforeach;?>
			<?php endif;?>

		</div><br>
		<form method="post" class="asd">
		
		<br><br><br>
			&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp <input type="text" name="code" placeholder="Enter your Code" class="txt"><br>
 			<br>
			<input type="submit" value="Verify" class="btn">
		</form>
	</div>
	</div>

</body>
</html>