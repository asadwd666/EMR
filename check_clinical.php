<?php
include "db_connection/connection.php";
session_start();
$patient_id=$_SESSION['USER']->id;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <style>
        .clinic{
            position: absolute;
            bottom:3rem;
        }
             .navbar{
            margin-top:-2rem;
        }
        .navbar-links li{
            margin-top:-1rem;
        }
        .navbar-links #bell{
            margin-top:-1rem;
        }
        .navbar h3{
            color:salmon;
        }
        #dataTable{
        margin-top:-10rem;
       }
       #button{
        background-color:salmon;
        color:white;
        border:none;
        text-transform:none;
        font-size:10px;
       }
       #button:hover{
        background:white;
        color:black;
        border:1px solid salmon;
       }
       .navbar h3{
        color:salmon;
       }
       nav ul{
        margin-top:2rem;
       }
    </style>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css">

</head>
<body>
    <div class="clinic">
<h5>Clinical  History</h5>
           

               
 
           <?php
           
           $categories=mysqli_query($conn,"SELECT * FROM clinical_report  WHERE patient_id='$patient_id'");
           
           $i=1;
           if(mysqli_num_rows($categories) > 0){
           while($row=mysqli_fetch_array($categories)){
           
           ?>
           <table class="table table-bordered oldtab" width="100%" cellspacing="0">
           <tr> <th> Patient id</th><td><?php  echo $row['patient_id']; ?></td></tr>
           <tr><th> Document</th>
                    <td><a href="doctors/clinical_db_data/<?php echo $row['Document']; ?>" target="_blank"><?php echo $row['Document'];  ?></a>
                </td></tr>
                <tr><th> Radiology Images</th>
                    <td><a href="doctors/clinical_db_data/<?php echo $row['Radiology_Images']; ?>" target="_blank"><?php echo $row['Radiology_Images'];  ?></a>
                </td></tr>
                <tr><th> Blood Reports</th>
                    <td><a href="doctors/clinical_db_data/<?php echo $row['Blood_Reports']; ?>" target="_blank"><?php echo $row['Blood_Reports'];  ?></a>
                </td></tr>
           <tr> <th> Additional Notes</th><td><?php  echo $row['Additional_Notes']; ?></td></tr>

           </table>
           <form action="check_clinical.php?ptype=update_clinical" method="POST" class="oldtab">
               <button class="btn btn-info" name="edit" id="button">Edit record</button>
           </form>
           <?php
           }
        }
           ?>
           </div>
</body>
</html>
<?php
if($_REQUEST['ptype']=='update_clinical'){


    include('update_clinical.php');
    
      
    }