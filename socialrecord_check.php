<?php include "db_connection/connection.php";
session_start();
$patient_id=$_SESSION['USER']->id;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <style>
        
        .navbar{
            margin-top:-2rem;
        }
        .navbar-links li{
            margin-top:2rem;
        }
        .navbar-links #bell{
            margin-top:-1rem;
        }
        .navbar h3{
            color:salmon;
        }
        .old_soc{
            position: absolute;
            bottom:3rem;
        }
   
    </style>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css">

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="old_soc">
<h5>Social Record</h5>
             <?php
           
           $categories=mysqli_query($conn,"SELECT * FROM social_history  WHERE patient_id='$patient_id'");
           
           $i=1;
           if(mysqli_num_rows($categories) > 0){
           while($row=mysqli_fetch_array($categories)){
           
           ?>
           <table class="table table-bordered oldtab" width="100%" cellspacing="0">
           <tr> <th> Patient id: </th><td><?php  echo $row['patient_id']; ?></td></tr>

           <tr> <th> Smoking : </th><td><?php  echo $row['Smoking']; ?></td></tr>
           <tr> <th> How Much : </th><td><?php  echo $row['How_Much_Smoke']; ?></td></tr>
           <tr> <th> How Often : </th><td><?php  echo $row['How_often_Smoke']; ?></td></tr>
           <tr> <th> Drugs : : </th><td><?php  echo $row['Drugs']; ?></td></tr>
           <tr> <th> How Much : </th><td><?php  echo $row['How_Much_Drug']; ?></td></tr>
           <tr> <th> How Often : </th><td><?php  echo $row['How_Often_Drug']; ?></td></tr>
           <tr> <th> Live with : </th><td><?php  echo $row['Live_With']; ?></td></tr>
           <tr> <th> Functional Status: </th><td><?php  echo $row['Functional_Status']; ?></td></tr>
           </table>
     <?php
           }
        }
     ?>
       <form action="socialrecord_check.php?ptype=update_social" method="POST" class="oldtab">
               <button class="btn button" style="background-color:salmon;color:white;font-size:10px;"  name="edit" id="button">Edit record</button>
           </form>
           </div>
</body>
</html>
<?php
 if($_REQUEST['ptype']=='update_social'){
           
           
    include('update_social.php');
      
         
      }