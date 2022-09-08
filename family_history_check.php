<?php
include "db_connection/connection.php";
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
       .old_family{
        position: absolute;
            bottom:8rem;
       }
    </style>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css">

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="old_family">
<h5>Family History</h5>
           

               
 
           <?php
           
           $categories=mysqli_query($conn,"SELECT * FROM family_history  WHERE patient_id='$patient_id'");
           
           $i=1;
           if(mysqli_num_rows($categories) > 0){
           while($row=mysqli_fetch_array($categories)){
           
           ?>
           <table class="table table-bordered oldtab" width="100%" cellspacing="0">
           <tr> <th> Patient id</th><td><?php  echo $row['patient_id']; ?></td></tr>
           <tr> <th> Disease</th><td><?php  echo $row['diseases']; ?></td></tr>
           <tr> <th> Family Member</th><td><?php  echo $row['family_member']; ?></td></tr>
           <tr> <th> Other Family Record</th><td><?php  echo $row['other_family_record']; ?></td></tr>
           </table>
           <form action="family_history_check.php?ptype=update_family_history" method="POST" class="oldtab">
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

if($_REQUEST['ptype']=='update_family_history'){
           
           
    include('update_family_history.php');
      
         
      }