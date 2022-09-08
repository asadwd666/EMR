<?php
include ('header.php');
error_reporting(0);
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
                  
                  $categories=mysqli_query($conn,"SELECT * FROM immunisation  WHERE patient_id='$patient_id'");
   $i=1;
   if(mysqli_num_rows($categories) > 0){
   while($row=mysqli_fetch_array($categories)){
   
   ?>
 <br>
 <p style="color:red"><b>Edit immunisation History</b> </p>
   <form action="#" class="newform" method="post" enctype="multipart/form-data">
 
       <table class="table edit"  border="0" cellspacing="0">
 
 
       <input type="hidden" name="id" required value="<?php echo $row['id'];?>">
       <?php
    
       ?>
 
 
   <tr><th>Manual Type Immunisation : </th><td>
   <input type="text" name="new1"   value="<?php echo $row['Manual_Type_Immunisation'];?>"/>
   </td></tr>
   <tr><th>File : </th><td>
   <a href="doctors/immunisation_files/<?php echo $row['name']; ?>" target="_blank"><?php echo $row['name'];?></a>
   <input type="file" name="image" id="myfile" />
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
$id=$_POST['id'];

   $patient_id=$_SESSION['USER']->id;
   if(isset($_POST["update"])){ 
   $new1=$_POST['new1'];

   if(!empty($_FILES["image"]["name"])) { 
    // Get file info 
    $fileName = basename($_FILES["image"]["name"]); 
    $fileType = pathinfo($fileName, PATHINFO_EXTENSION); 
    $file_tmp=$_FILES['image']['tmp_name'];
    $size = $_FILES['image']['size'];
    $destination = 'doctors/immunisation_files/' . $fileName;
    $file = $_FILES['image']['tmp_name'];
   
     
    // Allow certain file formats 
    $allowTypes = array('jpg','pdf','jpeg',); 
    if(in_array($fileType, $allowTypes)){ 
        
       
      //  move_uploaded_file($file_tmp,"immunisation_files/".$fileName);
      if (move_uploaded_file($file, $destination)) {
     
      





// $target_dir = "doctors/immunisation_files/";
// $target_file = $target_dir . basename($_FILES["myfile"]["name"]);
// $uploadOk = 1;
// $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
// move_uploaded_file($_FILES["myfile"]["tmp_name"], $target_file);

$insert = $conn->query("UPDATE `immunisation` SET  Manual_Type_Immunisation='$new1', name='$fileName',size='$size',status='unverified' where id='$id'"); 
             
if($insert){ 
    echo "succesfully updated";
    echo "<script>setTimeout(() => {
    window.location='profile.php?ptype=immunisation';
    }, 1000);</script>";
}
      }
    }else{
        echo '<p>Sorry, only JPG, JPEG & pdf files are allowed to upload.</p>';
    }
}
   }






// Allow certain file formats 

   
           
            
        
    
     