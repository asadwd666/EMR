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
                  
                  $categories=mysqli_query($conn,"SELECT * FROM family_history  WHERE patient_id='$patient_id'");
   $i=1;
   if(mysqli_num_rows($categories) > 0){
   while($row=mysqli_fetch_array($categories)){
   
   ?>
 <br>
 <p style="color:red"><b>Edit Family History</b> </p>
   <form action="#" class="newform" method="post">
 
       <table class="table edit"  border="0" cellspacing="0">
 
 
       <input type="hidden" name="id" required value="<?php echo $row['id'];?>">
       <?php
    
       ?>
 
 
   <tr><th>Disease : </th><td>
   <input type="text" name="new1"   value="<?php echo $row['diseases'];?>"/>
   </td></tr>
   <tr><th>Family Member : </th><td>
   <input type="text" name="new2"   value="<?php echo $row['family_member'];?>"/>
   </td></tr>
   <tr><th>Other Family Record  : </th><td>
   <input type="text" name="new3"   value="<?php echo $row['other_family_record'];?>"/>
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
    $query=mysqli_query($conn,"UPDATE `family_history` SET  `diseases`='$new1' ,`family_member`='$new2',`other_family_record`='$new3',`status`='unverified' where id='$id'");
    if($query){
        echo "succesfully update";
      echo "<script>setTimeout(() => {
      window.location='profile.php?ptype=family_History';
      }, 1000);</script>";
      }else{
        echo "something went wrong";
      }
}

