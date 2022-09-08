<?php
include('header.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <style>
         <style>
           .clinic{
            display:none;
        }
        .oldtab{
            display: none;
        }
        h5{
            display:none;
        }
        input[type=text]{
            border:none;
            border-bottom:1px solid salmon;
        }
    </style>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css">

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
                  
                  $categories=mysqli_query($conn,"SELECT * FROM clinical_report  WHERE patient_id='$patient_id'");
   $i=1;
   if(mysqli_num_rows($categories) > 0){
   while($row=mysqli_fetch_array($categories)){
   
   ?>
 <br>
 <p style="color:red"><b>Edit Clinical History</b> </p>
   <form action="#" class="newform" method="post" enctype="multipart/form-data">
 
       <table class="table edit"  border="0" cellspacing="0">
 
 
       <?php
    
       ?>
 
 
 <input type="hidden" name="id" required value="<?php echo $row['id'];?>">
 
   <tr><th>Documents : </th><td>
   <a href="doctors/clinical_db_data/<?php echo $row['Document']; ?>" target="_blank"><?php echo $row['Document'];?></a>
   <input type="file" name="doc" id="myfile" />
   </td>
   <p style="font-size:10px">* Document file needs to be in pdf </p>
   <p style="font-size:10px">* Radiology image file can be jpg or jpeg</p>
   <p style="font-size:10px">* blood report needs to be in pdf </p>

</tr>
   <tr><th>Radiology images : </th><td>
   <a href="doctors/clinical_db_data/<?php echo $row['Radiology_Images']; ?>" target="_blank"><?php echo $row['Radiology_Images'];?></a>
   <input type="file" name="doc2" id="myfile" />
   </td></tr>
   <tr><th>Blood Report : </th><td>
   <a href="doctors/clinical_db_data/<?php echo $row['Blood_Reports']; ?>" target="_blank"><?php echo $row['Blood_Reports'];?></a>
   <input type="file" name="doc3" id="myfile" />
   </td></tr>
   <tr><th>Additional Notes: </th><td>
   <input type="text" name="doc4"   value="<?php echo $row['Additional_Notes'];?>"/>
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

$patient_id=$_SESSION['USER']->id;
if(isset($_POST["update"])){ 
$id=$_POST['id'];



    $file_name=$_FILES['doc']['name'];
$file_name2=$_FILES['doc2']['name'];
$file_name3=$_FILES['doc3']['name'];

$file_name4=$_POST['doc4'];
$target_dir="doctors/clinical_db_data/";
$target_file1=$target_dir . basename($file_name);
$target_file2=$target_dir . basename($file_name2);
$target_file3=$target_dir . basename($file_name3);

$docfile1type=strtolower(pathinfo($target_file1, PATHINFO_EXTENSION));
$docfile2type=strtolower(pathinfo($target_file2, PATHINFO_EXTENSION));
$docfile3type=strtolower(pathinfo($target_file3, PATHINFO_EXTENSION));
// $check1=getimagesize($_FILES['doc']['tmp_name']);
// $check2=getimagesize($_FILES['doc2']['tmp_name']);
// $check3=getimagesize($_FILES['doc3']['tmp_name']);


// $fileType1 = pathinfo($file_name, PATHINFO_EXTENSION); 
// $fileType2 = pathinfo($file_name2, PATHINFO_EXTENSION); 
// $fileType3 = pathinfo($file_name3, PATHINFO_EXTENSION); 


// $allowTypes = array('pdf');
// $allowTypes2 = array('jpg','jpeg',);
// $allowTypes3 = array('pdf',);




// if(in_array($fileType1, $allowTypes) || in_array($fileType2, $allowTypes2 || in_array($fileType3, $allowTypes3)) ){
  move_uploaded_file($_FILES["doc"]["tmp_name"], $target_file1);
  move_uploaded_file($_FILES["doc2"]["tmp_name"], $target_file2);
  move_uploaded_file($_FILES["doc3"]["tmp_name"], $target_file3);

$insert = $conn->query("UPDATE `clinical_report` SET  Document='$file_name', Radiology_Images='$file_name2',Blood_Reports='$file_name3',Additional_Notes='$file_name4',status='unverified' where id='$id'"); 
if($insert){
    echo "succesfully updated";
    echo "<script>setTimeout(() => {
    window.location='profile.php?ptype=clinic';
    }, 1000);</script>";

}
}