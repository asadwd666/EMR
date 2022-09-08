<?php
session_start();
include ('Mymedicalrecord.php');

$patient_id=$_SESSION['USER']->id;



include "db_connection/connection.php";
?>
<html>
<head>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <style>
      #left_bar {
        margin-bottom:-10rem;
      }
      *{
        margin:0;
        padding:0;
        box-sizing:border-box;
      }
      #left_bar{
        margin-top:90px;
      }
      .navbar-links{
      width:100%;
      margin-top:-1.4rem;
      position:absolute;
      margin-left:-1rem;
    }
    .navbar h3{
  position:absolute;
  top:-1rem;
  left:5rem;
  z-index:999;
    }
    .nav-link{
      margin-top:1.6rem;
    }
    li img{
      margin-top:-1rem;
    }
      /* nav{
       margin-left:-1rem;
       margin-top:-0.5rem;
      }
      nav ul{
        margin-top:1.5rem;
      } */
   span{
    /* position:absolute; */
    float: left;
      color: black;
      margin-top:-25rem;
      margin-left:35rem;
  


  }
  #left_bar{
    margin-top:-0.1rem;
  }

.container{
 font-size:10px;
 max-width:10rem;
 position: relative;
 right:-25rem;
 top:-20rem;
          border-radius:5px;
          padding:20px;
}
#update{
    background-color:salmon;
      
      color:white;

  }
h2{
  margin-left:-500px;
  margin-top:-2rem;
  float:left;
}
.btn{
  border-radius: .4rem;
    float:left;
    margin-left:-40px;
    font-size:10px;
    padding:20px;
    margin-top:-20px;
    
    background-color:salmon;
	color:white;
   
    cursor: pointer;
}
.btn:hover{
  background-color:white;
  color:black;
  border:salmon;
}
th, td {
  padding: 15px;
  text-align: left;
}
tr:nth-child(even) {background-color: #f2f2f2;}

.danger {
   
   background-color:salmon;
         color:white;
     padding:10px;
     border-radius: .8rem;
   border:none;
   width:3rem;
   height:10%;
   
   
   }
   .row{
float:right;
	margin-right:40rem;
        background-color:salmon;
        color:white;
       border-radius:10px;
        margin-top:20px;
  border:none;
  padding:10px;
        width:60px;
        height:30px;
	
}

        
.abc{
  background-color:salmon;
  height: auto;
  width: 100%;
  color:white;
}

  .btn5{
              color:white;
            background-color:salmon;
            padding:10px 20px;
            }
            #heading{
              background-color:brown;
            color:white;
            }
         
   @media only screen and (max-width: 960px) {
    .title{
      position: relative;
      top:25rem;
      right:34rem;
    }
  #left_bar {
        display: flex;
        font-size: 5px;
        width: 6rem;
      position:absolute;
      margin-top:-5rem;
       
      }
      .toggle {
        display: flex;
        flex-direction:column;
       
        background-color:salmon;
        
        z-index: 1;
      
      }
      .toggle .bar{
        display:none;
      }

    
       



    

    

      #left_bar  {
position:absolute;
top:5.5rem;
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
      margin-top:-5rem;
      margin-left:-20rem;
      font-size:10px;
      }
  table{
    margin-top:30rem;
    width:60%;
    font-size:10px;
    margin-left:40rem;
  }
  .navbar-links.active{
        display: flex;
       
        
    }
    .navbar{
   position:absolute;
   top:8.8px;
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

  .navbar h3{
    margin-top:1.5rem;
  }
            .container{
          

margin-top:-30rem;
margin-left:24rem;
border-radius: 5px;
padding: 20px;
width: 60%;
        
            }
            h2{
              margin-right:100px;
             
            }
         
            .btn{
  border-radius: .4rem;
    float:left;
    margin-left:300px;
    
    padding:20px;
    margin-top:-80px;
    
    background-color:cadetblue;
	color:white;
   
    cursor: pointer;
}
.row{
	float:left;

        background-color:salmon;
        color:white;
        margin-left:-590px;
        margin-top:3rem;
       
        width:60px;
        height:50px;
	
}
  th, td {
  padding: 10px;
  text-align: left;
}
tr:nth-child(even) {background-color: #f2f2f2;}
        
        }
        .btn{
          background-color:salmon;
          margin-left:-10rem;
          margin-top:3rem;
        }
        
  
      }
</style>
</head>
<body>

<br><br>

     



<?php
$categories=mysqli_query($conn,"SELECT * FROM medication WHERE patient_id='$patient_id'");
if(mysqli_num_rows($categories) > 0){
  

$categories=mysqli_query($conn,"SELECT * FROM medication WHERE patient_id='$patient_id' and status='unverified'");
if(mysqli_num_rows($categories) > 0)
{
  echo "<span>Thank you for submitting your medical record.A qualified Healthcare profesional will review your details. <br>prior to your record biegn live.approval be within 48 hours.<br >please chech your support inbox for any additional request from our team.</span>";
  

 
}


?>
<?php

$categories=mysqli_query($conn,"SELECT * FROM medication WHERE patient_id='$patient_id' and status='verified'");


if(mysqli_num_rows($categories) > 0)
{
echo "<span>Your recored hasbeen approved by admin 
<br>To check your record click the link below.<br>
   
  <a href='profile.php?ptype=medication_record'>Record</a><span>";



}


$categories=mysqli_query($conn,"SELECT * FROM medication WHERE patient_id='$patient_id' and status='rejected'");


if(mysqli_num_rows($categories) > 0)
{
echo "<span>Your recored hasbeen rejected 
<br>
  Fill Out new Form ?
  <a href='profile.php?ptype=resubmit-medication'>Add New</a><br><span>";

while($row=mysqli_fetch_array($categories)){

?>

<br>
<br>

<?php
}
}
}









else{
?>













  <div class="container">
    <form action="#" method="post">
      <table align=right border=4 cellpadding=50 cellspacing=10 class="tab">
   
          <h4 class="title">MEDICATION</h4><br><br>
    <thead class="abc"> <tr>  <th>Allergy</th>
             <th>Regualr Med</th>
             <th>Frequency</th>
             <th>Dose</th>
             <th>Started Date</th>
             <th></th>
        </tr>
      </thead>
        <tbody id="table_body">
        <tr>
          <td><input type="text"  placeholder="Type your allergy here" name="Allergies[]" required></td>

         <td><input type="text" name="reg_med[]" placeholder="Type here.." required></td>
            
         <td><select name="frequency[]" id="fre">
<option selected="true" disabled="disabled">Select</option>
  <option>Once per day</option>
  <option>twice per day</option>
  <option>three time a day</option>

</select></td>
<td><input type="text" name="dose[]" required></td>
            
     <td><input type="date" name="started-date[]"></td>
     <td>
          
            <button class="danger" onclick="remove_tr(this)">
             Delete
            </button>
         
        </td>
</tr>   
      
         
           
         
     
       
</tbody>

</table>
<button class="row" id="row" name="Create rows" onclick="create_tr('table_body')">
              Add Row
            </button>
<input type="submit" value="Save" name="add" class="btn"/>
</form>
<?php
}
?>
</div>
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

</body>
</html>
<?php

include "forgotpassword/connection.php";




  if (isset($_POST['add'])) {
    $patient_id=$_SESSION['USER']->id;
    for ($a = 0; $a < count($_POST["Allergies"]); $a++){

      $query = mysqli_query($conn,"INSERT INTO medication(`patient_id`, `Allergy`, `Regular Medicine`, `Frequency`, `Dose`, `Starting_date`)values('$patient_id','" . $_POST["Allergies"][$a] . "','" . $_POST["reg_med"][$a] . "','" . $_POST["frequency"][$a] . "','" . $_POST["dose"][$a] . "','" . $_POST["started-date"][$a] . "')");
if($query)
{


  echo '<script>alert("your form hasbeen succesfully saved");
  window.location="profile.php?ptype=medication";</script>';
  
}
else{
  echo '<script>alert("Something Went Wrong");
  window.location="profile.php?ptype=medication";</script>';
}

    }
  }
 
?>
 <?php
   if($_REQUEST['ptype']=='update_medi'){

 
    include('update_medication.php');
     
          
    }
