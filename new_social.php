<?php
session_start();
define('letsgo',true);
$patient_id=$_SESSION['USER']->id;

include "db_connection/connection.php";

?>
<html>
<head>

    <style>
.txt{
    width:200px;
    height:30px;
    margin-left:30px;
    margin-top:30px;
    padding:2px 10px 8px 2px;
    border:2px solid skyblue;
    background-color:snow;
    
}
#sub{
            
          
            width:280px;
            height:40px;
            margin-top:160px;
            font-style:italic;
            font-weight:bold;
            letter-spacing:2px;
          }
#top{
    width:100%;
      height:40px;
      background-color:brown;
      color:white;
}
#bottom{
    
            width:100%;
            height:auto;
            background-color:snow;
}
.date{
 
    margin-left:30px;
    margin-top:30px;
}
label{
    margin-left:20px;
    font-weight: bold;
      font-family: 'Libre Baskerville', serif;
      
}
.container{
    float:left;
    margin-left:380px;
    width:60%;
    
}
.button{
    border-radius: .4rem;
    float:right;
    margin:20px;
    padding:10px;
    
    background-color:cadetblue;
	color:white;
   
    cursor: pointer;
  }
  .exit{
    margin-top:40px;
  }
  .exit a{
    
    margin-left:60px;
    padding:8px;
    color:white;
    background-color:blue;
  }
  #update{
    background-color:cadetblue;
      
      color:white;

  }
  .btn5{
              color:white;
            background-color:cadetblue;
            padding:10px 20px;
            margin:5;
            
            }
  @media only screen and (max-width: 550px) {
            .container{
                float:right;
        
          margin-right:5px;
          border-radius:5px;
          padding:20px;
          width:100%;
        
            }
        }


</style>
</head>
<body>
<div class="exit">
   
       <a href="profile.php?ptype=mymed_record">Back</a>
      </div>
<div class="container"><br><br>
    <form method=post action="">
<h2 class="title">SOCIAL HISTORY</h2><br><br>
<section id="top">
    
   <br> 
<label for="yes_no_smoke" >Do you smoke?</label>  <br><br> </section><section id="bottom"><br>
<input type="radio" name="yes_no_smoke" value="Yes" checked>Yes</input>
<input type="radio" name="yes_no_smoke" value="No" checked>No</input><br><br>



</section>
   <section id="top"> <br>
    <label for="how_much_cegritte">How much?</label><br><br></section><section id="bottom"><br>
<input type="text" class="txt" name="how_much_cegritte" placeholder="Type here";><br><br>

</section>

<section id="top">
    <br>
    <label for="how_opten_cigritte">How often?</label><br><br></section><section id="bottom"><br>
<input type="text" class="txt" name="how_opten_cigritte" placeholder="Type here";><br><br>
</section>


 <hr style="height:2px;border-width:0;color:blue;background-color:blue">
<br><br>
<section id="top">
    <br>
    
<label for="drugs" >Do you use any recreational drugs like cannabis, heroin or cocaine?</label>  <br><br> </section><section id="bottom"><br>
<input type="radio" name="drugs" checked value="Yes">Yes</input>
<input type="radio" name="drugs" checked value="No">No</input><br><br>



</section>
<section id="top">
    <br>
    <label for="how_much_drug">How much?</label><br><br></section><section id="bottom"><br>
<input type="text" class="txt" name="how_much_drug" placeholder="Type here"><br><br>



</section>
<section id="top">
    <br>
    <label for="how_opten_drug">How often?</label><br><br></section><section id="bottom"><br>
<input type="text" class="txt" name="how_opten_drug" placeholder="Type here"><br><br>


</section>
 <hr style="height:2px;border-width:0;color:blue;background-color:blue">
<br><br>
<section id="top">


    <br>
    <label for="live_with">Who do you live with?</label><br><br></section><section id="bottom"><br>
<input type="text" class="txt" name="live_with" placeholder="Type here"><br><br>




</section> <hr style="height:2px;border-width:0;color:blue;background-color:blue"><br><br>
<section id="top"><br>
    <label for="status">What is your functional status?</label>
<br><br></section><section id="bottom"><br>
<select name="status" id="fre">
<option selected="true" disabled="disabled">Select</option>
  <option>Independent</option>
  <option>with sticks</option>
  <option>with crutches</option>
  <option>with a frame or walker</option>
  <option>wheelchair bound</option>
  <option>bedbound</option>
</select><br><br>
</section>

 <hr style="height:2px;border-width:0;color:blue;background-color:blue">
<br><br>

            <input type="submit" value="Save" name="add" class="button">

</form>




</div>

</body>
</html>
<?php
session_start();
include "forgotpassword/connection.php";




  if (isset($_POST['add'])) {
    $patient_id=$_SESSION['USER']->id;
$smoke=$_POST['yes_no_smoke'];
$smokeamount=$_POST['how_much_cegritte'];
$oftencigrette=$_POST['how_opten_cigritte'];
$drugs=$_POST['drugs'];
$drugamount=$_POST['how_much_drug'];
$oftendrug=$_POST['how_opten_drug'];
$livewith=$_POST['live_with'];
$status=$_POST['status'];
$query=mysqli_query($conn,"INSERT INTO `social_history`( `Smoking`, `How_Much_Smoke`, `How_often_Smoke`, `Drugs`, `How_Much_Drug`, `How_Often_Drug`, `Live_With`, `Functional_Status`, `patient_id`) VALUES('$smoke','$smokeamount','$oftencigrette','$drugs','$drugamount','$oftendrug','$livewith','$status','$patient_id')");
  
if($query)
{


  echo '<script>alert("your form hasbeen succesfully saved");
  window.location="profile.php?ptype=social_History";</script>';
  
}
else{
  echo '<script>alert("Something Went Wrong");
  window.location="profile.php?ptype=social_History";</script>';
}

}

?>
<?php
if($_REQUEST['ptype']=='update_soc'){


 include('update_social.php');
  
       
 }