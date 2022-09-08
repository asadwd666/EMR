<?php

include "../db_connection/connection.php";
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
       <meta charset="UTF-8">
       <meta http-equiv="X-UA-Compatible" content="IE=edge">
       <meta name="viewport" content="width=device-width, initial-scale=1.0">
       <title>Patient Request</title>
       <style>
        .final{
            border:5px solid black;
        }
              #text{
                 background-color:snow;
                margin-left:20px;
                 font-size:25px;
                 letter-spacing:2px;
                 

                 

              }
              .table{
                     width:30%;
              }
              .bu{
                   
                     
                  
                     text-align:center;
                     transition:3s;
                     margin:20px;
                     
              }
              .bu:focus{
                    
                     outline:solid grey;
              }
              .btn-primary{
                     background-color:salmon;
                     border:none;
              }
              .btn-primary:hover{
                     color:salmon;
                     background-color:white;
                     border:1px solid salmon;
              }
          #result{
              background:green;
              width:50%;
    color: rgb(180, 214, 180);
              
          }
          
     
       </style>
       
</head>
<body>
    


<p id="result" >

</p>

   
    <?php
$query=mysqli_query($conn,"select * from `medical_record` where status='unverified' order by id");
if(mysqli_num_rows($query) > 0){
    while($row=mysqli_fetch_array($query)){
        ?>
        <span style="color:red">Medical Record</span>
        <form action="#" method="post">
         <input type="hidden" name="id" value="<?php echo $row['id'];?>">
        <?php
      $_SESSION['id']= $row['patient_id']
        ?>
        <table class="table">
               <thead>
                      <tr>
                        
                     
                      <th scope="col">Patient id :</th>
                      <td>
         <?php

        echo $row['patient_id'];
        
        ?>
        </td>
    </tr>
     <tr>
        <th scope="col"> Diabetic : </th>
        <td>
        <?php
    echo $row['diabetic']; ?>
    
        <?php
        ?>
        </td>
    </tr>
            <tr>
              <th scope="col"> Diagnosis Date : </th>
              <td>
           <?php  echo $row['diabetic_diagnosis_date']; ?>
          
              </td>
           <tr>
              <th scope="col">HBP :</th>
              <td>
        
           <?php  echo $row['high_blood_presuure']; ?>
     
               </td>
          <tr>
              <th scope="col">Dianosis Date :</th>
              <td>
           <?php  echo $row['HBP_diagnosis_date']; ?>
       
              </td>
           <tr>
               <th scope="col">Cancer :</th>
               <td>
         
           <?php  echo $row['cancer']; ?>
       
                </th>
          <tr>
                <th scope="col">Diagnosis Date :</th>
                <td>
           <?php  echo $row['cancer_diagnosis_date']; ?>
    
                 </td>
           <tr>
           <th scope="col">Canncer Type :</th>
           <td>
           <?php  echo $row['cancer_type']; ?>
              </td>
           <tr>
           <th scope="col">treatment recieved date :</th>
           <td>
           <?php  echo $row['treat_recieved_date']; ?>
           </td>
           <tr>
           <th scope="col">heart attack :</th>
           <td>
           <?php  echo $row['heart_attack']; ?>
           </td>
           <tr>
           <th scope="col">Dianosis Date :</th>
           <td>
           <?php  echo $row['heart_diagnosis_date']; ?>
           </td>
           <tr>
           <th scope="col">Hiv hepatitis Etc :</th>
           <td>
           <?php  echo $row['HIV_hepatitis_etc']; ?>
           </td>
           <tr>
           <th scope="col">Blood Transfusion :</th>
           <td>
           <?php  echo $row['blood_transfusion']; ?>
           </td>
           <tr>
           <th scope="col">Transfusion Date : </th>
           <td>
           <?php  echo $row['transfusion_date']; ?>
           </td>
           <tr>
           <th scope="col">Blood Group :</th>
           <td>
           <?php  echo $row['blood_group']; ?>
           </td>
           <tr>
           <th scope="col">Mental Health Condition :</th>
           <td>
           <?php  echo $row['mental_health_condition']; ?>
           </td>
           <tr>
           <th scope="col">Specify Condition :</th>
           <td>
           <?php  echo $row['specify_mental']; ?>
           </td>
           <tr>
           <th scope="col">Stroke :</th>
           <td>
           <?php  echo $row['stroke']; ?>
           </td>
           <tr>
           <th scope="col">Diagnosis Date :</th>
           <td>
           <?php  echo $row['stroke_diagnosis_date']; ?>
           </td>
           <tr>
           <th scope="col">Immune Disorder :</th>
           <td>
           <?php  echo $row['immune_disorder']; ?>
           </td>
           <tr>
           <th scope="col">Diagnosis Date :</th>
           <td>
           <?php  echo $row['immune_diagnosis_date']; ?>
           </td>
           <tr>
           <th scope="col">Lung Disease :</th>
           <td>
           
           <?php  echo $row['lung_disease']; ?>
           </td><tr>
           <th scope="col">Specify :</th>
           <td>
           <?php  echo $row['specify_lung_disease']; ?>
    </td><tr>
    <th scope="col">Diagnosis Date :</th>
    <td>
           <?php  echo $row['lung_disease_diagnosis']; ?>
    </td><tr>
    <th scope="col">Ulcerative Crohn :</th>
    <td>
           <?php  echo $row['ulcerative_crohn_etc']; ?>
    </td><tr>
    <th scope="col">Specify :</th>
    <td>
           <?php  echo $row['specify_ulcerative_etc']; ?>
    </td><tr>
    <th scope="col">Diagnosis Date :</th>
    <td>
           <?php  echo $row['diagnosis_ulcerative_etc']; ?>
    </td><tr>
    <th scope="col">Neurogical Disease :</th>
    <td>

           <?php  echo $row['neurogical_disease']; ?>
    </td><tr>
    <th scope="col">Specify :</th>
    <td>
           <?php  echo $row['specify_neurogical_disease']; ?>
    </td><tr>
    <th scope="col">Diagnosis Date :</th>
    <td>
           <?php  echo $row['neuragical_diagnosis']; ?>
    </td><tr>
    <th scope="col">Bp Disorder :</th>
    <td>
           <?php  echo $row['BP_disorder']; ?>
    </td><tr>
    <th scope="col">Specify :</th>
    <td>
           <?php  echo $row['specify_bp_disorder']; ?>
    </td><tr>
    <th scope="col">Diagnosis Date :</th>
    <td>
           <?php  echo $row['bp_diagnosis_date']; ?>
    </td><tr>
    <th scope="col">Cardiac Pacemaker :</th>
    <td>
           <?php  echo $row['cardiac_pacemaker']; ?>
    </td><tr>
    <th scope="col">Date Of Pacemaker :</th>
    <td>
           <?php  echo $row['date_of_pacemaker']; ?>
    </td><tr>
    <th scope="col">Type Of Pacemaker :</th>
    <td>
           <?php  echo $row['type_pacemaker']; ?>
    </td><tr>
    <th scope="col">Other Medical Condition :</th>
    <td>
           <?php  echo $row['other_med_con']; ?>
    </td><tr>
    <th scope="col">Diagnosis Date :</th>
    <td>
           <?php  echo $row['diagnosis_date_other']; ?>
    </td><tr>
    <th scope="col">Additional Notes :</th>
    <td>
    
    
           <?php  echo $row['additional_note']; ?>
    </td>
    </thead>
    </table><br>

    <p id="demo"></p>
           <button class="btn btn-primary"  name="accept">Approve</button> &nbsp &nbsp &nbsp &nbsp
<!-- <button class="btn btn-primary"  name="reject">reject</button> -->
<br><br><button class="btn btn-primary" id="try" name="more" >Request Additional Info</button>
</form>
<hr>
<?php

if(isset($_POST['additional']))
{

       $id=$row['patient_id'];
       $txt=$_POST['txt'];
     $query=mysqli_query($conn,"INSERT INTO `tmp_table`(`patient_id`, `tmp_value`,`status`) VALUES('$id','$txt','doctor') ");
 
       
if($query){

       echo '<script>alert("Succesfully sended");
       window.location="index.php?ptype=patients_requests,php";</script>';
       

}
}

}

       




}



else{
    echo "no request";
}
?>



<?php
error_reporting(0);
if(isset($_POST['more'])){

?>
<br><br>
<form method="post" action="#">
<textarea name="txt" class="bu" cols="30" rows="10" placeholder="Request Additional info"></textarea>
<button name="additional">Send</button>
</form>
<br><br>
<?php


}


if(isset($_POST['accept'])){
    $id=$_POST['id'];
    if(empty($_POST['id'])){
        echo " no data";
    }else{

   
     
    $query=mysqli_query($conn,"UPDATE `medical_record` set status='verified' where id='".$id."'" );
    if($query){
       echo "<script>
       document.getElementById('result').innerText='Succesfully Approved'
       </script>";
       echo "<script>setTimeout(() => {
              window.location='index.php?ptype=patients_requests';
              }, 2000);</script>";
    }
   
}
}
?>

<?php
error_reporting(0);
if(isset($_POST['reject'])){
    $id=$_POST['id'];
    if(empty($_POST['id'])){
        
    }else{

   
     
    $query=mysqli_query($conn,"UPDATE `medical_record` set status='rejected' where id='".$id."'" );
    if($query){
       echo "<script>
       document.getElementById('result').innerText='Rejected Medical Record'
       </script>";
       echo "<script>setTimeout(() => {
              window.location='index.php?ptype=patients_requests';
              }, 2000);</script>";
        return true;
    }else{
        echo "failur";
        
    }
}
}
?>




</body>
</html>
<?php
// 
///////////////////////////////////Surgical record//////////////////////////////////////////////////////////////////////////////////////////////
?>

           

               
 
           <?php
           
           $categories=mysqli_query($conn,"SELECT * FROM surgical_history  WHERE  `status`='unverified' order by id");
           
           $i=1;
           if(mysqli_num_rows($categories) > 0){
           while($row=mysqli_fetch_array($categories)){
           
           ?>
           <form method="post" action="#">
         <input type="hidden" name="id" value="<?php echo $row['id'];?>">

           <table class="table surg" width="100%" cellspacing="0">
           <p style="color:red">Surgical Record</p>

           <tr>
                        
                     
                        <th scope="col">Patient id :</th>
                        <td>
           <?php
  
          echo $row['patient_id'];
          
          ?>
          </td>
      </tr>
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
           <p id="demo"></p>
           <button class="btn btn-primary"  name="accept2">Approve</button> &nbsp &nbsp &nbsp &nbsp
<!-- <button class="btn btn-primary"  name="reject2">reject</button> -->
           </form>
<hr>

           <?php
           }
           }
?>
          
<!-- <br><br><button class="btn btn-primary" id="try" name="more" >Request Additional Info</button> -->



<?php
error_reporting(0);
if(isset($_POST['more'])){

?>
<br><br>
<form method="post" action="#">
<textarea name="txt" class="bu" cols="30" rows="10" placeholder="Request Additional info"></textarea>
<button name="additional">Send</button>
</form>
<br><br>
<?php


}


if(isset($_POST['accept2'])){
    $id=$_POST['id'];
    if(empty($_POST['id'])){
        echo " no data";
    }else{

   
     
    $query=mysqli_query($conn,"UPDATE `surgical_history` set status='verified' where id='".$id."'" );
    if($query){
       echo "<script>
       document.getElementById('result').innerText='Succesfully Approved Surgical record'
       </script>";
       echo "<script>setTimeout(() => {
              window.location='index.php?ptype=patients_requests';
              }, 2000);</script>";
    }
   
}
}
?>

<?php
error_reporting(0);
if(isset($_POST['reject2'])){
    $id=$_POST['id'];
  
    if(empty($_POST['id'])){
        
    }else{

   
     
    $query=mysqli_query($conn,"UPDATE `surgical_history` set status='rejected' where id='$id'" );
    if($query){
       echo "<script>
       document.getElementById('result').innerText='Rejected Surgical History'
       </script>";
       echo "<script>setTimeout(() => {
              window.location='index.php?ptype=patients_requests';
              }, 2000);</script>";
        return true;
    }else{
        echo "failur";
        
    }
}
}



//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

?>
<hr>

<?php

           
           $categories=mysqli_query($conn,"SELECT * FROM `medication`  WHERE  status='unverified' order by id");
         
           
           if(mysqli_num_rows($categories) > 0){
           while($row=mysqli_fetch_array($categories)){
           
           ?>
           <form method="post" action="#">
         <input type="hidden" name="id" value="<?php echo $row['id'];?>">

           <table class="table surg" width="100%" cellspacing="0">

         <p style="color:red">Medication</p>

<tr>
             
          
             <th scope="col">Patient id :</th>
             <td><?php echo $row['patient_id'];?></td></tr>
<tr> <th> Allergy </th><td><?php  echo $row['Allergy']; ?></td></tr>
<tr> <th> Regular Medicine</th><td><?php  echo $row['Regular Medicine']; ?></td></tr>
<tr> <th> Frequency</th><td><?php  echo $row['Frequency']; ?></td></tr>
<tr> <th> Dose</th><td><?php  echo $row['Dose']; ?></td></tr>
<tr> <th> Starting date</th><td><?php  echo $row['Starting_date']; ?></td></tr>
</table>
<button class="btn btn-primary"  name="accept3">Approve</button> &nbsp &nbsp &nbsp &nbsp
<!-- <button class="btn btn-primary"  name="reject3">reject</button> -->
           </form>
           <?php
           }
       }
          
          
          if(isset($_POST['accept3'])){
    $id=$_POST['id'];
    if(empty($_POST['id'])){
        echo " no data";
    }else{

   
     
    $query=mysqli_query($conn,"UPDATE `medication` set status='verified' where id='".$id."'" );
    if($query){
       echo "<script>
       document.getElementById('result').innerText='Succesfully Approved Medication'
       </script>";
       echo "<script>setTimeout(() => {
              window.location='index.php?ptype=patients_requests';
              }, 2000);</script>";
    }
   
}
}



error_reporting(0);
if(isset($_POST['reject3'])){
    $id=$_POST['id'];
  
    if(empty($_POST['id'])){
        
    }else{

   
     
    $query=mysqli_query($conn,"UPDATE `medication` set status='rejected' where id='$id'" );
    if($query){
       echo "<script>
       document.getElementById('result').innerText='Rejected Medication'
       </script>";
       echo "<script>setTimeout(() => {
              window.location='index.php?ptype=patients_requests';
              }, 2000);</script>";
        return true;
    }else{
        echo "failur";
        
    }
}
}

///////////////////////////////////////////////////////////////////////////////////////////////////
?>

             <?php
           
           $categories=mysqli_query($conn,"SELECT * FROM social_history  WHERE  status='unverified' order by id");
           
           $i=1;
           if(mysqli_num_rows($categories) > 0){
           while($row=mysqli_fetch_array($categories)){
           
           ?>
           <h5>Social Record</h5>
           <form action="#" method="post">
         <input type="hidden" name="id" value="<?php echo $row['id'];?>">

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
           <button class="btn btn-primary"  name="accept4">Approve</button> &nbsp &nbsp &nbsp &nbsp
<!-- <button class="btn btn-primary"  name="reject4">reject</button> -->
           </form>
           <br>
           <hr>

     <?php
           }
        }
     
              if(isset($_POST['accept4'])){
    $id=$_POST['id'];
    if(empty($_POST['id'])){
        echo " no data";
    }else{

   
     
    $query=mysqli_query($conn,"UPDATE `social_history` set status='verified' where id='".$id."'" );
    if($query){
       echo "<script>
       document.getElementById('result').innerText='Succesfully Approved Social history'
       </script>";
       echo "<script>setTimeout(() => {
              window.location='index.php?ptype=patients_requests';
              }, 2000);</script>";
    }
   
}
}



error_reporting(0);
if(isset($_POST['reject4'])){
    $id=$_POST['id'];
  
    if(empty($_POST['id'])){
        
    }else{

   
     
    $query=mysqli_query($conn,"UPDATE `social_history` set status='rejected' where id='$id'" );
    if($query){
       echo "<script>
       document.getElementById('result').innerText='Rejected Social History'
       </script>";
       echo "<script>setTimeout(() => {
              window.location='index.php?ptype=patients_requests';
              }, 2000);</script>";
        return true;
    }else{
        echo "failur";
        
    }
}
}
////////////////////////////////////////////////////////////////////////////////////////////
//////////////////////////////family history//////////////////////////////////////////////////////////////////////////

           
$categories=mysqli_query($conn,"SELECT * FROM family_history  WHERE  status='unverified' order by id");

$i=1;
if(mysqli_num_rows($categories) > 0){
while($row=mysqli_fetch_array($categories)){

?>
<h5>Family Record</h5>
<form action="#" method="post">
<input type="hidden" name="id" value="<?php echo $row['id'];?>">

<table class="table table-bordered oldtab" width="100%" cellspacing="0">
<tr> <th> Patient id: </th><td><?php  echo $row['patient_id']; ?></td></tr>
<tr> <th> Disease : </th><td><?php  echo $row['diseases']; ?></td></tr>
<tr> <th> Family Member : </th><td><?php  echo $row['family_member']; ?></td></tr>
<tr> <th> Other Family Record: </th><td><?php  echo $row['other_family_record']; ?></td></tr>
</table>
<button class="btn btn-primary"  name="accept5">Approve</button> &nbsp &nbsp &nbsp &nbsp
<!-- <button class="btn btn-primary"  name="reject5">reject</button> -->
           </form>
           <hr>
           <?php
}
}
?>

<?php
              if(isset($_POST['accept5'])){
                     $id=$_POST['id'];
                     if(empty($_POST['id'])){
                         echo " no data";
                     }else{
                 
                    
                      
                     $query=mysqli_query($conn,"UPDATE `family_history` set status='verified' where id='".$id."'" );
                     if($query){
                        echo "<script>
                        document.getElementById('result').innerText='Succesfully Approved Family history'
                        </script>";
                        echo "<script>setTimeout(() => {
                               window.location='index.php?ptype=patients_requests';
                               }, 2000);</script>";
                     }
                    
                 }
                 }
                 
                 
                 
                 error_reporting(0);
                 if(isset($_POST['reject5'])){
                     $id=$_POST['id'];
                   
                     if(empty($_POST['id'])){
                         
                     }else{
                 
                    
                      
                     $query=mysqli_query($conn,"UPDATE `family_history` set status='rejected' where id='$id'" );
                     if($query){
                        echo "<script>
                        document.getElementById('result').innerText='Rejected Family History'
                        </script>";
                        echo "<script>setTimeout(() => {
                               window.location='index.php?ptype=patients_requests';
                               }, 2000);</script>";
                         return true;
                     }else{
                         echo "failur";
                         
                     }
                 }
                 }
/////////////////////////////////immunisation record///////////////////////////////////////////////
                 $categories=mysqli_query($conn,"SELECT * FROM immunisation  WHERE  status='unverified' order by id");
           
                 $i=1;
                 if(mysqli_num_rows($categories) > 0){
                 while($row=mysqli_fetch_array($categories)){
                 
                 ?>
<form action="#" method="post">

                            <h4>Immunisation Record</h4>
                 <table class="table table-bordered oldtab" width="100%" cellspacing="0">
<input type="hidden" name="id" value="<?php echo $row['id'];?>">

                 <tr> <th> Patient id</th><td><?php  echo $row['patient_id']; ?></td></tr>
                 <tr> <th> Manual Type immunisation</th><td><?php  echo $row['Manual_Type_Immunisation']; ?></td></tr>
                 <tr><th> File</th>
                          <td><a href="../doctors/immunisation_files/<?php echo $row['name']; ?>" target="_blank"><?php echo $row['name'];  ?></a></td></tr>
                 </table>
                
                 <button class="btn btn-primary"  name="accept6">Approve</button> &nbsp &nbsp &nbsp &nbsp
<button class="btn btn-primary"  name="reject6">reject</button>
           </form>
           <hr>
                 <?php
                 }
              }

              if(isset($_POST['accept6'])){
                     $id=$_POST['id'];
                     if(empty($_POST['id'])){
                         echo " no data";
                     }else{
                 
                    
                      
                     $query=mysqli_query($conn,"UPDATE `immunisation` set status='verified' where id='".$id."'" );
                     if($query){
                        echo "<script>
                        document.getElementById('result').innerText='Succesfully Approved immunisation'
                        </script>";
                        echo "<script>setTimeout(() => {
                               window.location='index.php?ptype=patients_requests';
                               }, 2000);</script>";
                     }
                    
                 }
                 }
                 
                 
                 
                 error_reporting(0);
                 if(isset($_POST['reject6'])){
                     $id=$_POST['id'];
                   
                     if(empty($_POST['id'])){
                         
                     }else{
                 
                    
                      
                     $query=mysqli_query($conn,"UPDATE `immunisation` set status='rejected' where id='$id'" );
                     if($query){
                        echo "<script>
                        document.getElementById('result').innerText='Rejected immunisation'
                        </script>";
                        echo "<script>setTimeout(() => {
                               window.location='index.php?ptype=patients_requests';
                               }, 2000);</script>";
                         return true;
                     }else{
                         echo "failur";
                         
                     }
                 }
                 }
                 //////////////////////////////////////clinical document////////////////////////////////
                 $categories=mysqli_query($conn,"SELECT * FROM clinical_report  WHERE status='unverified' order by id");
           
                 $i=1;
                 if(mysqli_num_rows($categories) > 0){
                 while($row=mysqli_fetch_array($categories)){
                 
                 ?>
                 <form action="#" method="post">
                 <table class="table table-bordered oldtab" width="100%" cellspacing="0">
<input type="hidden" name="id" value="<?php echo $row['id'];?>">
<h4>Clinical Data</h4>
                 <tr> <th> Patient id</th><td><?php  echo $row['patient_id']; ?></td></tr>
                 <tr><th> Document</th>
                          <td><a href="../doctors/clinical_db_data/<?php echo $row['Document']; ?>" target="_blank"><?php echo $row['Document'];  ?></a>
                      </td></tr>
                      <tr><th> Radiology Images</th>
                          <td><a href="../doctors/clinical_db_data/<?php echo $row['Radiology_Images']; ?>" target="_blank"><?php echo $row['Radiology_Images'];  ?></a>
                      </td></tr>
                      <tr><th> Blood Reports</th>
                          <td><a href="../doctors/clinical_db_data/<?php echo $row['Blood_Reports']; ?>" target="_blank"><?php echo $row['Blood_Reports'];  ?></a>
                      </td></tr>
                 <tr> <th> Additional Notes</th><td><?php  echo $row['Additional_Notes']; ?></td></tr>
      
                 </table>
                 <button class="btn btn-primary"  name="accept7">Approve</button> &nbsp &nbsp &nbsp &nbsp
<!-- <button class="btn btn-primary"  name="reject7">reject</button> -->
           </form>
           <hr>
                 <?php
                 }
              }
              if(isset($_POST['accept7'])){
                     $id=$_POST['id'];
                     if(empty($_POST['id'])){
                         echo " no data";
                     }else{
                 
                    
                      
                     $query=mysqli_query($conn,"UPDATE `clinical_report` set status='verified' where id='".$id."'" );
                     if($query){
                        echo "<script>
                        document.getElementById('result').innerText='Succesfully Approved Clinical record'
                        </script>";
                        echo "<script>setTimeout(() => {
                               window.location='index.php?ptype=patients_requests';
                               }, 2000);</script>";
                     }
                    
                 }
                 }
                 
                 
                 
                 error_reporting(0);
                 if(isset($_POST['reject7'])){
                     $id=$_POST['id'];
                   
                     if(empty($_POST['id'])){
                         
                     }else{
                 
                    
                      
                     $query=mysqli_query($conn,"UPDATE `clinical_report` set status='rejected' where id='$id'" );
                     if($query){
                        echo "<script>
                        document.getElementById('result').innerText='Rejected clinical record'
                        </script>";
                        echo "<script>setTimeout(() => {
                               window.location='index.php?ptype=patients_requests';
                               }, 2000);</script>";
                         return true;
                     }else{
                         echo "failur";
                         
                     }
                 }
                 }

 ////////////////////////////////miscellaneous////////////////////////////////////////////////////////////////////   
 
 $categories=mysqli_query($conn,"SELECT * FROM miscellaneous  WHERE status='unverified' order by id");
 $i=1;
 if(mysqli_num_rows($categories) > 0){
 while($row=mysqli_fetch_array($categories)){
 
 ?>
                 <form action="#" method="post">

 <table class="table table-bordered oldtab" width="100%" cellspacing="0">
 <input type="hidden" name="id" value="<?php echo $row['id'];?>">

 <tr> <th> Patient id</th><td><?php  echo $row['patient_id']; ?></td></tr>
 <tr><th> Document</th>
          <td><a href="../doctors/Miscellaneous/<?php echo $row['Document']; ?>" target="_blank"><?php echo $row['Document'];  ?></a></td></tr>
          <tr> <th> Additional Notes</th><td><?php  echo $row['Additional_Notes']; ?></td></tr>
 </table>
 
                 <button class="btn btn-primary"  name="accept8">Approve</button> &nbsp &nbsp &nbsp &nbsp
<!-- <button class="btn btn-primary"  name="reject8">reject</button> -->
           </form>
           <hr class="final">
 <?php
 }
}
if(isset($_POST['accept8'])){
    $id=$_POST['id'];
    if(empty($_POST['id'])){
        echo " no data";
    }else{

   
     
    $query=mysqli_query($conn,"UPDATE `miscellaneous` set status='verified' where id='".$id."'" );
    if($query){
       echo "<script>
       document.getElementById('result').innerText='Succesfully Approved miscellaneous record'
       </script>";
       echo "<script>setTimeout(() => {
              window.location='index.php?ptype=patients_requests';
              }, 2000);</script>";
    }
   
}
}



error_reporting(0);
if(isset($_POST['reject8'])){
    $id=$_POST['id'];
  
    if(empty($_POST['id'])){
        
    }else{

   
     
    $query=mysqli_query($conn,"UPDATE `miscellaneous` set status='rejected' where id='$id'" );
    if($query){
       echo "<script>
       document.getElementById('result').innerText='Rejected miscellaneous record'
       </script>";
       echo "<script>setTimeout(() => {
              window.location='index.php?ptype=patients_requests';
              }, 2000);</script>";
        return true;
    }else{
        echo "failur";
        
    }
}
}

////////////////////////////////////////////////////////////////////////////////////////////////////////

?>
<hr>
<br><br>
<center>
<h4>Requested data replies</h4>
</center>
<?php
$categories=mysqli_query($conn,"SELECT * FROM tmp_table  WHERE status='patient' order by id");
 $i=1;
 if(mysqli_num_rows($categories) > 0){
 while($row=mysqli_fetch_array($categories)){
 
 ?>
                 <form action="#" method="post">

 <table class="table table-bordered oldtab" width="100%" cellspacing="0">
 <input type="hidden" name="id" value="<?php echo $row['id'];?>">

 <tr> <th> Patient id</th><td><?php  echo $row['patient_id']; ?></td></tr>
 <tr> <th> Patient id</th><td><?php  echo $row['tmp_value']; ?></td></tr>
         
 </table>
            <button name="newbtn" class="btn btn-primary">Okey</button>
 </form>

 <?php

 }
}
if(isset($_POST['newbtn']))
{
            
                     $id=$_POST['id'];
                 
                     
                     $query=mysqli_query($conn,"UPDATE `tmp_table` set  status='ok' where id='$id'");
                     
                     if($query){
                        echo "<script>
                        document.getElementById('result').innerText='accepted new records'
                        </script>";
                        echo "<script>setTimeout(() => {
                               window.location='index.php?ptype=patients_requests';
                               }, 2000);</script>";
                     }
                    }




