<?php
include "db_connection/connection.php";
session_start();
$patient_id=$_SESSION['USER']->id;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <style>
         .oldtab{
            display:none;
        }
        h5{
            display:none;

        }
        #button{
          background-color:salmon;
          padding: 10px;
          border-radius:10px;
          border:none;
        }
        .edit input[type="text"]{
            width:40%;
            height:100%;
            border:none;
            border-bottom:1px solid black;
           
          
        } 
    </style>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
 
    <?php
$categories=mysqli_query($conn,"SELECT * FROM medication  WHERE patient_id='$patient_id'");
   $i=1;
   if(mysqli_num_rows($categories) > 0){
   while($row=mysqli_fetch_array($categories)){
   
   ?>
   <br>
 
 <p style="color:red"><b>edit medical record</b> </p>
   <form action="#" class="newform" method="post">
 
       <table class="table edit"  border="0" cellspacing="0">
 
 
       <input type="hidden" name="id" required value="<?php echo $row['id'];?>">
       <?php
    
       ?>
 
 <tr><th> Allergy </th><td>
   <input type="text" name="new1"   value="<?php echo $row['Allergy'];?>"/>
   </td></tr>
   <tr><th> Regular Medicine </th><td>
   <input type="text" name="new2"   value="<?php echo $row['Regular Medicine'];?>"/>
   </td></tr>
   <tr><th> Frequency </th><td>
   <input type="text" name="new3"   value="<?php echo $row['Frequency'];?>"/>
   </td></tr>
   <tr><th> Dose </th><td>
   <input type="text" name="new4"   value="<?php echo $row['Dose'];?>"/>
   </td></tr>
   <tr><th> Starting date </th><td>
   <input type="date" name="new5"   value="<?php echo $row['Starting_date'];?>"/>
   </td></tr>
   </table>
   <input  name="update" id="button" type="submit" value="update">
   </form>
  

   <?php
   }
}
   ?>
</body>
</html>
<?php

if(isset($_POST['update'])){
    
    $new1=$_POST['new1'];
    $id= $_POST['id'];
 
  
    
    
    
    
   
    $new2=$_POST['new2'];
    
    
  
    $new3=$_POST['new3'];
    $new4=$_POST['new4'];
    $new5=$_POST['new5'];
   
    $query=mysqli_query($conn,"UPDATE `medication` SET  `Allergy`='$new1' ,`Regular Medicine`='$new2',`Frequency`='$new3' ,
    `Dose`='$new4',`Starting_date`='$new5',`status`='unverified' where id='$id'");
    if($query){
        echo "succesfully update";
      echo "<script>setTimeout(() => {
      window.location='profile.php?ptype=medication';
      }, 1000);</script>";
      }else{
        echo "something went wrong";
      }
}