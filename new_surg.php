<?php
define('letsgo',true);
// include('header.php');
include "db_connection/connection.php";

$patient_id=$_SESSION['USER']->id;


?>
<html>
<head>
    <style>
                 .containerabc{
                float: right;
   
   box-shadow: rgba(17, 12, 46, 0.15) 0px 48px 100px 0px;
   right: 180px;

   border-radius: 5px;
   padding: 20px;
   width: 60%;
   position: absolute;
   top: 6rem;
         
         
        }
       h1{
        margin-top:20px;
       }
        .txt{
          width:320px;
          height:40px;
          padding:4px;
        }
        span{
            float: left;
     margin-left:25rem;
      color: black;
      margin-top:-45rem;


      width: 100%;
  }
        .button{
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
  p{
      color:red;
  }
  #try{
    width: 100%;
      height: 40px;

      color: black;
      
  }
  
        .extra{
            color:blue;
        }
        #try2{
            width: 100%;
      height: auto;
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
            #left_bar{
                display:none;
            }
            span{
              float: left;
        margin-left:12rem;
        color: black;

        margin-top: -20rem;
        font-size:10px;
        background: none;
        width: 60%;
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
      #left_bar{
        display:flex;
        width:10rem;
      
       
      }
      #left_bar ul {


gap: 1rem;


}

#left_bar li {
background-color: white;
width: 80%;
height: 6vh;
padding: 10px;
font-size:10px;
border-radius: 10px;
}

            .containerabc{
              position: absolute;

left: 12rem;
border-radius: 5px;
padding: 20px;
width: 60%;
        
            }
        }


</style>
</head>
<body>


<form method="post" action="#">
   <div class="containerabc">
   <h1>SURGICAL HISTORY</h1><br><br>
  <section id="try">
<label>Have you had gallbladder surgery?</label>  <br> 
</section><section id="try2"><br>
<input type="radio" name="glab_radio" value="Yes" checked>Yes</input>
<input type="radio" name="glab_radio" value="No" checked>No</input><br><br>

    </section>


<section id="try">
    <label>Date of surgery :</label><br><br></section><section id="try2"><br>
<input type="date" class="date" name="surg_date"><br><br>





    </section>
    <section id="try">
<label>Please specify type of procedure if known :</label><br></section><section id="try2"><br>
<input type="text" placeholder="Type here" class="txt" name="surg_pro" ><br> <br>


    </section>
   <hr style="height:2px;border-width:0;color:blue;background-color:blue">

<section id="try">
    
<label>Have you had an organ transplant ?</label>  <br> <br>
    </section><section id="try2"><br>
<input type="radio" name="organ_radio" value="yes" checked>Yes</input>
<input type="radio" name="organ_radio" value="no" checked>No</input>
<br> <br></section>

<section id="try">
    <label>Type of transplant :</label><br><br></section><section id="try2"><br>
<input type="text" placeholder="Type here" class="txt" name="transplant_type" >

    </section><br>
<section id="try">
    <label>Date of transplant</label><br><br></section><section id="try2"><br>
<input type="date" class="date" name="transplant_date">
<br><br>
    </section>


<section id="try">
    <label >Location of transplant :</label><br><br></section><section id="try2"><br>
<input type="text" placeholder="Type here" class="txt" name="loc_transplant">
<br><br>
    </section>





<section id="try">
    <label >Name of transplant doctor :</label><br></section><section id="try2"><br>
<input type="text" placeholder="Type here" class="txt" name="doc_transplant">
<br><br>
    </section>
   <hr style="height:2px;border-width:0;color:blue;background-color:blue">

<section id="try">


<label> Have you had any operations for fractures ?</label>  <br> <br></section><section id="try2"><br>
<input type="radio" name="fractures_op" value="Yes" checked>Yes</input>
<input type="radio" name="fractures_op" value="No" checked>No</input>
<br><br></section>
<section id="try">

    <label >What fracture was it ? </label><br></section><section id="try2"><br>
<input type="text" placeholder="Type here" class="txt" name="fracture_type">
<br><br></section>

<section id="try">
    <label>Type of procedure if known :</label><br><br></section><section id="try2"><br>
<input type="text" placeholder="Type here" class="txt" name="fracture_pro">
<br><br></section>

   <hr style="height:2px;border-width:0;color:blue;background-color:blue">
 
  <section id="try">


    
<label>Have you ever had a hip or knee replacement operation?</label><br><br>  </section><section id="try2"><br> 
<input type="radio"  name="hip_knee_op" value="Yes" checked>Yes</input>
<input type="radio" name="hip_knee_op" value="No" checked>No</input>
<br><br>
    </section>
    <section id="try">

    <label>Please specify :</label><br><br></section><section id="try2"><br>
<input type="text" placeholder="Type here" class="txt" name="specify_op">
<br><br></section><section id="try">


    <label>Date of surgery :</label><br><br></section><section id="try2"><br>
<input type="date" class="date" name="hip_knee_date">
<br><br></section><section id="try">
    <label>Location of surgery :</label><br><br></section><section id="try2"><br>
<input type="text" placeholder="Type here" class="txt" name="loc_hip_knee" >
<br><br></section>
<section id="try">

    <label>Name of surgeon :</label><br><br></section><section id="try2"><br>
<input type="text" placeholder="Type here" class="txt" name="surg_name">
<br><br></section>
   <hr style="height:2px;border-width:0;color:blue;background-color:blue">

  <section id="try"> <br>
<label>Do you have any artificial heart valves : </label>  <br> <br></section><section id="try2"><br>
<input type="radio" name="heart_valves" value="Yes" checked>Yes</input>
<input type="radio" name="heart_valves" value="No" checked>No</input>
<br><br></section>
<section id="try">
    <label>Please specify which valve ?</label><br><br></section><section id="try2"><br>
<input type="text" placeholder="Type here" class="txt" name="spe_valves">
<br><br></section>

<section id="try">
    <label>Date of surgery :</label><br><br></section><section id="try2"><br>
<input type="date" class="date" name="heart_val_date">
<br><br></section>
<section id="try">
    <label for="type_valves">Type of valve if known :</label><br><br></section><section id="try2"><br>
<input type="text" placeholder="Type here" class="txt" name="type_valves"></section>
<br>
   <hr style="height:2px;border-width:0;color:blue;background-color:blue">


    <label>List any other surgical procedures and date conducted :</label><br><br>
<section id="try"><label>Surgical procedure :</label><br></section><br><section id="try2"><br>

    <input type="text"  placeholder="Type here" class="txt" name="other_sur_pro" ><br>
    <br></section><section id="try">
<label> Date :</label> </section><section id="try2"><br>  <input type="date" name="other_surg_date" ><br><br>
   
    </section>
    <br>
    <hr style="height:2px;border-width:0;color:blue;background-color:blue">
<br><br>


           <button class="button" name="submit">Save</button>


</div>
</form>


</body>
</html>
<?php

if(isset($_POST['submit'])){
  
    $glab_radio=$_POST['glab_radio'];
    $surg_date=$_POST['surg_date'];
    $surg_pro=$_POST['surg_pro'];
    $organ_radio=$_POST['organ_radio'];
    $transplant_type=$_POST['transplant_type'];
    $transplant_date=$_POST['transplant_date'];
    $loc_transplant=$_POST['loc_transplant'];
    $doc_transplant=$_POST['doc_transplant'];
    $fractures_op=$_POST['fractures_op'];
    $fracture_type=$_POST['fracture_type'];
    $fracture_pro=$_POST['fracture_pro'];
    $hip_knee_op=$_POST['hip_knee_op'];
    $specify_op=$_POST['specify_op'];
    $hip_knee_date=$_POST['hip_knee_date'];
    $loc_hip_knee=$_POST['loc_hip_knee'];
    $surg_name=$_POST['surg_name'];
    $heart_valves=$_POST['heart_valves'];
    $spe_valves=$_POST['spe_valves'];
    $heart_val_date=$_POST['heart_val_date'];
    $type_valves=$_POST['type_valves'];
    $other_sur_pro=$_POST['other_sur_pro'];
    $other_surg_date=$_POST['other_surg_date'];

    $query2=mysqli_query($conn,"DELETE FROM `surgical_history` WHERE patient_id='$patient_id'" );
    $query = mysqli_query($conn,"INSERT INTO surgical_history(`patient_id`, `Gallbladder_surgery`, `Gallblader_srg_date`, `Gallblader_srg_proc`, `Organ_transplant`, `Transplant_Type`, `Transplant_Date`, `Transplant_location`, `Transplant_Doctor`, `Fractures_Operation`, `Fracture_Type`, `Fracture_OP_procedure`, `Hip-knee_replacement`, `Specify_Replacement`, `Rep_surg_Date`, `location_rep_surg`, `Surgeon_name`, `Artificial_heart_valves`, `Specify_Valves`, `Artificial_heart_surg_Date`, `Valve_Type`, `Other_surg_procedure`, `Date_Of_procedure`,`status`)
     VALUES('$patient_id','$glab_radio','$surg_date','$surg_pro','$organ_radio','$transplant_type','  $transplant_date',
     '$loc_transplant','$doc_transplant','$fractures_op','$fracture_type','$fracture_pro','$hip_knee_op','$specify_op',
     '$hip_knee_date','$loc_hip_knee','$surg_name','$heart_valves','$spe_valves','$heart_val_date','$type_valves','$other_sur_pro','$other_surg_date','unverified')");

     if($query)
     {
       /*echo "<span>your form hasbeen succesfully saved</span>";*/
        echo '<script>alert("your form hasbeen succesfully saved");
        window.location="profile.php?ptype=surg_record";</script>';
        
     }
     else{
        echo '<script>alert("Something Went Wrong");
        window.location="profile.php?ptype=surg_record";</script>';
     }
   

}


?>

