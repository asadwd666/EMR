<?php
define('letsgo',true);
session_start();
include ('Mymedicalrecord.php');

include "db_connection/connection.php";
$patient_id=$_SESSION['USER']->id;
?>
<html>
<head>

    <style>
        span{
    float:left;
    margin-left:380px;
    color:black;
    
    margin-top:2px;
    
    background:none;
    width:100%;
        }
  
     
      span{
    float:left;
    margin-left:380px;
    color:black;
    
    margin-top:-46rem;
    
    background:none;
    width:100%;
  }
        
.container{
  float:right;
         margin-top:-45rem;
          margin-right:210px;
          border-radius:5px;
          padding:20px;
          width:60%
}
#top{
    width:100%;
      height:40px;
      background-color:salmon;
      color:white;
      
}
#top1{
    width:100%;
      height:60px;
      background-color:salmon;
      color:white;
      
}
#bottom{
    
            width:100%;
            height:auto;
           
}
.button{
    border-radius: .4rem;
    float:right;
    margin:10px;
    padding:16px;
    
    background-color:salmon;
	color:white;
   
    cursor: pointer;
  }

.txt{
    width:200px;
    height:30px;
   border-radius:10px;
   border:none;
    padding:10px;
  
    background-color:lightgray;
    color:white;
    
}

p{
  color:Red;
  font-size:10px;
 
}
label{
    margin-left:5px;
    font-weight: bold;
      font-family: 'Libre Baskerville', serif;
}

   
  @media only screen and (max-width: 850px) {
 
  span{
    float: left;
        margin-left:12rem;
        color: black;

        margin-top: -40rem;
        font-size:10px;
        background: none;
        width: 60%;
  }

            .container{
              float:right;
        
        margin-right:5px;
        border-radius:5px;
        padding:20px;
        width:60%;
      
            }
            #left_bar {
        display: flex;
        font-size: 5px;
        width: 6rem;
        margin-top:0.1rem;
       
      }

      .toggle {
        display: block;
        z-index: 1;

      }

      .toggle .bar {
        height: 3px;
        width: 100%;
        background-color: salmon;
        border-radius: 10px;
        margin-top: 0.3rem;
        margin-left: -0.5rem;


      }
        }
</style>

</head>
<body>
<div class="container">
    <form action="#" method="post" class="sign-in-form" enctype="multipart/form-data">
          <h2 class="title">CLINICAL DOCUMENTS</h2><br><br>
       
         

         <section id="top"><br><label for="Doc">Upload Documents</label><br></section><section id="bottom"> <br><input type="file" name="doc" ><br> <p>File upload must be in pdf</p></section>
         <hr>
<br><br>


<section id="top"><br><label for="Doc2">Upload Radiology Images e.g. Xrays, CT Scan Reports</label><br> <br></section><section id="bottom"><br><input type="file" name="doc2" > <br> <p>File upload must be image as jpg or jpeg</p></section>
<hr>
<section id="top"> <br><label for="Doc3"> Upload Blood Reports</label><br> <br></section><section id="bottom"><br><input type="file" name="doc3" ><br> <p>File upload must be in pdf</p></section>
<hr>

<section id="top"> <br><label for="doc4"><label>Add Additional notes here
</label></section><section id="bottom"><br> <input type="text" class="txt" name="doc4" placeholder="Type here"><br> 
<hr>
              <input type="submit" value="Save" name="add" class="button">
      
        </form>
</body>
    </html>
    <?php

include "forgotpassword/connection.php";


$message='';


  if (isset($_POST['add'])) {
    $patient_id=$_SESSION['USER']->id;

$file_name=$_FILES['doc']['name'];
$file_name2=$_FILES['doc2']['name'];
$file_name3=$_FILES['doc3']['name'];
//$one=$_POST['doc'];
//$two=$_POST['doc2'];
//$three=$_POST['doc3'];
$file_name4=$_POST['doc4'];
$target_dir="doctors/clinical_db_data/";
$target_file1=$target_dir . basename($file_name);
$target_file2=$target_dir . basename($file_name2);
$target_file3=$target_dir . basename($file_name3);

$docfile1type=strtolower(pathinfo($target_file1, PATHINFO_EXTENSION));
$docfile2type=strtolower(pathinfo($target_file2, PATHINFO_EXTENSION));
$docfile3type=strtolower(pathinfo($target_file3, PATHINFO_EXTENSION));
$check1=getimagesize($_FILES['doc']['tmp_name']);
$check2=getimagesize($_FILES['doc2']['tmp_name']);
$check3=getimagesize($_FILES['doc3']['tmp_name']);

/*$extension1=substr($file_name, strlen($file_name)-4 ,strlen($file_name));

$extension1=substr($file_name2, strlen($file_name2)-4 ,strlen($file_name2));

$extension1=substr($file_name3, strlen($file_name3)-4 ,strlen($file_name3));*/
$fileType1 = pathinfo($file_name, PATHINFO_EXTENSION); 
$fileType2 = pathinfo($file_name2, PATHINFO_EXTENSION); 
$fileType3 = pathinfo($file_name3, PATHINFO_EXTENSION); 

//$allowed_extension=array(".jpg" , ".jpeg", ".pdf",);
$allowTypes = array('pdf');
$allowTypes2 = array('jpg','jpeg',);
$allowTypes3 = array('pdf',);

// working
  /*if(in_array($fileType1, $allowTypes) || in_array($fileType2, $allowTypes || in_array($fileType3, $allowTypes)) ){ 
move_uploaded_file($_FILES["doc"]["tmp_name"], $target_file1);
move_uploaded_file($_FILES["doc2"]["tmp_name"], $target_file2);
move_uploaded_file($_FILES["doc3"]["tmp_name"], $target_file3);*/
///////////////


if(in_array($fileType1, $allowTypes) || in_array($fileType2, $allowTypes2 || in_array($fileType3, $allowTypes3)) ){
  move_uploaded_file($_FILES["doc"]["tmp_name"], $target_file1);
  move_uploaded_file($_FILES["doc2"]["tmp_name"], $target_file2);
  move_uploaded_file($_FILES["doc3"]["tmp_name"], $target_file3);
  $query2=mysqli_query($conn,"DELETE FROM `clinical_report` WHERE patient_id='$patient_id'" );

$query=mysqli_query($conn,"INSERT INTO `clinical_report`( `Document`, `Radiology_Images`, `Blood_Reports`, `Additional_Notes`, `patient_id`)
 VALUES('$file_name','$file_name2','$file_name3','$file_name4',' $patient_id')");
  if($query)
  {
  
  
    echo '<script>alert("your form hasbeen succesfully saved");
   window.location="profile.php?ptype=clinic";</script>';
    
  }
  else{
    echo '<script>alert("Something Went Wrong");
    window.location="profile.php?ptype=clinic";</script>';
  }
  }
  else{
    echo "<p>Wrong file extension</p>";
  }
  }
  ?>