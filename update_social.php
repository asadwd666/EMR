<?php 
include ('header.php');
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
        input[type=text]{
            border:none;
            border-bottom:1px solid salmon;
        }
    </style>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
                  
                  $categories=mysqli_query($conn,"SELECT * FROM social_history  WHERE patient_id='$patient_id'");
   $i=1;
   if(mysqli_num_rows($categories) > 0){
   while($row=mysqli_fetch_array($categories)){
   
   ?>
 
 <p style="color:red"><b>edit Social History</b> </p>
   <form action="#" class="newform" method="post">
 
       <table class="table edit"  border="0" cellspacing="0">
 
 
       <input type="hidden" name="id" required value="<?php echo $row['id'];?>">
       <?php
    
       ?>
 
 
   <tr><th>smoking : </th><td>
   <input type="text" name="new1"   value="<?php echo $row['Smoking'];?>"/>
   </td></tr>
   <tr><th> How Much : </th><td>
   <input type="text" name="new2"   value="<?php echo $row['How_Much_Smoke'];?>"/>
   </td></tr>
   <tr><th> How often </th><td>
   <input type="text" name="new3"   value="<?php echo $row['How_often_Smoke'];?>"/>
   </td></tr>
   <tr><th> Drugs :</th><td>
   <input type="text" name="new4"   value="<?php echo $row['Drugs'];?>"/>
   </td></tr>
   <tr><th> How Much :</th><td>
   <input type="text" name="new5"   value="<?php echo $row['How_Much_Drug'];?>"/>
   </td></tr>
   <tr><th> How often :</th><td>
   <input type="text" name="new6"   value="<?php echo $row['How_Often_Drug'];?>"/>
   </td></tr>
   <tr><th> Live with :</th><td>
   <input type="text" name="new7"   value="<?php echo $row['Live_With'];?>"/>
   </td></tr>
   <tr><th>Functional Status :</th><td>
   <input type="text" name="new8"   value="<?php echo $row['Functional_Status'];?>"/>
   </td></tr>

   </table>
 <input class="btn btn-info" style="background-color:salmon;color:white" name="update" id="button" type="submit" value="update">
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
    $new6=$_POST['new6'];
    $new7=$_POST['new7'];
    $new8=$_POST['new8'];
   
    $query=mysqli_query($conn,"UPDATE `social_history` SET  `Smoking`='$new1' ,`How_Much_Smoke`='$new2',`How_often_Smoke`='$new3' ,
    `Drugs`='$new4',`How_Much_Drug`='$new5',`How_Often_Drug`='$new6',`Live_With`='$new7',`Functional_Status`='$new8',`status`='unverified' where id='$id'");
    if($query){
        echo "succesfully update";
      echo "<script>setTimeout(() => {
      window.location='profile.php?ptype=social_History';
      }, 1000);</script>";
      }else{
        echo "something went wrong";
      }
}