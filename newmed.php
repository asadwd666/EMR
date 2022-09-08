<?php
include ("header.php");



?>
<!DOCTYPE html>
<html lang="en">
<head>
    <style>
.newmed{
margin-top:25rem;
}
        .oldtab{
            display:none;
        }
        h5{
            display:none;
        }
    </style>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<div class="newmed">
<?php
                  
                  $categories=mysqli_query($conn,"SELECT * FROM medical_record  WHERE patient_id='$patient_id'");
   $i=1;
   if(mysqli_num_rows($categories) > 0){
   while($row=mysqli_fetch_array($categories)){
   
   ?>
 
 <p style="color:red"><b>edit medical record</b> </p>
   <form action="med-record-update.php" class="newform" method="post">
 
       <table class="table edit"  border="0" cellspacing="0">
 
 
       <input type="hidden" name="id" required value="<?php echo $row['id'];?>">
       <?php
    
       ?>
 
 <tr><th> Diabetic </th><td>
   <input type="text" name="new1"   value="<?php echo $row['diabetic'];?>"/>
   </td></tr>
   <tr><th>Date of Diagnosis </th><td>
   <input type="date" name="new2"   value="<?php echo $row['diabetic_diagnosis_date'];?>"/>
   </td></tr>
   <tr><th>High Blood Pressure</th><td>
   <input type="text" name="new3"   value="<?php echo $row['high_blood_presuure'];?>"/>
   </td></tr>
   <tr><th>Date of Diagnosis</th><td>
 
   <input type="date" name="new4"   value="<?php echo $row['HBP_diagnosis_date'];?>"/>
   </td></tr>
   <tr><th>Cancer </th><td>
 
   <input type="text" name="new5"   value="<?php echo $row['cancer'];?>"/>
   </td></tr>
   <tr><th>Date of Diagnosis</th><td>
 
   <input type="date" name="new6"   value="<?php echo $row['cancer_diagnosis_date'];?>"/>
   </td></tr>
   <tr><th>Type of Cancer</th><td>
 
   <input type="text" name="new7"   value="<?php echo $row['cancer_type'];?>"/>
   </td></tr>
   <tr><th>Treatment Date</th><td>
    
 
   <input type="date" name="new8"   value="<?php echo $row['treat_recieved_date'];?>"/>
   </td></tr>
   <tr><th>Heart attack</th><td>
 
   <input type="text" name="new9"   value="<?php echo $row['heart_attack'];?>"/>
   </td></tr>
   <tr><th>Date of Diagnosis</th><td>
 
   <input type="date" name="new10"   value="<?php echo $row['heart_diagnosis_date'];?>"/>
   </td></tr>
   <tr><th>Hiv hepatitis </th><td>
 
   <input type="text" name="new11"   value="<?php echo $row['HIV_hepatitis_etc'];?>"/>
   </td></tr>
   <tr><th>Blood transfusion</th><td>
 
   <input type="text" name="new13"   value="<?php echo $row['blood_transfusion'];?>"/>
   </td></tr>
   <tr><th>Transfusion Date</th><td>
 
   <input type="date" name="new14"   value="<?php echo $row['transfusion_date'];?>"/>
   </td></tr>
   <tr><th>Blood group</th><td>
   <input type="text" name="new15"   value="<?php echo $row['blood_group'];?>"/>
   </td></tr>
   <tr><th>Mental health condition</th><td>
 
   <input type="text" name="new16"   value="<?php echo $row['mental_health_condition'];?>"/>
   </td></tr>
   <tr><th>Specify </th><td>
 
   <input type="text" name="new17"   value="<?php echo $row['specify_mental'];?>"/>
   </td></tr>
   <tr><th>Stroke</th><td>
 
   <input type="text" name="new18"   value="<?php echo $row['stroke'];?>"/>
   </td></tr>
   <tr><th>Date of Diagnosis</th><td>
 
   <input type="date" name="new19"   value="<?php echo $row['stroke_diagnosis_date'];?>"/>
   </td></tr>
   <tr><th>Immune disorder</th><td>
 
   <input type="text" name="new20"   value="<?php echo $row['immune_disorder'];?>"/>
   </td></tr>
   <tr><th>Date of Diagnosis</th><td>
 
   <input type="date" name="new21"   value="<?php echo $row['immune_diagnosis_date'];?>"/>
   </td></tr>
   <tr><th>Lung disease</th><td>
 
   <input type="text" name="new22"   value="<?php echo $row['lung_disease'];?>"/>
   </td></tr>
   <tr><th>Specify</th><td>
 
   <input type="text" name="new23"   value="<?php echo $row['specify_lung_disease'];?>"/>
   </td></tr>
   <tr><th>Date of Diagnosis</th><td>
 
   <input type="date" name="new24"   value="<?php echo $row['lung_disease_diagnosis'];?>"/>
   </td></tr>
   <tr><th>Ulcerative crobin </th><td>
 
   <input type="text" name="new25"   value="<?php echo $row['ulcerative_crohn_etc'];?>"/>
   </td></tr>
   <tr><th>Specify</th><td>
 
   <input type="text" name="new26"   value="<?php echo $row['specify_ulcerative_etc'];?>"/>
   </td></tr>
   <tr><th>Date of Diagnosis</th><td>
 
   <input type="date" name="new27"   value="<?php echo $row['diagnosis_ulcerative_etc'];?>"/>
   </td></tr>
   <tr><th>Neurogical Disease</th><td>
 
   <input type="text" name="new28"   value="<?php echo $row['neurogical_disease'];?>"/>
   </td></tr>
   <tr><th>Specify</th><td>
 
   <input type="text" name="new29"   value="<?php echo $row['specify_neurogical_disease'];?>"/>
   </td></tr>
   <tr><th>Date of diagnosis</th><td>
 
   <input type="date" name="new30"   value="<?php echo $row['neuragical_diagnosis'];?>"/>
   </td></tr>
   <tr><th>Bp disorder</th><td>
 
   <input type="text" name="new31"   value="<?php echo $row['BP_disorder'];?>"/>
   </td></tr>
   <tr><th>specify</th><td>
 
   <input type="text" name="new32"   value="<?php echo $row['specify_bp_disorder'];?>"/>
   </td></tr>
   <tr><th>Date of Diagnosis</th><td>
 
   <input type="date" name="new33"   value="<?php echo $row['bp_diagnosis_date'];?>"/>
   </td></tr>
   <tr><th>Cardiac Pacemaker</th><td>
 
   <input type="text" name="new34"   value="<?php echo $row['cardiac_pacemaker'];?>"/>
   </td></tr>
   <tr><th>Date of Pacemaker</th><td>
 
   <input type="date" name="new35"   value="<?php echo $row['date_of_pacemaker'];?>"/>
   </td></tr>
   <tr><th>Type of Pacemaker</th><td>
 
   <input type="text" name="new36"   value="<?php echo $row['type_pacemaker'];?>"/>
   </td></tr>
   <tr><th>Other med conndition</th><td>
 
   <input type="text" name="new37"   value="<?php echo $row['other_med_con'];?>"/>
   </td></tr>
   <tr><th>Date of Diagnosis</th><td>
 
   <input type="date" name="new38"   value="<?php echo $row['diagnosis_date_other'];?>"/>
   </td></tr>
   <tr><th>Additional Notes</th><td>
 
   <input type="text" name="new39"   value="<?php echo $row['additional_note'];?>"/>
   </td></tr>
   <tr>
   <!--  -->
   </tr>
   </table>
 <input class="btn btn-info" name="update" id="button" type="submit" value="update">
   <!-- <button >update</button> -->
 
   </form>
   
 
   
   <?php
   $i++;
   
   }
 }
 ?>
</div>
</body>
</html>
  
                 
   
                