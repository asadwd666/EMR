<?php
 $message='';
?>
<head>
    <style>
        #btn{
            background-color:salmon;
            color:white;
            width:20%;
            margin-left:60px;
        }
        #typepass2{
            width:40%;
            margin-left:30px;
        }
        #frm{
            margin-top:80px;
            margin-left:100px
        }
        p{
            font-style:italic;
            color:grey;
            float:left;
        }
        span{
            color:blue;
            font-style:italic;
            float:top;
        }
        .message{
            float:left;
           
            margin-top:-230px;
            color:white;
            margin-left:120px;
            width:40%;
            height:30px;
        }
      
        </style>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Poppins" />
</head>

    </div>
<form id="frm" class="text-center border border-light p-4" action="#" method="post">
    <p>Please enter your password again to proceed with deletion of selected medical record</p><br><br>
<input type="password" name="password2" id="typepass2" class="form-control mb-4" placeholder=" password..."> 
<br>
<button class="btn admin-reg-btn btn-block" id="btn" name="submit2" type="submit">Confirm</button><br>
</form>

<?php


include('../db_connection/connection.php');
if(isset($_POST['submit2']))
{
$text=$_POST['password2'];

if(!empty($text)){
    $check=mysqli_query($conn,"select * from admin where password='".$text."' ");
    $fetch=mysqli_fetch_array($check);
    $count=mysqli_num_rows($check);
    if($count>=1){
        echo "<span>user exist</span>";
       echo '<script>
       window.location="code.php"
       </script>'
       ;
        
    }
    else{
        echo  "<div class='message'><span> Wrong Password</span></div>";
    }
}
else{
    echo "<div class='message'><span>Please Fill In the field</span></div>";
}
}