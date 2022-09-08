<?php
include ('header.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <style>
        h5{
            display:none;
        }
        .oldtab{
            display:none;
        }
    </style>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
                  
                  $categories=mysqli_query($conn,"SELECT * FROM miscellaneous  WHERE patient_id='$patient_id'");
   $i=1;
   if(mysqli_num_rows($categories) > 0){
   while($row=mysqli_fetch_array($categories)){
   
   ?>
 <br>
 <p style="color:red"><b>Edit Miscellaneous Record</b> </p>
   <form action="#" class="newform" method="post" enctype="multipart/form-data">
 
       <table class="table edit"  border="0" cellspacing="0">
 
 
       <input type="hidden" name="id" required value="<?php echo $row['id'];?>">
       <?php
    
       ?>
 
 
   
   <tr><th>Document : </th><td>
   <a href="doctors/Miscellaneous/<?php echo $row['Document']; ?>" target="_blank"><?php echo $row['Document'];?></a>
   <input type="file" name="image" id="myfile" />
   </td></tr>
   <tr><th>Additional Notes: </th><td>

   <input type="text" name="new1"   value="<?php echo $row['Additional_Notes'];?>"/>
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
error_reporting(0);

   $patient_id=$_SESSION['USER']->id;
   if(isset($_POST["update"])){ 
$id=$_POST['id'];

  

   if(!empty($_FILES["image"]["name"])) { 
    // Get file info 
    $fileName = basename($_FILES["image"]["name"]); 
    // $fileType = pathinfo($fileName, PATHINFO_EXTENSION); 
    $file_tmp=$_FILES['image']['tmp_name'];
    $size = $_FILES['image']['size'];
    $destination = 'doctors/Miscellaneous/' . $fileName;
    $file = $_FILES['image']['tmp_name'];
    // $allowTypes = array('jpg','pdf','jpeg',); 

   
   
     

  
        move_uploaded_file($file, $destination);
    }

        
    
    
 
     
      




        $new1=$_POST['new1'];


$insert = $conn->query("UPDATE `miscellaneous` SET  Additional_Notes='$new1', Document='$fileName',status='unverified' where id='$id'"); 
             
if($insert){ 
    echo "succesfully updated";
    echo "<script>setTimeout(() => {
    window.location='profile.php?ptype=additional';
    }, 1000);</script>";
}
      }
   


   


