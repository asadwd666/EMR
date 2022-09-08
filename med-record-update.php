
<?php
include "db_connection/connection.php";
if(isset($_POST['update'])){
    
    $new1=$_POST['new1'];
    $id= $_POST['id'];
 
  
    
    
    
    
   
    $new2=$_POST['new2'];
    
    
  
    $new3=$_POST['new3'];
    $new4=$_POST['new4'];
    $new5=$_POST['new5'];
    $new5=$_POST['new5'];
    $new6=$_POST['new6'];
    $new7=$_POST['new7'];
    $new8=$_POST['new8'];
    $new9=$_POST['new9'];
    $new10=$_POST['new10'];
    $new11=$_POST['new11'];
    $new13=$_POST['new13'];
    $new14=$_POST['new14'];
    $new15=$_POST['new15'];
    $new16=$_POST['new16'];
    $new17=$_POST['new17'];
    $new18=$_POST['new18'];
    $new19=$_POST['new19'];
    $new20=$_POST['new20'];
    $new21=$_POST['new21'];
    $new22=$_POST['new22'];
    $new23=$_POST['new23'];
    $new24=$_POST['new24'];
    $new25=$_POST['new25'];
    $new26=$_POST['new26'];
    $new27=$_POST['new27'];
    $new28=$_POST['new28'];
    $new29=$_POST['new29'];
    $new30=$_POST['new30'];
    $new31=$_POST['new31'];
    $new32=$_POST['new32'];
    $new33=$_POST['new33'];
    $new34=$_POST['new34'];
    $new35=$_POST['new35'];
    $new36=$_POST['new36'];
    $new37=$_POST['new37'];
    $new38=$_POST['new38'];
    $new39=$_POST['new39'];
  
  
  
    $query=mysqli_query($conn,"UPDATE `medical_record` SET  `diabetic`='$new1' ,`diabetic_diagnosis_date`='$new2',`high_blood_presuure`='$new3' ,
    `HBP_diagnosis_date`='$new4',`cancer`='$new5',`cancer_diagnosis_date`='$new6',`cancer_type`='$new7',`treat_recieved_date`='$new8', 
    `heart_attack`='$new9' ,`heart_diagnosis_date`='$new10' ,`HIV_hepatitis_etc`='$new11',`blood_transfusion`='$new13',`transfusion_date`='$new14',
    `blood_group`='$new15', `mental_health_condition`='$new16',`specify_mental`='$new17',`stroke`='$new18',`stroke_diagnosis_date`='$new19',
  `immune_disorder`='$new20',`immune_diagnosis_date`='$new21',`lung_disease`='$new22',`specify_lung_disease`='$new23',
  `lung_disease_diagnosis`='$new24',`ulcerative_crohn_etc`='$new25',`specify_ulcerative_etc`='$new26',`diagnosis_ulcerative_etc`='$new27',
  `neurogical_disease`='$new28',`specify_neurogical_disease`='$new29',`neuragical_diagnosis`='$new30',`BP_disorder`='$new31',
  `specify_bp_disorder`='$new32',`bp_diagnosis_date`='$new33',`cardiac_pacemaker`='$new34',`date_of_pacemaker`='$new35',
  `type_pacemaker`='$new36',`other_med_con`='$new37',`diagnosis_date_other`='$new38',`additional_note`='$new39' ,`status`='unverified'
     where id='$id'" );
  
  
  
  if($query){
    echo "succesfully update";
  echo "<script>setTimeout(() => {
  window.location='profile.php?ptype=med_record';
  }, 1000);</script>";
  }else{
    echo "something went wrong";
  }
  }





  // ,,,
 














