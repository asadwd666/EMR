<?php
include ('header.php');
error_reporting(0);
if($_REQUEST['ptype']=='mywebsite'){


include('home.php');
 
	  
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <style>
        .websitehome{
            width:100%;
            height:100vh;
            background-image:url(img/image.jpg);
            background-size:cover;
            background-position:center;
        }
    </style>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="websitehome">
        
   </div>
   <div>
    <!-- <?php
    include 'footer.html';
    ?> -->
   </div>
    
</body>
</html>