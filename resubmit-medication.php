<?php
$patient_id=$_SESSION['USER']->id;

include "db_connection/connection.php";

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <style>
            <style>
      #left_bar{
        margin-top:90px;
      }
      nav{
       margin-left:-1rem;
       margin-top:-0.5rem;
      }
      nav ul{
        margin-top:1.5rem;
      }
   span{
    float: left;
     margin-left:25rem;
      color: black;
      margin-top:-45rem;


      width: 100%;
  }
  #left_bar{
    margin-top:-3.7rem;
  }
.container{
 font-size:10px;
 max-width:10rem;
 position: relative;
 right:-75rem;
 top:-25rem;

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
   cursor: pointer;
   
   
   }
   .row{
float:right;
	margin-right:40rem;
        background-color:salmon;
        color:white;
       border-radius:10px;
        margin-top:20px;
  border:none;
  padding:20px;
        width:60px;
        height:50px;
        cursor: pointer;
	
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
         
@media only screen and (max-width: 550px) {
  @media only screen and (max-width: 550px) {
  #left_bar {
        display: flex;
        font-size: 5px;
        width: 6rem;
      position:absolute;
      margin-top:-0.8rem;
       
      }
  
      nav{
        width:33rem;
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

      #left_bar  {

margin-top:-13.3rem;
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
      margin-left:10rem;
      font-size:10px;
      }
  table{
    margin-top:30rem;
    width:60%;
    font-size:10px;
    margin-left:40rem;
  }

            .container{
          

margin-top:-15rem;
margin-left:-20rem;
font-size:10px;

        
            }
            h2{
              margin-right:100px;
            }
            h3{
              margin-right:-90px;
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
    </style>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<div class="container">
    <form action="#" method="post">
      <table align=right border=4 cellpadding=50 cellspacing=10 class="tab">
   
          <h2 class="title">MEDICATION</h2><br><br>
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
 if (isset($_POST['add'])) {

    $query2=mysqli_query($conn,"DELETE FROM `medication` WHERE patient_id='$patient_id'" );

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
 