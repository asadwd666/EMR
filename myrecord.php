<?php
include "db_connection/connection.php";
session_start();
$patient_id=$_SESSION['USER']->id;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <style>
*{
margin:0;
padding:0;
}
.navbar{
margin-top:-2.5rem;
}
.navbar h3{
color:salmon;
}
.navbar-links li{
margin-top:1.5rem;
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
.newmed_table{
margin-top:-28rem;
}
    </style>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>




           

      <div class="newmed_table">         
  <h5>Medical Record</h5>
<?php

$categories=mysqli_query($conn,"SELECT * FROM medical_record  WHERE patient_id='$patient_id'");

$i=1;
if(mysqli_num_rows($categories) > 0){
while($row=mysqli_fetch_array($categories)){

?>
<table class="table table-bordered oldtab" width="100%" cellspacing="0">


<tr> <th> Diabetic </th><td><?php  echo $row['diabetic']; ?></td></tr>
     
<tr >


<th>Diagnosis Date</th><td><?php  echo $row['diabetic_diagnosis_date']; ?></td>

</tr>

<tr>  <th>HBP</th><td><?php  echo $row['high_blood_presuure']; ?></td></tr>
<tr>
<th>Dianosis Date</th>

<td><?php  echo $row['HBP_diagnosis_date']; ?></td></tr>
<tr>
<th>Cancer</th>
<td><?php  echo $row['cancer']; ?></td></tr>
<tr>
<th>Diagnosis Date</th>
<td><?php  echo $row['cancer_diagnosis_date']; ?></td></tr>
<tr>
<th>Canncer Type</th>
<td><?php  echo $row['cancer_type']; ?></td></tr>
<tr>
<th>treatment recieved date</th>
<td><?php  echo $row['treat_recieved_date']; ?></td></tr>
<tr>
<th>heart attack</th>
<td><?php  echo $row['heart_attack']; ?></td></tr>
<tr>
<th>Dianosis Date</th>
<td><?php  echo $row['heart_diagnosis_date']; ?></td></tr>
<tr>
<th>Hiv hepatitis Etc</th>
<td><?php  echo $row['HIV_hepatitis_etc']; ?></td></tr>
<tr>
<th>Blood Transfusion</th>
<td><?php  echo $row['blood_transfusion']; ?></td></tr>
<tr>
<th>Transfusion Date </th>
<td><?php  echo $row['transfusion_date']; ?></td></tr>
<tr>
<th>Blood Group</th>
<td><?php  echo $row['blood_group']; ?></td></tr>
<tr>
<th>Mental Health Condition</th>
<td><?php  echo $row['mental_health_condition']; ?></td></tr>
<tr>
<th>Specify Condition</th>
<td><?php  echo $row['specify_mental']; ?></td></tr>
<tr>
<th>Stroke</th>
<td><?php  echo $row['stroke']; ?></td></tr>
<tr>
<th>Diagnosis Date</th>
<td><?php  echo $row['stroke_diagnosis_date']; ?></td></tr>
<tr>
<th>Immune Disorder</th>
<td><?php  echo $row['immune_disorder']; ?></td></tr>
<tr>
<th>Diagnosis Date</th><td><?php  echo $row['immune_diagnosis_date']; ?></td></tr>

<tr>
<th>Lung Disease</th>
<td><?php  echo $row['lung_disease']; ?></td></tr>
<tr>
<th>Specify</th>
<td><?php  echo $row['specify_lung_disease']; ?></td></tr>
<tr>
<th>Diagnosis Date</th>
<td><?php  echo $row['lung_disease_diagnosis']; ?></td></tr>
<tr>
<th>Ulcerative Crohn</th>
<td><?php  echo $row['ulcerative_crohn_etc']; ?></td></tr>
<tr>
<th>Specify</th>
<td><?php  echo $row['specify_ulcerative_etc']; ?></td></tr>
<tr>
<th>Diagnosis Date</th>
<td><?php  echo $row['diagnosis_ulcerative_etc']; ?></td></tr>

<tr>
<th>Neurogical Disease</th>
<td>

<?php  echo $row['neurogical_disease']; ?></td></tr>
<tr>
<th>Specify</th>
<td><?php  echo $row['specify_neurogical_disease']; ?></td></tr>
<tr>
<th>Diagnosis Date</th>
<td><?php  echo $row['neuragical_diagnosis']; ?></td></tr>
<tr>
<th>Bp Disorder</th>
<td><?php  echo $row['BP_disorder']; ?></td></tr>
<tr>
<th>Specify</th>
<td><?php  echo $row['specify_bp_disorder']; ?></td></tr>
<tr>
<th>Diagnosis Date</th>
<td><?php  echo $row['bp_diagnosis_date']; ?></td></tr>
<tr>
<th>Cardiac Pacemaker</th>
<td><?php  echo $row['cardiac_pacemaker']; ?></td></tr>
<tr>
<th>Date Of Pacemaker</th>
<td><?php  echo $row['date_of_pacemaker']; ?></td></tr>
<tr>
<th>Type Of Pacemaker</th>
<td><?php  echo $row['type_pacemaker']; ?></td></tr>
<tr>
<th>Other Medical Condition</th>
<td><?php  echo $row['other_med_con']; ?></td></tr>
<tr>
<th>Diagnosis Date</th>
<td><?php  echo $row['diagnosis_date_other']; ?></td></tr>

<tr>
<th>Additional Notes</th>
<td><?php  echo $row['additional_note']; ?></td></tr>



<?php $i++;?>


</tr>
<?php
$i++;
?>
</table>
<?php

}
}
?>
<form action="myrecord.php?ptype=newmed" method="POST" class="oldtab">
    <button class="btn btn-info" name="edit" id="button">Edit record</button>
</form>
</div>
</body>
</html>
<?php

 if($_REQUEST['ptype']=='newmed'){


   include('newmed.php');
     
        
     }



  