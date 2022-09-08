<?php
include "db_connection/connection.php";
session_start();
$patient_id=$_SESSION['USER']->id;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <style>
        .old_medication{
            margin-top:-30rem;
        }
          .navbar{

margin-top:-2rem;
}
.navbar h3{
    color:salmon;
}
.navbar-links li{
    margin-top:1rem;
}
.navbar-links #bell{
    margin-top:-1rem;
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


<div class="old_medication">
 <h5>Medication</h5>
           

               
 
<?php

$categories=mysqli_query($conn,"SELECT * FROM medication  WHERE patient_id='$patient_id'");

$i=1;
if(mysqli_num_rows($categories) > 0){
while($row=mysqli_fetch_array($categories)){

?>
<table class="table table-bordered oldtab" width="100%" cellspacing="0">

<tr> <th> Allergy </th><td><?php  echo $row['Allergy']; ?></td></tr>
<tr> <th> Regular Medicine</th><td><?php  echo $row['Regular Medicine']; ?></td></tr>
<tr> <th> Frequency</th><td><?php  echo $row['Frequency']; ?></td></tr>
<tr> <th> Dose</th><td><?php  echo $row['Dose']; ?></td></tr>
<tr> <th> Starting date</th><td><?php  echo $row['Starting_date']; ?></td></tr>
</table>

<?php
}
}
?>
<form action="newmedication.php" method="POST" class="oldtab">
    <button class="btn btn-info" name="edit" id="button">Edit record</button>
</form>
</div>
</body>

</html>
<?php
if($_REQUEST['ptype']=='newm_edication'){


    include('newmedication.php');
      
         
      }


