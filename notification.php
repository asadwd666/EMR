<?php
session_start();


include "db_connection/connection.php";
$patient_id=$_SESSION['USER']->id;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <style>
        .form-control{
            border-radius:10px;
            width:20rem;
        }
        .image{
		display:none;
	}
    .container{
        position:absolute;
        top:14rem;
        left:5rem;
    }
    </style>
   
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <div class="error"></div>
<?php
  $categories=mysqli_query($conn,"SELECT * FROM tmp_table WHERE patient_id='$patient_id' and status='doctor'");
  if(mysqli_num_rows($categories) > 0){
    while($row=mysqli_fetch_array($categories)){
        ?>
        <b>Requests from Doctor :</b>
        <?php
    echo $row['tmp_value'];
    }
    ?>
    <br>
    <h5>Replay</h5>
    <br>
    <div class="form">
    <form action="#" method="post">
    
 
  <textarea class="form-control" name="newdata" id="new" rows="3"></textarea>
  <input type="submit" value="Send" id="btn" name="send">

    </form>
    </div>
    <?php
}else{
    echo '<script>
   const error= document.querySelector(".error");
   error.innerHTML="no data to show";
   error.style.color="red";
   error.style.background="beige";
   error.style.padding="10px";
    </script>'
    ;
}

?>
</div>
</body>
</html>
<?php
if(isset($_POST['send'])){
    $data=$_POST['newdata'];

    $query=mysqli_query($conn,"INSERT INTO `tmp_table`(`patient_id`, `tmp_value`, `status`) VALUES ('$patient_id','$data','patient')");
    if($query){

     

       echo  "succesfully sended";
       echo "<script>setTimeout(() => {
              window.location='home.php';
              }, 2000);</script>";
    }

}

$categories=mysqli_query($conn,"SELECT * FROM tmp_table WHERE patient_id='$patient_id' and status='patient'");
if(mysqli_num_rows($categories) > 0){
    $delete=mysqli_query($conn,"DELETE FROM `tmp_table` WHERE patient_id='$patient_id' and status='doctor' ");

}