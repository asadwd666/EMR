<?php

session_start();
include ('Mymedicalrecord.php');

include "db_connection/connection.php";
$patient_id=$_SESSION['USER']->id;
?>
<html>
<head>
   
    <style>
.txt{
    width:200px;
    height:30px;
    margin-left:30px;
    margin-top:30px;
    padding:2px 10px 8px 2px;
    border:2px solid skyblue;
    background-color:snow;
    
}

.container{
  float:right;
         margin-top:-35rem;
          margin-right:120px;
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
  .button:hover{
    background:white;
    color:black;
    border:1px solid salmon;
  }
  h2{
      margin-top:30px;
      margin-left:280px;
  }


  p{
   color:red;
   margin-left:25rem;
   margin-top:-30rem;
  }
  span {
    float: left;
     margin-left:25rem;
      color: black;
margin-top:-20rem;

      width: 100%;
    }
    .img_msg{
    float:left;
        
      color:black;
      font-style:italic;
  }
@media only screen and (max-width: 550px) {
    #left_bar{
      display: flex;
        font-size: 5px;
        width: 6rem;
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
    margin-left:15rem;
    color:black;
    font-size:10px;

    margin-top:-25rem;
    
    
    background:none;
    width:100%;
  }
  .img_msg{
    float:left;
        
      color:black;
      font-style:italic;
  }
   
  
            .container{
                float:left;
         font-size:10px;
        margin-left:9rem;
          border-radius:5px;
          padding:20px;
          width:60%;
        margin-top:-15rem;
            }
            
    h2{
        margin-left:20px;
    }
   p{
    font-size:10px;
    margin-left:15rem;
    margin-top:-10.6rem;
   }
        
        }

</style>
</head>
<body>


<?php
        $categories=mysqli_query($conn,"SELECT * FROM immunisation WHERE patient_id='$patient_id'");
      if(mysqli_num_rows($categories) > 0){
          
      
        $categories=mysqli_query($conn,"SELECT * FROM immunisation WHERE patient_id='$patient_id' and status='unverified'");
        if(mysqli_num_rows($categories) > 0)
        {
          echo "<span>Thank you for submitting your medical record.A qualified Healthcare profesional will review your details. <br>prior to your record biegn live.approval will be within 48 hours.<br >please chech your support inbox for any additional request from our team.</span> ";
          
        
         
        }
    
    
    
     
      
$categories=mysqli_query($conn,"SELECT * FROM immunisation WHERE patient_id='$patient_id' and status='verified'");


if(mysqli_num_rows($categories) > 0)
{
  echo "<span>Your recored hasbeen approved by admin
  <br>To check your record click the link below.<br>
   
  <a href='profile.php?ptype=check_immunisation'>Record</a>
  <span>";
  

 
}


$categories=mysqli_query($conn,"SELECT * FROM immunisation WHERE patient_id='$patient_id' and status='rejected'");


if(mysqli_num_rows($categories) > 0)
{
  echo "<span>Your recored hasbeen rejected  <br>
  Fill Out new Form ?
  <a href='resubmit_immunisation.php'>Add New</a><br>.<span>";
  
  while($row=mysqli_fetch_array($categories)){
  

  ?>

  
  <?php
  }
}
      }
      else{
  ?>

<br>

    <div class="container">
    <h2>IMMUNISATION RECORD</h2><br><br>
        <form action="#" method="POST" enctype="multipart/form-data">
        <section id="top1"><br>
            <label>Please record any history of immunisations here.<br> &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp You may also upload a record.</label><br>
</section><section id="bottom"><br> &nbsp &nbsp<input type="file" name="image"><br><div class="img_msg">File upload must be pdf or image as jpg or jpeg</div></section>

<hr>
            <br><br>
            <section id="top"><br>
            <label for="immu_manual">Manually type in history of immunisations</label><br></section>
           <section id="bottom"> <input type="text" required class="txt" name="immu_manual" placeholder="Type here"></section><hr>
<br><br>


 <button name="submit" class="button">Save</button>


</form>
<?php
}
?>

</div>
</table>
</body>
</html>
<?php

include "forgotpassword/connection.php";
$manualimu=$_POST['immu_manual'];
    $patient_id=$_SESSION['USER']->id;

    $status = $statusMsg = ''; 
    if(isset($_POST["submit"])){ 
        $status = 'error'; 
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
             
              
                $insert = $conn->query("INSERT INTO immunisation ( Manual_Type_Immunisation,patient_id,name,size) VALUES ('$manualimu','$patient_id','$fileName','$size')"); 
                 
                if($insert){ 
                    $status = 'success'; 
                    echo '<script>alert("your form hasbeen succesfully saved");
   window.location="profile.php?ptype=immunisation";</script>';
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
  



