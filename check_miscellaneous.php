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
      #button{
        background-color:salmon;
        color:white;
        border:none;
        text-transform:none;
        font-size:10px;
       }
       .old_mis{
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
  <div class="old_mis">
<h5>Miscellaneous History</h5>
           

               
 
           <?php
           
           $categories=mysqli_query($conn,"SELECT * FROM miscellaneous  WHERE patient_id='$patient_id'");
           
           $i=1;
           if(mysqli_num_rows($categories) > 0){
           while($row=mysqli_fetch_array($categories)){
           
           ?>
           <table class="table table-bordered oldtab" width="100%" cellspacing="0">
           <tr> <th> Patient id</th><td><?php  echo $row['patient_id']; ?></td></tr>
           <tr><th> Document</th>
                    <td><a href="doctors/Miscellaneous/<?php echo $row['Document']; ?>" target="_blank"><?php echo $row['Document'];  ?></a></td></tr>
                    <tr> <th> Additional Notes</th><td><?php  echo $row['Additional_Notes']; ?></td></tr>
           </table>
           <form action="check_miscellaneous.php?ptype=update_miscellaneous" method="POST" class="oldtab">
               <button class="btn btn-primary" name="edit" id="button">Edit record</button>
           </form>
           <?php
           }
        }
        ?>
    </div>
</body>
</html>
<?php
if($_REQUEST['ptype']=='update_miscellaneous'){
           
           
           include('update_miscellaneous.php');
             
                
             }