<?php
include "db_connection/connection.php";
session_start();
$patient_id=$_SESSION['USER']->id;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <style>
           .old_immu{
            position: absolute;
            bottom:8rem;
           }
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
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css">

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="old_immu">
<h5>immunisation History</h5>
           

               
 
           <?php
           
           $categories=mysqli_query($conn,"SELECT * FROM immunisation  WHERE patient_id='$patient_id'");
           
           $i=1;
           if(mysqli_num_rows($categories) > 0){
           while($row=mysqli_fetch_array($categories)){
           
           ?>
           <table class="table table-bordered oldtab" width="100%" cellspacing="0">
           <tr> <th> Patient id</th><td><?php  echo $row['patient_id']; ?></td></tr>
           <tr> <th> Manual Type immunisation</th><td><?php  echo $row['Manual_Type_Immunisation']; ?></td></tr>
           <tr><th> File</th>
                    <td><a href="doctors/immunisation_files/<?php echo $row['name']; ?>" target="_blank"><?php echo $row['name'];  ?></a></td></tr>
           </table>
           <form action="check_immunisation.php?ptype=update_immunisation" method="POST" class="oldtab">
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

if($_REQUEST['ptype']=='update_immunisation'){
           
           
    include('update_immunisation.php');
      
         
      }