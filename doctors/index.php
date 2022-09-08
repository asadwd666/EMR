<?php
     include('../db_connection/connection.php');
    
session_start();
if($_SESSION['uname']==''){
	?>
	<script>
	window.location="login.php";
	</script>
	<?php
}




?>
<head>
  <style>
       *{
        margin:0;
        padding:0;
        box-sizing: border-box;
    }
    .navbar-links {
      background-color:white;
      box-shadow:5px 5px 10px 0 rgb(0, 0, 0, 0.3);
      height:10vh;
      display:flex;
      justify-content:right;
      align-items: center;
      
      width:100%;
     
      
    }
     h3{
        color:salmon;
        position :absolute;
        left:2rem;
        top:1rem;
        font-size:30px;
        align:center;
    }
    .navbar-links ul{
     display: flex;
     justify-content:center;
     align-items:center;
     margin-right:3rem;
    
    
   
     gap: 2rem;
    }
    .navbar-links li{
      
        color:white;
		margin-top:1rem;
		padding: 5px;
		border-radius:10px;
        list-style: none;
      
      
       
    }
    
    
    .navbar-links a{
      text-decoration :none;
    
      gap:2rem;
      color:black;
      font-size: 18px;
      font-family:none;
      
  
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    }
     li:hover{
        color:salmon;
        background-color:white;
        box-shadow:2px 3px 4px 5px salmon;
       
        
      
    }
    a:hover{
        color:salmon;
    }

    .toggle{
    position: absolute;
    color:black;
    top:1rem;
    right:1rem;
    display:none;
    flex-direction: column;
    justify-content:space-between ;
    width:30px;
    height:21px;
}

.toggle .bar{
    height: 3px;
    width:100%;
    background-color:#333;
    border-radius: 10px;
}
@media (max-width :500px){
    .toggle{
        display:flex;
    }
    .navbar-links{
        width: 100%;
        flex-direction: column;
        display:none;
   
 

       
   
  
    

    }
    nav{
        background-color:white;
      box-shadow:5px 5px 10px 0 rgb(0, 0, 0, 0.3);
      height:10vh;
      display:flex;
      justify-content:right;
      align-items: center;
      
      width:100%;

    }
    nav h3{
        
        color:salmon;
        position :absolute;
        left:2rem;
        font-size:30px;
        align:center;
    
    }
    .navbar-links h3{
        color:salmon;
        position :absolute;
        left:2rem;
        font-size:30px;
        align:center;
    }
   
    .navbar-links ul{
       
        width:42%;
        height:auto%;
        background-color: white;
        /* margin-left:-19rem; */
        
     z-index:1;
      left:19rem;
       
        flex-direction: column;
     position:absolute;
     top:4rem;
     gap:0;
     
     background-color:white;
     box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;
     
  
    }
    
    .navbar-links a{
        font-size:10px;
    }
    .navbar-links.active{
        display: flex;
       
        
    }
  }
  </style>
  <title>doctors</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
<!-- <link rel="stylesheet" href="styles.css" class="css"> -->
	<link href="https://fonts.googleapis.com/css2?family=Poppins" rel="stylesheet">
	<script src="https://kit.fontawesome.com/a076d05399.js"></script>
</head>
 












<nav class="navbar">
  
    <a href="#" class="toggle">
        <span class="bar"></span>
        <span class="bar"></span>
        <span class="bar"></span>
    </a>
    <h3>EMR</h3>
    
    <div  class="navbar-links">
    
    <ul>
        <li><a class="active" href="index.php">Home</a></li>
        <li><a href="index.php?ptype=patients_record">Patients Record</a></li>
        
        
        <li><a href="logout.php">Logout</a></li>
      </ul>
    

    </div>
    
</nav>
<script>
    const toggle=document.getElementsByClassName('toggle')[0]
  const navlinks=document.getElementsByClassName('navbar-links')[0]
  
  toggle.addEventListener('click',()=>{
      navlinks.classList.toggle('active')
     
  })
  </script>











	


    
<?php
define('MYSITE',true);

//include "premium.php"; ?>

<?php
error_reporting(0);
if($_REQUEST['ptype']=='patients_record'){

 
	include('patients_record.php');
   
			  
  }
  elseif($_REQUEST['ptype']=='doctors'){

 
    include('doctors.php');
     
          
    }