
<head>
    <style>
        .container{
            margin-top:5rem;
        }
        p{
            color:red;
            font-style:italic;
            font-weight:bold;
        }
        #lab{
            float:left;
            font-style:italic;
            margin-top:10px;
            font-weight:bold;
            
        }
        #txt{
            margin-left:120px;
            margin-top:70px;
            border:solid darkslategrey;
            
        }
        #form{
            background-color:lightgrey;
            margin-top:60px;
            height:290px;
        }
        #btn{
            background-color: salmon;
            color:white;
            float:left;
            margin-left:190px;
        }
        #btn:hover{
            background:white;
            color:salmon;
            border:1px solid salmon;
        }
        h5{
            color:blue;
            font-style:italic;
            letter-spacing:3px;
        }
        h3{
            color:salmon;
            font-style:italic;
            letter-spacing:3px;
        }
        #head{
            width:40%;
        }
        .header{
            margin-left:480px;
        }
        span{
            color:red;
        }
        
      
    </style>
</head>
<body>
    <div class="container"><br><br>
    <center> <h4>PATIENT RECORD</h4></center>

    <form action="#" id="form" class="text-center border border-light p-4" method="post">
  
       <input type="number" id="txt"  class="form-control mb-4" placeholder="patient id..." name="id" style="width:150px;">
      
        <button class="btn" id="btn" name="submit" >Search</button><br>
    </form>
    </div>
</body>


<?php
include "../db_connection/connection.php";
if(isset($_POST['submit'])){

    $id=$_POST['id'];
    if(empty($id))
    {
        echo "<span>please Fill in the Field</span>";
    }

  else{

?>




  
  <h5>Medical Record</h5>

<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
           
                  <tr >
                      <th>S.no</th>
                      <th> Diabetic </th>
                      <th>Diagnosis Date  </th>
                      
                   
                      
                      <th>HBP</th>
                      <th>Dianosis Date</th>
                      <th>Cancer</th>
                      <th>Diagnosis Date</th>
                      <th>Canncer Type</th>
                      <th>treatment recieved date</th>
                      <th>heart attack</th>
                      <th>Dianosis Date</th>
                      <th>Hiv hepatitis Etc</th>
                      <th>Blood Transfusion</th>
                      <th>Transfusion Date </th>
                      <th>Blood Group</th>
                      <th>Mental Health Condition</th>
                      <th>Specify Condition</th>
                      <th>Stroke</th>
                      <th>Diagnosis Date</th>
                      <th>Immune Disorder</th>
                      <th>Diagnosis Date</th>
                   
        
                      <th>Lung Disease</th>
                      <th>Specify</th>
                      <th>Diagnosis Date</th>
                      <th>Ulcerative Crohn</th>
                      <th>Specify</th>
                      <th>Diagnosis Date</th>
                      <th>Neurogical Disease</th>
                      <th>Specify</th>
                      <th>Diagnosis Date</th>
                      <th>Bp Disorder</th>
                      <th>Specify</th>
                      <th>Diagnosis Date</th>
                      <th>Cardiac Pacemaker</th>
                      <th>Date Of Pacemaker</th>
                      <th>Type Of Pacemaker</th>
                      <th>Other Medical Condition</th>
                      <th>Diagnosis Date</th>
                      <th>Additional Notes</th>
               </tr>
               
 
                <?php
                
               $categories=mysqli_query($conn,"SELECT * FROM medical_record  WHERE patient_id='$id' and status='verified'");
$i=1;
if(mysqli_num_rows($categories) > 0){
while($row=mysqli_fetch_array($categories)){

?>
<tr>
<td><?php echo $i; ?></td>
<td><?php  echo $row['diabetic']; ?></td>
           <td><?php  echo $row['diabetic_diagnosis_date']; ?></td>
           <td><?php  echo $row['high_blood_presuure']; ?></td>
           <td><?php  echo $row['HBP_diagnosis_date']; ?></td>
           <td><?php  echo $row['cancer']; ?></td>
           <td><?php  echo $row['cancer_diagnosis_date']; ?></td>
           <td><?php  echo $row['cancer_type']; ?></td>
           <td><?php  echo $row['treat_recieved_date']; ?></td>
           <td><?php  echo $row['heart_attack']; ?></td>
           <td><?php  echo $row['heart_diagnosis_date']; ?></td>
           <td><?php  echo $row['HIV_hepatitis_etc']; ?></td>
           <td><?php  echo $row['blood_transfusion']; ?></td>
           <td><?php  echo $row['transfusion_date']; ?></td>
           <td><?php  echo $row['blood_group']; ?></td>
           <td><?php  echo $row['mental_health_condition']; ?></td>
           <td><?php  echo $row['specify_mental']; ?></td>
           <td><?php  echo $row['stroke']; ?></td>
           <td><?php  echo $row['stroke_diagnosis_date']; ?></td>
           <td><?php  echo $row['immune_disorder']; ?></td>
           <td><?php  echo $row['immune_diagnosis_date']; ?></td>
           
           <td><?php  echo $row['lung_disease']; ?></td>
           <td><?php  echo $row['specify_lung_disease']; ?></td>
           <td><?php  echo $row['lung_disease_diagnosis']; ?></td>
           <td><?php  echo $row['ulcerative_crohn_etc']; ?></td>
           <td><?php  echo $row['specify_ulcerative_etc']; ?></td>
           <td><?php  echo $row['diagnosis_ulcerative_etc']; ?></td>

           <td><?php  echo $row['neurogical_disease']; ?></td>
           <td><?php  echo $row['specify_neurogical_disease']; ?></td>
           <td><?php  echo $row['neuragical_diagnosis']; ?></td>
           <td><?php  echo $row['BP_disorder']; ?></td>
           <td><?php  echo $row['specify_bp_disorder']; ?></td>
           <td><?php  echo $row['bp_diagnosis_date']; ?></td>
           <td><?php  echo $row['cardiac_pacemaker']; ?></td>
           <td><?php  echo $row['date_of_pacemaker']; ?></td>
           <td><?php  echo $row['type_pacemaker']; ?></td>
           <td><?php  echo $row['other_med_con']; ?></td>
           <td><?php  echo $row['diagnosis_date_other']; ?></td>
           <td><?php  echo $row['additional_note']; ?></td>
           </tr>
       
         <?php $i++;?>


</tr>
<?php
$i++;

}
}else{
    echo "<p>no record founds</p>";
}

?>

</table>



<h5>Surgical History</h5>

    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                
                <tr>
                    <th>Record</th>
                  <th>Gallblader Surgery</th>
                  <th>Surgery Date</th>
                  <th>Surg Procedure</th>
                  <th>Organ Transplant</th>
                  <th>Transplant Type</th>
                  <th>Transplant Date</th>
                  <th>Location </th>
                  <th>Doctor</th>
                  <th>Fractures Operation</th>
                  <th>Fracture Type</th>
                  <th>Procedure</th>
                  <th>Hip/Knee replacement</th>
                  <th>Specification</th>
                  <th>Date</th>
                  <th>Location</th>
                  <th>Surgeon</th>
                  <th>Artificial heart valves</th>
                  <th>Valve Specification</th>
                  <th>Date</th>
                  <th>Type</th>
                  <th>Other Surg Proce</th>
                  <th>Date</th>
                      
           </tr>
        
           <?php
include("connection.php");

$query2=mysqli_query($conn,"SELECT * FROM `surgical_history` WHERE patient_id='$id' and status='verified'");
$i=1;
if(mysqli_num_rows($query2) > 0)
{

while($row=mysqli_fetch_array($query2)){

?>
           

            
               
           
         
           <tr>
               <td><?php echo $i;?></td>
           <td><?php  echo $row['Gallbladder_surgery']; ?></td>
           <td><?php  echo $row['Gallblader_srg_date']; ?></td>
           <td><?php  echo $row['Gallblader_srg_proc']; ?></td>
           <td><?php  echo $row['Organ_transplant']; ?></td>
           <td><?php  echo $row['Transplant_Type']; ?></td>
           <td><?php  echo $row['Transplant_Date']; ?></td>
           <td><?php  echo $row['Transplant_location']; ?></td>
           <td><?php  echo $row['Transplant_Doctor']; ?></td>
           <td><?php  echo $row['Fractures_Operation']; ?></td>
           <td><?php  echo $row['Fracture_Type']; ?></td>
           <td><?php  echo $row['Fracture_OP_procedure']; ?></td>
           <td><?php  echo $row['Hip-knee_replacement']; ?></td>
           <td><?php  echo $row['Specify_Replacement']; ?></td>
           <td><?php  echo $row['Rep_surg_Date']; ?></td>
           <td><?php  echo $row['location_rep_surg']; ?></td>
           <td><?php  echo $row['Surgeon_name']; ?></td>
           <td><?php  echo $row['Artificial_heart_valves']; ?></td>
           <td><?php  echo $row['Specify_Valves']; ?></td>
           <td><?php  echo $row['Artificial_heart_surg_Date']; ?></td>
           <td><?php  echo $row['Valve_Type']; ?></td>
           <td><?php  echo $row['Other_surg_procedure']; ?></td>
           <td><?php  echo $row['Date_Of_procedure']; ?></td>
           
           </tr>
            
          
           <?php
           $i++;
           }
        }
        else{
            echo "<p>no record founds</p>";
        }
        
           ?>
           </table>




           <h5>Medication</h5>
<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
<tr>
<th>S.No</th><th>Allergy</th><th>Regular Medicine</th><th>Frequency</th><th>Dose</th><th>Starting Date</th>
</tr>
<?php
include("connection.php");

$categories=mysqli_query($conn,"SELECT * FROM `medication` WHERE patient_id='$id' and status='verified'");
$i=1;

if(mysqli_num_rows($categories) > 0)
{
while($fetch=mysqli_fetch_array($categories)){

?>
<tr>
<td><?php echo $i; ?></td><td><?php echo $fetch['Allergy']; ?></td><td><?php echo $fetch['Regular Medicine'];?><td><?php echo $fetch['Frequency'];?></td><td><?php echo $fetch['Dose'];?></td><td><?php echo $fetch['Starting_date'];?></td>


</tr>
<?php
$i++;

}
}else{
    echo "<p>no record founds</p>";
}

?>

</table>



<h5>Social history</h5>

<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
           
                  <tr >
                      <th>S.no</th>
                      <th> Smoking </th>
                      <th>How Much </th>
                      
                   
                      
                      <th>How often</th>
                      <th>Drugs</th>
                      <th>How Much</th>
                      <th>How Often</th>
                      <th>Live With</th>
                      <th>Functional Status</th>
                     
               </tr>
               
 
                <?php
                
               $categories=mysqli_query($conn,"SELECT * FROM social_history  WHERE patient_id='$id' and status='verified'");
$i=1;
if(mysqli_num_rows($categories) > 0)
{

while($row=mysqli_fetch_array($categories)){

?>
<tr>
<td><?php echo $i; ?></td>
<td><?php  echo $row['Smoking']; ?></td>
           <td><?php  echo $row['How_Much_Smoke']; ?></td>
           <td><?php  echo $row['How_often_Smoke']; ?></td>
           <td><?php  echo $row['Drugs']; ?></td>
           <td><?php  echo $row['How_Much_Drug']; ?></td>
           <td><?php  echo $row['How_Often_Drug']; ?></td>
           <td><?php  echo $row['Live_With']; ?></td>
           <td><?php  echo $row['Functional_Status']; ?></td>
         
           </tr>
       
         


</tr>
<?php
$i++;

}
}else{
    echo "<p>no record founds</p>";
}
  

 

?>

</table>


<h5>Family history</h5>

<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
           
                  <tr >
                      <th>S.no</th>
                      <th> Disease </th>
                      <th>Family Member </th>
                      
                   
                      
                      <th>Other Family Record</th>
                    
                     
               </tr>
               
 
                <?php
                
               $categories=mysqli_query($conn,"SELECT * FROM `family_history`   WHERE patient_id='$id' and status='verified'");
$i=1;
if(mysqli_num_rows($categories) > 0)
{
while($row=mysqli_fetch_array($categories)){

?>
<tr>
<td><?php echo $i; ?></td>
<td><?php  echo $row['diseases']; ?></td>
           <td><?php  echo $row['family_member']; ?></td>
           <td><?php  echo $row['other_family_record']; ?></td>
           
         
           </tr>
       
        


</tr>
<?php
$i++;

}
}else{
    echo "<p>no record founds</p>";
}
  


?>

</table>


<h5>Immunisation Record</h5>






<div class="row">
        <div class="col-xs-8 col-xs-offset-2">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Manually Typed Immunisation</th>
                        <th>File Name</th>
                        <th>View</th>
                        <th>Download</th>
                    </tr>
                </thead>
                <tbody>
                <?php
                $sql = "select * from immunisation   WHERE patient_id='$id' and status='verified'";
                $result = mysqli_query($conn, $sql);
                $i = 1;
                if(mysqli_num_rows($result) > 0){
                while($row = mysqli_fetch_array($result)) { ?>
                <tr>
                    <td><?php echo $i++; ?></td>
                    <td><?php echo $row['Manual_Type_Immunisation']; ?></td>
                    <td><?php echo $row['name']; ?></td>
                    <td><a href="immunisation_files/<?php echo $row['name']; ?>" target="_blank">View</a></td>
                    <td><a href="immunisation_files/<?php echo $row['name']; ?>" download>Download</td>
                </tr>
                <?php }
                }else{
                    echo "<p>no record founds</p>";
                } ?>
                </tbody>
            </table>
        </div>
    </div>



    <h5>Clinical record</h5>
    <div class="row">
        <div class="col-xs-8 col-xs-offset-2">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Document</th>
                        <th>View </th>
                        <th>Download</th>
                        <th>Radiology Images</th>
                        <th>View </th>
                        <th>Download</th>

                        <th>Blood Report</th>
                        <th>View </th>
                        <th>Download</th>
                        <th>Additional Notes</th>
                    </tr>
                </thead>
                <tbody>
                <?php
                $sql = "select * from clinical_report  WHERE patient_id='$id' and status='verified'";
                $result = mysqli_query($conn, $sql);
                if(mysqli_num_rows($result) > 0)
                {
                $i = 1;
                while($row = mysqli_fetch_array($result)) { ?>
                <tr>
                    <td><?php echo $i++; ?></td>
                    <td><?php echo $row['Document']; ?></td>
                    <td><a href="clinical_db_data/<?php echo $row['Document']; ?>" target="_blank">View </a></td>
                    <td><a href="clinical_db_data/<?php echo $row['Document']; ?>" download>Download </td>
                    <td><?php echo $row['Radiology_Images']; ?></td>
                    <td><a href="clinical_db_data/<?php echo $row['Radiology_Images']; ?>" target="_blank">View</a></td>
                    <td><a href="clinical_db_data/<?php echo $row['Radiology_Images']; ?>" download>Download</td>
                    <td><?php echo $row['Blood_Reports']; ?></td>
                    <td><a href="clinical_db_data/<?php echo $row['Blood_Reports']; ?>" target="_blank">View</a></td>
                    <td><a href="clinical_db_data/<?php echo $row['Blood_Reports']; ?>" download>Download</td>
                    <td><?php echo $row['Additional_Notes']; ?></td>

                    

                    

                  
                </tr>
                <?php }
                }
                else{
                    echo "<p>no record founds</p>";
                } ?>
                </tbody>
            </table>
        </div>
    </div>

    <h5>MISCELLANEOUS</h5>






<div class="row">
        <div class="col-xs-8 col-xs-offset-2">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Document</th>
                        <th>View</th>
                        
                        <th>Download</th>
                        <th>Additional Notes</th>
                    </tr>
                </thead>
                <tbody>
                <?php
               $query = "select * from miscellaneous   WHERE patient_id='$id' and status='verified'";
              $query_run = mysqli_query($conn, $query);
                $i = 1;
                if(mysqli_num_rows($query_run) > 0)        
                {

      
                while($row = mysqli_fetch_array($query_run)) { ?>
                <tr>
                    <td><?php echo $i++; ?></td>
                    <td><?php echo $row['Document']; ?></td>
                    
                    <td><a href="Miscellaneous/<?php echo $row['Document']; ?>" target="_blank">View</a></td>
                    <td><a href="Miscellaneous/<?php echo $row['Document']; ?>" download>Download</td>
                    <td><?php echo $row['Additional_Notes']; ?></td>
                </tr>
                <?php }
                }else
                {
                echo "<p>no record founds</p>";} ?>
                </tbody>
            </table>
        </div>
    </div>



<?php
}
?>
<div class="row">
        <div class="col-xs-8 col-xs-offset-2">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Additional requested data</th>
                       
                    </tr>
                </thead>
                <tbody>
                <?php
$query = "select * from tmp_table   WHERE patient_id='$id' and status='ok'";
$query_run = mysqli_query($conn, $query);
 $i = 1;
 if(mysqli_num_rows($query_run) > 0)        
 {


 while($row = mysqli_fetch_array($query_run)) { ?>
 <tr>
 <td><?php echo $i++; ?></td>
     <td><?php echo $row['tmp_value']; ?></td>
 </tr>
 <?php }
 }else
 {
 echo "<p>no record founds</p>";} 

?>

</tbody>
            </table>
        </div>
    </div>


<?php

}
?>
