<?php
include 'header.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <style>
        nav ul{
            margin-top:1.7rem;
        }
        nav ul #bell{
            margin-top:-1rem;
        }
       
        #btn{
            background-color:salmon;
        }
       
    </style>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
</head>
<body>
    <div class="container my-4">
      <form action="#" method="post">
        <h5>contact us</h5>



    
        <div  id="success" class="alert alert-success"></div>
        <div class="alert alert-danger" id="failed"></div>
        

         <div class="mb-3">
            <input type="text" class="form-control" name="username"  placeholder="User Name">
        </div>
        <div class="mb-3">
            <input type="email" class="form-control" name="email"  placeholder="Enter Your email here">
        </div>
        <div class="mb-3">
            <input type="text" class="form-control" name="subject"  placeholder="Subject">
        </div>
        
        
       <div class="mb-3">
             <textarea class="form-control" name="message" id="exampleFormControlTextarea1" rows="3" placeholder="Your Message here.."></textarea>
        </div>
        <button name="send" id="btn" class="btn btn-success">Send</button>
        </form>
    </div>
</body>
</html>

<?php
if(isset($_POST['send'])){
$username=$_POST['username'];
$email=$_POST['email'];
$subject=$_POST['subject'];
$msg=$_POST['message'];
if(empty($username) || empty($email) || empty($subject) || empty($msg)){
    echo
     "<script>
    const showMessage=document.getElementById('success').innerHTML='Please fill out field';
    
  
    </script>";
  echo   '<script>
  setTimeout(() => {
        window.location="contact_us.php"
}, 1000);
    </script>';
    // header('location:contact_us.php?error');
}else{
    $to='asadwd666@gmail.com';
    if(mail($to,$subject,$email,$msg))
    {
        echo "<script>
        const showMessage=document.getElementById('success').innerHTML='Your message hasbeen sended';
        </script>";
      echo   '<script>
      setTimeout(() => {
            window.location="contact_us.php"
    }, 2000);
        </script>';
    }else{
        echo "<script>
        const showMessage=document.getElementById('failed').innerHTML='Failed to send';
        </script>";
      echo   '<script>
      setTimeout(() => {
            window.location="contact_us.php"
    }, 2000);
        </script>';
    }
}
}