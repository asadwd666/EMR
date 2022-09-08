<?php
session_start();
include "db_connection/connection.php";
include ('Mymedicalrecord.php');

define('letsgo',true);
$patient_id=$_SESSION['USER']->id;


error_reporting(0);

  if (isset($_POST['add'])) {
    

    $disease=$_POST["disease"];
    $family=$_POST["family_member"];
   
    
    $patient_id=$_SESSION['USER']->id;
	$text=$_POST['text'];
  
    for ($a = 0; $a < count($_POST["disease"]); $a++){
 $query = mysqli_query($conn,"INSERT INTO family_history(diseases, family_member,patient_id,other_family_record)values('" . $_POST["disease"][$a] . "', '" . $_POST["family_member"][$a] . "','$patient_id','$text')");
//if($query){
//	echo "<p>your form hasbeen succesfully saved<br>wait 5 sec page will automaticalling reload</p>";
//	header("refresh:5;url=profile.php");
if($query){
  echo '<script>alert("your form hasbeen succesfully saved");
  window.location="profile.php?ptype=family_History";</script>';
    }
    else{
      echo '<script>alert("Something Went Wrong");
      window.location="profile.php?ptype=family_History";</script>';
    }
  


  }
  

  }


?>

<html>
<head>

    
    <link rel="stylesheet"
          href="https://fonts.googleapis.com/css?family=Tangerine">
    <style>
.containerab{
  margin-left:22rem;
  margin-top:-28rem;
}

span {
      float: left;
     margin-left:25rem;
      color: black;
      margin-top:-26rem;


      width: 100%;
    
    }
    .danger{
      background-color:salmon;
      color:white;
      padding:10px;
      border-radius:10px;
      cursor: pointer;

    }
    .danger:hover{
      color:black;
      background:white;
      border:1px solid salmon;
    }
    
    @media only screen and (max-width: 950px) {
      #left_bar {
        display: flex;
        font-size: 5px;
        width: 6rem;
       
      }
      .containerab{
        width:80%;
        margin-left:12rem;
       
      }
      span {
        float: left;
        margin-left:12rem;
        color: black;

        margin-top:- 10rem;
        font-size:10px;
        background: none;
        width: 60%;
      }
      .toggle{
        background-color:salmon;
      }
      .toggle .bar{
       display:none;
      }
    }
</style>

</head>
<body>



<br>


<?php
        $categories=mysqli_query($conn,"SELECT * FROM family_history WHERE patient_id='$patient_id'");
      if(mysqli_num_rows($categories) > 0){
          
      
        $categories=mysqli_query($conn,"SELECT * FROM  family_history WHERE patient_id='$patient_id' and status='unverified'");
        if(mysqli_num_rows($categories) > 0)
        {
          echo "<span>Thank you for submitting your Family record.A qualified Healthcare profesional will review your details. <br>prior to your record biegn live.approval be within 48 hours.<br >please chech your support inbox for any additional request from our team.</span> ";
          
        
         
        }
    
    
    
      ?>
      <?php
      
$categories=mysqli_query($conn,"SELECT * FROM family_history WHERE patient_id='$patient_id' and status='verified'");


if(mysqli_num_rows($categories) > 0)
{
  echo "<span>Your recored hasbeen approved by admin
  <br>To check your record click the link below.<br>
   
  <a href='profile.php?ptype=family_history_check'>Record</a> <span>";
  

 
}


$categories=mysqli_query($conn,"SELECT * FROM  family_history
 WHERE patient_id='$patient_id' and status='rejected'");


if(mysqli_num_rows($categories) > 0)
{
  echo "<span>Your recored hasbeen rejected <br>
  Fill Out new Form ?
  <a href='new_family.php'>Add New</a><br>.<span>";
  
  while($row=mysqli_fetch_array($categories)){
  
  ?>


  <?php
  }
}
      }
      else{
  ?>

  <div class="containerab">
    <br> <br>
<h2>FAMILY HISTORY</h2>


  <h7>Select disease and family member affected from the drop down menus in each column</h7>
        <br>
<form method="post" action="#">

<table border=1 id="form" cellspacing="5px" width="60%"  class="table table-sm">

<thead style="background-color:salmon">
<tr>
  <th>Diseases</th>
  <th>Family Member Affected</th>
  <th></th>
  
         
</tr>
</thead>



   
 <tbody id="table_body">
           
<tr >

<td><select name='disease[]' id="disease" style="height:50px;width:100%;cursor:pointer">
<option selected="true" disabled="disabled">Select</option>
  <option>Heart Disease</option>
  <option>Lung Disease</option>
  <option>Thyroid Disease</option>
  <option>Kidney Problems</option>
  <option>Diabetes</option>
  <option>High Blood Pressure</option>
  <option>Cancer</option>
</select></td>

<td>    <select name='family_member[]' required style="height:50px;width:100%;cursor:pointer" id="disease" >
<option selected="true" disabled="disabled">Select</option>
  <option>Grandparent</option>
  <option>Mother</option>
  <option>Father</option>
  <option>Brother</option>
  <option>Sister</option>
  <option>Uncle</option>
  <option>Aunt</option>
  <option>Niece</option>
  <option>Nephew</option>
  <option>Cousin</option>
  <option>Grandchild</option><br>
  

</select>   </td>

 <td>
          
            <button class="danger" onclick="remove_tr(this)">
              Delete
            </button>
         
        </td>
		
		

</tr>





</tbody>


</table><br>
<button class="row danger" id="row" name="Create rows" onclick="create_tr('table_body')">
              Add Row
            </button>
<br> <br>
<textarea name="text" id="" class="txt" cols="30" placeholder="Add Additional History" rows="20" style="height:70px;"></textarea>

 <br><br>
<input type="submit" name="add" class="button danger"  value="Save" >

</form>
 <?php
      }
      ?>
<script>

function create_tr(table_id) {
    let table_body = document.getElementById(table_id),
        first_tr   = table_body.firstElementChild
        tr_clone   = first_tr.cloneNode(true);

    table_body.append(tr_clone);

    clean_first_tr(table_body.firstElementChild);
}

function clean_first_tr(firstTr) {
    let children = firstTr.children;
    
    children = Array.isArray(children) ? children : Object.values(children);
    children.forEach(x=>{
        if(x !== firstTr.lastElementChild)
        {
            x.firstElementChild.value = '';
        }
    });
}



function remove_tr(This) {
    if(This.closest('tbody').childElementCount == 1)
    {
        alert("You Don't have Permission to Delete This ?");
    }else{
        This.closest('tr').remove();
    }
}document.getElementById("row").addEventListener("click",function(event){
event.preventDefault()});

</script>
</div>
</body>
</html>



<?php
if($_REQUEST['ptype']=='update_fa'){


 include('update_fam.php');
  
       
 }




