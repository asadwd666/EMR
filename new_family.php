
<?php
session_start();
include ('header.php');
include "db_connection/connection.php";

define('letsgo',true);
$patient_id=$_SESSION['USER']->id;


error_reporting(0);

  if (isset($_POST['add'])) {
    

    $disease=$_POST["disease"];
    $family=$_POST["family_member"];
   
    
    $patient_id=$_SESSION['USER']->id;
	$text=$_POST['text'];
  $query2=mysqli_query($conn,"DELETE FROM `family_history` WHERE patient_id='$patient_id'" );

    for ($a = 0; $a < count($_POST["disease"]); $a++){
 $query = mysqli_query($conn,"INSERT INTO family_history(diseases, family_member,patient_id,other_family_record,status)values('" . $_POST["disease"][$a] . "', '" . $_POST["family_member"][$a] . "','$patient_id','$text','unverified')");
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
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    
    <link rel="stylesheet"
          href="https://fonts.googleapis.com/css?family=Tangerine">
    <style>
 #update{
    background-color:salmon;
      
      color:white;

  }
h4{
	float:left;
    margin-left:50px;
    font-style:italic;
    letter-spacing:3px;
  
        
}
p{
  font-weight:bold;
  text-color:white;
}

.abc{
background-color:white;}
  
.success{
	
float:center;
margin-bottom:100px;
}
.add{
	margin-top:60px;
	margin-left:200px;
}
.danger {
   
  background-color:salmon;
        color:white;
    padding:10px;
    border-radius: .8rem;

	
	height:10%;
	
  
  }
  #form{
    margin-top:80px;
    font-size:10px;
  }
  
 
  h5{
    color:red;
  }
  h2{
      color:red;
    float:left;
    margin-left: 450px;
    
     
  }
  .sub{
    float:left;
    margin-left:350px;
    margin-top:180px;
    background-color:gray;
    
  }
  .button{
    border-radius: .4rem;
    float:right;
    margin:20px;
    padding:10px;
    margin-right:-100px;
    background-color:salmon;
	color:white;
   
    cursor: pointer;
  }
.new{
  float:left;
  margin-top:10px;
  margin-left:350px;
  
}
h5{
  color:red;
}


.txt{
	
	height:50px;
}
.ist{

	color:Blue;
}
th, td {
  padding: 15px;
  text-align: left;
}
tr:nth-child(even) {background-color: #f2f2f2;}

.row{
	float:left;
	
    margin-left:2px;
        background-color:salmon;
        color:white;
        border-radius:10px;
        margin-right:900px;
        margin-top:-12px;
	
}
.btn5{
              color:white;
            background-color:salmon;
            padding:10px 20px;
            margin:5;
            
            }
            #sub{
            
          
            width:280px;
            height:40px;
            margin-top:160px;
            font-style:italic;
            font-weight:bold;
            letter-spacing:2px;
          }
.thead-dark{
  background-color:brown;
  color:white;
}
#old{
  background-color:brown;
  color:white;
}
.table-dark{
  background:black;
  color:white;
}
@media only screen and (max-width: 550px) {
            .containerab{
                float:right;
       
          margin-right:-40px;
          border-radius:5px;
          padding:20px;
          width:100%;
        
            }
            h2{
              margin-right:100px;
            }
            h3{
              margin-right:-90px;
            }
            .button{
              margin-right:6rem;
            }
        .new{
          margin-left:2rem;
        }
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

	
</style>

</head>
  <div class="containerab">
    <br><br>
<h5>FAMILY HISTORY</h5>
<br><br>

  <h4>Select disease and family member affected from the drop down menus in each column</h4>
        <br>
<form method="post" action="#">

<table border=1 id="form"  class="table table-sm">

<thead id="old">
<tr>
  <th>Diseases</th>
  <th>Family Member Affected</th>
  <th></th>
  
         
</tr>
</thead>



   
 <tbody id="table_body">
           
<tr >

<td><select name='disease[]' required>
<option selected="true" disabled="disabled">Select</option>
  <option>Heart Disease</option>
  <option>Lung Disease</option>
  <option>Thyroid Disease</option>
  <option>Kidney Problems</option>
  <option>Diabetes</option>
  <option>High Blood Pressure</option>
  <option>Cancer</option>
</select></td>

<td>    <select name='family_member[]'>
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
             <span> Delete</span>
            </button>
         
        </td>
		
		

</tr>





</tbody>


</table>
<button class="row" id="row" name="Create rows" onclick="create_tr('table_body')">
              Add Row
            </button>

<div class="new">
<label>ADD ADDITIONAL FAMILY HISTORY    :     &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp</label><input required type=text class="txt" size=35 placeholder="Type here" name="text">
 <br><br>
<input type="submit" name="add" class="button"  value="Save" >
</div>
</form>
 
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