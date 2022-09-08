<?php
include "db_connection/connection.php";
session_start();
$patient_id=$_SESSION['USER']->id;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <style>
        .old_surg{
        margin-top:-30rem;
        }
        .navbar-links li{
            margin-top:1rem;
          
        }
        .navbar-links #bell{
            margin-top:-1rem;
        }
        .navbar{
            margin-top:-2rem;
        }
        .navbar h3{
            color:salmon;
        }

           .edit input[type="text"]{
            width:40%;
            height:100%;
            border:none;
            border-bottom:1px solid black;
           
          
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
    </style>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css">

</head>
<body>
    <div class="old_surg">
    <?php
    // include ('header.php');
    ?>
<h5>Surgical Record</h5>
           

               
 
           <?php
           
           $categories=mysqli_query($conn,"SELECT * FROM surgical_history  WHERE patient_id='$patient_id'");
           
           $i=1;
           if(mysqli_num_rows($categories) > 0){
           while($row=mysqli_fetch_array($categories)){
           
           ?>
           <table class="table table-bordered oldtab" width="100%" cellspacing="0">
           <tr> <th> Gallbladder Surgery </th><td><?php  echo $row['Gallbladder_surgery']; ?></td></tr>
     
     <tr >
     
     
     <th>Diagnosis Date</th><td><?php  echo $row['Gallblader_srg_date']; ?></td>
     
     </tr>
     
     <tr>  <th>Procedure</th><td><?php  echo $row['Gallblader_srg_proc']; ?></td></tr>
     <tr>
     <th>Organ Transplant</th>
     
     <td><?php  echo $row['Organ_transplant']; ?></td></tr>
     <tr>
     <th>Transplant Type</th>
     <td><?php  echo $row['Transplant_Type']; ?></td></tr>
     <tr>
     <th>Transplant Date</th>
     <td><?php  echo $row['Transplant_Date']; ?></td></tr>
     <tr>
     <th> Transplant Location</th>
     <td><?php  echo $row['Transplant_location']; ?></td></tr>
     <tr>
     <th>Transplant Doctor</th>
     <td><?php  echo $row['Transplant_Doctor']; ?></td></tr>
     <tr>
     <th>Fractures operations</th>
     <td><?php  echo $row['Fractures_Operation']; ?></td></tr>
     <tr>
     <th>Fracture Type</th>
     <td><?php  echo $row['Fracture_Type']; ?></td></tr>
     <tr>
     <th>Procedure</th>
     <td><?php  echo $row['Fracture_OP_procedure']; ?></td></tr>
     <tr>  
     <th>Hip Knee replacement</th>
     <td><?php  echo $row['Hip-knee_replacement']; ?></td></tr>
     <tr>  
     <th>Specify</th>
     <td><?php  echo $row['Specify_Replacement']; ?></td></tr>
      <tr>  
     <th>Date</th>
     <td><?php  echo $row['Rep_surg_Date']; ?></td></tr><tr>  
     <tr>
     <th>Location</th>
     <td><?php  echo $row['location_rep_surg']; ?></td></tr><tr>  
     <tr><th>Surgeon Name</th>
     <td><?php  echo $row['Surgeon_name']; ?></td></tr>
     <tr><th>Artificial heart</th>
     <td><?php  echo $row['Artificial_heart_valves']; ?></td></tr>
     <tr><th>Specify</th>
     <td><?php  echo $row['Specify_Valves']; ?></td></tr>
     <tr><th>Surgery Date</th>
     <td><?php  echo $row['Artificial_heart_surg_Date']; ?></td></tr>
     <tr><th>valve Type</th>
     <td><?php  echo $row['Valve_Type']; ?></td></tr>
     <tr><th>other Surgical Procedure</th>
     <td><?php  echo $row['Other_surg_procedure']; ?></td></tr>
     <tr><th>Date</th>
     <td><?php  echo $row['Date_Of_procedure']; ?></td></tr>
     
     
           </table>
           <?php
           }
           }
           ?>
           <form action="surg-check.php?ptype=newsurgery" method="POST" class="oldtab">
               <button class="btn btn-info" name="edit" id="button">Edit record</button>
           </form>
           </body>
           </html>
          
    </div>
    <?php
           
           if($_REQUEST['ptype']=='newsurgery'){
          
          
             include('newsurgery.php');
               
                  
               }
               ?>
</body>
</html>