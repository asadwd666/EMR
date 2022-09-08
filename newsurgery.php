<?php
include ("header.php");
include "db_connection/connection.php";




?>
<!DOCTYPE html>
<html lang="en">
<head>
    <style>
        .oldtab{
            display:none;
        }
        h5{
            display:none;
        }
        .new_surgery{
          margin-top:27rem;
          margin-left:1rem;
        }
    </style>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
  <div class="new_surgery">
<?php
                  
                  $categories=mysqli_query($conn,"SELECT * FROM surgical_history  WHERE patient_id='$patient_id'");
   $i=1;
   if(mysqli_num_rows($categories) > 0){
   while($row=mysqli_fetch_array($categories)){
   
   ?>
 
 <p style="color:red"><b>edit Surgical record</b> </p>
   <form action="#" class="newform" method="post">
 
       <table class="table edit"  border="0" cellspacing="0">
 
       <input type="hidden" name="id"  required value="<?php echo $row['id'];?>"/>
    
    
       <tr><th>Gallbladder Surgery</th><td>
      <input type="text" name="new1"   value="<?php echo $row['Gallbladder_surgery'];?>"/>
   </td></tr>
   <tr><th>Date of Surgery </th><td>
   <input type="date" name="new2"   value="<?php echo $row['Gallblader_srg_date'];?>"/>
   </td></tr>
   <tr><th>Procedure</th><td>
   <input type="text" name="new3"   value="<?php echo $row['Gallblader_srg_proc'];?>"/>
   </td></tr>
   <tr><th>Organ transplant</th><td>
 
   <input type="text" name="new4"   value="<?php echo $row['Organ_transplant'];?>"/>
   </td></tr>
   <tr><th>Type of Transplant </th><td>
 
   <input type="text" name="new5"   value="<?php echo $row['Transplant_Type'];?>"/>
   </td></tr>
   <tr><th>Date of Transplant</th><td>
 
   <input type="date" name="new6"   value="<?php echo $row['Transplant_Date'];?>"/>
   </td></tr>
   <tr><th>Transplant location</th><td>
 
   <input type="text" name="new7"   value="<?php echo $row['Transplant_location'];?>"/>
   </td></tr>
   <tr><th>Transplant Doctor</th><td>
 
   <input type="text" name="new8"   value="<?php echo $row['Transplant_Doctor'];?>"/>
   </td></tr>
   <tr><th>Fractures Operation</th><td>
 
   <input type="text" name="new9"   value="<?php echo $row['Fractures_Operation'];?>"/>
   </td></tr>
   <tr><th>Fracture Type</th><td>
 
   <input type="text" name="new10"   value="<?php echo $row['Fracture_Type'];?>"/>
   </td></tr>
   <tr><th>Procedure </th><td>
 
   <input type="text" name="new11"   value="<?php echo $row['Fracture_OP_procedure'];?>"/>
   </td></tr>
   <tr><th>Hip Knee Replacement</th><td>
 
   <input type="text" name="new13"   value="<?php echo $row['Hip-knee_replacement'];?>"/>

   </td></tr>
   <tr><th>Specify Replacement</th><td>
 
   <input type="text" name="new22"   value="<?php echo $row['Specify_Replacement'];?>"/>
   
   </td></tr>
   <tr><th>Surgery Date</th><td>
 
   <input type="date" name="new14"   value="<?php echo $row['Rep_surg_Date'];?>"/>
   </td></tr>
   <tr><th>Surgeon Name</th><td>
   <input type="text" name="new23"   value="<?php echo $row['location_rep_surg'];?>"/>
   </td></tr>
   <tr><th>Surgeon Name</th><td>
   <input type="text" name="new15"   value="<?php echo $row['Surgeon_name'];?>"/>
   </td></tr>
   <tr><th>Artificial Heart Valves</th><td>
 
   <input type="text" name="new16"   value="<?php echo $row['Artificial_heart_valves'];?>"/>
   </td></tr>
   <tr><th>Specify </th><td>
 
   <input type="text" name="new17"   value="<?php echo $row['Specify_Valves'];?>"/>
   </td></tr>
   <tr><th>Date of Surgery</th><td>
 
   <input type="date" name="new18"   value="<?php echo $row['Artificial_heart_surg_Date'];?>"/>
   </td></tr>
   <tr><th>Valve Type</th><td>
 
   <input type="text" name="new19"   value="<?php echo $row['Valve_Type'];?>"/>
   </td></tr>
   <tr><th>Other Surgical Procedure</th><td>
 
   <input type="text" name="new20"   value="<?php echo $row['Other_surg_procedure'];?>"/>
   </td></tr>
   <tr><th>Date of Procedure</th><td>
 
   <input type="date" name="new21"   value="<?php echo $row['Date_Of_procedure'];?>"/>
   </td></tr>
   
 


</table>
 <input class="btn btn-info" name="update" id="button" type="submit" value="update">
   <!-- <button >update</button> -->
 <br>
   </form>
   <br>
 
   
   <?php
   $i++;
   
   }
 }
 ?>
 </div>
</body>
</html>
  
                 
   
              <?php
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
                $query=mysqli_query($conn,"UPDATE `surgical_history` SET `Gallbladder_surgery`='$new1',`Gallblader_srg_date`='$new2',`Gallblader_srg_proc`='$new3',`Organ_transplant`='$new4',`Transplant_Type`='$new5',`Transplant_Date`='$new6',`Transplant_location`='$new7',`Transplant_Doctor`='$new8',`Fractures_Operation`='$new9',
                `Fracture_Type`='$new10',`Fracture_OP_procedure`='$new11',`Hip-knee_replacement`='$new13',`Specify_Replacement`='$new22',`Rep_surg_Date`='$new14',`location_rep_surg`='$new23',`Surgeon_name`='$new15',`Artificial_heart_valves`='$new16',`Specify_Valves`='$new17',`Artificial_heart_surg_Date`='$new18',`Valve_Type`='$new19',`Other_surg_procedure`='$new20',`Date_Of_procedure`='$new21' ,`status`='unverified'
                 where id='$id'" );
                  if($query){
                    echo "succesfully update";
                    echo "<script>setTimeout(() => {
                        window.location='profile.php?ptype=surg_record';
                        }, 1000);</script>";
                  }else{
                    echo "something went wrong";
                  }
                }
               