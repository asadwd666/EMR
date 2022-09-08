
<?php
include("../db_connection/connection.php");

?>

	<style>
		/* 'Open Sans' font from Google Fonts */
@import url(https://fonts.googleapis.com/css?family=Open+Sans:400,700);

body {
  background: #456;
  font-family: 'Open Sans', sans-serif;
}
.btn:hover{
	background-color:white;
	color:salmon;
	border:1px solid salmon;
}
.login {
  width: 400px;
  margin: 16px auto;
  font-size: 16px;
}

/* Reset top and bottom margins from certain elements */
.login-header,
.login p {
  margin-top: 0;
  margin-bottom: 0;
}

/* The triangle form is achieved by a CSS hack */
.login-triangle {
  width: 0;
  margin-right: auto;
  margin-left: auto;
  border: 12px solid transparent;
  border-bottom-color: salmon;
}

.login-header {
  background: salmon;
  padding: 20px;
  font-size: 1.4em;
  font-weight: normal;
  text-align: center;
  text-transform: uppercase;
  color: #fff;
}

.login-container {
  background: #ebebeb;
  padding: 12px;
}

/* Every row inside .login-container is defined with p tags */
.login p {
  padding: 12px;
}

.login input {
  box-sizing: border-box;
  display: block;
  width: 100%;
  border-width: 1px;
  border-style: solid;
  padding: 16px;
  outline: 0;
  font-family: inherit;
  font-size: 0.95em;
}

.login input[type="email"],
.login input[type="password"] {
  background: #fff;
  border-color: #bbb;
  color: #555;
}

/* Text fields' focus effect */
.login input[type="email"]:focus,
.login input[type="password"]:focus {
  border-color: #888;
}

.login input[type="submit"] {
  background: salmon;
  border-color: transparent;
  color: #fff;
  cursor: pointer;
}

.login input[type="submit"]:hover {
  background: white;
  color:salmon;
  border:1px solid salmon;
}

/* Buttons' focus effect */
.login input[type="submit"]:focus {
  border-color: #05a;
}
span{
	
	color:white
}
	</style>


	<div class="login">
  <div class="login-triangle"></div>
  
  <h2 class="login-header"> Doctors Login</h2>

  <form class="login-container" method="post">
  <?php
	 error_reporting(0);
     
	 if(!empty($_POST['uname']) && !empty($_POST['upass'])){
     $select="SELECT * FROM `doctors` WHERE  userid='".$_POST['uname']."' AND password='".$_POST['upass']."'";
     $query=mysqli_query($conn,$select);
	 $fetch=mysqli_fetch_array($query);
	 $count=mysqli_num_rows($query);
	 if($count>=1){
		 session_start();
		 $_SESSION['uname']=$fetch['userid'];
		
		 $_SESSION['upass']=$fetch['password'];
         
		 header("location:index.php");
	 }else{
		 echo"<font color=red>User Not exist..</font>";
	 }
	 }else{
		 echo"<font color=green>Please Fill All fields</font>";
	 }
	 
	 ?>
    <p><input type="text" placeholder="User Name" name="uname"></p>
    <p><input type="password" placeholder="Password" name="upass"></p>
    <p><input type="submit" class="btn" value="Log in"></p>
  </form>
</div>