


<!DOCTYPE html>
<html lang="en">
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
nav ul li a:active{
    border-bottom:1px solid salmon;
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
    
  .icon img{
  }
 
  </style>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>

</head>



  


<body>
   



 

<nav class="navbar">
  
    <a href="#" class="toggle">
        <span class="bar"></span>
        <span class="bar"></span>
        <span class="bar"></span>
    </a>
    <h3>EMR</h3>
    
    <div  class="navbar-links">
    

        <ul>
       
       <li><a class="nav-link" href="home.php"><pre>Home</pre></a></li> 
       <li> <a class="nav-link" href="profile.php?ptype=record" ><pre>My Medical Record</pre></a></li>
        <li><a class="nav-link" href="profile.php?ptype=about"><pre>About Us</pre></a></li>
        
       <li><a class="nav-link" href="contact_us.php"><pre>Contact</pre></a></li> 
       <li><a class="nav-link" id="bell" href="profile.php?ptype=notification">    <img width="15px"  src="img/bell-solid.svg" alt="" >
</a></li> 
       <li> <a class="nav-link" href="logout.php"><pre>Logout</pre></a></li>
      
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

</body>




  


</html>








