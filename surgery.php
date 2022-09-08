<?php
define('letsgo',true);
session_start();

include ('Mymedicalrecord.php');


include "db_connection/connection.php";
$patient_id=$_SESSION['USER']->id;

?>
<html>
<head>

   
    <style>
  
    *{
      padding:0;
      margin:0;
      box-sizing:border-box;
    }

.surg_container
    {
      box-shadow: rgba(17, 12, 46, 0.15) 0px 48px 100px 0px;

          float:right;
          margin-top:-30rem;
          margin-right:180px;
          border-radius:5px;
          padding:20px;
          width:60%;
         
         
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
      margin-top:-25rem;


     
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

input{
  background:lightgrey;

}
input[type="text"]{
  padding:10px;
  width:20rem;
}
/* form{
  padding:10px;
  margin-left:20rem;
  margin-top:-46rem;
 
} */
  
        @media only screen and (max-width: 960px) {
          
            span{
              float: left;
        margin-left:12rem;
        color: black;

        margin-top: -20rem;
        font-size:10px;
        background: none;
        width: 60%;

  }
  .navbar-links.active{
        display: flex;
       
        
    }
    .navbar{
      box-shadow:5px 5px 10px 0 rgb(0, 0, 0, 0.3);

    }
    .navbar-links{
      display:none;
    }
  .navbar-links ul{
     
    width:42%;
        height:auto%;
        background-color: white;
        /* margin-left:-19rem; */
     z-index:1;
      left:19rem;
       
        flex-direction: column;
     position:absolute;
     top:4rem;
     gap:0;
     
     background-color:white;
     box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;
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
        margin-top: 0.5rem;
        margin-left:-0.9rem;



      }
      #left_bar {
        font-size: 4px;
        margin-bottom:-1rem;
        position: absolute;
        top:0;
       
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


            .surg_container{
              position: absolute;
left:12rem;
border-radius: 5px;
padding: 20px;
width: 60%;


        
            }
        }

</style>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.0/css/all.min.css">

</head>
<body>






      <?php
        $categories=mysqli_query($conn,"SELECT * FROM surgical_history WHERE patient_id='$patient_id'");
      if(mysqli_num_rows($categories) > 0){
          
      
        $categories=mysqli_query($conn,"SELECT * FROM surgical_history WHERE patient_id='$patient_id' and status='unverified'");
        if(mysqli_num_rows($categories) > 0)
        {
         
        
          echo "<span>Thank you for submitting your Surgical record.A qualified Healthcare profesional will review your details. <br>prior to your record beign live.approval will be within 48 hours.<br >please chech your support inbox for any additional request from our team.</span> ";
        }
    
    
    
      ?>
      <?php
      
$categories=mysqli_query($conn,"SELECT * FROM surgical_history WHERE patient_id='$patient_id' and status='verified'");


if(mysqli_num_rows($categories) > 0)
{
  echo "<span>Your recored hasbeen approved by admin
  <br>To check your record click the link below.<br>

      <a href='profile.php?ptype=surg-check'>Record</a>
        <span>";
 
}


$categories=mysqli_query($conn,"SELECT * FROM surgical_history WHERE patient_id='$patient_id' and status='rejected'");


if(mysqli_num_rows($categories) > 0)
{
  echo "<span>Your recored hasbeen rejected <br>
  Fill Out new Form ?
  <a href='profile.php?ptype=surg-new'>Add New</a><br>
  .<span>";

  
  while($row=mysqli_fetch_array($categories)){
  
  ?>

  <br>
  <br>
  <span>Fill out New form</span>
  <br>
  <?php
  }
}
      }
      else{
  ?>

<div class="surg_container">

<form method="post" action="#" onsubmit=" return myFunction()" name="myform">
   <h1>SURGICAL HISTORY</h1><br><br>
  <section id="try"><br>
<label>Have you had gallbladder surgery?</label>  <br><br> 
</section><section id="try2"><br>
<input type="radio" name="glab_radio" value="Yes"  checked onclick="document.getElementById('show1').style.display='block'">Yes</input>
<input type="radio" name="glab_radio" value="No" onclick="document.getElementById('show1').style.display='None'">No</input><br><br>

    </section>

<section id="show1">
<section id="try"><br>
    <label>Date of surgery</label><br><br></section><section id="try2"><br>
<input type="date" class="date" name="surg_date"><br><br>





    </section>
    <section id="try"><br>
<label>Please specify type of procedure if known :</label><br></section><section id="try2"><br>
<input type="text" placeholder="Type here" class="txt" name="surg_pro"  id="pro1" ><br> <br>


    </section>
      </section>
<hr class="line">
<br><br>
<section id="try"><br>
    
<label>Have you had an organ transplant?</label>  <br> <br>
    </section><section id="try2"><br>
<input type="radio" name="organ_radio" value="yes" checked onclick="document.getElementById('show2').style.display='block'">Yes</input>
<input type="radio" name="organ_radio" value="no" onclick="document.getElementById('show2').style.display='none'" >No</input>
<br> <br></section>
<section id="show2">
<section id="try"><br>
    <label>Type of transplant :</label><br><br></section><section id="try2"><br>
<input type="text" placeholder="Type here" class="txt" name="transplant_type" >

    </section><br>
<section id="try"><br>
    <label>Date of transplant</label><br><br></section><section id="try2"><br>
<input type="date" class="date" name="transplant_date">
<br><br>
    </section>


<section id="try"><br>
    <label >Location of transplant :</label><br><br></section><section id="try2"><br>
<input type="text" placeholder="Type here" class="txt" name="loc_transplant">
<br><br>
    </section>





<section id="try"><br>
    <label >Name of transplant doctor :</label><br></section><section id="try2"><br>
<input type="text" placeholder="Type here" class="txt" id="doctor" name="doc_transplant">
<br><br>
    </section>
<hr class="line">
<br><br>
      </section>
<section id="try"><br>


<label> Have you had any operations for fractures ?</label>  <br> <br></section><section id="try2"><br>
<input type="radio" name="fractures_op" value="Yes" checked onclick="document.getElementById('show3').style.display='block'">Yes</input>
<input type="radio" name="fractures_op" value="No" onclick="document.getElementById('show3').style.display='none'">No</input>
<br><br></section>
<section id="show3">
<section id="try"><br>

    <label >What fracture was it ? </label><br></section><section id="try2"><br>
<input type="text" placeholder="Type here" class="txt" name="fracture_type">
<br><br></section>

<section id="try"><br>
    <label>Type of procedure if known :</label><br><br></section><section id="try2"><br>
<input type="text" placeholder="Type here" class="txt" name="fracture_pro">
<br><br></section>
      </section>
<hr class="line">
  <br><br>
  <section id="try"><br>


    
<label>Have you ever had a hip or knee replacement operation?</label><br><br>  </section><section id="try2"><br> 
<input type="radio"  name="hip_knee_op" value="Yes" checked onclick="document.getElementById('show4').style.display='block'">Yes</input>
<input type="radio" name="hip_knee_op" value="No" onclick="document.getElementById('show4').style.display='none'">No</input>
<br><br>
    </section>
    <section id="show4">
    <section id="try"><br>

    <label>Please specify :</label><br><br></section><section id="try2"><br>
<input type="text" placeholder="Type here" class="txt" name="specify_op">
<br><br></section><section id="try">


    <label>Date of surgery :</label><br><br></section><section id="try2"><br>
<input type="date" class="date" name="hip_knee_date">
<br><br></section><section id="try"><br>
    <label>Location of surgery :</label><br><br></section><section id="try2"><br>
<input type="text" placeholder="Type here" class="txt" name="loc_hip_knee" >
<br><br></section>
<section id="try"><br>

    <label>Name of surgeon :</label><br><br></section><section id="try2"><br>
<input type="text" placeholder="Type here" class="txt" name="surg_name">
<br><br></section>
<hr class="line">
  <br><br> 
  <section id="try"> <br>
<label>Do you have any artificial heart valves </label>  <br> <br></section><section id="try2"><br>
<input type="radio" name="heart_valves" value="Yes" checked>Yes</input>
<input type="radio" name="heart_valves" value="No" checked>No</input>
<br><br></section>
<section id="try"><br>
    <label>Please specify which valve ?</label><br><br></section><section id="try2"><br>
<input type="text" placeholder="Type here" class="txt" name="spe_valves">
<br><br></section>

<section id="try"><br>
    <label>Date of surgery</label><br><br></section><section id="try2"><br>
<input type="date" class="date" name="heart_val_date">
<br><br></section>
<section id="try"><br>
    <label for="type_valves">Type of valve if known</label><br><br></section><section id="try2"><br>
<input type="text" placeholder="Type here" class="txt" name="type_valves"></section>
<br><br>
      </section>
<hr class="line">
<br><br>

    <label><div class="extra">List any other surgical procedures and date conducted</label></div><br><br>
<section id="try"><label>Surgical procedure :</label><br></section><section id="try2"><br>

    <input type="text"  placeholder="Type here" class="txt" name="other_sur_pro" ><br>
    <br></section><section id="try"><br>
<label> Date</label> </section><section id="try2"><br>  <input type="date" name="other_surg_date" ><br><br>
   
    </section>
<hr class="line">
<br><br>


           <button class="button" name="submit"  id="btn">Save</button>
           <!-- <input type="submit" name= "submit" id = "btn" value= "save"> -->



</form>
</div>
<?php
      }
      ?>
<script>
    
    // document.querySelector('#btn').addEventListener('click',function(e){
    //     console.log("clicked")
    //            e.preventDefault();
    
    //         })
    // action.addEventListener('click',function(e){
    //     console.log('i am clicked')
    // e.preventDefault();
    // })
    </script>

</body>
</html>
<?php
include "forgotpassword/connection.php";
if(isset($_POST['submit'])){
    session_start();

    $patient_id=$_SESSION['USER']->id;
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


    $query = mysqli_query($conn,"INSERT INTO surgical_history(`patient_id`, `Gallbladder_surgery`, `Gallblader_srg_date`, `Gallblader_srg_proc`, `Organ_transplant`, `Transplant_Type`, `Transplant_Date`, `Transplant_location`, `Transplant_Doctor`, `Fractures_Operation`, `Fracture_Type`, `Fracture_OP_procedure`, `Hip-knee_replacement`, `Specify_Replacement`, `Rep_surg_Date`, `location_rep_surg`, `Surgeon_name`, `Artificial_heart_valves`, `Specify_Valves`, `Artificial_heart_surg_Date`, `Valve_Type`, `Other_surg_procedure`, `Date_Of_procedure`)
     VALUES('$patient_id','$glab_radio','$surg_date','$surg_pro','$organ_radio','$transplant_type','  $transplant_date',
     '$loc_transplant','$doc_transplant','$fractures_op','$fracture_type','$fracture_pro','$hip_knee_op','$specify_op',
     '$hip_knee_date','$loc_hip_knee','$surg_name','$heart_valves','$spe_valves','$heart_val_date','$type_valves','$other_sur_pro','$other_surg_date')");

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
