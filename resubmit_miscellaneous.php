<?php

session_start();
include ('Mymedicalrecord.php');

include "db_connection/connection.php";
$patient_id=$_SESSION['USER']->id;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <style>
       
          span{
    float:left;
    margin-left:380px;
    color:black;
    
    margin-top:-40rem;
    
    background:none;
    width:100%;
        }
      p{
    float:left;
        margin-left:300px;
        margin-top:-420px;
      color:red;
      font-style:italic;
  }
.txt{
    width:200px;
    height:30px;
    margin-left:30px;
    margin-top:30px;
    padding:2px 10px 8px 2px;
    border:2px solid skyblue;
    background-color:snow;
    width:400px;
    height:110px;
    
}

.button{
    border-radius: .4rem;
    float:right;
    margin-top:80px;
    margin-right:10px;
    padding:16px;
    
    background-color:salmon;
	color:white;
   
    cursor: pointer;
  }
  h2{
      margin-top:30px;
      margin-left:280px;
  }

  .container{
  float:right;
         
          margin-right:250px;
          margin-top:-50rem;
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
   
@media only screen and (max-width: 550px) {
           
  
  #left_bar{
    display: flex;
        font-size: 5px;
        width: 6rem;
       margin-top:-6rem;
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
  span{
    float:left;
    margin-left:10rem;
    color:black;
    
    margin-top:-40rem;
    font-size:10px;
    background:none;
    width:100%;
  }
  .txt{
    width:200px;
  }
  .container{
                float:left;
         
        margin-left:10rem;
          border-radius:5px;
          padding:20px;
          width:60%;
        margin-top:-45rem;
            }

            
    h2{
        margin-left:20px;
    }
    p{
    float:left;
        margin-left:100px;
        margin-top:-490px;
      color:red;
      font-style:italic;
  }
        
        }
</style>
    
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<div class="container">
    <form action="#" method="post" class="sign-in-form" enctype="multipart/form-data">
          <h2 class="title">MISCELLANEOUS</h2><br><br>
       
        

         <section id="top"><br> <label for="Doc">Upload Requested Documents</label><br></section><section id="bottom"> <br><input type="file" name="doc"  >  </td>
       
<br><br>




<section id="top"><br>
 <label for="Doc2">Add additional Notes</label><br> </section><section iod="bottom"><br><textarea name="doc2" class="txt" placeholder="Type here" cols="50" row="10" ></textarea>  </td>




         
              <input type="submit" value="Save" name="add" class="button">
      
        </form>

</div>


</table>

</body>
</html>
<?php
session_start();
include "forgotpassword/connection.php";



?>
<?php
session_start();
 $patient_id=$_SESSION['USER']->id;
 $add_notes=$_POST['doc2'];

 $status = $statusMsg = ''; 
 if(isset($_POST["add"])){ 
     $status = 'error'; 
     if(!empty($_FILES["doc"]["name"])) { 
         // Get file info 
         $fileName = basename($_FILES["doc"]["name"]); 
         $fileType = pathinfo($fileName, PATHINFO_EXTENSION); 
         $file_tmp=$_FILES['doc']['tmp_name'];
         $size = $_FILES['doc']['size'];
         $destination = 'doctors/Miscellaneous/' . $fileName;
         $file = $_FILES['doc']['tmp_name'];
        
        
          
         // Allow certain file formats 
         $allowTypes = array('jpg','pdf','jpeg',); 
         if(in_array($fileType, $allowTypes)){ 
             
            
           //  move_uploaded_file($file_tmp,"immunisation_files/".$fileName);
           if (move_uploaded_file($file, $destination)) {
    $query2=mysqli_query($conn,"DELETE FROM `miscellaneous` WHERE patient_id='$patient_id'" );
          
           
             $insert = $conn->query(" INSERT INTO miscellaneous(`Document`, `Additional_Notes`, `patient_id`) VALUES ('$fileName','$add_notes','$patient_id')"); 
              
             if($insert){ 
                 $status = 'success'; 
                 echo '<script>alert("your form hasbeen succesfully saved");
window.location="profile.php?ptype=additional";</script>';
             }else{ 
                 $statusMsg = "<p>File upload failed, please try again.</p>"; 
             }  
              
         }
           
            
          
             // Insert image content into database 
           
         }else{ 
             $statusMsg = '<p>Sorry, only JPG, JPEG & pdf files are allowed to upload.</p>'; 
         } 
     }else{ 
         $statusMsg = '<p>Please select a file to upload.</p>'; 
     } 
 } 
  
 // Display status message 
 echo $statusMsg; 
 ?>
