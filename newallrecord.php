<?php
session_start();
include('header.php');
include "db_connection/connection.php";

$patient_id=$_SESSION['USER']->id;
?>
<!DOCTYPE html>
<html lang="en">
<head>
<style>
    p {
      color: white;
      margin-bottom: 40px;
    }

    .containerxyz {
      float: right;
   
      box-shadow: rgba(17, 12, 46, 0.15) 0px 48px 100px 0px;
      right: 180px;

      border-radius: 5px;
      padding: 20px;
      width: 60%;
      position: absolute;
      top: 6rem;

    }

    .toggle {
      position: absolute;
      color: salmon;
      top: 1rem;
      right: 1rem;
      display: none;
      flex-direction: column;
      justify-content: space-between;
      width: 30px;
      height: 21px;

    }

    .toggle .bar {
      height: 3px;
      width: 100%;
      background-color: #333;
      border-radius: 10px;
    }


    h1 {
      margin-top: 20px;
    }

    .txt {
      width: 320px;
      height: 40px;
    }


    .button {
      border-radius: .4rem;
      float: right;
      margin: 10px;
      padding: 10px;

      background-color: salmon;
      color: white;
      border: none;

      cursor: pointer;
    }

    .button:hover {
      background-color: white;
      color: salmon;
      border: 1px solid salmon;
    }

    .top {
      width: 100%;
      height: 40px;

      color: black;

    }

    #top2 {
      width: 100%;
      height: 50px;



      color: black;

    }

 

    #bottom {

      width: 100%;
      height: auto;

    }

    line2. {
      color: blue;
    }

    

  

    span {
      float: left;
     margin-left:25rem;
      color: black;
      margin-top:-45rem;


      width: 100%;
    }
.newrecord{
  float: left;
     margin-left:25rem;
      color: black;
      margin-top:-55rem;


      width: 100%;
}
    #cancertype-error {
      margin-top: 34px;
      margin-left: 340px;
    }

    input[type='text'] {
      border: none;
      border-radius: 10px;
    }
    input[type='date'] {
      width:20rem;
      padding:10px;
      border: none;
      border-radius: 10px;
    }
label{
  font-weight:bold;
}
.myform{
  margin-top:40rem;
}
input{
  background:lightgrey;

}
input[type="text"]{
  padding:10px;
  width:20rem;
}



    @media only screen and (max-width: 550px) {
      #left_bar {
        display: flex;
        font-size: 5px;
        width: 6rem;
       
      }

      .toggle {
        display: block;
        z-index: 1;

      }

      .toggle .bar {
        height: 3px;
        width: 100%;
        background-color: salmon;
        border-radius: 10px;
        margin-top: 0.3rem;
        margin-left: -0.5rem;


      }

      #left_bar ul {


        gap: 1rem;


      }

      #left_bar li {
        background-color: white;
        width: 100%;
        height: 6vh;
        padding: 10px;
        border-radius: 10px;
      }

      span {
        float: left;
        margin-left:12rem;
        color: black;

        margin-top: -20rem;
        font-size:10px;
        background: none;
        width: 60%;
      }

    

      .containerxyz {
        position: absolute;

        left: 12rem;
        border-radius: 5px;
        padding: 20px;
        width: 60%;

      }






    }
  </style>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

</body>
</html>
<?php
 
   
    
$categories=mysqli_query($conn,"SELECT * FROM medical_record WHERE patient_id='$patient_id' and status='rejected'");
while($row=mysqli_fetch_array($categories)){
    ?>
 <form action="#" method="post">
    <input type="hidden" name="id" required value="<?php echo $row['id']; ?>">
    <br><br>
<b>Submit new From ? click the link below</b>
    <button name="new" id="new"  style="background-color:salmon;padding:10px;color:white;border:none;border-radius:20px;cursor:pointer" class="btn ">New</button>
  </form>
   <?php
  }
  if(isset($_POST['new']))
   {
  $id=$_POST['id'];
  $query=mysqli_query($conn,"UPDATE `medical_record` Set status='' where id='".$id."'" );
  if($query){
   ?>
  <form method="post" name="myform" action="#" onsubmit="return validateForm()">

<div class="containerxyz">

  <h1>MEDICAL HISTORY</h1><br><br>
 

  <section class="top">
    <label>Are you a diabetic?</label>
  </section>
  <section id="bottom">
    <input type="radio" name="dia_radio" id="diayes" value="yes" checked onclick="text(0);">Yes</input>
    <input type="radio" name="dia_radio" value="no" onclick="text(1);">No</input><br><br>
  </section>
  <div id="ist">
    <section class="top"><label>Date of diagnosis :</label>
    </section>
    <section id="bottom"><br> <input type="date" class="date" id="date1" name="dia_date"><br><br>
    </section>
  </div>

  <hr class="line">

 
  <section class="top">


    <label>Do you suffer from high blood pressure?</p></label><br><br>
  </section>
  <section id="bottom"><br>
    <input type="radio" name="blood_radio" value="yes" checked onclick="sec(0);">Yes</input>
    <input type="radio" name="blood_radio" value="no" onclick="sec(1)">No</input><br><br>
  </section>
  <div id="second">
    <section class="top">
      <label>Date of diagnosis :</p></label>
    </section>
    <section id="bottom"><br>
      <input type="date" class="date" name="blood_date">

      <br><br>
    </section>
  </div>
  <hr class="line">
  <br><br>
  <section class="top">
    <label>Do you have a history of cancer?</p></label><br><br>
  </section>
  <section id="bottom"><br>
    <input type="radio" name="cancer_radio" value="yes" checked onclick="third(0);">Yes</input>
    <input type="radio" name="cancer_radio" value="no" onclick="third(1);">No</input><br><br>
  </section>
  <div id="third">
    <section class="top"> <label>Date of diagnosis :</label>
    </section>
    <section id="bottom"> <br> <input type="date" class="date" name="cancer_date"><br><br>
    </section>
    <div class="icon">
      <section class="top"><label>Type of cancer :</label>
      </section>
      <section id="bottom"> <input type="text" class="txt"
          id="can" name="cancer_type" placeholder="Type here..." onkeyup="validateName()">


    </div>




    <br><br>
    </section>
    <section class="top"><label>Treatment received till date :</label>
    </section>
    <section id="bottom"><br> <input type="date" name="treatment_date" class="date">
      <br><br>
  </div>
  <hr class="line">
  </section>
  <br><br>
  <section class="top">
    <label>Have you ever had a heart attack ?</p></label><br><br>
  </section>
  <section id="bottom"><br><input type="radio" name="heart_radio" value="yes" checked
      onclick="fifth(0);">Yes</input>
    <input type="radio" name="heart_radio" value="no" onclick="fifth(1);">No</input><br><br>
  </section>
  <div id="fifth">
    <section class="top"> <label>Date of diagnosis :<br></section>
    <section id="bottom"><br></label>
      <input type="date" class="date" name="heart_date"><br><br>
    </section>
  </div>
  <hr class="line">
  <br><br>
  <section class="top">
    <label>Have you ever been diagnosed with HIV ,Hepatitis A,B or Hepatitis C?</p></label><br><br>
  </section>
  <section id="bottom"><br><input type="radio" name="hep_radio" value="yes" checked onclick="fifth(0);">Yes</input>
    <input type="radio" name="hep_radio" value="no" onclick="fifth(1);">No</input><br><br>
    <hr class="line">
  </section>
  <br><br>
  <section class="top">

    <label>Have you ever received a blood transfusion ?</p></label><br><br>
  </section>
  <section id="bottom"><br>
    <input type="radio" name="trans_radio" value="yes" checked onclick="six(0);">Yes</input>
    <input type="radio" name="trans_radio" value="no" onclick="six(1);">No</input><br><br>
  </section>
  <div id="six">
    <section class="top"><label>Date of last transfusion :</p></label></section>
    <section id="bottom"><br>
      <input type="date" class="date" name="trans_date"><br><br>
    </section>
  </div>

  <hr class="line">
  <br><br>
  <section class="top">

    <label>What is your blood group? Please specify if known :</p></label><br><br>
  </section>
  <section id="bottom"><br>
    <select name="blood_group">
      <option selected="true" disabled="disabled">Select</option>
      <option>A+</option>
      <option>A-</option>
      <option>B+</option>
      <option>B-</option>
      <option>O+</option>
      <option>O-</option>
      <option>AB+</option>
      <option>AB-</option>
    </select>
  </section>
  <hr name="line">
  <br><br>
  <section class="top">

    <label>Do you have any mental health conditions ?</p></label>
  </section>
  <section id="bottom"><br>
    <input type="radio" name="mental_radio" value="yes" checked onclick="seven(0);">Yes</input>
    <input type="radio" name="mental_radio" value="no" onclick="seven(1);">No</input><br><br>
  </section>
  <div id="seven">
    <section class="top">
      <label>Please specify :</p></label>
    </section>
    <section id="bottom"><br>
      <input type="text" class="txt" name="mental_con" placeholder="Type here...">
    </section>
  </div>
  <br><br>
  <hr class="line">
  <section class="top">

    <label>Have you ever had a stroke ?</label><br><br>
  </section>
  <section id="bottom"><br>
    <input type="radio" name="stroke_radio" value="yes" checked onclick="eight(0);">Yes</input>
    <input type="radio" name="stroke_radio" value="no" onclick="eight(1);">No</input><br><br>
  </section>
  <div id="eight">
    <section class="top">
      <label>Date of diagnosis :</p></label>
    </section>
    <section id="bottom"><br>
      <input type="date" class="date" name="stroke_date"><br><br>
    </section>
  </div>
  <hr class="line">
  <br><br>
  <section class="top">

    <label>Do you suffer from any immune deficiency disorders ?</p></label><br>
  </section>
  <section id="bottom">
    <input type="radio" name="immune_radio" value="yes" checked onclick="nine(0);">Yes</input>
    <input type="radio" name="immune_radio" value="no" onclick="nine(1);">No</input><br><br>
  </section>
  <div id="nine">
    <section class="top">
      <label>Date of diagnosis :</p></label>
    </section>
    <section id="bottom"><br>
      <input type="date" class="date" name="immune_date"><br><br>
    </section>
  </div>
  <hr class="line">
  <br><br>
  <section id="top2">


    <label>Do you suffer from any lung conditions like asthma<br> COPD, emphysema, cystic fibrosis,pleurisy or TB?
      </p></label><br><br>
  </section>
  <section id="bottom"><br>
    <input type="radio" name="lung_radio" value="yes" checked onclick="ten(0);">Yes</input>
    <input type="radio" name="lung_radio" value="no" onclick="ten(1);">No</input><br><br>
  </section>
  <div id="ten">
    <section class="top">
      <label>Please specify :</label><br><br>
    </section>
    <section id="bottom"><br>
      <input type="text" class="txt" name="lung_con" placeholder="Type here..."><br><br>
    </section>
    <section class="top">
      <label>Date of diagnosis :</label>
    </section>
    <section id="bottom"><br>
      <input type="date" class="date" name="lung_date"><br><br>
    </section>
  </div>
  <hr class="line">
  <br><br>
  <section class="top">
    <label>Do you suffer from ulcerative colitis, crohns disease or coeliac disease ?</p></label><br><br>
  </section>
  <section id="bottom"><br>
    <input type="radio" name="ulcerative_radio" value="yes" checked onclick="eleven(0);">Yes</input>
    <input type="radio" name="ulcerative_radio" value="no" onclick="eleven(1);">No</input><br><br>
  </section>
  <div id="eleven">
    <section class="top"><label>Please specify :</p></label><br><br></section>
    <section id="bottom"><br><input type="text" class="txt" name="ulcerative_con"
        placeholder="Type here..."><br><br>
    </section>
    <section class="top"><label>Date of diagnosis :</label>
    </section>
    <section id="bottom"><br> <input type="date" class="date" name="ulcerative_date"><br><br></section>
  </div>
  <hr class="line">
  <br><br>
  <section id="top2">


    <label>Do you suffer from any neurological conditions like epilepsy, parkinsons <br>
      disease, multiple sclerosis or huntington's?</p></label><br><br>
  </section>
  <section id="bottom"><br><input type="radio" name="neuro_radio" value="yes" checked
      onclick="twelve(0);">Yes</input>
    <input type="radio" name="neuro_radio" value="no" onclick="twelve(1);">No</input><br><br>
  </section>
  <div id="twelve">
    <section class="top"><label>Please specify :</label><br><br>
    </section>
    <section id="bottom"><br> <input type="text" class="txt" name="neuro_con" placeholder="Type here..."><br><br>
    </section>
    <section class="top"> <br><label>Date of diagnosis :</label>
    </section>
    <section id="bottom"><br> <input type="date" class="date" name="neuro_date"><br><br>
    </section>
  </div>
  <hr class="line">
  <br><br>
  <section id="top2">


    <label>Do you have any blood disorders like anaemia, sickle cell disease ,clotting<br>
      disorders e.g thrombophilia, leukaemia, lymphoma, myeloma, or polycythemia vera ?</p></label><br></br>
  </section>
  <section id="bottom"><br><input type="radio" name="dis_radio" value="yes" checked
      onclick="thirteen(0);">Yes</input>
    <input type="radio" name="dis_radio" value="no" onclick="thirteen(1);">No</input><br><br>
  </section>
  <div id="thirteen">
    <section class="top"> <label>Please specify :</label><br><br>
    </section>
    <section id="bottom"><br> <input type="text" class="txt" name="dis_con" placeholder="Type here..."><br><br>
    </section>
    <section class="top"><label>Date of diagnosis :</label><br><br>
    </section>
    <section id="bottom"><br> <input type="date" class="date" name="dis_date"><br><br>
    </section>
  </div>
  <hr class="line">
  <br><br>


  <section class="top">
    <label>Do you have a cardiac pacemaker in situ ?</p></label><br><br>
  </section>
  <section id="bottom"><br> <input type="radio" name="pacemaker_radio" value="yes" checked
      onclick="fourteen(0);">Yes</input>
    <input type="radio" name="pacemaker_radio" value="no" onclick="fourteen(1);">No</input><br><br>
  </section>
  <div id="fourteen">
    <section class="top"><label>Date of pacemaker :</label>
    </section>
    <section id="bottom"><br> <input type="date" class="date" name="pacemaker_date"><br><br>
    </section>
    <section class="top"><label>Type of pacemaker if known :</label><br><br>
    </section>
    <section id="bottom"><br><input type="text" class="txt" name="pacemaker_con" placeholder="Type here..."><br><br>
    </section>
  </div>
  <hr class="line">
  <br><br>





  <label>List any other medical conditions and date Of diagnosis :</p></label>
  <br>
  <section class="top"><label>Medical conditions :</label><br><br>
  </section>
  <section id="bottom"><br> <input type="text" class="txt" name="med_con" placeholder="Type here..."><br><br>
  </section>
  <section class="top"><label>Date of diagnosis :</label></section>
  <section id="bottom"><br>
    <input type="date" class="date" name="med_date"><br><br>
  </section>
  <hr class="line">
  <br><br>
  <section class="top">
    <label>Add additional notes :</p></label><br><br>
  </section>
  <section id="bottom"> <br><input type="text" class="txt" name="add_notes" placeholder="Type here..."><br><br>
    <hr class="line">
  </section>
  <br><br>
  <button name="submit" class="button" id="but">Save</button>
</div>
</form>
   <?php
  }
}




if (isset($_POST['submit'])) {
    
   
   
 

    
    $patient_id=$_SESSION['USER']->id;
  $blood_radio=$_POST['blood_radio'];

  $dia_date=$_POST['dia_date'];

  $blood_radio =$_POST['blood_radio'];
  $blood_date=$_POST['blood_date'];
  $cancer_radio=$_POST['cancer_radio'];
  $cancer_date=$_POST['cancer_date'];
  
 


 


  $treatment_date=$_POST['treatment_date'];
  $heart_radio=$_POST['heart_radio'];
  $heart_date=$_POST['heart_date'];
 $hep_radio =$_POST['hep_radio'];
  $trans_radio=$_POST['trans_radio'];
  $trans_date=$_POST['trans_date'];
  $blood_group=$_POST['blood_group'];
  $mental_radio=$_POST['mental_radio'];
  $mental_con=$_POST['mental_con'];
  $stroke_radio=$_POST['stroke_radio'];
  $stroke_date=$_POST['stroke_date'];
  $immune_radio=$_POST['immune_radio'];
  $immune_date=$_POST['immune_date'];
  $lung_radio=$_POST['lung_radio'];
 $lung_con =$_POST['lung_con'];
  $lung_date=$_POST['lung_date'];
 $ulcerative_radio =$_POST['ulcerative_radio'];
 $ulcerative_con=$_POST['ulcerative_con'];
 $ulcerative_date =$_POST['ulcerative_date'];
 $neuro_radio=$_POST['neuro_radio'];
 $neuro_con =$_POST['neuro_con'];
 $neuro_date=$_POST['neuro_date'];
 $dis_radio =$_POST['dis_radio'];
 $dis_con=$_POST['dis_con'];
 $dis_date =$_POST['dis_date'];
 $pacemaker_radio=$_POST['pacemaker_radio'];
 $pacemaker_date =$_POST['pacemaker_date'];
 $pacemaker_con=$_POST['pacemaker_con'];
 $med_con=$_POST['med_con'];
 $med_date =$_POST['med_date'];
 $add_notes=$_POST['add_notes'];
 
 
 $cancer_type=$_POST['cancer_type'];
 $query2=mysqli_query($conn,"DELETE FROM `medical_record` WHERE patient_id='$patient_id'" );

 $query = mysqli_query($conn,"INSERT INTO `medical_record`(`patient_id`, `diabetic`, `diabetic_diagnosis_date`, `high_blood_presuure`, `HBP_diagnosis_date`, `cancer`, `cancer_diagnosis_date`, `cancer_type`, `treat_recieved_date`, `heart_attack`, `heart_diagnosis_date`, `HIV_hepatitis_etc`, `blood_transfusion`, `transfusion_date`, `blood_group`, `mental_health_condition`, `specify_mental`, `stroke`, `stroke_diagnosis_date`, `immune_disorder`, `immune_diagnosis_date`, `lung_disease`, `specify_lung_disease`, `lung_disease_diagnosis`, `ulcerative_crohn_etc`, `specify_ulcerative_etc`, `diagnosis_ulcerative_etc`, `neurogical_disease`, `specify_neurogical_disease`, `neuragical_diagnosis`, `BP_disorder`, `specify_bp_disorder`, `bp_diagnosis_date`, `cardiac_pacemaker`, `date_of_pacemaker`, `type_pacemaker`, `other_med_con`, `diagnosis_date_other`, `additional_note`) VALUES 
 ('$patient_id','$blood_radio','$dia_date',' $blood_radio','$blood_date',' $cancer_radio','$cancer_date',
 ' $cancer_type','$treatment_date','$heart_radio','$heart_date',' $hep_radio','$trans_radio','$trans_date',
 '$blood_group',' $mental_radio','$mental_con','$stroke_radio','$stroke_date','$immune_radio','$immune_date',
 '$lung_radio','$lung_con','$lung_date','$ulcerative_radio','$ulcerative_con','$ulcerative_date','$neuro_radio',
 '$neuro_con','$neuro_date',' $dis_radio','$dis_con','$dis_date','$pacemaker_radio','$pacemaker_date',
 '$pacemaker_con','$med_con','$med_date','$add_notes')");
 
if($query)
{


  echo '<script>alert("your form hasbeen succesfully saved");
    window.location = "profile.php?ptype=med_record";</script>';
  
}
else{
  echo '<script>alert("Something Went Wrong");
    window.location = "profile.php?ptype=med_record";</script>';
}
}
  
  
  // updating the data
  ?>


