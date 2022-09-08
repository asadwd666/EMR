<?php



include "db_connection/connection.php";

?>
<!DOCTYPE html>
<html lang="en">
<head>
<style>
    
      input[type='text'] {
      border: none;
      border-radius: 10px;
    }
    form{
        float: right;
   
   box-shadow: rgba(17, 12, 46, 0.15) 0px 48px 100px 0px;
   right: 180px;

   border-radius: 5px;
   padding: 20px;
   width: 60%;
   position: absolute;
   top: 6rem;
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
      border: 1px solid black;
    }
      @media only screen and (max-width: 550px) {
        #left_bar {
        display: flex;
        font-size: 5px;
        width: 6rem;
       
      }
      .container{
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
<form method=post action="">
<h2 class="title">SOCIAL HISTORY</h2><br><br>
<section id="top">
    
   <br> 
<label>Do you smoke?</label>  <br><br> </section><section id="bottom"><br>


<input type="radio" name="yes_no_smoke" value="Yes"  checked onclick="document.getElementById('show1').style.display='block'">Yes</input>
<input type="radio" name="yes_no_smoke" value="No" onclick="document.getElementById('show1').style.display='None'">No</input><br><br>

</section>
         <section id="show1">
   <section id="top"> <br>
    <label for="how_much_cegritte">How much?</label><br><br></section><section id="bottom"><br>
<input type="text" class="txt" name="how_much_cegritte" placeholder="Type here";><br><br>

</section>

<section id="top">
    <br>
    <label for="how_opten_cigritte">How often?</label><br><br></section><section id="bottom"><br>
<input type="text" class="txt" name="how_opten_cigritte" placeholder="Type here";><br><br>
</section>

          </section>
<hr>
<br><br>
<section id="top">
    <br>
    
<label >Do you use any recreational drugs like cannabis, heroin or cocaine?</label>  <br><br> </section><section id="bottom"><br>


<input type="radio" name="drugs" value="Yes"  checked onclick="document.getElementById('show2').style.display='block'">Yes</input>
<input type="radio" name="drugs" value="No" onclick="document.getElementById('show2').style.display='None'">No</input><br><br>


</section>
<section id="show2">
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
<hr>
<br><br>
</section>
<section id="top">


    <br>
      
    <label for="live_with">Who do you live with?</label><br><br></section><section id="bottom"><br>
<input type="text" class="txt" name="live_with" placeholder="Type here"><br><br>




</section><hr><br><br>
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

<hr>
<br><br>

            <input type="submit" value="Save" name="add" class="button">

</form>
</body>
</html>
<?php
$patient_id=$_SESSION['USER']->id;


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
$query2=mysqli_query($conn,"DELETE FROM `social_history` WHERE patient_id='$patient_id'" );

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